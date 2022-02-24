<?php

namespace App\Http\Controllers;


use App\Models\People;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->authorizeResource(People::class, 'person');
    }
    public function index()
    {

        $people = People::paginate(1);

        // $people = People::orderBy('name')->get();
        // $people = People::where('name','Donald')->get();

        return view('people.index', ['people' => $people]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('people.create', ['people' => 5]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $people = new People();

        $people->name = $request->name;
        $people->country = $request->country;
        $people->age = $request->age;
        $people->languages = $request->languages;

        $people->save();

        return  redirect()->route('people.index')->with('status', 'Profile created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $person = People::findOrFail($id);
        $subjects = $person->subject;

        foreach ($subjects as $s) {
            var_dump($s->subject_name);
        }

        $roles = $person->roles;
        foreach ($roles as $r) {
            var_dump($r->role_name);
        }


        // $asd = Role::find(2);
        // print_r($asd->role_name . " - " . $asd->people);

        // var_dump($person->subject->subject_name);
        return view('people.show', ['person' => $person]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $people = People::findOrFail($id);

        return view('people.edit')->with('people', $people);
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

        // $people = People::where('id', $id)->update([
        //     'name' => $request->name,
        //     'country' => $request->country,
        //     'age' => $request->age
        // ]);

        $people = People::findOrFail($id);
        $people->name = $request->name;
        $people->country = $request->country;
        $people->age = $request->age;
        $people->languages = $request->languages;

        $people->save();

        return  redirect()->route('people.index')->with('status', 'Profile updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person = People::findOrFail($id);
        $person->delete();

        return  redirect()->route('people.index')->with('status', 'Profile deleted!');
    }
}
