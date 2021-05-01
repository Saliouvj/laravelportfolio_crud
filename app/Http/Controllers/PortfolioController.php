<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $portfolios = Portfolio::all();
        return view('backoffice.portfolio.indexPortfolio',compact('portfolios'));
    }

    public function create(){
        return view('backoffice.portfolio.createPortfolio');
    }

    public function store(Request $request){
        request()->validate([
            "filter"=>["required"],
            "lien"=>["required"],
            "titre"=>["required"],
        ]);

        //DB
        $portfolio = new Portfolio();
        $portfolio->filter = $request->filter;
        $portfolio->lien = $request->lien;
        $portfolio->titre = $request->titre;
        $portfolio->save();
        return redirect()->route('portfolio.index')->with('success', 'un projet ajouté');
    }

    //CRUD
    public function destroy(Portfolio $id){
        $id->delete();
        return redirect()->route('portfolio.index')->with('warning', "un élément a été supprimé");
    }

    public function edit(Portfolio $id){
        $portfolio = $id;
        return view ('backoffice.portfolio.editPortfolio', compact('portfolio'));
    }

    public function update(Portfolio $id, Request $request){
        request()->validate([
            "filter"=>["required"],
            "lien"=>["required"],
            "titre"=>["required"],
        ]);
        $portfolio = $id;
        $portfolio->filter = $request->filter;
        $portfolio->lien = $request->lien;
        $portfolio->titre = $request->titre;
        $portfolio->save();
        return redirect()->route('portfolio.index')->with('success', 'mise à jour');
    }

    public function show(Portfolio $id){
        $portfolio = $id;
        return view('backoffice.portfolio.showPortfolio',compact('portfolio'));
    }

}
