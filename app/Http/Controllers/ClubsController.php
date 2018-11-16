<?php

namespace App\Http\Controllers;

use App\Clubs;
use Illuminate\Http\Request;

class ClubsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clubs.index', ['clubs' => Clubs::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clubs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'name' => 'required',
           'country_id' => 'required'
        ]);

        $club = new Clubs();
        $club->name = $request['name'];
        $club->country_id = $request['country_id'];
        $club->save();

        return redirect()->route('clubs.index')->with(['success' => 'Спортивный клуб успешно создан!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clubs  $clubs
     * @return \Illuminate\Http\Response
     */
    public function show(Clubs $clubs)
    {
        return view('clubs.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clubs  $club
     * @return \Illuminate\Http\Response
     */
    public function edit(Clubs $club)
    {
        return view('clubs.edit',['club' => $club]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clubs  $club
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clubs $club)
    {
        $this->validate($request,[
            'name' => 'required',
            'country_id' => 'required'
        ]);
        $club->name = $request['name'];
        $club->country_id = $request['country_id'];
        $club->save();
        return redirect()->route('clubs.index')->with(['success' => 'Спортивный клуб успешно изменен!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clubs  $club
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clubs $club)
    {
        //@todo check if club belongs to coach and players
        $club->delete();
        return redirect()->route('clubs.index')->with(['success' => 'Спрортвный клуб успешно удален!']);
    }
}
