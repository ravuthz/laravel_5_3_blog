<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {
        $data['posts'] = Post::paginate(10);
        return view('admin.posts.index', $data);
    }

    public function create()
    {
        $data['post'] = new Post();
        return view('admin.posts.create', $data);
    }

    public function show($id)
    {
        $data['post'] = Post::findOrFail($id);
        return view('admin.posts.show', $data);
    }

    public function edit($id)
    {
        $data['post'] = Post::findOrFail($id);
        return view('admin.posts.edit', $data);
    }

    public function store(Request $request)
    {
        $this->check($request);
        Post::create($request->all());
        return redirect('admin/posts')->with('message', 'Post successfully created!');
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $this->check($request);
        $post->update($request->all());
        return redirect('admin/posts')->with('message', 'Post successfully updated!');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('admin/posts')->with('message', 'Post successfully deleted!');
    }

    private function check($request) {
        $this->validate($request, [
            'title' => 'required',
            'link' => 'required',
            'content' => 'required',
            'summary' => 'required',
            'seo_description' => 'required',
            'seo_keywords' => 'required'
        ]);
    }
}
