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
                return view('/welcome'); 
            }
        }
    }
    /**
     * Login Function END ------------NOTE CHANGE VIEW('/homepage')
     */
}
