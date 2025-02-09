<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::paginate(10);

        return view ('pages.employees.index', compact('employees'));
    }

    public function create()
    {
        return view('pages.employees.create');
    }

    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            "name" => "required|string|max:255",
            "NIP" => "required|numeric|digits_between:1,20",
        ]);

        Employee::create($validatedData);
        return redirect('/employees')->with('success', 'Pegawai Berhasil ditambah');
    }

    public function edit($id)
    {
        $employee = Employee::find($id);

        return view('pages.employees.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $validatedData =  $request->validate([
            "name" => "required|string|max:255",
            "NIP" => "required|numeric|digits_between:1,20",
        ]);

        Employee::where('id', $id)->update([
            "name" => $request->input('name'),
            "NIP" => $request->input('NIP'),
        ]);

        return redirect('/employees')->with('success', 'Pegawai Berhasil diubah');
    }

    public function delete($id)
    {
        Employee::where ('id', $id)-> delete();
        return redirect('/employees')->with('error', 'Pegawai Berhasil dihapus');
    }
}
