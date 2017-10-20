<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 15.10.17
 * Time: 09:55
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Competitions;
use Illuminate\Support\Facades\Auth;

class CompetitionController extends Controller {

    public function index() {
        return view('competitions.index',['competitions' => Auth::user()->competitions]);
    }

    public function create() {
        return view('competitions.create');
    }

    public function postCreate(Request $request) {

        $user = Auth::user();

        $this->validate($request,[
            'name' => 'required|min:6:max:100',
            'rules' => 'required'
        ]);

        $competition = $user->competitions()->create([
            'name' => $request['name'],
            'art_id' => 1,
        ]);

        if (!empty($request['rules'])) {
            foreach ($request['rules'] as $rule) {
                $competition->rules()->attach($rule);
            }
        }

        return redirect()->route('competitions');
    }

    public function edit($id) {
        $competition = Competitions::findOrFail($id);

        $savedRules = collect($competition->rules->toArray())->pluck('id')->toArray();

        return view('competitions.edit',['competition' => $competition,'savedRules' => $savedRules]);
    }

    public function update(Request $request, $id) {

        $this->validate($request,[
            'name' => 'required|min:6:max:100',
            'rules' => 'required'
        ]);

        $competition = Competitions::findOrFail($id);
        $competition->name = $request['name'];
        $competition->save();

        $competition->rules()->detach();

        if (!empty($request['rules'])) {
            foreach ($request['rules'] as $rule) {
                $competition->rules()->attach($rule);
            }
        }

        return redirect()->route('competitions')->with(['success' => 'Competition name saved!']);
    }

    public function manage($id) {


    }

}