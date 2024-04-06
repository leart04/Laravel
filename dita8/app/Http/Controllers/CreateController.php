<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class CreateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::paginate(10);
        $open_todos = Todo::where('is_completed',0)->count();
        $completed_todos = Todo::where('is_completed',1)->count();

        return view('todos.index',[
            'x'=>$todos,
            'open_todos' => $open_todos,
            'completed_todos' => $completed_todos

            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'completed' => 'nullable|boolean',
        ]);

        // if(Todo::create($data))
        // {
        //     return redirect()->route('index')->with('status','Todo eshte krijuar me sukses');

        // }

        Todo::create([
            'title' => $request->input('title'),
            'is_completed' => $request->input('is_completed', false),
        ]);
 
        return redirect()->route('todos.index')->with('success', 'Todo created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        {
            $todo = Todo::find($id);
            return view('todos.show')->with('todo',$todo);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        {
            $todo = Todo::find($id);
            return view('todos.edit')->with('todo',$todo);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([

            'title' => 'required'
        ]);

        $todo = Todo::find($id);

        $data['title']=$request['title'];

        $data['is_completed'] = ($request['completed'] == 1) ? 1: 0;

        if($todo->update($data))
            return redirect()->route('todos.index')->with('status','Todo eshte ndryshuar me sukses');

        else
            return redirect()->back()->with('status', 'Diqka eshte gabim me ndryshimin e tool!');
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $todo = Todo::find($id);

        if($todo->delete())
            return redirect()->route('todos.index')->with('status','Todo esht fshire me sukses');

            else 
                return redirect()->back()->with('status','diqka esht gabim ne fshirje t Todo!');
    }
}
