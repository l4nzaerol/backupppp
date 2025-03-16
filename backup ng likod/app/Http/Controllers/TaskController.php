<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return response()->json(Task::all());
    }
}
