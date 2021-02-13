<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function index(){
        $data =  ["john","mary","mac","tony","andy","peter"];
        Return view("users",["user" => $data]);
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
