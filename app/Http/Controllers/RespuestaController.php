<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pregunta;
use App\Models\Respuesta;
use App\Models\RespuestasResponsable;
use App\Models\Responsable;
use App\Models\CentroFormacion;

class RespuestaController extends Controller
{
    // Método para mostrar el formulario
    public function formulario()
    {
        // Trae todas las preguntas del cuestionario
        $preguntas = Pregunta::all();
        $centros = CentroFormacion::all();

        // Trae solo los responsables que sean instructores (para el select)
        $instructores = Responsable::where('tipoResponsable', 'instructor')->get();

        // Retorna la vista con las preguntas e instructores
        return view('formulario', compact('preguntas', 'instructores', 'centros'));
    }

    // Método para guardar las respuestas
    public function store(Request $request)
    {
        $preguntas = $request->input('preguntas');
        $idResponsable = $request->input('idResponsable');
        
        //obtener el instructor elegido en la pregunta 5
        $idPersonaEvaluada = $preguntas[5]['respuesta'] ?? null;
        $idCentroFormacion = $preguntas[4]['respuesta'] ?? null;


        foreach ($preguntas as $idPregunta => $preguntaData) {
            $respuesta = $preguntaData['respuesta'] ?? null;

            if (!$respuesta) {
                continue; // si no se respondió, saltar
            }

            // Buscar la pregunta
            $pregunta = Pregunta::find($idPregunta);
            if (!$pregunta) continue;

            // Guardar la respuesta
            $nuevaRespuesta = Respuesta::create([
                'idPregunta' => $idPregunta,
                'textoRespuesta' => is_array($respuesta)
                    ? implode(', ', $respuesta)
                    : $respuesta,
            ]);

            // Relacionar con responsable
            RespuestasResponsable::create([
                'idRespuesta' => $nuevaRespuesta->idRespuesta,
                'idResponsable' => $idResponsable,
                'idPersonaEvaluada' => $idPersonaEvaluada,
                'idCentroFormacion' => $idCentroFormacion
            ]);
        }

        return redirect()->back()->with('success', 'Respuestas guardadas correctamente');
    }
}
