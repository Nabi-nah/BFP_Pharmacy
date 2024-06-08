<?php

namespace App\Http\Controllers;

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
        $medicines = Medicine::paginate();
        //$medicines = Medicine::paginate();

        return view('medicines.medicine-upload-form', compact('medicines'));
        //return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(Medicine $medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        //
    }

    public function monthly_medicine()
    {
        $medicine = Medicine::all();
        $currentMonth = Carbon::now()->month;
        //TOTAL BY MONTH
        $qty = Medicine::select(DB::raw('LOWER("medicine_name") as lower_medicineName'), DB::raw('SUM(quantity) as total_quantity'), 'prescription_date')
        //->where(DB::raw('LOWER("medicineName")'), 'antibiotics')
        ->whereMonth('prescription_date', '=', $currentMonth) // Filter by current month
        ->groupBy(DB::raw('LOWER("medicine_name")'), 'prescription_date')
        ->get();

        return view('medicines.medicine-monthly', compact('medicine', 'qty'));
    }
}
