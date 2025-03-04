<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Diary;

class DiaryController extends Controller
{
    public function index(){
        $diary = Diary::all();
        return view("diary.index", compact("diary"));
    }

    public function show(Diary $diary) {
        return view("diary.show", compact("diary"));
    }

    public function create(Diary $diary) {
        return view("diary.create", compact("diary"));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "title" => ["required", "max:100"],
            "body" => ["required", "max:255"],
            "date" => ["required"]
        ]);          
        Diary::create([
            "title" => $validated["title"],
            "body" => $validated["body"],
            "date" => $validated["date"],
        ]);
        return redirect("/diaries");
    }
} 