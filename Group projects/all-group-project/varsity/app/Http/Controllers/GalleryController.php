<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Image;

class GalleryController extends Controller
{
    public function index(){
        return view('admin.gallery.add-gallery');
    }
    public function manageGallery(){
        $galleries = Gallery::all();
        return view('admin.gallery.manage-gallery', ['galleries'=>$galleries]);
    }
    public function saveGallery(Request $request){
        $this->Validate($request, [
            'gallery_title'=>'required',
            'gallery_image'=>'required'
        ]);

        $galleryImage = $request->file('gallery_image');
        $imageName = $galleryImage->getClientOriginalName();
        $directory = 'gallery-images/';
        $imageURL = $directory.$imageName;
        Image::make($galleryImage)->save($imageURL);

        $gallery = new Gallery();
        $gallery->gallery_title = $request->gallery_title;
        $gallery->gallery_image = $imageURL;
        $gallery->publication_status = $request->publication_status;
        $gallery->save();
        return redirect('/gallery/add-gallery')->with('message', 'Gallery info saved successfully');
    }
    public function unpublishedGallery($id){
        $gallery = Gallery::find($id);
        $gallery->publication_status=0;
        $gallery->save();
        return redirect('/gallery/manage-gallery')->with('message', 'Gallery info unpublished');
    }
    public function publishedGallery($id){
        $gallery = Gallery::find($id);
        $gallery->publication_status=1;
        $gallery->save();
        return redirect('/gallery/manage-gallery')->with('message', 'Gallery info published');
    }
    public function deleteGallery($id){
        $gallery = Gallery::find($id);
        $gallery->delete();
        return redirect('/gallery/manage-gallery')->with('message', 'Gallery info deleted');
    }
    public function editGallery($id){
        $gallery = Gallery::find($id);
        return view('admin.gallery.edit-gallery', ['gallery'=>$gallery]);
    }
    public function updateGallery(Request $request){
        if($request->gallery_image){
            $gallery = Gallery::find($request->gallery_id);
            unlink($gallery->gallery_image);

            $galleryImage = $request->file('gallery_image');
            $imageName = $galleryImage->getClientOriginalName();
            $directory = 'gallery-images/';
            $imageURL = $directory.$imageName;
            Image::make($galleryImage)->save($imageURL);

            $gallery->gallery_title = $request->gallery_title;
            $gallery->gallery_image = $imageURL;
            $gallery->publication_status = $request->publication_status;
            $gallery->save();
            return redirect('/gallery/manage-gallery')->with('message', 'Gallery info updated');
        }else{
            $gallery = Gallery::find($request->gallery_id);
            $gallery->gallery_title = $request->gallery_title;
            $gallery->publication_status = $request->publication_status;
            $gallery->save();
            return redirect('/gallery/manage-gallery')->with('message', 'Gallery info updated');
        }
    }
}
