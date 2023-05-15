<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Student;
use App\Http\Controllers\Controller;
// use App\Http\Requests\StoreStudentRequest;
use Illuminate\Http\Request;
// use App\Http\Requests\UpdateStudentRequest;
use App\Http\Resources\V1\StudentResource;
use App\Http\Resources\V1\StudentCollection;
use App\Http\Requests\V1\StoreStudentRequest;
use App\Http\Requests\V1\UpdateStudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new StudentCollection(Student::paginate(5)); //can be all or paginate(max 15 obj per page)
        
    }

    public function testing()
    {
        $students = Student::all();
        return new StudentCollection($students);
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function searchStudents(Request $request)
    {
        $query = $request->input('query');

        $students = Student::where('name', 'LIKE', '%' . $query . '%')
            ->orWhere('email', 'LIKE', '%' . $query . '%')
            ->get();

        return view('searchResult', compact('students', 'query'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        return new StudentResource(Student::create($request->all()));
    }

    public function staffUse() {
        return "test";
    }

    public function bulkStore(Request $request) {

    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return new StudentResource($student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
