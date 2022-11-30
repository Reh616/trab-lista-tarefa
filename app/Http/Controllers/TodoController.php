<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
class TodoController extends Controller
{
    //index
    public function index(){
        $todos = Todo::orderBy('completed')->get();
        return view('todo.index')->with(['todos' => $todos]);

    }
    //criar
    public function create(){
        return view('todo.create');
    }
    //carregar
    public function upload(Request $request){
        $request->validate([
            'title' => 'required|max:255'
        ]);
        $todo = $request->title;
        Todo::create([
            'title' => $todo
        ]);
        return redirect()->back()->with('message', 'Tarefa criada!');
    }
    //editar
    public function edit($id){
        $todo = Todo::find($id);
        return view('todo.edit')->with(['id' => $id, 'todo' => $todo]);
    }

    //atualizar
    public function update(Request $request){
        $request->validate([
            'title' => 'required|max:255'
        ]);
        $updateTodo = Todo::find($request->id);
        $updateTodo->update(['title' => $request->title]);
        return redirect('/index')->with('message', "Tarefa editada!");
    }
    //completed
    public function completed($id){
        $todo = Todo::find($id);
        if ($todo->completed){
            $todo->update(['completed' => false]);
            return redirect()->back()->with('message', "Tarefa Não Concluida!");
        }else {
            $todo->update(['completed' => true]);
            return redirect()->back()->with('message', "Tarefa Concluida!");
        }
    }
    //apagar
    public function delete($id){
        $todo = Todo::find($id);
        $todo->delete();
        return redirect()->back()->with('message', "Tarefa Deletada!");
    }
}
