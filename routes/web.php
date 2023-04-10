<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Models\Task;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route :: get('about' , function(){
    $name = 'Mai' ;
 return view('about' , compact('name')) ;
});



Route :: get ('tasks',function(){
$tasks = [
    'first-task'=>'Task1' ,
    'second-task'=>'Task2' ,
    'third-task'=>'Task3' ,

] ;

return view('tasks' , compact('tasks'));

});


Route :: get ('show/{id}' , function($id){
    $tasks = [
        'first-task'=>'Task1' ,
        'second-task'=>'Task2' ,
        'third-task'=>'Task3' ,

    ] ;
    $task = $tasks[$id] ;
    return view ('show' , compact ('task'));
});


Route :: get('app',function(){
    return view('layaout.app') ;
}) ;

Route :: get('taskss',function(){
    return view('taskss') ;
}) ;

Route :: get('taskss' , [TaskController::class, 'index']) ;
Route :: post('/store',[TaskController::class , 'store']);
Route :: post('delete/{id}',[TaskController::class,'delete']);
Route :: post('update/{id}',[TaskController::class,'update']);





