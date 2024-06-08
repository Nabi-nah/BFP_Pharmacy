<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Models\Medicine;

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
                return redirect('/'); 
            }
        }
    }
    /**
     * Login Function END ------------NOTE CHANGE VIEW('/homepage')
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

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            //dd(Session::get('loginId'));
            return redirect('logins');
        }
        return redirect('logins');
    }
}
