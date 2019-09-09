<?php

namespace App\Http\Controllers;

use App\Students;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AdminController extends Controller
{
    public function showStudents(Request $request)
    {
        $students = Students::all();
        return view("StudentList", compact("students"));
    }

    public function addStudent()
    {
        return view("formStudent");
    }

    public function saveStudent(Request $request)
    {
        $messages = [
            "required" => "This field is required.",
            "unique" => "This value does exist",
            "max" => "Excess maximum characters",
            "integer" => "This should be number"
        ];

        $rules = [
            "name" => "required|string|max:255",
            "age" => "required|integer",
            "address" => "required|string|max:200",
            "telephone" => "required|string|max:20"
        ];

        $this->validate($request, $rules, $messages);

        try {
            Students::create([
                "name" => $request->get("name"),
                "age" => $request->get("age"),
                "address" => $request->get("address"),
                "telephone" => $request->get("telephone")
            ]);
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        return redirect('student-list');

    }
}
