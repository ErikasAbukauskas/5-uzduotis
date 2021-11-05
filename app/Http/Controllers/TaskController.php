<?php

namespace App\Http\Controllers;

use App\Task;

use App\Type;

use Illuminate\Http\Request;

class TaskController extends Controller
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

        $tasks = Task::sortable()->paginate(5);

        return view("task.index", ["tasks" => $tasks, "types" => $types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $types = Type::all();
        return view("task.create", ["types" => $types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Task;


        //DB stulpelio pavadinimas = input/select/textarea laukelio pavadinimas
        $task->title = $request->title;
        $task->description = $request->description;
        $task->start_date = $request->start_date;
        $task->end_date = $request->end_date;
        $task->logo = $request->logo;
        $task->type_id = $request->type; // selecto pavadinimas

        if($request->has('logo')){
            $imageName = time().'.'.$request->logo->extension();
            $task->logo= '/images/'.$imageName; // atvaizdavimui prirasome '/images/.
            //paveiksliukas isikele i duomenu baze

            // 2. turiu kazkur ikelti/patalpinti paveiksliuka

            $request->logo->move(public_path('images'), $imageName);
            // irasome teksta koki inputui daveme pavadinima - name="student_imageurl"
            // perkles dokumenta kuris yra is formos i images aplanka
            // bus perkeltas i public aplanka kur yra images
        } else {
            $task->logo= '/images/placeholder.png';
        //     // pirma reikia isikelti paveiksliuka i images folderi su pavadinimu placeholder.png (gali buti kitas pavadinimas)
        }

        $task->save(); // insert komada i duomenu baze

        return redirect()->route("task.index"); // redirect tas pats kas header:location
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return view("task.show", ["task" => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        $types = Type::all();
        return view("task.edit", ["task" => $task, "types"=>$types]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //DB stulpelio pavadinimas = input/select/textarea laukelio pavadinimas
        $task->title = $request->title;
        $task->description = $request->description;
        $task->start_date = $request->start_date;
        $task->end_date = $request->end_date;
        $task->logo = $request->logo;
        $task->type_id = $request->type; // selecto pavadinimas

        if($request->has('logo')){
            $imageName = time().'.'.$request->logo->extension();
            $task->logo= '/images/'.$imageName; // atvaizdavimui prirasome '/images/.
            //paveiksliukas isikele i duomenu baze

            // 2. turiu kazkur ikelti/patalpinti paveiksliuka

            $request->logo->move(public_path('images'), $imageName);
            // irasome teksta koki inputui daveme pavadinima - name="student_imageurl"
            // perkles dokumenta kuris yra is formos i images aplanka
            // bus perkeltas i public aplanka kur yra images
        } else {
            $task->logo= '/images/placeholder.png';
        //     // pirma reikia isikelti paveiksliuka i images folderi su pavadinimu placeholder.png (gali buti kitas pavadinimas)
        }

        $task->save(); // insert komada i duomenu baze

        return redirect()->route("task.index"); // redirect tas pats kas header:location
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route("task.index")->with('success_message','Istrinta sekmingai');
    }

    public function filter(Request $request)
    {
        $tasks = Task::paginate(5);

        $filtras = $request->get('type_id');

        $tasks = Task::where($filtras)->get();
        return view("task.filter", ['tasks'=>$tasks]);

    }



}
