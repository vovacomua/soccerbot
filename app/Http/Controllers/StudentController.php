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
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json($this->studentService->index());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateStudentRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateStudentRequest $request)
    {
        return response()->json([
            'id' => $this->studentService->store($request)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Student $student)
    {
        return response()->json($student);
    }
}
