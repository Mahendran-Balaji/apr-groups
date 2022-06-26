<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Officialinformation;
use App\Http\Controllers\EmployeeController;

class DashboardController extends Controller
{
    
    protected $getCurrentEmployee;
    public function __construct()
    {
        $this->getCurrentEmployee = new EmployeeController();
    }

    public function index()
    {
        return view('dashboard')->with('currentEmployee', $this->getCurrentEmployee->getCurrentEmployee());
    }
}
