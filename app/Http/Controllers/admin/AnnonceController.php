<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Annonce;
use App\Models\Categorie;
use App\Models\Ville;
use App\Models\User;

class AnnonceController extends Controller
{
    public function Annonce_validation()
    {
        $annonces = Annonce::with('categorie', 'ville', 'user')->where('etat', 0)->paginate(5);


        $categories = Categorie::all();
        $villes = Ville::all();
        $users = User::all();
        
        return view('admin_components.annonce', compact('annonces', 'categories', 'villes','users'));
    }
    public function Valider($id)
    {
        $ads = Annonce::find($id);
    
        if ($ads->etat === 0) {
            $ads->etat = 1;
        } else {
            $ads->etat = 0;
        }
    
        $ads->save();
        return redirect()->back();
    }


    public function Non_Valider($id)
    {
        $ads = Annonce::find($id);
    
        if ($ads->etat === 0) {
            $ads->etat = 2;
        } else {
            $ads->etat = 0;
        }
    
        $ads->save();
        return redirect()->back();
    }

    public function Annonce_suppresion()
    {
        $annonces = Annonce::with('categorie', 'ville', 'user')->where('etat', 0)->paginate(5);


        $categories = Categorie::all();
        $villes = Ville::all();
        $users = User::all();
        
        return view('admin_components.delete_annonce', compact('annonces', 'categories', 'villes','users'));
    }
    public function delete_annonce($id)
    {
        $annonce = Annonce::findOrFail($id);
        if ($annonce->photo_1) {
            $photo_1path = public_path('photo/' . $annonce->photo_1);
            if (file_exists($photo_1path)) {
                unlink($photo_1path);
            }
        }

        if ($annonce->photo_2) {
            $photo_2path = public_path('photo/' . $annonce->photo_2);
            if (file_exists($photo_2path)) {
                unlink($photo_2path);
            }
        }

        if ($annonce->photo_3) {
            $photo_3path = public_path('photo/' . $annonce->photo_3);
            if (file_exists($photo_3path)) {
                unlink($photo_3path);
            }
        }

        if ($annonce->photo_4) {
            $photo_4path = public_path('photo/' . $annonce->photo_4);
            if (file_exists($photo_4path)) {
                unlink($photo_4path);
            }
        }


        if ($annonce->photo_5) {
            $photo_5path = public_path('photo/' . $annonce->photo_5);
            if (file_exists($photo_5path)) {
                unlink($photo_5path);
            }
        }
        $annonce->delete();
        
        return back();
    }
    
}
