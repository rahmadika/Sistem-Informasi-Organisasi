<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index()
{
return view('search.search');
}
public function search(Request $request)
{
if($request->ajax())
{
$output="";
$anggota=DB::table('anggota')->where('title','LIKE','%'.$request->search."%")->get();
if($anggota)
{
foreach ($anggota as $key => $member) {
$output.='<tr>'.
'<td>'.$member->id.'</td>'.
'<td>'.$member->name.'</td>'.
'</tr>';
}
return Response($output);
   }
   }
}
}
