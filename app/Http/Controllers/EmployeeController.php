<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::paginate(10);
        return view('cms.employees.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cms.employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'job' => 'required|string|max:255',
            'birthday' => 'required|date',
            'gender' => 'required|string|max:255',
            'social_media' => 'nullable|array'
        ]);

        $photoPath = $request->file('photo') ? $request->file('photo')->store('photos', 'public') : null;

        Employee::create([
            'name' => $request->name,
            'photo' => $photoPath,
            'job' => $request->job,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'social_media' => json_encode($request->social_media),
        ]);

        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view('cms.employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('cms.employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'job' => 'required|string|max:255',
            'birthday' => 'required|date',
            'gender' => 'required|string|max:255',
            'social_media' => 'nullable|array'
        ]);

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
            $employee->photo = $photoPath;
        }

        $employee->update([
            'name' => $request->name,
            'job' => $request->job,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'social_media' => json_encode($request->social_media),
        ]);

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return response()->json(['success' => 'Employee deleted successfully']);
    }

    public function toggleView(Request $request)
    {
        $employee = Employee::find($request->id);
        $employee->view_in_webpage = !$employee->view_in_webpage;
        $employee->save();
        return response()->json(['success' => 'Employee view status updated successfully']);
    }
}
