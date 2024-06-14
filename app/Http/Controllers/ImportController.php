<?php

namespace App\Http\Controllers;

use App\Models\CsvData;
use App\Models\Account;
use App\Models\Medicine;
use Illuminate\Http\Request;
use App\Imports\ContactsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\CsvImportRequest;
use Maatwebsite\Excel\HeadingRowImport;
use PhpOffice\PhpSpreadsheet\Shared\Date;

use DateTime;
use Session;

class ImportController extends Controller
{
    public function parseImport(CsvImportRequest $request)
    {
        if (Session::has('loginId')){
            $account = Account::where('id', '=',Session::get('loginId'))->first();
            $file = $request->file('csv_file');
            $extension = $file->getClientOriginalExtension();
            
            if ($request->has('header')) {
                $headings = (new HeadingRowImport)->toArray($request->file('csv_file'));
                $data = Excel::toArray(new ContactsImport, $request->file('csv_file'))[0];
            } else {
                $data = array_map('str_getcsv', file($request->file('csv_file')->getRealPath()));
            }

            if (count($data) > 0) {
                $csv_data = array_slice($data, 0, 2);
                if (in_array($extension, ['xls', 'xlsx'])) {
                    foreach ($data as $i => $datum) {
                        // Assuming $datum['prescription_date'] is a string representation of a date
                        $prescription_date = new DateTime('@'.(($datum['prescription_date']- 25569) * 86400)); // Convert string to DateTime object
                        $formatted_date = $prescription_date->format('Y-m-d H:i:s'); // Format DateTime object to get date in 'Y-m-d H:i:s' format
                        $data[$i]['prescription_date'] = $formatted_date;
                    }
                    foreach ($csv_data as $i => $datum) {
                        // Assuming $datum['prescription_date'] is a string representation of a date
                        $prescription_date = new DateTime('@'.(($datum['prescription_date']- 25569) * 86400)); // Convert string to DateTime object
                        $formatted_date = $prescription_date->format('Y-m-d H:i:s'); // Format DateTime object to get date in 'Y-m-d H:i:s' format
                        $csv_data[$i]['prescription_date'] = $formatted_date;
                    }
                    //dd($data);
                    //dd($csv_data);
                }
                $csv_data_file = CsvData::create([
                    'csv_filename' => $request->file('csv_file')->getClientOriginalName(),
                    'csv_header' => $request->has('header'),
                    'csv_data' => json_encode($data)
                ]);
                //dd($data);
            } else {
                return redirect()->back()->with('account', $account);
            }
            //dd($csv_data);
    
            return view('import_fields', [
                'headings' => $headings ?? null,
                'csv_data' => $csv_data,
                'csv_data_file' => $csv_data_file
            ], compact('account'));
        }return redirect()->back();

    }

    public function processImport(Request $request)
    {
        if (Session::has('loginId')){
            $account = Account::where('id', '=',Session::get('loginId'))->first();
            \Log::info('Request Fields:', $request->fields);
            \Log::info('Config DB Fields:', config('app.db_fields'));
            $data = CsvData::find($request->csv_data_file_id);
            $csv_data = json_decode($data->csv_data, true);
            foreach ($csv_data as $row) {
                $medicines = new Medicine();
                foreach (config('app.db_fields') as $index => $field) {
                    if ($data->csv_header) {
                        $medicines->$field = $row[$request->fields[$field]];
                    } else {
                        $medicines->$field = $row[$request->fields[$index]];
                    }
                    
                }
                //$medicine->region = Session::get('loginId');
                $medicines->save();
            }

            return redirect()->route('medicines.upload-medicines', ['account' => $account])->with('success', 'Import finished.');
        }return redirect()->back();
    }
}