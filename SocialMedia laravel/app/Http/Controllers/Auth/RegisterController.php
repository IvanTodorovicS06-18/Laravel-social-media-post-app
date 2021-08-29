<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
       
    }
    
    public function index(){
        return view('Auth.Register');
    }

    public function store(Request $request){
        
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|max:255|unique:users',
            'password' => 'required',
        ]);
     
      
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);


     

        return redirect()->route('login');
    }
}
