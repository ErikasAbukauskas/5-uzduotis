<?php

namespace App\Http\Controllers;

use App\Owner;

use App\Task;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owners = Owner::all();
        $tasks = Task::all();

        $record = $owners->count();

        return view('owner.index', ['owners' => $owners, 'tasks' => $tasks, 'record' => $record]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('owner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $owner = new Owner;

        $validateVar = $request->validate([
            'name' => ['required','min:2','max:15', 'regex:/^[a-zA-Z]+$/u'],
            'surname' => ['required','min:2','max:15', 'regex:/^[a-zA-Z]+$/u'],
            'email' => ['required', 'email:rfc,dns'],
            'phone' => ['required', 'regex:(86|\+3706)\d{3}\d{4}'],

        ]);

        //DB stulpelio pavadinimas = input/select/textarea laukelio pavadinimas
        $owner->name = $request->name;
        $owner->surname = $request->surname;
        $owner->email = $request->email;
        $owner->phone = $request->phone;


        $owner->save();

        return redirect()->route("owner.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function show(Owner $owner)
    {
        $tasks = $owner->taskOwner;

        return view("owner.show", ['owner'=>$owner, 'tasks'=>$tasks]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function edit(Owner $owner)
    {
        return view('owner.edit', ['owner' =>$owner]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Owner $owner)
    {
        $owner->name = $request->name;
        $owner->surname = $request->surname;
        $owner->email = $request->email;
        $owner->phone = $request->phone;

        $owner->save();

        return redirect()->route("owner.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner)
    {
       $owner->delete();

        return redirect()->route('owner.index');
    }
}
