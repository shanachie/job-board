<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function __invoke(Employer $employer)
    {
        return view('results', ['jobs' => $employer->jobs]);
    }
}
