<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PessoaController extends Controller
{
    public function index()
    {
        $pessoa = Pessoa::get();
        return view('pessoas.list', compact('pessoa'));
    }

    public function new()
    {
        return view('pessoas.form');
    }

    public function add(Request $request) {
        $pessoa = new Pessoa();
        $pessoa = $pessoa->create($request->all());

        return Redirect::to('/pessoa');
    }

    public function edit( $id) {
        $pessoa = Pessoa::findOrFail($id);
        return view('pessoas.form', compact('pessoa'));
    }

    public function update($id, Request $request){
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->update($request->all());

        return Redirect::to('/pessoa');
    }

    public function delete($id){
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->delete();
        return Redirect::to('/pessoa');
    }
}
