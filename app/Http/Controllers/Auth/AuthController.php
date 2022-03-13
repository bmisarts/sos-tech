<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Mail;

class AuthController extends Controller
{
    
    protected function register()
    {
        return view('auth.register');
    }

    protected function connexion()
    {
        return view('auth.login');
    }
    
    protected function newLetter(Request $request)
    {
        $input = $request->all();
        $rules = array(
            'email' => 'required|email|unique:users',
        );
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            session()->flash('message', 'Utilisateur existant');
            return \Redirect::back();
        }

        $password = Str::random(8);
        $infos = [
            'subject' => "Souscription à la new letter",
            'password' => $password,
            'email' => $request->email, 
            'token' => Str::random(64), 
            'unsub' => \URL::to('/unsubscribe')
        ];
        try{
            \Mail::to($request->email)->send(new \App\Mail\NewLetter((object) $infos));
            DB::table('users')->insert([
                'email' => $request->email, 
                'name' => "unknow", 
                'password' => Hash::make($password), 
            ]);
        }catch (\Exception $e) {
            return response()->json(['error' => 'an error has occured','message'=>$e->getMessage(), 'success' => 'false'], 400);
        }
        session()->flash('message', 'Souscrit avec succes.');
        return \Redirect::back();
    }
    protected function unsubscribe()
    {
        return view('auth.unsubscribe');
    }
    protected function unsubscription(Request $request){
        $this->validate($request, [
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ]);
        $user = User::where('email', $request->email)->first();
        if(Hash::check($request->password, $user->password)){
            $user->delete();
            session()->flash('message', 'Désabonnement réussi.');
            return redirect('/');
        }
        return \Redirect::back()->withErrors(['email ou mot de passe incorrect. veillez reessayer']);
    }
}
