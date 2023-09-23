<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Annonce;
use App\Models\Categorie;
use App\Models\Ville;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function store(Request  $request)
    {
        $request->validate([
            'titre' => 'required',
            'prix' => 'required',
            'telephone' => 'required',
            'description' => 'required',
            'ville_id' => 'required',
            'categorie_id' => 'required',
            'user_id' => 'required',
           
        ]);
        $annonces = new Annonce;
        $annonces->titre = $request->input('titre');
        $annonces->prix = $request->input('prix');
        $annonces->telephone = $request->input('telephone');
        $annonces->description = $request->input('description');
        $annonces->ville_id = $request->input('ville_id');
        $annonces->categorie_id = $request->input('categorie_id');
        $annonces->user_id = $request->input('user_id');
        if ($request->hasFile('photo_1')) {
            $photo_1 = $request->file('photo_1');
            $photo_1path = 'photo_1'.time() . '_' . $photo_1->getClientOriginalName();
            $photo_1->move(public_path('photo'), $photo_1path);
            $annonces->photo_1 = $photo_1path;
        }    
        if ($request->hasFile('photo_2')) {
            $photo_2 = $request->file('photo_2');
            $photo_2path = 'photo_2'.time() . '_' . $photo_2->getClientOriginalName();
            $photo_2->move(public_path('photo'), $photo_2path);
            $annonces->photo_2 = $photo_2path; 
        }            
        if ($request->hasFile('photo_3')) {
            $photo_3 = $request->file('photo_3');
            $photo_3path = 'photo_3'.time() . '_' . $photo_3->getClientOriginalName();
            $photo_3->move(public_path('photo'), $photo_3path);
            $annonces->photo_3 = $photo_3path; 
        }    
        if ($request->hasFile('photo_4')) {
            $photo_4 = $request->file('photo_4');
            $photo_4path = 'photo_4'.time() . '_' . $photo_4->getClientOriginalName();
            $photo_4->move(public_path('photo'), $photo_4path);
            $annonces->photo_4 = $photo_4path;  
            
        }         
        if ($request->hasFile('photo_5')) {
            $photo_5 = $request->file('photo_5');
            $photo_5path = 'photo_5'.time() . '_' . $photo_5->getClientOriginalName();
            $photo_5->move(public_path('photo'), $photo_5path);
            $annonces->photo_5 = $photo_5path;        
        }            

        
        $annonces->save();
        return redirect()->route('publisher_components.annonce');


    }
}
