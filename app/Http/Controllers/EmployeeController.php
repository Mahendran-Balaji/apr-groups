<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Officialinformation;
use App\Models\Personalinformation;
use App\Models\Salaryinformation;
use App\Models\Designation;
use Auth;
use Session; 
use Response;
use Exception;
use Log;
use DB;
class EmployeeController extends Controller
{
    private $currentEmployeeStatus;
    public function __construct()
    {
        $this->currentEmployeeStatus='1';
    }

    public function index()
    {
        $employeeDesignation = Designation::select('wz_id','designation')->where('status', '1')->get();
        return view('new_employee')->with('employeeDesignation',$employeeDesignation);
    }

    public function getCurrentEmployee()
    {
        return Officialinformation::select(DB::raw("CONCAT(prefix,emp_id) AS employee_id, CONCAT(first_name,' ',last_name) AS Full_name,wz_designation.designation,offical_mail_id,joining_date"))->join('wz_designation', 'employee_official_information.emp_designation', '=', 'wz_designation.wz_id')->where('employee_official_information.status',$this->currentEmployeeStatus)->get();
    }

    public function get_details_for_payslip($empid)
    {
        
       $getEmployeeRecordForPayslip = Officialinformation::select(
        DB::raw("
            CONCAT(employee_official_information.prefix,employee_official_information.emp_id) AS employee_id,
            CONCAT(employee_official_information.first_name,' ',employee_official_information.last_name) AS Full_name,
            employee_official_information.joining_date,
            employee_official_information.current_salary,
            employee_salary_information.account_bank_name,
            employee_salary_information.account_bank_number,
            employee_personal_information.pan_number,
            wz_designation.designation
            "))->join('employee_salary_information', 'employee_official_information.emp_id', '=', 'employee_salary_information.emp_id')
            ->join('wz_designation', 'employee_official_information.emp_designation', '=', 'wz_designation.wz_id')
            ->join('employee_personal_information','employee_personal_information.emp_id','=','employee_official_information.emp_id')
            ->where('employee_official_information.emp_id',substr($empid,2))->get();
       return Response::json($getEmployeeRecordForPayslip);
      

    }

    public function join_new_employee(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|regex:/(^([a-zA-Z ]+)(\d+)?$)/u|min:4|max:30',
            'last_name' => 'nullable|regex:/(^([a-z A-Z]+)(\d+)?$)/u|min:1|max:50',
            'personal_email_id' => 'nullable|unique:employee_personal_information,personal_mail_id',
            'personal_contact_number' => 'nullable|max:10|regex:/^([0-9]*)$/|unique:employee_personal_information,contact_number',
            'dob' => 'nullable|date_format:Y-m-d',
            'gender' => 'required|in:M,F',
            'maritalstatus' => 'nullable|in:Married,Unmarried',
            'aadhaar_number' => 'nullable',
            'pan_number' => 'nullable',
            'persent_address' => 'nullable',
            'permanent_address' => 'nullable',
            'official_email_id' => 'nullable',
            'doj' => 'nullable',
            'current_salary' => 'nullable',
            'designation' => 'nullable',
            'reporting_head' => 'nullable|max:30',
            'account_holder_name' => 'nullable',
            'bank_name' => 'nullable',
            'account_number' => 'nullable',
            'ifsc_code' => 'nullable',
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
            return back()->withErrors($validator)->withInput();
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
                    $opersonalData->contact_number = $request->personal_contact_number;
                    $opersonalData->personal_mail_id = $request->personal_email_id;
                    $opersonalData->persent_address  = $request->persent_address;
                    $opersonalData->perment_address = $request->permanent_address;
                    $opersonalData->aadhaar_number = $request->aadhaar_number;
                    $opersonalData->pan_number  = $request->pan_number;
                    $opersonalData->date_of_birth = $request->dob;
                    $opersonalData->martial_status = $request->maritalstatus;
                    $opersonalData->save();

                    /* Insert Salary Information */
                    $salaryData = new Salaryinformation();
                    $salaryData->emp_id = $getLastInsertID;
                    $salaryData->account_holder_name  = $request->account_holder_name;
                    $salaryData->account_bank_name = $request->bank_name;
                    $salaryData->account_bank_number = $request->account_number;
                    $salaryData->bank_ifsc_code  = $request->ifsc_code;
                    $salaryData->save();

                    return back()->with('success', 'Created successfully.');
                }
                else{
                    throw new Exception('Something went wrong');
                }


            }
            catch(Exception $e)
            {
                return back()->withErrors($e->getMessage())->withInput();
            }
        }
    }



}
