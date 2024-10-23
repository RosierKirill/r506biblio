<?php

namespace App\Http\Controllers;
use App\Models\ouvrages;
use Illuminate\Http\Request;

class ControleurOuvrages extends Controller
{
    public function index()
    {	$ouvrages = ouvrages::orderBy('auteur')->paginate(5);
        return view('ouvrages.index', compact('ouvrages'));
    }
    
    public function create()
    {	return view('ouvrages.create');
    }
    
    public function store(Request $request)
    {	$request->validate([
            'id'=> 'required',
            'titre' => 'required',
            'auteur' => 'required',
            'editeur' => 'required',
            'images' => 'required',
        ]);
        
        ouvrages::create($request->post());

        return redirect()->route('ouvrages.index')->with('success','Ouvrage crée.');
    }
    
    public function show(ouvrages $ouvrage)
    {	return view('ouvrages.show',compact('ouvrage'));
    }

    public function edit(ouvrages $ouvrage)
    {	return view('ouvrages.edit',compact('ouvrage'));
    }
    
    public function update(Request $request, ouvrages $ouvrage)
    {	$request->validate([
            'titre' => 'required',
            'auteur' => 'required',
            'editeur' => 'required',
            'images' => 'required',
            ]);
        
        $ouvrage->fill($request->post())->save();

        return redirect()->route('ouvrages.index')->with('success','Ouvrage sauvegardé');
    }
    
    public function destroy(ouvrages $ouvrage)
    {	$ouvrage->delete();
        return redirect()->route('ouvrages.index')->with('success','Ouvrage supprimé.');
    }
}
