<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Task;

class myController extends Controller
{
  public function home() {

    $name = 'Matthew';
    $employees = Employee::all();

    return view('pages.home', compact('name','employees'));
  }
}
