<?php

namespace App\Http\Controllers\Admin;

use App\Models\Acara;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\TransactionRequest;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::orderBy('id','Desc')->paginate(8);

        return view('admin.transaction.index', compact('transactions'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        // return view('admin.transaction.index', [
        //     'transactions' => Transaction::latest()->paginate(10)
        // ]);
    }

    public function create()
    {
        $hasil = Transaction::all();
        $latest = Transaction::latest('saldo')->first();
        return view('admin.transaction.create', compact('hasil','latest'));
    }
    public function kredit()
    {
        $keterangan = Acara::all();
        $hasil = Transaction::all();
        $latest = Transaction::latest('saldo')->first();
        return view('admin.transaction.kredit', compact('keterangan','hasil','latest'));
    }
    public function store(TransactionRequest $request)
    {
        $dbt=$request->input('debit');
        $nod=$request->input('nd');
        $kdt=$request->input('kredit');
        $nok=$request->input('nk');
        $sld = $request->input('saldo');
        $sum = $sld + $dbt - $kdt;
        DB::table('transactions')->insert(['debit'=>$dbt,'nd'=>$nod,'kredit'=>$kdt,'nk'=>$nok,'saldo'=>$sum]);
        // Transaction::create($request->validated());
        return redirect()->route('transactions.index')->with('message', 'Transaction Created Successfully!');
      
    }

    public function show(Transaction $transactions)
    {
        
        return view('admin.transaction.show', compact('transactions'));
    }

    public function edit(Transaction $transaction)
    {
        $keterangan = Acara::all();
        return view('admin.transaction.edit', compact('transaction','keterangan'));
    }

    public function update(TransactionRequest $request, Transaction $transaction)
    {
        $dbt=$request->input('debit');
        $nod=$request->input('nd');
        $kdt=$request->input('kredit');
        $nok=$request->input('nk');
        $sld = $request->input('saldo');
        $sum=$sld + $dbt - $kdt;
        DB::table('transactions')->update(['debit'=>$dbt,'nd'=>$nod,'kredit'=>$kdt,'nk'=>$nok,'saldo'=>$sum]);
        $transaction->update($request->validated());

        return redirect()->route('transactions.index')->with('message', 'Transaction Created Successfully!');
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();

        return redirect()->route('transactions.index')
            ->with('success', 'Transactions deleted successfully');

    }
}
