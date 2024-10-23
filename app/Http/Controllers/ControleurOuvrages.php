<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControleurOuvrages extends Controller
{
    public function index()
    {	$ouvrages = ouvrages::orderBy('nom','desc')->paginate(5);
        return view('ouvrages.index', compact('ouvrages'));
    }
    
    public function create()
    {	return view('ouvrages.create');
    }
    
    public function store(Request $request)
    {	$request->validate([
            'titre' => 'required',
            'auteur' => 'required',
            'editeur' => 'required',
            'images' => 'required',
        ]);
        
        ouvrages::create($request->post());

        return redirect()->route('ouvrages.index')->with('success','Compte usager crée.');
    }
    
    public function show(ouvrages $ouvrage)
    {	return view('ouvrages.show',compact('usager'));
    }

    public function edit(ouvrages $ouvrage)
    {	return view('ouvrages.edit',compact('usager'));
    }
    
    public function update(Request $request, ouvrages $ouvrage)
    {	$request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'identifiant' => 'required',
            'passe' => 'required',
            'blocage' => 'required',
        ]);
        
        $ouvrage->fill($request->post())->save();

        return redirect()->route('ouvrages.index')->with('success','Compte usager sauvegardé');
    }
    
    public function destroy(ouvrages $ouvrage)
    {	$ouvrage->delete();
        return redirect()->route('ouvrages.index')->with('success','Compte usager supprimé.');
    }
}
