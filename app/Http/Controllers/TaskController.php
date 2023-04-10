<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(){
        $tasks = DB::table('flights')->get();
        return view('taskss',compact('tasks'));
    }

    public function store(Request $reqquest){
        DB::table('flights')->insert([
            'name'=> $reqquest->name ,
            'created_at'=> now() ,
            'updated_at'=> now()
        ]);
        return redirect()->back() ;
    }

    public function delete($id){
        DB::table('flights')->where('id' , '=' , $id)->delete();
        return redirect()->back() ;

    }

    //public function update($id){
       // $task = Task::find($request->id);
      //  return view('update',compact('task'));
   // }

  /* public function update(Request $request, $id)
    {
       // $tas= DB::table('tasks')->find($id);

       // $tas->update();
       $tasks =Task:: find($id);
       $tasks->update();
}
*/

    

}
