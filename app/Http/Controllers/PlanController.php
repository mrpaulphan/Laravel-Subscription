<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;
use App\Http\Requests;

class PlanController extends Controller
{

    public function index() {
      return view('plans.index')->with([
          'plans' => Plan::get(),
      ]);
    }
}
