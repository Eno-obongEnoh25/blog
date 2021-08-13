<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class UpdateController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function updateView($slug)
    {

        return view('update')->with('post', Posts::where('slug', $slug)->first());
    }

    public function update(Request $request, $slug)
    {
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',

        ]);

            Posts::where('slug', $slug)->update([
            'slug' => $slug,
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'description' => $request->input('description'),
            'user_id' => auth()->user()->id

        ]);

        return redirect()->route('blog', $slug);
    }
}
