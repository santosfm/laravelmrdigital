<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

//if user is not logged in, then redirect him to the login route
public function __construct(){
     $this->middleware('auth'); 
}

public function showWelcomePage(){
    return view('welcomepage');    
}

public function showUsers() {
 $users = User::get();
return view('home', compact('users'));
 }

public function showUserById($id) {
 $user = User::findOrFail($id);
 return view('home', compact('user'));
 }

public function createUser() {
 return view('createuser');
}

public function saveUser(Request $request) {
//dd($request->all());
 $request->validate([
 'fname' => 'required',
 'email' => 'required|email|unique:users',
 'password' => 'required',
 'notes' => 'required'
 ]);

 $user = new User;
 $user->fname = $request->fname;
 $user->lname = $request->lname;
 $user->email = $request->email;
 $user->password = Hash::make($request->password);
 $user->notes = $request->notes;
 $user->save();
 return redirect()->back()->with('success','User has been added successfully.'); //session called success
 }

 public function showTheUsers(){
 //$users = User::get();
 $users = User::paginate(3);
return view('users', compact('users'));
}

public function viewUser($id) {
 $user = User::findOrFail($id);
 return view('viewuser', compact('user'));
}

public function updateUser(Request $request, $id){

 $request->validate([
//  'fname' => 'required',
//  'email' => 'required|email|unique:users',
//  'password' => 'required',
//  'notes' => 'required'
 ]);

 $user = User::findOrFail($id);
 $user->fname = $request->fname;
 $user->lname = $request->lname;
 $user->email = $request->email;
 $user->password = $request->password;
 $user->notes = $request->notes;
 $user->save();
 return redirect()->back()->with('success','User has been updated successfully.');
 }

 public function deleteUser(Request $request, $id){
    $request->validate([
    'userid' => 'required'
    ]);
    
    if($id == $request->userid){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('admin/users');
    }
    return redirect()->back()->with('danger', 'User cannot be deleted. ID is not the same.');
 }
}