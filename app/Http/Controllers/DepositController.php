<?php

namespace App\Http\Controllers;
use League\Csv\Reader;
use App\Models\Deposit;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;


class DepositController extends Controller
{
    //
    public function showForm(){
        return view('Admin.Members.deposit');

    }
    public function display()
    {
        
        $deposits = Deposit::all();
        return view('Admin.Members.csv',['deposits'=>$deposits]);
    }
    public function store(Request $request){
       
    if ($request->hasFile('file')) {
        $csv = Reader::createFromPath($request->file('file')->getPathname(), 'r');
        $csv->setHeaderOffset(0);

        foreach ($csv as $row) {
            
            $formattedDate = Carbon::createFromFormat('m/d/Y', $row['date'])->format('Y-m-d');
            Deposit::create([
                'receiptNumber' => $row['receiptNumber'],
                'memberId' => $row['memberId'],
                'amountDeposited' => $row['amountDeposited'],
                'date' => $formattedDate,
                
            ]);
        }Session::flash('success', 'Deposits uploaded successfully!');
    }
    
    else {
    
        Session::flash('error', 'Error uploading deposits. Please try again.');
    }

    return redirect()->back();
    }
}
