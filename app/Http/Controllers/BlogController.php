<?php

namespace App\Http\Controllers;

use App\blog;
use Illuminate\Http\Request;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = blog::all();
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogs = blog::all();
        return view('admin.blogs.create', compact('blogs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $message = [
            'name.required' => 'Name is required.',
            'title.required' => 'Tilte is required.',
            'slug.required' => 'Slug is required.',
            'image.required' => 'Image is required.',
            'tag.required' => 'Tag is required.',
            'short_description.required' => 'Short Description is required.',
            'description.required' => 'Description is required.',
        
        ];

        $validatedData = $request->validate([
            'name' => 'required',
            'title' => 'required',
            'slug' => 'required',
            'image' => 'required',
            'tag' => 'required',
            'short_description' => 'required',
            'description' => 'required',
    
        ],$message);

        $data = $request->all();

            if($request->hasFile('image')) {
                $img = $request->file('image');
                $extension = $img->getClientOriginalExtension();
                $fileName = 'blog'.date('his').rand().".".$extension;
                $img->move(public_path('images/upload_image'), $fileName);
                $data['image'] = $fileName;
            }

            $blog = blog::create($data);

            return redirect()->route('blogs.index')->with('success', 'Blog created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = blog::find($id);
        return view('admin.blogs.edit', compact('blog'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = blog::find($id);
        $data = $request->all();
        if($request->hasFile('image')) {
            $img = $request->file('image');
            $extension = $img->getClientOriginalExtension();
            $fileName = 'blog'.date('his').rand().".".$extension;
            $img->move(public_path('images/upload_image'), $fileName);
            $data['image'] = $fileName;
        }

        $blog->update($data);
        return redirect()->route('blogs.index')->with('success', 'Blog updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $blog = blog::find($id);
        $blog->is_active = 0;
        $blog->update();
        return redirect()->route('blogs.index')->with('success', 'Blog Inactive Successfully');
    }
}
