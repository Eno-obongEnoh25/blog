<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function viewCreatePage()
    {
        return view('create');
    }


    public function createpost(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' .
        $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);
        $slug = SlugService::createSlug(Posts::class, 'slug',
        $request->title);

        Posts::create([
            'slug' => $slug,
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'description' => $request->input('description'),
            'image_path' =>$newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('blog')->with('message', 'Your post has been added');
    }

    public function destroy($slug)
    {
         $posts = Posts::where('slug', $slug);
         $posts->delete();
         return back();
    }

}
