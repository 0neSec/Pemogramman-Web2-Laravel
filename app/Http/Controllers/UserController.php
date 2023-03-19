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
    foreach (user::all() as $users)-> {
        # code...
        echo $users->name.' | '.$users->email." ";
    }
 }
  public function first()
 {
    # code...
    $user =User::Where('email', 'akhmadhaikal@gmail.com')-> first();
    if($user) {
      # code...
      echo $user->name.' | '.$user->email;
      }
      else {
         # code...
         echo "User not found";
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
    $user = User::find(1);
 
    $user->name = 'Paris to London';
     
    $user->save();
 }
 public function delete($id)
 {
    # code...Delete
    $user = User::find($id);
    $user->delete();
 }
 
}
