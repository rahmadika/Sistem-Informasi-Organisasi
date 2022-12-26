<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Http\Requests\Request;
use App\Models\Acara;
use App\Models\Transaction;
use App\Models\Anggota;
use App\Models\News;
use App\Models\Profile;
use App\Models\User;
use CreateAcarasTable;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class GuestController extends Controller{
    public function home()
    {
        return view('guest.home');
    }
    
    public function about()
    {
        return view('guest.about');
    }

    public function member()
    {
        // $userProfile = Profile::where('user_id',Auth::user()->id)->first();
        // if(!$userProfile)
        // {
        //     $profile = new Profile();
        //     $profile->user_id = Auth::user()->id;
        //     $profile->save();
        // }
        // $user = User::find(Auth::user()->id);
        return view('guest.member');
    }
    public function anggotalist()
    {
            return DataTables::of(Anggota::query())
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="single-member/'.$row->id.'" class="show btn btn-primary btn-sm">Detail</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
    }
    // public function member()
    // {
    //     $members = Anggota::orderBy('name','ASC')->paginate(5);
    //     return view('guest.member',[
    //         'members'=>$members]);
    // }


    public function news()
    {
        $news = News::latest()->paginate(2);
        return view('guest.berita',
        ['news' =>$news]);
    }

    public function newsshow(News $news)
    {
        $news = News::find($news);
        $sidebar = News::all();
        return view('guest.single-news', compact ('news', 'sidebar'));
    }

    public function membershow(Anggota $anggota)
    {
        $anggota = Anggota::find($anggota);
        return view('guest.single-member', compact('anggota'));
    }
}