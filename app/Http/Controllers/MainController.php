<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class MainController extends Controller
{
    protected $studentsRepository;

    public function __construct(Student $studentsRepository)
    {
        $this->studentsRepository = $studentsRepository;
    }

    public function index()
    {
        $students = $this->studentsRepository->get();
//        dd($students);
        return view('index');
    }
}
