<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use App\Models\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use Carbon\Carbon;
use Hash;
use Session;
use DB;

class AccountController extends Controller
{
    public function publicLogin(){
        return view('home');
    }
    public function aboutUs(){
        return view('about');
    }
    public function directory(){
        return view('directory');
    }
   /**
     * Login Function START
     */
    public function login()
    {
        $currentMonth = Carbon::now()->month;
        //TOTAL BY MONTH
        return view('accounts.login-account');
    }

    public function loginAccount(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' =>'required|min:6',
        ]);

        $account = Account::where('email', '=', $request -> email)-> first();
        
        if($account){
            if(Hash::check($request->password, $account->password)){
                $request-> session() ->put('loginId', $account -> id);
                //dd(Session::get('loginId'));
                $user = User::where('email', '=', $request -> email)-> first();
                auth() -> login($user);
                //Auth::login($account);
                return redirect()->route('bfp');
            }
        }
        return redirect()->route('logins');
    }
    /**
     * Login Function END ------------
     */

    public function profile(){
        if(Session::has('loginId')){
            //dd(Session::get('loginId'));
            $account = Account::where('id', '=',Session::get('loginId'))->first();
            return view('accounts.profile',compact('account'));
        }
    }

    public function edit_profile(){
        if(Session::has('loginId')){
            //dd(Session::get('loginId'));
            $account = Account::where('id', '=',Session::get('loginId'))->first();
            return view('accounts.profile-edit',compact('account'));
        }
    }

    public function update_profile(Request $request, string $id){
        $data = array();
        if(Session::has('loginId')){
            $data = Account::where('id', '=', $id)-> first();
            $email = $request -> email;
            $password = $request -> password;

            Account::where('id', '=', $id)->update([
                'email' => $email,
                'password' => $password
            ]);
        }
        return redirect()->route('profile');
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            //dd(Session::get('loginId'));
            return redirect()->route('logins');
        }
        return redirect()->route('logins');
    }
}
