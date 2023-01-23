<?php

namespace App\Http\Controllers;

use App\Models\Chair;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.chairs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createForm()
    {
        return view('pages.chairs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createChair(Request $request)
    {
        $user_data = $request->validate([
            'user_id' => 'required',
            'name' => 'required',
            'amount' => 'required',
            'body' => 'required',
            'image' => 'required',
        ]);

        if(Chair::create($user_data)) {
            return redirect('/')->with('message', 'Chair has been created');
        }
        else {
            return redirect('/')->with('message', 'Chair was not created');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chair  $chair
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chair = Chair::find($id);
        return view('pages.chairs.show')->with(compact('chair'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chair  $chair
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chair = Chair::find($id);
        return view('pages.chairs.update')->with(compact('chair'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chair  $chair
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user_data = $request->validate([
            'post_id' => 'required',
            'user_id' => 'required',
            'name' => 'required',
            'amount' => 'required',
            'body' => 'required',
            'image' => 'required',
        ]);

        if(Chair::where('id', $user_data["post_id"])->update(['name'=> $user_data["name"], 'amount'=> $user_data["amount"], 'body'=> $user_data["body"]])) {
            return redirect('/')->with('message', 'Chair has been updated');
        }
        else {
            return redirect('/')->with('message', 'Chair was not updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chair  $chair
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]);
        $id = $request["id"];
        Chair::where('id', $id)->delete();
        return redirect('/');
    }
}
