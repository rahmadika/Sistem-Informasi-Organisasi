<?php

namespace App\Http\Controllers\Admin;

use App\Models\Transaction;
use App\Models\Anggota;
use App\Models\Acara;
use App\Models\User;
use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
    public function index() {
        $date = date('m-d');
        $today = Acara::whereRaw("date like '%-$date'")
            ->orderBy('date', 'desc')
            ->get();

        $upcoming_events = Acara::whereRaw('DAYOFYEAR(curdate()) + 1 <= DAYOFYEAR(date) and date not like \'%-' . $date . '\'')
            ->orderBy('date', 'asc')
            ->limit(1)
            ->get();
        $saldo = Transaction::orderBy('id','Desc')->paginate(1);
        $jumlah = Anggota::count();
        $pengguna = User::count();
        $acara = Acara::latest()->paginate(1);
        $data = array('title' => 'Dashboard',
                    'saldo' => $saldo,
                    'jumlah' => $jumlah,
                    'pengguna'=> $pengguna,
                    'acara'=>$acara,
                    'upcoming_events'=>$upcoming_events,
                    'today'=>$today);
        return view('admin.dashboard.dashboard', $data);
    }
    
}