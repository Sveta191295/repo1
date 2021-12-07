<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageUploadController extends Controller
{
    
    public function createForm(){
        return view('image-upload');
      }
    
      public function imageUpload(Request $req)
      {
          $req->validate([
              'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
          ]);
      
          $imageModel = new Image;

          if($req->file()) {
            $imageName = time().'_'.$req->image->getClientOriginalName();
              $image = $req->file('image')->storeAs('images', $imageName, 'public');
  
              $imageModel->name = time().'_'.$req->image->getClientOriginalName();
              $imageModel->image = '/storage/' . $image;
              $imageModel->save();


          return back()
              ->with('success','You have successfully upload image.')
              ->with('image',$imageName); 




      }
    }

    public function fileName(){
      echo asset('C:\xampp\htdocs\blog\storage\app/public');
   }

}