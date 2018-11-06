<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 12.10.17
 * Time: 22:28
 */

namespace App\Http\Controllers;

use App\Categories;
use App\Participants;
use App\Players;
use App\Playoff;
use Illuminate\Http\Request;
use App\Competitions;
use Illuminate\Validation\Rule;

class PlayoffController extends Controller {

    public function create($id) {
        $competition = Competitions::findOrFail($id);
        return view('playoff.create',['competition' => $competition]);
    }

    public function edit($id, $pl) {
        $playOff = Competitions::findOrFail($id)->playoffs()->where('id', $pl)->first();
        return view('playoff.edit',['playOff' => $playOff]);
    }

    public function postCreate(Request $request, $id) {

        $this->validate($request,[
           'rule' => 'required',
            'sex' => 'required|in:m,w'
        ]);

        //dd($request['rule']);

        $competition = Competitions::findOrFail($id);

        $competition->playoffs()->create([
           'rule_id' => $request['rule'],
            'sex' => $request['sex']
        ]);

        return redirect()->route('competitions.manage',['id' => $competition->id])->with(['success' => 'Раздел создан!']);

    }

    public function update(Request $request, $id, $pl) {
        $this->validate($request,[
            'rule' => 'required',
            'sex' => 'required|in:m,w'
        ]);

        $playOff = Competitions::findOrFail($id)->playoffs()->where('id', $pl)->first();

        $playOff->rule_id = $request['rule'];
        $playOff->sex = $request['sex'];
        $playOff->save();

        return redirect()->route('competitions.manage',['id' => $playOff->competition->id])->with(['success' => 'Раздел сохранен!']);



    }

    public function delete($id, $pl) {

        $competition = Competitions::findorFail($id);

        $playOff = Playoff::findOrFail($pl);

        $playOff->forceDelete();

        return redirect()->route('competitions.manage',['id' => $competition->id])->with(['success' => 'Playoof deleted']);

    }

    public function getKg(Request $request) {

        $kg = [];
        if (!empty($request['age']) && !empty($request['sex'])) {

            switch ($request['age']) {
                case '13-14':
                    $kg = Categories::where('age_from','>=',13)
                        ->where('age_to','<=',14)
                        ->where('age_to','<>',0)
                        ->where('sex',$request['sex'])
                        ->get()->all();
                    break;
                case '15-16':
                    $kg = Categories::where('age_from','>=',15)
                        ->where('age_to','<=',16)
                        ->where('age_to','<>',0)
                        ->where('sex',$request['sex'])
                        ->get()->all();
                    break;
                case '17-18':
                    $kg = Categories::where('age_from','>=',17)
                        ->where('age_to','<=',18)
                        ->where('age_to','<>',0)
                        ->where('sex',$request['sex'])
                        ->get()->all();
                    break;
                case '18-50':
                    $kg = Categories::where('age_from','>=',18)
                        ->where('sex',$request['sex'])
                        ->get()->all();
                    break;
            }



        }

        return view('playoff.kg',['kg' => $kg]);

    }

    public function getPlayers(Request $request) {

        $kgFrom = $request['kg_from'];
        $kgTo = $request['kg_to'];

        $ageInterval = $request['age'];
        $age = explode('-', $ageInterval);
        $sex = $request['sex'];

        $players = Players::where('sex', $sex)
            ->where('weight','>=', $kgFrom)
            ->where('weight','<=', $kgTo)
            ->where('age','>=',$age[0])
            ->where('age','<=',$age[1])
            ->get()->all();

        //dd($players);

        return view('playoff.players',['players' => $players]);


    }

    public function saveList(Request $request) {

        $playOff = Playoff::findOrFail($request['playoff_id']);

        $age = explode('-',$request['age']);

        $playOff->age_from = $age[0];
        $playOff->age_to = $age[1];
        $playOff->kg_from = $request['kg_from'];
        $playOff->kg_to = $request['kg_to'];

        $playOff->save();

        if (!empty($request['playersIDs'])) {
            $i = 0;
            Participants::where('playoff_id',$playOff->id)->delete();
            foreach ($request['playersIDs'] as $playerId) {
                $participants = new Participants();
                $participants->playoff_id = $playOff->id;
                $participants->player_id = $playerId;
                $participants->order = $i;
                $participants->save();
                $i++;
            }
        }

        return 1;

    }

    public function view($id) {
        $playOff = Playoff::findOrFail($id);

        return view('playoff.view', ['playOff' => $playOff]);
    }

}
