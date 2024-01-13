<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function clients(){
        try{
            $response = Http::get('http://jsonplaceholder.typicode.com/users');    
            $clients = $response->json();
            return view('pages.clients', ['clients'=>$clients]);
        }catch(\Exception $e){
            report($e);
            return back()->with(['error', 'Something went wrong']);
        }
    }

    public function client($id){
        try{
            //getting user data
            $response = Http::get('http://jsonplaceholder.typicode.com/users/'.$id);    
            $client = $response->json();
    
            //fecthing posts data of this user
            $response = Http::get('http://jsonplaceholder.typicode.com/posts?userId='.$id);
            $posts = $response->json();
    
            //fecthing albums of this user
            $response = Http::get('http://jsonplaceholder.typicode.com/albums?userId='.$id);
            $albums = $response->json();
    
            return view('pages.client-details', [
                'client' => $client,
                'posts' => $posts,
                'albums' => $albums
            ]);
        }catch(\Exception $e){
            report($e);
            return back()->with(['error', 'Something went wrong']);
        }
    }
}
