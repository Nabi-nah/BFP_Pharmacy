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
        $medicine = Medicine::all();
        $currentMonth = Carbon::now()->month;
        //TOTAL BY MONTH
        $qty = Medicine::select(DB::raw('LOWER("medicineName") as lower_medicineName'), DB::raw('SUM(quantity) as total_quantity'), 'prescriptionDate')
        //->where(DB::raw('LOWER("medicineName")'), 'antibiotics')
        ->whereMonth('prescriptionDate', '=', $currentMonth) // Filter by current month
        ->groupBy(DB::raw('LOWER("medicineName")'), 'prescriptionDate')
        ->get();

        return view('accounts.login-account', compact('medicine', 'qty'));
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
