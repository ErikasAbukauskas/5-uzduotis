<?php

namespace App\Http\Controllers;

use App\Task;

use App\Type;

use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $type = new Type;

        $types = Type::all();
        $record = $types->count();
        $title = $request->title;
        $collumnName = $request->collumnName;
        $sortby = $request->sortby;

        if(!$collumnName && !$sortby) {
            $collumnName = 'id';
            $sortby = 'asc';
        }

        if(!$title) {
            $types = Type::paginate(5);
        } else {
            $types = Type::orderBy($collumnName, $sortby)->where("title", $title)->paginate(3);
            ;
        }

        return view("type.index", ['collumnName' => $collumnName, 'sortby' => $sortby, "types" => $types, "record" => $record]);

        // $types = Type::sortable()->paginate(2);

        // return view("type.index", ["types" => $types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();
        return view("type.create", ["types" => $types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = new Type;

        $validateVar = $request->validate([
            'title' => ['required','regex:/^[a-zA-Z]+$/u'],
            'description' => ['required', 'max:1500'],

        ]);


        //DB stulpelio pavadinimas = input/select/textarea laukelio pavadinimas
        $type->title = $request->title;
        $type->description = $request->description;


        $type->save(); // insert komada i duomenu baze

        return redirect()->route("type.index"); // redirect tas pats kas header:location
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
        return view("type.show", ["type" => $type]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
        $types = Type::all()->sortBy("id",SORT_REGULAR, true);
        return view("type.edit", ["type"=>$type]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type $type)
    {
        $type->title = $request->title;
        $type->description = $request->description;


        $type->save(); // insert komada i duomenu baze

        return redirect()->route("type.index"); // redirect tas pats kas header:location
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
        $type->delete();
        return redirect()->route("type.index")->with('success_message','Istrinta sekmingai');
    }

    public function search(Request $request)
    {

        $search = $request->search;

        $types = Type::query()->where('title', 'LIKE', "%{$search}%")->orWhere('description', 'LIKE', "%{$search}%")->paginate(5);

        return view("type.search", ['types' => $types]);
    }
}
