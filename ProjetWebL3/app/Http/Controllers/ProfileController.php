<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       /*   $this->validate($request, [
            'title' => 'required',
            'date' => 'required'
            ]); 
        $events = new Event;
        $events->nom = $request->input('title');
        $events->date =$request->input('date');
        $events->nom_rue =$request->input('nom_r');
        $events->ville =$request->input('ville');
        $events->descriptif =$request->input('description');
        $events->codepostal =$request->input('code_postal');
        $events->complement =$request->input('cmp_adr');
        $events->save(); 

<<<<<<< HEAD
        return redirect('/search')->with('succes','Event Created')  ; 
=======
       /*  return 123 /* redirect('/search')->with('succes','Event Created') */
>>>>>>> c3047d4ef2d710fc9e7813de84b075f38e611d3f

    }   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
