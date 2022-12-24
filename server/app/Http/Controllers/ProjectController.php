<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProjectController extends Controller
{
    public function getAllProject() {
        return response()->json([
            "projects" => Project::all()
        ], Response::HTTP_OK);
    }
}
