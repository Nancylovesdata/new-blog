<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        //
        return "It's working, the number is " . $id;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return "I am the method that creates stuffs";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return "this is the show method yaay";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


public function contact(){

// $people =['Nancy', 'John', 'Peter', 'Mary', 'Eben'];
$people = ['tygy'];

// This function will look for a file named contact inside the view folder.
return view('contact', compact('people'));
}


// The  show post function or controllerS will look for a file named post inside the view folder and pass the id to it.

public function show_post($id, $name, $password){

return view('post', compact('id','name', 'password'));
}

}
