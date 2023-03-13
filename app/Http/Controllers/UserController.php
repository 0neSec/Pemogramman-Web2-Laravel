<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
  public function index()
 {
    # code...
    foreach (user::all() as $users) {
        # code...
        echo $users->name.' | '.$users->email." ";
    }
 }

 public function store()
 {
    # code...
    $users = new User;
    $users->name= "akhmad haikal";
    $users->email= "akhmadhaikal@gmail.com";
    $users->password= "";
    
    $users->save();
 }
 public function update()
 {
    # code...
    $users = User;
    $users->name= "akhmad haikal";
    $users->email= "akhmadhaikal@gmail.com";
    $users->password= "";   
    $users->save();
 }
}
