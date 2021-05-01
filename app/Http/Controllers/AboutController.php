<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $about = About::all();
        return view('backoffice.about.indexAbout',compact('about'));
    }
    public function create(){
        return view('backoffice.about.createAbout');
    }

    public function store(Request $request){
        request()->validate([
            "nom"=>["required"],
            "prenom"=>["required"],
            "titre"=>["required"],
            "description"=>["required"],
            "birthday"=>["required", "date"],
            "website"=>["required"],
            "phone"=>["required", "numeric"],
            "city"=>["required"],
            "age"=>["required", "integer"],
            "degree"=>["required"],
            "email"=>["required", "email"],
            "statut"=>["required"],
        ]);

        //DB
        $about = new About();
        $about->nom = $request->nom;
        $about->prenom = $request->prenom;
        $about->titre = $request->titre;
        $about->description = $request->description;
        $about->birthday = $request->birthday;
        $about->website = $request->website;
        $about->phone = $request->phone;
        $about->city = $request->city;
        $about->age = $request->age;
        $about->degree = $request->degree;
        $about->email = $request->email;
        $about->statut = $request->statut;
        $about->save();
        return redirect()->route('about.index');
    }

    //CRUD
    public function destroy(About $id){
        $id->delete();
        return redirect()->route('about.index');
    }

    public function edit(About $id){
        $about = $id;
        return view ('backoffice.about.editAbout', compact('about'));
    }

    public function update(About $id, Request $request){
        request()->validate([
            "nom"=>["required"],
            "prenom"=>["required"],
            "titre"=>["required"],
            "description"=>["required"],
            "birthday"=>["required", "date"],
            "website"=>["required"],
            "phone"=>["required", "numeric"],
            "city"=>["required"],
            "age"=>["required", "integer"],
            "degree"=>["required"],
            "email"=>["required", "email"],
            "statut"=>["required"],
        ]);
        
        $about = $id;
        $about->nom = $request->nom;
        $about->prenom = $request->prenom;
        $about->titre = $request->titre;
        $about->description = $request->description;
        $about->birthday = $request->birthday;
        $about->website = $request->website;
        $about->phone = $request->phone;
        $about->city = $request->city;
        $about->age = $request->age;
        $about->degree = $request->degree;
        $about->email = $request->email;
        $about->statut = $request->statut;
        $about->save();
        return redirect()->route('about.index');
    }

    public function show(About $id){
        $about = $id;
        return view('backoffice.about.showAbout',compact('about'));
    }
}
