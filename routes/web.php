<?php

use Illuminate\Support\Facades\Route;
// use request
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// ve co ban no la 1 cai ham nao do tra ve view .
// nhan vao cac tham so ra ve view
// Route::get('/students/{id}/{age}', function($id,$age){
//    dd('Gia tri truyen vao tren url:' .$id .'' . $age);
// });

Route::get('/students', function(){
    // su dung querry buller
    //lay ra bang student
    $students = DB:: table('students')->get();
    // dd($students);
    return view('students.detail',compact('students'));
    // lay rieng ra 1 gia tri
//    return view('students.detail',['studentValue'=> $students]);
})->name('students');
// cach 2
// Route::get('/students/detail', function(){
//     return view('students.detail');
// });
Route::get('/login', function(){
   return view('students.login');
})->name('login');
// du lieu truyen len se dc request theo thang laravel
Route::post('/getlogin', function(Request $req){
    // dd($req->password,$req->email);
  
$user = DB::table('users')
->where('email' ,'=',$req->email)
->where('password' ,'=',$req->password)
->first();
if($user){
    return redirect()->route('students');
}else {
    return redirect()->route('login');
}
 })->name('getlogin');