<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ToDo;


class ToDoController extends Controller
{
    public function index(){
        $todos = ToDo::all();
        return view("todos.index", compact("todos"));
    }

    public function show(ToDo $todo) {
        return view("todos.show", compact("todo"));
    }

    public function create(ToDo $todo) {
        return view("todos.create", compact("todo"));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "content" => ["required", "max:255"]
        ]);          
        ToDo::create([
            "content" => $validated["content"],
            "completed" => false
        ]);
        return redirect("/todos");
    }
} 