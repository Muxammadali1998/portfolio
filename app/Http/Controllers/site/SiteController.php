<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Message;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $categores=Category::all();
        $items=Portfolio::all();

        return view('site.index', compact('items', 'categores'));
    }
    public function send(Request $request){

        
        Message::create($request->all());
        return response('OK');
    }
}
