<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as Validator;
use Illuminate\Support\Facades\Log as Log;
use App\Models\textos as textos_model;

class textos extends Controller
{
    public function index()
    {
        $texto = textos_model::select(['id', 'titulo', 'fecha', 'contenido', 'img'])->orderBy('created_at', 'desc')->get();
        $texto = json_decode($texto);

        return view('dashboard/text', ['texto' => $texto]);
    }

    public function get(){
        $texto = textos_model::select(['id', 'titulo', 'fecha', 'contenido', 'img'])->orderBy('created_at', 'desc')->get();
        $texto = json_decode($texto);

        return view('home/textos', ['texto' => $texto]);
    }

    public function store(Request $request)
    {
        try {
            $data = $request->all();

            $validator = Validator::make($request->all(), [
                'titulo' => 'required|string|max:255',
                'fecha' => 'required|date',
                'contenido' => 'required|string',
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            if ($request->hasFile('img')) { 
                $imageName = 'img-notes/' . time() . '.' . $data['titulo'] . '.' . $request->file('img')->extension();
                $request->file('img')->move(public_path('img-notes/'), $imageName);
            } else {
                $imageName = null;
            }

            $result = textos_model::create([
                'titulo' => $data['titulo'],
                'fecha' => date('Y-m-d', strtotime($data['fecha'])),
                'contenido' => $data['contenido'],
                'img' => $imageName,
            ]);

            if ($result == null) {
                return redirect()->back()->withErrors('Error al guardar el texto')->withInput();
            }
    
            return redirect()->route('text.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }

    public function show()
    {
        $textos = textos_model::select(['id', 'titulo', 'fecha', 'contenido', 'img'])->where('usado', 0)->get();

        if ($textos->count() == 0) {
            textos_model::where('usado', 1)->update(['usado' => 0]);
            return view('home/wonder_text', ['nota' => 1]);
        }

        $nota = $textos->random(1);
        $nota = json_decode($nota);

        textos_model::where('id', $nota[0]->id)->update(['usado' => 1]);

        return view('home/wonder_text', ['nota' => $nota]);
    }

    public function show_one($id)
    {
        $texto = textos_model::select(['id', 'titulo', 'fecha', 'contenido', 'img'])->where('id', $id)->get();

        if ($texto == null) {
            return view('home/textos');
        }

        return view('home/single_note', ['texto' => json_decode($texto)]);
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

        $validator = Validator::make($request->all(), [
            'titulo' => 'required|string|max:255',
            'fecha' => 'required|date',
            'contenido' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        if($request->hasFile('img')) {
            $path = json_decode($texto)->img;
            
            if ($path != null) {
                unlink(public_path($path));
            };

            $imageName = 'img-notes/' . time() . '.' . $request->titulo . '.' . $request->img->extension();
            $request->file('img')->move(public_path('img-notes'), $imageName);
        } else {
            $imageName = json_decode($texto)->img;
        }

        $texto->update([
            'titulo' => $request->titulo,
            'fecha' => date('Y-m-d', strtotime($request->fecha)),
            'contenido' => $request->contenido,
            'img' => $imageName,
        ]);
        return redirect()->route('text.index');
    }

    public function destroy($id)
    {
        $texto = textos_model::find($id);
        $path = json_decode($texto)->img;
        if ($path != null) {
            unlink(public_path($path));
        };
        $texto->delete();
        return redirect()->route('text.index');
    }

    public function get_galeria() {
        $galeria = textos_model::select(['id','img'])->where('img', '!=', null)->orderBy('created_at', 'desc')->get();

        $data = json_decode($galeria);

        return view('home/galeria', ['galeria' => $data]);
    }
}
