<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
     public function index(){
        $projects = Project::get();
        $data = ['title'=>'Projects','content'=>'los mejores xd','projects'=>$projects];
        return view('Project.index',$data);
    }}
