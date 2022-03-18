<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(){
        return view('home',[
            "title" => "Todo App",
            "todoApp" => Post::all()
        ]);
    }

    public function create()
    {
        return view('create',[
            "title" => "Todo App"
        ]);
    }

    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'task'     => 'required',
            'status'   => 'required'
        ]);
        
        Post::create([
            'task'     => $request->task,
            'status'   => $request->status
        ]);

        return redirect()
                ->route('post.index')
                ->with([
                    'success' => 'Succesfully inserted'
                ]);
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit', compact('post'));
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        if ($post) {
            return redirect()
                ->route('post.index')
                ->with([
                    'success' => 'Post has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('post.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
