<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $posts = Post::orderBy('id','DESC')->get();
        // $posts = Post::orderBy('id', 'DESC')->paginate(10);
        return view('admin.posts.index', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', [
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'categories' => 'required',
            'thumbnail' => 'required',
        ]);

        // $file = $request->file('thumbnail');
        // $tujuan_upload = 'data_file';
        // $file->move($tujuan_upload, time() . "_" . $file->getClientOriginalName());

        $posts = new Post;
        $posts->title = $request->title;
        $posts->slug = SlugService::createSlug(Post::class, 'slug', $posts->title);
        $posts->content = $request->content;
        $posts->author = auth()->id();

        if ($request->thumbnail) {
            $imageName = time() . '.' . $request->thumbnail->extension();
            $request->thumbnail->move(public_path('images'), $imageName);
            $posts->thumbnail = $imageName;
        }

        if ($request->status) {
            $posts->status = $request->status;
        } else {
            $posts->status = 'Pending';
        }

        $posts->save();

        // $category = Category::find([3, 4]);
        // $posts->categories()->attach($category);
        $posts->categories()->attach($request->categories);
        // $posts->categories()->deattach();

        return redirect()->route('admin.posts.index');

        if ($posts) {

            return redirect()->route('admin.posts.index')->with(['success' => 'Post berhasil ditambahkan!']);
        } else {

            return redirect()->route('admin.posts.index')->with(['error' => 'Post gagal ditambahkan!']);
        }
    }
}
