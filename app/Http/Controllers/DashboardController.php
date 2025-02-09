<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardController extends Controller
{
    public function index()
    {
        if(!Auth::check()){
            return redirect('/login')->with('error-unauthorized', 'Silahkan Login Terlebih Dahulu');
        }

        $inventoryCount = Inventory::count();
        $employeeCount = Employee::count();

        return view('pages.Dashboard.admin', compact('inventoryCount', 'employeeCount'));
    }
}
