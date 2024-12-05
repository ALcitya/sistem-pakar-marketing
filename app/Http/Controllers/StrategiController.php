<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StrategiImport;


class StrategiController extends Controller
{
    public function showImportFormStrategi(){
        return view('import');
    }
    public function import(Request $request){
        $request->validate([
            'file' => 'required|mimes:xls,xlsx'

        ]);
        Excel::import(new StrategiImport(), $request->file('file'));

        return redirect()->back()->with('success', 'Data berhasil di import');
    }
}