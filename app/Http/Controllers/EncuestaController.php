<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use App\Models\Person;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EncuestaController extends Controller
{

    public function index()
    {
        return view('encuesta.index');
    }


    public function create()
    {
        return view('encuesta.create');
    }

    public function store(Request $request)
    {

        $solicitudArray = $request->input('solicitud');
        $solicitud = implode(' - ', $solicitudArray);
        $actividadArray = $request->input('actividad');
        $actividad = implode(' - ', $actividadArray);

        $fecha = $request->input('fecha');

        DB::table('encuestas')->insert([
            'seguimiento' => $request->input('seguimiento'),
            'anonimo' => $request->input('anonimo'),
            'person_nrodoc' => $request->input('person_nrodoc'),
            'nombres' => $request->input('nombres'),
            'apellido_paterno' => $request->input('apellido_paterno'),
            'apellido_materno' => $request->input('apellido_materno'),
            'contacto' => $request->input('contacto'),
            'localidad' => $request->input('localidad'),
            'fecha' => $fecha,
            'genero' => $request->input('genero'),
            'edad' => $request->input('edad'),
            'grupo' => $request->input('grupo'),
            'comentario' => $request->input('comentario'),
            'actividad' => $actividad,
            'solicitud' => $solicitud,

        ]);

        return view('encuesta.index');
    }

    public function person_nrodoc($person_nrodoc)
    {
        $person = DB::table('person')->where('person_nrodoc', $person_nrodoc)->first();
    
        if ($person) {
            return view('encuesta.createnrodoc', compact('person'));
        } else {
            return redirect()->route('ruta.donde.mostrar.mensaje.error');
        }
    }

    public function show(Encuesta $encuesta)
    {
        //
    }


    public function edit(Encuesta $encuesta)
    {
        //
    }

    public function update(Request $request, Encuesta $encuesta)
    {
        //
    }


    public function destroy(Encuesta $encuesta)
    {
        //
    }

    function person_nrdoc(Request $request)
    {

        if ($request->has('query')) {
            $query = $request->input('query');
            $data = DB::table('person')
                ->where('person_nrodoc', '=', $query)
                ->get();

            if ($data->count() > 0) {
                $output = '<ul class="dropdown-menu" style="display:block; position:relative;width:100%;">';
                foreach ($data as $row) {
                    $output .= '<li data-person=\'' . json_encode($row) . '\'><a class="dropdown-item hover:font-semibold">' . '<span class="font-semibold">' . $row->person_name . '</span></a></li>';
                }
                $output .= '</ul>';
                echo $output;
            } else {
                return 'No hay resultados';
            }
        }
    }
}
