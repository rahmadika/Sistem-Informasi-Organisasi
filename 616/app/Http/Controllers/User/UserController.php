<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\AnggotaRequest;
use App\Http\Requests\Request;
use App\Models\Acara;
use App\Models\Transaction;
use App\Models\Anggota;
use App\Models\News;
use App\Models\Profile;
use App\Models\User;
use CreateAcarasTable;
use Illuminate\Support\Facades\Auth;
use yajra\DataTables\DataTables;

class UserController extends Controller{
    public function home()
    {
        $userProfile = Profile::where('user_id',Auth::user()->id)->first();
        if(!$userProfile)
        {
            $profile = new Profile();
            $profile->user_id = Auth::user()->id;
            $profile->save();
        }
        $user = User::find(Auth::user()->id);
        return view('user.home',['user' =>$user]);
    }
    
    public function tentang()
    {
        $userProfile = Profile::where('user_id',Auth::user()->id)->first();
        if(!$userProfile)
        {
            $profile = new Profile();
            $profile->user_id = Auth::user()->id;
            $profile->save();
        }
        $user = User::find(Auth::user()->id);
        return view('user.about',['user' =>$user]);
    }

    public function anggota()
    {
        // $userProfile = Profile::where('user_id',Auth::user()->id)->first();
        // if(!$userProfile)
        // {
        //     $profile = new Profile();
        //     $profile->user_id = Auth::user()->id;
        //     $profile->save();
        // }
        // $user = User::find(Auth::user()->id);
        return view('user.member');
    }
    public function anggotalist()
    {
            return Datatables::of(Anggota::query())
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="single-member/'.$row->id.'" class="show btn btn-primary btn-sm">Detail</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
    }

    public function keuangan()
    {
        $userProfile = Profile::where('user_id',Auth::user()->id)->first();
        if(!$userProfile)
        {
            $profile = new Profile();
            $profile->user_id = Auth::user()->id;
            $profile->save();
        }
        $user = User::find(Auth::user()->id);
        $transactions = Transaction::OrderBY('id','Desc')->paginate(6);
        return view('user.keuangan', [
            'transactions' => $transactions,
            'user' =>$user]);

    }

    public function acara()
    {
        $events = Acara::latest()->paginate(5);
        $userProfile = Profile::where('user_id',Auth::user()->id)->first();
        if(!$userProfile)
        {
            $profile = new Profile();
            $profile->user_id = Auth::user()->id;
            $profile->save();
        }
        $user = User::find(Auth::user()->id);
        return view('user.acara',[
            'events' =>$events,
            'user' =>$user]);
    }

    public function berita()
    {
        $news = News::latest()->paginate(2);
        $userProfile = Profile::where('user_id',Auth::user()->id)->first();
        if(!$userProfile)
        {
            $profile = new Profile();
            $profile->user_id = Auth::user()->id;
            $profile->save();
        }
        $user = User::find(Auth::user()->id);$userProfile = Profile::where('user_id',Auth::user()->id)->first();
        if(!$userProfile)
        {
            $profile = new Profile();
            $profile->user_id = Auth::user()->id;
            $profile->save();
        }
        $user = User::find(Auth::user()->id);
        return view('user.berita',
        ['news' =>$news,
        'user' =>$user]);
    }

    public function shownews(News $news)
    {
        $userProfile = Profile::where('user_id',Auth::user()->id)->first();
        if(!$userProfile)
        {
            $profile = new Profile();
            $profile->user_id = Auth::user()->id;
            $profile->save();
        }
        $user = User::find(Auth::user()->id);
        $news = News::find($news);
        $sidenews = News::all();
        return view('user.single-news', compact ('news', 'user', 'sidenews'));
    }

    public function showmember(Anggota $anggota)
    {
        $userProfile = Profile::where('user_id',Auth::user()->id)->first();
        if(!$userProfile)
        {
            $profile = new Profile();
            $profile->user_id = Auth::user()->id;
            $profile->save();
        }
        $user = User::find(Auth::user()->id);
        $anggota = Anggota::find($anggota);
        return view('user.single-member', compact('anggota','user'));
    }

    public function showtransaction(Transaction $transactions)
    {
        $tran=Transaction::find($transactions);
        return view('user.single-transaction', compact('tran','transactions'));
    }
    
    public function showevent(Acara $acara)
    {
        $userProfile = Profile::where('user_id',Auth::user()->id)->first();
        if(!$userProfile)
        {
            $profile = new Profile();
            $profile->user_id = Auth::user()->id;
            $profile->save();
        }
        $user = User::find(Auth::user()->id);
        $acara = Acara::find($acara);
        return view('user.single-event', compact('acara','user'));
    }
    // public function search()
    // {
    //     if (request('search')) {
    //         $cari = Anggota::where('name', 'like', '%' . request('search') . '%')->get();
    //     } else {
    //         $cari = Anggota::all();
    //     }
    //     return view('user.member')->with('cari', $cari);    
    // }
}