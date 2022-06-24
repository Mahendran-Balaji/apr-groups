<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Officialinformation;
use DB;
class PayslipController extends Controller
{
    public function index()
    {
        //$employeeID = Officialinformation::select('emp_id','prefix')->get();
        $employeeID = Officialinformation::select(DB::raw("CONCAT(prefix,emp_id) AS employee_id"))->get();
        return view('webzeee_payslip')->with('employee_id',$employeeID);
    }
}
