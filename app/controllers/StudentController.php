<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION['student_access'] = true;

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
            'email' => 'sheryannmanrique37@gmail.com',
            'address' => 'Sto. Nino, Pinamalayan, Oriental Mindoro',
            'contact' => '0951-012-4221',
            'hobbies' => 'Watching movies, listening to music, and playing instruments',
            
        ];

        $this->call->view('student/student_profile', $student);
    }
}
