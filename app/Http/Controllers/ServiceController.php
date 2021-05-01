<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('backoffice.service.indexService',compact('services'));
    }

    public function create()
    {
        return view('backoffice.service.createService');
    }

    public function store(Request $request)
    {
        request()->validate([
            "titre" => ["required"],
            "description" => ["required"],
            "icon" => ["required"],
        ]);

        //DB
        $service = new Service();
        $service->titre = $request->titre;
        $service->description = $request->description;
        $service->icon = $request->icon;
        $service->save();
        return redirect()->route('service.index')->with('success', 'nouveau service ajouté');
    }

    public function destroy(Service $id)
    {
        $id->delete();
        return redirect()->route('service.index')->with('warning', 'un élément supprimé');
    }
    public function edit(Service $id)
    {
        $service = $id;
        return view('backoffice.service.editService', compact('service'));
    }

    public function update(Service $id, Request $request)
    {
        request()->validate([
            "titre" => ["required"],
            "description" => ["required"],
            "icon" => ["required"],
        ]);

        $service = $id;
        $service->titre = $request->titre;
        $service->description = $request->description;
        $service->icon = $request->icon;
        $service->save();
        return redirect()->route('service.index')->with('success', 'service mis à jour');
    }

    public function show(Service $id)
    {
        $service = $id;
        return view('backoffice.service.showService', compact('service'));
    }
}
