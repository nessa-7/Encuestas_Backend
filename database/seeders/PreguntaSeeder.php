<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pregunta;

class PreguntaSeeder extends Seeder
{
    public function run(): void
    {
        $preguntas = [
            [
                'idCuestionario' => 1,
                'textoPregunta' => 'Digite el número de ficha de su programa de formación',
                'tipoPregunta' => 'abierta',
            ],
            [
                'idCuestionario' => 1,
                'textoPregunta' => 'Nivel del programa de formación',
                'tipoPregunta' => 'unica_respuesta',
            ],
            [
                'idCuestionario' => 1,
                'textoPregunta' => 'Seleccione el centro de formación al que pertenece',
                'tipoPregunta' => 'unica_respuesta',
            ],
            [
                'idCuestionario' => 1,
                'textoPregunta' => 'Seleccione el programa de formación al que pertenece',
                'tipoPregunta' => 'unica_respuesta',
            ],
            [
                'idCuestionario' => 1,
                'textoPregunta' => 'Seleccione el nombre del instructor sobre el cual quiere dar una opinión',
                'tipoPregunta' => 'unica_respuesta',
            ],
            [
                'idCuestionario' => 1,
                'textoPregunta' => 'El instructor explicó claramente los aspectos institucionales y de la formación profesional integral en el proceso de Inducción',
                'tipoPregunta' => 'unica_respuesta',
            ],
            [
                'idCuestionario' => 1,
                'textoPregunta' => 'El instructor explicó claramente, en el proceso de Inducción, las alternativas de etapa productiva existentes para su desarrollo',
                'tipoPregunta' => 'unica_respuesta',
            ],
            [
                'idCuestionario' => 1,
                'textoPregunta' => 'El ambiente de formación presenta condiciones adecuadas en tamaño, confort, servicios, mobiliario y equipos necesarios para el desarrollo del programa de formación',
                'tipoPregunta' => 'unica_respuesta',
            ],
            [
                'idCuestionario' => 1,
                'textoPregunta' => 'El instructor permite el diálogo abierto con los aprendices',
                'tipoPregunta' => 'unica_respuesta',
            ],
            [
                'idCuestionario' => 1,
                'textoPregunta' => 'El instructor utiliza un lenguaje respetuoso en el diálogo',
                'tipoPregunta' => 'unica_respuesta',
            ],
            [
                'idCuestionario' => 1,
                'textoPregunta' => 'El instructor promueve espacios diferentes al ambiente de formación para aclarar dudas',
                'tipoPregunta' => 'unica_respuesta',
            ],
            [
                'idCuestionario' => 1,
                'textoPregunta' => 'El instructor promueve el desarrollo de los valores institucionales (honestidad, respeto, compromiso, diligencia, justicia, solidaridad y lealtad)',
                'tipoPregunta' => 'unica_respuesta',
            ],
            [
                'idCuestionario' => 1,
                'textoPregunta' => 'El instructor mantiene una presentación personal decorosa o conforme a su labor',
                'tipoPregunta' => 'unica_respuesta',
            ],
            [
                'idCuestionario' => 1,
                'textoPregunta' => 'El instructor inicia la formación a la hora señalada (7:00 am, 1:00 pm, 7:00 pm)',
                'tipoPregunta' => 'unica_respuesta',
            ],
            [
                'idCuestionario' => 1,
                'textoPregunta' => 'El instructor termina la formación a la hora señalada (1:00 pm, 7:00 pm, 10:00 pm)',
                'tipoPregunta' => 'unica_respuesta',
            ],
            [
                'idCuestionario' => 1,
                'textoPregunta' => 'El instructor permanece en el ambiente de formación durante toda la sesión de clase programada',
                'tipoPregunta' => 'unica_respuesta',
            ],
            [
                'idCuestionario' => 1,
                'textoPregunta' => 'Con qué frecuencia el instructor orienta la formación virtual',
                'tipoPregunta' => 'unica_respuesta',
            ],
            [
                'idCuestionario' => 1,
                'textoPregunta' => 'El instructor demuestra dominio teórico y prácico de las temáticas que orienta',
                'tipoPregunta' => 'unica_respuesta',
            ],
            [
                'idCuestionario' => 1,
                'textoPregunta' => 'El instructor resuelve las dudas de los aprendices de forma clara y oportuna',
                'tipoPregunta' => 'unica_respuesta',
            ],
            [
                'idCuestionario' => 1,
                'textoPregunta' => 'El instructor demuestra experiencia práctica en el desarrollo de las actividades de aprendizaje',
                'tipoPregunta' => 'unica_respuesta',
            ],
            [
                'idCuestionario' => 1,
                'textoPregunta' => 'El instructor utiliza los elementos de protección personal y seguridad industrial requeridos en el taller o ambiente de formación',
                'tipoPregunta' => 'unica_respuesta',
            ],
            [
                'idCuestionario' => 1,
                'textoPregunta' => 'Las explicaciones de las actividades de aprendizaje son orientadas con claridad',
                'tipoPregunta' => 'unica_respuesta',
            ],
            [
                'idCuestionario' => 1,
                'textoPregunta' => 'El instructor orienta la formación con recursos didácticos que facilitan el aprendizaje',
                'tipoPregunta' => 'unica_respuesta',
            ],
            [
                'idCuestionario' => 1,
                'textoPregunta' => 'El instructor promueve la participación activa del aprendiz durante la formación. (exposiciones, mesa redonda, prácticas, etc.)',
                'tipoPregunta' => 'unica_respuesta',
            ],
            [
                'idCuestionario' => 1,
                'textoPregunta' => 'El instructor combina diferentes estrategias didácticas de enseñanza-aprendizaje como talleres, exposiciones, trabajo en equipo, laboratorios, etc.',
                'tipoPregunta' => 'unica_respuesta',
            ],
            [
                'idCuestionario' => 1,
                'textoPregunta' => 'El instructor socializa con los aprendices la guía de aprendizaje que desarrollarán durante la formación',
                'tipoPregunta' => 'unica_respuesta',
            ],
            [
                'idCuestionario' => 1,
                'textoPregunta' => '¿Usted como aprendiz encuentra que las actividades solicitadas en la guía de aprendizaje son fáciles de comprender? (Qué hacer, cómo hacerlo, materiales a usar, tiempos de entrega, etc.)',
                'tipoPregunta' => 'unica_respuesta',
            ],
            [
                'idCuestionario' => 1,
                'textoPregunta' => 'El instructor entrega oportunamente los materiales de formación',
                'tipoPregunta' => 'unica_respuesta',
            ],
            [
                'idCuestionario' => 1,
                'textoPregunta' => 'En la guía de aprendizaje encuentra actividades que lo motiven a usar la biblioteca física o virtual del SENA',
                'tipoPregunta' => 'unica_respuesta',
            ],
            [
                'idCuestionario' => 1,
                'textoPregunta' => 'Si lo desea, puede dar una opinión del instructor (recuerde que estas opiniones son anónimas) ',
                'tipoPregunta' => 'abierta',
            ]
        ];

        foreach ($preguntas as $pregunta) {
            Pregunta::create($pregunta);
        }
    }
}
