<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Image;

class GalleryController extends Controller
{
    public function addGallery(){
        return view('admin.gallery.add-gallery');
    }

    public function manageGallery(){
        $gallery = Gallery::all();
        return view('admin.gallery.manage-gallery',['galleries'=>$gallery]);
    }

    public function saveGallery(Request $request){
        $this->Validate($request, [
            'gallery_description'=>'required|regex:/^[\pL\s\-]+$/u|min:2|max:25',
            'gallery_image' =>'required|image',
            'publication_status'=>'required'
        ]);


        $galleryImage = $request->file('gallery_image');
        $imageName = $galleryImage->getClientOriginalName();
        $directory= 'gallery-images/';
        $imageURL= $directory.$imageName;
        Image::make($galleryImage)->save($imageURL);


        $gallery = new Gallery();
        $gallery->gallery_description = $request->gallery_description;
        $gallery->gallery_image = $imageURL;
        $gallery->publication_status = $request->publication_status;
        $gallery->save();

        return redirect('/add-gallery')->with('message', 'Gallery Info Saved Successfully');
    }

    public function unpublishedGallery($id){
        $gallery = Gallery::find($id);
        $gallery->publication_status=0;
        $gallery->save();
        return redirect('/manage-gallery')->with('message', 'Gallery info unpublished');
    }

    public function publishedGallery($id){
        $gallery = Gallery::find($id);
        $gallery->publication_status=1;
        $gallery->save();
        return redirect('/manage-gallery')->with('message', 'Gallery info published');
    }

    public function deleteGallery($id){
        $gallery = Gallery::find($id);
        $gallery->delete();
        return redirect('/manage-gallery')->with('message', 'Gallery info Deleted');
    }

    public function editGallery($id){
        $gallery = Gallery::find($id);
        return view('admin.gallery.edit-gallery', ['gallery'=>$gallery]);

    }

    public function updateGallery(Request $request){

        if($request->gallery_image){
            $gallery =Gallery::find($request->gallery_id);
            unlink($gallery->gallery_image);

            $galleryImage = $request->file('gallery_image');
            $imageName = $galleryImage->getClientOriginalName();
            $directory= 'gallery-images/';
            $imageURL= $directory.$imageName;
            Image::make($galleryImage)->save($imageURL);

            $gallery->gallery_description = $request->gallery_description;
            $gallery->gallery_image = $imageURL;
            $gallery->publication_status = $request->publication_status;
            $gallery->save();
            return redirect('/manage-gallery')->with('message', 'Gallery info updated');

        }else{
            $gallery = Gallery::find($request->gallery_id);
            $gallery->gallery_description = $request->gallery_description;
            $gallery->publication_status = $request->publication_status;
            $gallery->save();
            return redirect('/manage-gallery')->with('message', 'Gallery info updated');
        }
    }
}
