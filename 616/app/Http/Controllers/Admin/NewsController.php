<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;

class NewsController extends Controller
{
    public function index()
    {
        return view('admin.news.index', [
            'news' => News::paginate(4)
        ]);
    }

    public function create()
    {
        return view('admin.news.create');
    }
    public function store(NewsRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'description' => 'required',
        ]);
        $path = $request->file('image')->store('public/img');
        $news = new News;
        $news->name = $request->name;
        $news->description = $request->description;
        $news->image = $path;
        $news->save();
        
        return redirect()->route('news.index')->with('success','News has been created successfully.');;
        // $news= new News($request->validate([
        //     'name'=>'required',
        //     'description'=>'required',
        //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        //    ]));
        
        // if($request->file('image')){
        //     $file= $request->file('image');
        //     $filename= date('YmdHi').$file->getClientOriginalName();
        //     $file-> move(public_path('public/Img'), $filename);
        //     $news['image']= $filename;
        // };
        // $news->save();
        
        // return redirect()->route('news.index');
    }

    // public function store(NewsRequest $request)
    // {
    //     News::create($request->validated());

    //     return redirect()->route('news.index')->with('message', 'News Created Successfully!');
    // }

    public function show(News $news)
    {
        $news = News::find($news);
        return view('admin.news.show', compact('news'));
    }

    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function update(NewsRequest $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        
        $up = News::find($id);
        if($request->hasFile('image')){
            $request->validate([
              'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('image')->store('public/img');
            $up->image = $path;
        }
        $up->name = $request->name;
        $up->description = $request->description;
        $up->save();

        return redirect()->route('news.index')->with('message', 'News Created Successfully!');
    }

    public function destroy(News $news)
    {
        $news->delete();

        return redirect()->route('news.index')->with('message', 'News Deleted Successfully!');
    }
}
