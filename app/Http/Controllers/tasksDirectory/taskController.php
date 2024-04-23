<?php

namespace App\Http\Controllers\tasksDirectory;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Illuminate\Events\queueable;

class taskController extends Controller
{

    public function taskPage()
    {
        $categories = Category::query()->get();

        return view("defineTheTasksDirectory.defineTheTask",compact("categories"));

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("todoListPageDirectory.todoList");

    }

    public function todoList()
    {
        $data = Task::orderBy('id')->get();
        $tasks = [];

        foreach ($data as $datum){
            if($datum->user_id == Auth::user()->id){
                $tasks[] = $datum;
            }
        }

        return view("todoListPageDirectory.todoList", compact("tasks"));
    }


//    public function todoList()
//    {
//
//
//        $data = Task::orderBy('id')->get();
//        $tasks = [];
//
//        foreach ($data as $datum){
//
//
//            if($datum->user_id == Auth::user()->id){
//
//                 $tasks[] = $datum;
//
//
//
//                   return view("todoListPageDirectory.todoList",compact("data"));
//
//            }
//
//        }
//
//    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
//    public function store(Request $request)
//    {
//
//        $data  = new Task();
//
//        $data->user_id = Auth::user()->id;
//        $data->title = $request->title;
//        $data->content = $request->contentt;
//        $data->status = $request->status;
//        $data->deadline = $request->deadline;
//        $data->cat_id = $request->value;
//
//        $data->save();
//
//        return view("todoListPageDirectory.todoList");
//
//    }
    public function store(Request $request)
    {
        $request->validate([
            "content"=>"required|min:12|max:200",
        ]);

        // Kullanıcı oturum açmışsa
        if(Auth::check()) {
            $data  = new Task();

            $data->user_id = Auth::user()->id; // Auth::user()->id olarak değiştirildi
            $data->title = $request->title;
            $data->content = $request->contentt;
            $data->status = $request->status;
            $data->deadline = $request->deadline;
            $data->cat_id =$request->select;

            $data->save();

            return redirect()->route("task.todoList");

        } else {
            // Kullanıcı oturum açmamışsa, isteği reddedin veya giriş sayfasına yönlendirin
            return redirect()->route('task.todoList'); // Örnek olarak giriş sayfasına yönlendirme
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Task::query()->find($id);

        if(isset($data)){

            $data->delete();

        }
        return redirect()->route("task.todoList");
//        return view("todoListPageDirectory.todoList");

    }
}
