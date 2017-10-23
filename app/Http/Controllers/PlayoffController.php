<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 12.10.17
 * Time: 22:28
 */

namespace App\Http\Controllers;

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

        return redirect()->route('competitions.manage',['id' => $competition->id])->with(['success' => 'Playoff created!']);

    }

    public function update(Request $request, $id, $pl) {
        $this->validate($request,[
            'rule' => 'required',
            'sex' => 'required|in:m,w'
        ]);

        $playOff = Competitions::findOrFail($id)->playoffs()->where('id', $pl)->first();

        $playOff->rule_id = $request['id'];
        $playOff->sex = $request['sex'];



    }

    public function delete($id, $pl) {

        $competition = Competitions::findorFail($id);

        $playOff = Playoff::findOrFail($pl);

        $playOff->forceDelete();

        return redirect()->route('competitions.manage',['id' => $competition->id])->with(['success' => 'Playoof deleted']);

    }

}