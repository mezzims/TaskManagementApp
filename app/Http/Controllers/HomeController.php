<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Console\View\Components\Task;
use App\Models\Tasks;

class HomeController extends Controller
{
    public function index(){
        if(Auth::id()){
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'user') {
                $user_id = auth()->user()->id;
                $tasks = Tasks::where('user_id', $user_id)->get(); 
                $user = auth()->user();
            
                return view('dashboard', [
                    'tasks' => $tasks,
                    'user' => $user,
                ]);
            }


            else if($usertype == 'admin'){
                $tasks = Tasks::all(); 
                return view('admin.adminhome', ['tasks' => $tasks]);
            }else{
                return redirect()->back();

            };

        };
    }
    
}
