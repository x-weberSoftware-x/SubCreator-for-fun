<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sub;

class SubController extends Controller
{
    public function index(){
        
        // get all entries
        // $subs = Sub::all();

        //get all entries in a specific order
        // $subs = Sub::orderBy('name', 'desc')->get();

        // gets the entries that match the criteria
        // $subs = Sub::where('type', 'veggie')->get();

        //gets entries and orders them by date (recent first)
        $subs = Sub::latest()->get();
    
        return view('subs.index', [
            'subs' => $subs
        ]);
    }

    public function show($id){

        //grab the record with this id from dB show 404 page if fails
        $sub = Sub::findOrFail($id);

        return view('subs.show', ['sub' => $sub]);
    }

    public function create(){
        return view('subs.create');
    }

    public function store(){

        $sub = new Sub();

        $sub->name = request('name');
        $sub->size = request('size');
        $sub->bread = request('bread');
        $sub->type = request('type');
        $sub->cheese = request('cheese');
        $sub->vegetables = request('vegetables');
        $sub->sauce = request('sauce');

        $sub->save();

        return redirect('/')->with('mssg', 'Thank you for your order!');
    }

    public function destroy($id){
        $sub = Sub::findOrFail($id);
        $sub->delete();

        return redirect('/subs');
    }
}
