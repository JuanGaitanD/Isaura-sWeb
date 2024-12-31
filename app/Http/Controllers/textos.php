<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as Validator;
use App\Models\textos as textos_model;

class textos extends Controller
{
    public function index()
    {
        $texto = textos_model::all();
        $texto = json_decode($texto);

        return view('dashboard/text', ['texto' => $texto]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'titulo' => 'required|string|max:255',
            'fecha' => 'required|date',
            'contenido' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        textos_model::create([
            'titulo' => $data['titulo'],
            'fecha' => date('Y-m-d', strtotime($data['fecha'])),
            'contenido' => $data['contenido'],
        ]);

        return redirect()->route('text.index');
    }

    public function show()
    {
        $textos = textos_model::where('usado', 0)->get();

        if ($textos->count() == 0) {
            textos_model::where('usado', 1)->update(['usado' => 0]);
            return view('home/textos', ['nota' => 1]);
        }

        $nota = $textos->random(1);
        $nota = json_decode($nota);

        textos_model::where('id', $nota[0]->id)->update(['usado' => 1]);

        return view('home/textos', ['nota' => $nota]);
    }

    public function edit($id)
    {
        $texto = textos_model::find($id);
        $texto = json_decode($texto);
        return view('dashboard/text_edit', ['texto' => $texto]);
    }

    public function update(Request $request, $id)
    {
        $texto = textos_model::find($id);
        $texto->update($request->all());
        return redirect()->route('text.index');
    }

    public function destroy($id)
    {
        $texto = textos_model::find($id);
        $texto->delete();
        return redirect()->route('text.index');
    }
}
