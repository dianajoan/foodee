<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Image as IntervImage;
use File;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::latest()->paginate(20);
        $galleries  = Gallery::latest()->paginate(50);
        return view('system.images.index',compact(['images','galleries']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $images     = Image::latest()->paginate(20);
        $galleries  = Gallery::latest()->paginate(50);
        return view('system.images.create',compact(['images','galleries']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'image'     => 'required',
            'user_id'   => 'required',
        ]);
        
        $gallery_item = new Image();
        
        // if ($request->hasFile('image')) {
        if ($request->file('image')->isValid()) {
            $fileWithExtension = $request->file('image')->getClientOriginalName();
            $fileWithoutExtension = pathinfo($fileWithExtension, PATHINFO_FILENAME);

            $user_image = $request->file('image');
            $filename = $fileWithoutExtension . '_' .time() . '.' . $user_image->getClientOriginalExtension();

            IntervImage::make($user_image)->save( public_path('files/storage/images/' . $filename) );
            // $path = $request->file('image')->storeAs('public/gallery/', $filename);

            $gallery_item->image = $filename;

            $gallery_item->gallery_id = $request->gallery_id;
            $gallery_item->caption  = $request->caption;
            $gallery_item->title    = $request->title;
            $gallery_item->user_id = $request->user_id;
            $gallery_item->save();
        } else
        {
            return back('danger','Looks like no image was uploaded!');
        }

        return redirect()->route('images.index')->with('success','Image saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $image = Image::find($id);
        if (!$image) {
            return back()->with('danger','image not found. It\'s either missing or deleted.');
        }
        return view('system.images.show', compact(['image']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image = Image::find($id);
        if (!$image) {
            return back()->with('danger','image not found. It\'s either missing or deleted.');
        }
        $galleries  = Gallery::latest()->paginate(50);
        return view('system.images.edit', compact(['image','galleries']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'user_id'       => 'required',
        ]);
        
        $gallery_item = Image::find($id);
        
        // if ($request->hasFile('image')) {
        if ($request->file('image')->isValid()) {

            $pathToImage = public_path('files/profile/images/').$gallery_item->image;
            File::delete($pathToImage);

            $fileWithExtension = $request->file('image')->getClientOriginalName();
            $fileWithoutExtension = pathinfo($fileWithExtension, PATHINFO_FILENAME);

            $user_image = $request->file('image');
            $filename = $fileWithoutExtension . '_' .time() . '.' . $user_image->getClientOriginalExtension();

            IntervImage::make($user_image)->save( public_path('files/storage/images/' . $filename) );
            // $path = $request->file('image')->storeAs('public/gallery/', $filename);

            $gallery_item->image = $filename;
        }
        $gallery_item->gallery_id   = $request->gallery_id;
        $gallery_item->caption      = $request->caption;
        $gallery_item->title        = $request->title;
        $gallery_item->user_id      = $request->user_id;
        $gallery_item->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Image::find($id);
        // delete old image
        
        $pathToImage = public_path('files/storage/images/').$item->image;
        File::delete($pathToImage);

        $item->delete();
        return redirect()->route('images.index')->with('danger', 'Image deleted successfully');
    }
}

