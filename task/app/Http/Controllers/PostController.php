<?php
namespace App\Http\Controllers;
use App\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(post $post)
    {
       
        return view('list')->with('data',post::all());
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        request()->validate([
            "title"=>"required",
            "description"=>"required",
        ]);
        $data= new post;
        $data->title=request('title');
        $data->description=request('description');
        $data->save();
        $request->session()->flash("msg","data submitted");
        return redirect('/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('edit')->with('data',post::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update($id)
 {
    request()->validate([
        "title"=>"required",
        "description"=>"required",
    ]);
        $data=post::find($id);
        $data->title=request('title');
        $data->description=request('description');
        $data->save();
        session()->flash("msg","data updated");
        return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=post::find($id);
        $data->delete();
        return redirect('/post');
    }
}








