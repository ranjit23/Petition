  <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{

    public function index()
    {

      $posts = Post::all();
      return view('posts/index', compact('posts'));
    }





    public function create()
    {
      return view('posts/create');
    }

    public function store()
    {
      $post = new Post;

      $post-> petition_title = request('petition_title');
      $post-> petition_body = request('petition_body');

      $post->save();

      return redirect('/');

    }
}
