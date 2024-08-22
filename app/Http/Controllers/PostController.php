<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $postsFromDB= Post::all();
        return view('blog',['posts'=>$postsFromDB ]);
    }
    public function show($postId){
        $singlepostdb=Post::find($postId);
        $user= User::find($postId)  ;
        return view('show',['post'=>$singlepostdb] ,['user'=>$user]);
    }
    public function create(){
        return view('create');

    }
    public function store(){
Post::create([
'title'=> request('title'),
'post_creator'=> request('post_creator'),
'description'=> request('description'),
    'user_id'=>1

]);
return redirect('/');
    }
    public function edit($id) {
        $post=Post::find($id);
        return view('edit',['post'=>$post]);
    }
    public function update(Post $post){
$post->update([
    'title'=> request('title'),
    'post_creator'=> request('post_creator'),
    'description'=> request('description'),
]);
        return redirect('/post/'.$post['id']);

    }
    public function destroy($id)
    {
        $post=post::find($id);
        $post->delete();
        return redirect('/');
}

    }
