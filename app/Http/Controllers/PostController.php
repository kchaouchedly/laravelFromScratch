<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
class PostController extends Controller
{
    //
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search' , 'category','author']))
                ->paginate(6)->withQuerystring()



        ]);
    }

        public function show(Post $post)
        {

            return view('posts.show', [
                'post' => $post
            ]);


        }




          /*  $posts = Post::latest();
            if (request('search')) {
                $posts->where('title', 'like', '%' . request('search') . '%')
                    ->orWHere('body', 'like', '%' . request('search') . '%');


            }

  return $posts->get();*/


}
