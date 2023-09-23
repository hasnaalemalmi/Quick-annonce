<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Annonce;
use App\Models\Categorie;
use App\Models\Ville;
use App\Models\User;

class AdsController extends Controller
{
    public function all_annonces()
    {
        $annonces = Annonce::with('categorie', 'ville', 'user')->where('etat', 1)->paginate(12);
        $categories = Categorie::all();
        $villes = Ville::all();
        $users = User::all();
    
        return view('user_components.all_annonces', compact('annonces', 'categories', 'villes', 'users'));
    }
    public function all_annonces_Immobilier()
    {
        $annonces = Annonce::with('categorie', 'ville', 'user')
            ->where('etat', 1)
            ->where('categorie_id', '1')
            ->paginate(12);
        $categories = Categorie::all();
        $villes = Ville::all();
        $users = User::all();
    
        return view('user_components.all_annonces_Immobilier', compact('annonces', 'categories', 'villes', 'users'));
    }

    public function all_annonces_Electronique()
    {
        $annonces = Annonce::with('categorie', 'ville', 'user')
            ->where('etat', 1)
            ->where('categorie_id', '2')
            ->paginate(12);
        $categories = Categorie::all();
        $villes = Ville::all();
        $users = User::all();
    
        return view('user_components.all_annonces_Electronique', compact('annonces', 'categories', 'villes', 'users'));
    }

    public function all_annonces_Voiture()
    {
        $annonces = Annonce::with('categorie', 'ville', 'user')
            ->where('etat', 1)
            ->where('categorie_id', '3')
            ->paginate(12);
        $categories = Categorie::all();
        $villes = Ville::all();
        $users = User::all();
    
        return view('user_components.all_annonces_Voiture', compact('annonces', 'categories', 'villes', 'users'));
    }
    
    public function all_annonces_Moto()
    {
        $annonces = Annonce::with('categorie', 'ville', 'user')
            ->where('etat', 1)
            ->where('categorie_id', '3')
            ->paginate(12);
        $categories = Categorie::all();
        $villes = Ville::all();
        $users = User::all();
    
        return view('user_components.all_annonces_Moto', compact('annonces', 'categories', 'villes', 'users'));
    }
    //add_annonce

    public function add_annonce()
    {
        $categories = Categorie::all();
        $users = User::all();
        $villes = Ville::all();
        return view('user_components.add_annonce', compact( 'categories', 'villes','users'));
    }
    public function show_annonce($id)
    {
        $annonces = Annonce::all();
        $users = User::all();
        $villes = Ville::all();
        return view('user_components.add_annonce', compact( 'categories', 'villes','users'));
    }
  
}
