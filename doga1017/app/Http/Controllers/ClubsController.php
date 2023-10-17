<?php

namespace App\Http\Controllers;

use App\Models\Clubs;
use App\Models\User;
use Illuminate\Http\Request;

class ClubsController extends Controller
{
    public function index(){
        $clubs = response()->json(Clubs::all());
        return $clubs;
    }

    public function show($id){
        $clubs = response()->json(Clubs::find($id));
        return $clubs;
    }

    public function destroy($id){
        Clubs::find($id)->delete();
    }

    public function store(Request $request){
        $clubs = new Clubs;
        $clubs->establishment = $request->establishment;
        $clubs->location = $request->location;
        $clubs->max_number = $request->max_number;
        $clubs->save();
    }

    public function update(Request $request, $id){
        $clubs = Clubs::find($id);
        $clubs->establishment = $request->establishment;
        $clubs->location = $request->location;
        $clubs->max_number = $request->max_number;
        $clubs->save();
    }

            /* VIEW */

    public function newView(){
        $users = User::all();
        return view('clubs.new', ['users' => $users]);
    }

    public function editView($id){
        $users = User::all();
        $clubs = Clubs::find($id);
        return view('clubs.edit', ['users' => $users, 'clubs' => $clubs]);
    }

    public function listView(){
        $clubs = Clubs::all();
        return view('clubs.list', ['clubs' => $clubs]);
    }
}
