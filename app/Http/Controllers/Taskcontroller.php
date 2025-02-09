<?php

namespace  App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Task;


class Taskcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return Task::find(1);
       // return Task::all();
        //return response()->json( Task::all());
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(   )

    {

    
        /*validate
       
      $request->validate([
            
            "title"=>"requried | max:255",
            "description"=>"required",
            "long-description"=>"required"
    
            ]);
            
       */
          
      
            }
        
    

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
          $task=Task::find($request ->id);
          return $task;
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
     
    }
}
