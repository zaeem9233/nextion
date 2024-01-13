<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AlbumController extends Controller
{
    public function album($albumId){
        try{
            //getting album data
            $response = Http::get('http://jsonplaceholder.typicode.com/photos?albumId='.$albumId);    
            $photos = $response->json();
    
            return view('pages.album', [
                'photos' => $photos
            ]);
        }catch(\Exception $e){
            report($e);
            return back()->with(['error', 'Something went wrong']);
        }
    }

    public function photo($photoId){
        try{
            //getting photo data
            $response = Http::get('http://jsonplaceholder.typicode.com/photos?id='.$photoId);    
            $photo = $response->json();
            // dd($photo);
            return view('pages.photo', [
                'photo' => $photo
            ]);
        }catch(\Exception $e){
            report($e);
            return back()->with(['error', 'Something went wrong']);
        }
    }
}
