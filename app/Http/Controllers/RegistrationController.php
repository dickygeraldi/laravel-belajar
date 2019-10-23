<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    public function create(){
        return view('registration.create');
    }

    public function store(Request $request){
        $this->validate(request(), [
            'nama' => 'required',
            'password' => 'required',
            'password-repeat' => 'required|same:password',
            'biografi' => 'required',
            'gender' => 'required'
        ]);

        $data = array('nama' => $request->input('nama'), 'gender' => $request->input('gender'), 'biografi' => $request->input('biografi'), 'password' => md5($request->input('password')));
        DB::table('user')->insert($data);

        return back()->with('success', 'User created successfully.');
    }
}
