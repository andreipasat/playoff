<?php

namespace App\Http\Controllers;

use App\Players;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Competitions;
use Illuminate\Support\Facades\Auth;

class PlayersController extends Controller {

    public function index() {
        $players = Players::where('user_id', Auth::user()->id)->paginate(5);
        return view('players.index',['players' => $players]);
    }

    public function create() {
        return view('players.create');
    }

    public function save(Request $request) {


        $this->validate($request,[
           'name' => 'required',
            'sex' => 'in:m,w',
            'birthday' => 'required',
            'weight' => 'required',
            'club_id' => 'required',
            'coach' => 'required'
        ]);

        $player = new Players();
        $player->name = $request['name'];
        $player->sex = $request['sex'];
        $player->birthday = Carbon::createFromFormat('d/m/Y', $request['birthday'])->format('Y-m-d');
        $player->age = Carbon::createFromFormat('d/m/Y', $request['birthday'])->age;
        $player->weight = $request['weight'];
        $player->club_id = $request['club_id'];
        $player->coach_id = $request['coach_id'];

        if (!empty($request['wins'])) {
            $player->wins = $request['wins'];
        }

        if (!empty($request['loses'])) {
            $player->loses = $request['loses'];
        }

        if (!empty($request['equality'])) {
            $player->equality = $request['equality'];
        }
        $this->uploadPhoto();

        $player->save();

        return redirect()->route('players')->with(['success' => 'Участник успешно сохранен !']);

    }

    public function edit($id) {

        $player = Players::findorFail($id);

        return view('players.edit',['player' => $player]);

    }

    public function update(Request $request,$id) {

        $player = Players::findorFail($id);

        $this->validate($request,[
            'name' => 'required',
            'sex' => 'in:m,w',
            'birthday' => 'required',
            'weight' => 'required',
            'club_id' => 'required',
            'coach' => 'required'
        ]);

        $player->name = $request['name'];
        $player->sex = $request['sex'];
        $player->birthday = Carbon::createFromFormat('d/m/Y', $request['birthday'])->format('Y-m-d');
        $player->age = Carbon::createFromFormat('d/m/Y', $request['birthday'])->age;

        //dd(date('Y-m-d',strtotime($request['birthday'])));

        $player->weight = $request['weight'];
        $player->club_id = $request['club_id'];
        $player->coach_id = $request['coach_id'];

        if (!empty($request['wins'])) {
            $player->wins = $request['wins'];
        }

        if (!empty($request['loses'])) {
            $player->loses = $request['loses'];
        }

        if (!empty($request['equality'])) {
            $player->equality = $request['equality'];
        }

        $this->uploadPhoto();

        $player->save();

        return redirect()->route('players')->with(['success' => 'Сохранено!']);

    }

    public function delete() {
        //@todo
    }

    private function uploadPhoto() {

    }

}
