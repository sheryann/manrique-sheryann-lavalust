<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        $this->call->view('student/homepage');
    }

    public function profile()
    {
        $student = [
            'student_id' => 'MCC2024-00245',
            'name' => 'Shery Ann Manrique',
            'course' => 'BS Information Technology',
            'year' => '3rd Year',
            'section' => 'F5',
            'email' => 'sheryannmanrique37@gmail.com'
        ];

        $this->call->view('student/student_profile', $student);
    }
}