<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $students = Student::all();
        return view('/students/index', ['students' => $students]);
    }
    public function create()
    {
        return view('students/create');
    }

    public function store(Request $request)
    {
        //  validasi data
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|size:10|unique:students,nim',
            'email' => 'required|email|unique:students,email',
            'jurusan' => 'required'
        ]);

        Student::create($request->all());

        return redirect('students')->with('status', 'Add Student Successfully!');
    }
    public function show(Student $student)
    {
        return view('students/show', compact('student'));
    }
    public function edit(Student $student)
    {
        return view('students/edit', compact('student'));
    }
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|size:10',
            'email' => 'required|email',
            'jurusan' => 'required'
        ]);

        Student::where('id', $student->id)->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ]);

        return redirect('/students')->with('status', 'Edit Student Successfully');
    }
    public function destroy(Student $student)
    {
        Student::destroy($student->id);

        return redirect('/students')->with('status', 'Remove Student Succesfully');
    }
}
