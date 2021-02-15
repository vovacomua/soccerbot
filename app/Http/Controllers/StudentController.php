<?php

namespace App\Http\Controllers;

use App\Student;
use App\Http\Requests\Students\CreateStudentRequest;
use App\Services\StudentService;

class StudentController extends Controller
{
    /**
     * @var StudentService
     */
    protected $studentService;

    /**
     * CarController constructor.
     *
     * @param StudentService $studentService
     */
    public function __construct(StudentService $studentService)
    {
        $this->studentService = $studentService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(
            removeQuotesFromJsonKeys($this->studentService->index()->toJson()
            ))->header('Content-Type', 'application/json');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateStudentRequest $request)
    {

        return response(
            '{id = "'.$this->studentService->store($request).'"}'
        )->header('Content-Type', 'application/json');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {

        return response(
            removeQuotesFromJsonKeys($student->toJson()
            ))->header('Content-Type', 'application/json');
    }
}
