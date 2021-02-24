<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UsersController extends Controller
{
    //
    public function index(){
        $users =  User::all();
        Return view("users",["users" => $users]);
    }

    public function save(){
        Return view("users");
    }

    public function store(){
        Return view("users");
    }

    public function delete(){
        Return view("users");
    }

    public function update(){
        Return view("users");
    }
}
