<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Officialinformation;
use App\Models\Personalinformation;
use App\Models\Salaryinformation;
use Auth;
use Session; 
use Response;
use Exception;
use Log;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('new_employee');
    }

    public function join_new_employee(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|regex:/(^([a-z A-Z]+)(\d+)?$)/u|min:4|max:30',
            'last_name' => 'required|regex:/(^([a-z A-Z]+)(\d+)?$)/u|min:1|max:50',
            'personal_email_id' => 'required|email|unique:employee_personal_information,personal_mail_id',
            'personal_contact_number' => 'required|min:10|max:10|regex:/^([0-9]*)$/|unique:employee_personal_information,contact_number',
            'dob' => 'required|date_format:Y-m-d',
            'gender' => 'required|in:Male,Female',
            'maritalstatus' => 'required|in:Married,Unmarried',
            'aadhaar_number' => 'required',
            'pan_number' => 'required',
            'persent_address' => 'required',
            'permanent_address' => 'required',
            'official_email_id' => 'required',
            'doj' => 'required',
            'current_salary' => 'required',
            'designation' => 'required',
            'reporting_head' => 'required',
            'account_holder_name' => 'required',
            'bank_name' => 'required',
            'account_number' => 'required',
            'ifsc_code' => 'required',
            ],
            [ 
                'first_name.required' => 'The first name field can not be blank value.',
                'first_name.regex' => 'First name field Only accept a-z A-Z',
                'first_name.min' => 'The first name field minimum 4 letters.',
                'first_name.max' => 'The first name field allowed maximum 30 letters.',

                'last_name.required' => 'The last name field can not be blank value.',
                'last_name.regex' => 'First name field Only accept a-z A-Z',
                'last_name.min' => 'The last name field minimum 4 letters.',
                'last_name.max' => 'The last name field allowed maximum 50 letters.',

                'official_email_id.required' => 'The email id field can not be blank value.',

            ]
        );
        
        if ($validator->fails()) {
            return redirect('add_employee')->withErrors($validator)->withInput();
        }
        else
        {
            
            try
            {
                
                /* Insert Official Information */
                $officialData = new Officialinformation();
                $officialData->first_name =$request->first_name;
                $officialData->last_name  = $request->last_name;
                $officialData->emp_designation = $request->designation;
                $officialData->joining_date = $request->doj;
                $officialData->offical_mail_id  = $request->official_email_id;
                $officialData->current_salary = $request->current_salary;
                $officialData->reporting_head = $request->reporting_head;
                if($officialData->save())
                {

                    $getLastInsertID = $officialData->emp_id;

                    /* Insert Personal Information */
                    $opersonalData = new Personalinformation();
                    $opersonalData->emp_id = $getLastInsertID;
                    $opersonalData->gender  = $request->gender;
                    $opersonalData->contact_number = $request->contact_number;
                    $opersonalData->personal_mail_id = $request->personal_mail_id;
                    $opersonalData->persent_address  = $request->persent_address;
                    $opersonalData->perment_address = $request->perment_address;
                    $opersonalData->aadhaar_number = $request->aadhaar_number;
                    $opersonalData->pan_number  = $request->pan_number;
                    $opersonalData->date_of_birth = $request->date_of_birth;
                    $opersonalData->martial_status = $request->martial_status;
                    $opersonalData->save();

                    /* Insert Salary Information */
                    $salaryData = new Salaryinformation();
                    $salaryData->emp_id = $getLastInsertID;
                    $salaryData->account_holder_name  = $request->account_holder_name;
                    $salaryData->account_bank_name = $request->account_bank_name;
                    $salaryData->account_bank_number = $request->account_bank_number;
                    $salaryData->bank_ifsc_code  = $request->bank_ifsc_code;
                    $salaryData->save();

                    return redirect('add_employee')->with('success', 'Created successfully.');
                }
                else{
                    throw new Exception('Something went wrong');
                }


            }
            catch(Exception $e)
            {
                return redirect('add_employee')->withErrors($e->getMessage())->withInput();
            }
        }
    }



}
