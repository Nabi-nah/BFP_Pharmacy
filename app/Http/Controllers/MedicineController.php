<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Medicine;
use Illuminate\Http\Request;

use Carbon\Carbon;
use Hash;
use Session;
use DB;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session::has('loginId')){
            //dd(Session::get('loginId'));
            $account = Account::where('id', '=',Session::get('loginId'))->first();
            $medicines = Medicine::paginate();
            //$medicines = Medicine::paginate();
    
            return view('medicines.medicine-upload-form', compact('medicines', 'account'));
            //return view('contacts.index', compact('contacts'));
        }return redirect()->back();

    }

    public function database()
    {
        if(Session::has('loginId')){
            //dd(Session::get('loginId'));
            $account = Account::where('id', '=',Session::get('loginId'))->first();
            $medicines = Medicine::paginate();
            //$medicines = Medicine::paginate();
    
            return view('medicines.medicine-database', compact('medicines', 'account'));
            //return view('contacts.index', compact('contacts'));
        }return redirect()->back();
    }

    public function monthly_medicine()
    {
        if (Session::has('loginId')){
            $account = Account::where('id', '=',Session::get('loginId'))->first();
            $medicine = Medicine::all();
            $currentMonth = Carbon::now()->month;
            //TOTAL BY MONTH
            $qty = Medicine::select(DB::raw('LOWER("medicine_name") as lower_medicineName'), DB::raw('SUM(quantity) as total_quantity'), DB::raw('EXTRACT(MONTH FROM prescription_date) as prescription_month'))
            //->where(DB::raw('LOWER("medicine_name")'), 'antibiotics')
            ->whereMonth('prescription_date', '=', $currentMonth) // Filter by current month
            ->groupBy(DB::raw('LOWER("medicine_name")'), DB::raw('EXTRACT(MONTH FROM prescription_date)'))
            ->orderBy('total_quantity', 'desc') // Order by total_quantity in descending order
            ->limit(10) // Get only the top 10 results
            ->get();
            //dd($account);
            return view('medicines.medicine-monthly', compact('medicine', 'qty', 'account'));
        }return redirect()->back();
        
    }

    public function monthly_medicine_uniformed()
    {
        if (Session::has('loginId')){
            $account = Account::where('id', '=',Session::get('loginId'))->first();
            $currentMonth = Carbon::now()->month;
            $uniformed = Medicine::select(DB::raw('LOWER("medicine_name") as lower_medicineName'), DB::raw('SUM(quantity) as total_quantity'), 'patient_type', DB::raw('EXTRACT(MONTH FROM prescription_date) as prescription_month'))
            ->where(DB::raw('LOWER("patient_type")'), 'uniformedpersonnel')
            ->whereMonth('prescription_date', '=', $currentMonth) // Filter by current month
            ->groupBy(DB::raw('LOWER("medicine_name")'), 'patient_type', DB::raw('EXTRACT(MONTH FROM prescription_date)'))
            ->get();
            //dd($uniformed);

            return view('medicines.medicine-monthly-uniformed', compact('uniformed', 'account'));
        }return redirect()->back();
    }

    public function monthly_medicine_nonuniformed()
    {
        if (Session::has('loginId')){
            $account = Account::where('id', '=',Session::get('loginId'))->first();
            $currentMonth = Carbon::now()->month;
            $nonuniformed = Medicine::select(DB::raw('LOWER("medicine_name") as lower_medicineName'), DB::raw('SUM(quantity) as total_quantity'), 'patient_type', DB::raw('EXTRACT(MONTH FROM prescription_date) as prescription_month'))
            ->where(DB::raw('LOWER("patient_type")'), 'non-uniformedpersonnel')
            ->whereMonth('prescription_date', '=', $currentMonth) // Filter by current month
            ->groupBy(DB::raw('LOWER("medicine_name")'), 'patient_type', DB::raw('EXTRACT(MONTH FROM prescription_date)'))
            ->get();
            //dd($nonuniformed);

            return view('medicines.medicine-monthly-nonuniformed', compact('nonuniformed', 'account'));
        }return redirect()->back();
    }

    public function monthly_medicine_civilian()
    {
        if (Session::has('loginId')){
            $account = Account::where('id', '=',Session::get('loginId'))->first();
            $currentMonth = Carbon::now()->month;
            $civilian = Medicine::select(DB::raw('LOWER("medicine_name") as lower_medicineName'), DB::raw('SUM(quantity) as total_quantity'), 'patient_type', DB::raw('EXTRACT(MONTH FROM prescription_date) as prescription_month'))
            ->where(DB::raw('LOWER("patient_type")'), 'civilian')
            ->whereMonth('prescription_date', '=', $currentMonth) // Filter by current month
            ->groupBy(DB::raw('LOWER("medicine_name")'), 'patient_type', DB::raw('EXTRACT(MONTH FROM prescription_date)'))
            ->get();
            //dd($civilian);

            return view('medicines.medicine-monthly-civilian', compact('civilian', 'account'));
        }return redirect()->back();
    }

    public function monthly_medicine_dependent()
    {
        if (Session::has('loginId')){
            $account = Account::where('id', '=',Session::get('loginId'))->first();
            $currentMonth = Carbon::now()->month;
            $dependent = Medicine::select(DB::raw('LOWER("medicine_name") as lower_medicineName'), DB::raw('SUM(quantity) as total_quantity'), 'patient_type', DB::raw('EXTRACT(MONTH FROM prescription_date) as prescription_month'))
            ->where(DB::raw('LOWER("patient_type")'), 'dependent')
            ->whereMonth('prescription_date', '=', $currentMonth) // Filter by current month
            ->groupBy(DB::raw('LOWER("medicine_name")'), 'patient_type', DB::raw('EXTRACT(MONTH FROM prescription_date)'))
            ->get();
            //dd($dependent);

            return view('medicines.medicine-monthly-dependent', compact('dependent', 'account'));
        }return redirect()->back();
    }

    public function monthly_medicine_retired()
    {
        if (Session::has('loginId')){
            $account = Account::where('id', '=',Session::get('loginId'))->first();
            $currentMonth = Carbon::now()->month;
            $retired = Medicine::select(DB::raw('LOWER("medicine_name") as lower_medicineName'), DB::raw('SUM(quantity) as total_quantity'), 'patient_type', DB::raw('EXTRACT(MONTH FROM prescription_date) as prescription_month'))
            ->where(DB::raw('LOWER("patient_type")'), 'retired')
            ->whereMonth('prescription_date', '=', $currentMonth) // Filter by current month
            ->groupBy(DB::raw('LOWER("medicine_name")'), 'patient_type', DB::raw('EXTRACT(MONTH FROM prescription_date)'))
            ->get();
            //dd($retired);

            return view('medicines.medicine-monthly-retired', compact('retired', 'account'));
        }return redirect()->back();
    }
}
