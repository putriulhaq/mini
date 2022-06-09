<?php

namespace App\Http\Controllers;

use App\Models\Transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionsControllers extends Controller
{
    public function index(){
        $data = DB::table('transactions')
                    ->leftjoin('types', 'transactions.id_types', '=', 'types.id')
                    ->leftjoin('guests', 'transactions.id_guests', '=', 'guests.id')
                    ->get();
                    // return $data;
    
        // $data = Transactions::all();
        // dd($data);
        return view('admin.transactions',compact('data'));
    }

    public function DeleteTransactions($id){
        $data = Transactions::find($id);
        $data->delete();
        return redirect()->route('guests-transaction')->with('success', 'Data deleted successfully
        ');
        
    }

    public function deposite(){
        $data = DB::table('transactions')
        ->leftjoin('types', 'transactions.id_types', '=', 'types.id')
        ->leftjoin('guests', 'transactions.id_guests', '=', 'guests.id')
        ->where('transactions.id_types','=',1)
        ->get();

        return view('admin.deposite',compact('data'));

    }
    public function withdrawal(){
        $data = DB::table('transactions')
        ->leftjoin('types', 'transactions.id_types', '=', 'types.id')
        ->leftjoin('guests', 'transactions.id_guests', '=', 'guests.id')
        ->where('transactions.id_types','=',2)
        ->get();

        return view('admin.withdrawal',compact('data'));

    }
}
