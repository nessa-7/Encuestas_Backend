<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Encuesta Aprendices</title>

  <style>
    body {
      background: #f3f6fa;
      margin: 0;
      display: flex;
      justify-content: center;
      padding: 40px;
      font-family: "Segoe UI", sans-serif;
    }

    .form-container {
      background: #ffffff;
      border-radius: 18px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
      width: 100%;
      max-width: 740px;
      overflow: hidden;
      animation: fadeIn 0.5s ease;
    }

    .header {
      background: linear-gradient(135deg, #678bee, #78dddd, #74b9ff);
      background-size: 200% 200%;
      animation: gradientMove 5s ease infinite;
      color: white;
      padding: 20px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 2px solid rgba(255,255,255,0.2);
    }

    .header h1 {
      margin: 0;
      font-weight: 600;
      letter-spacing: 0.3px;
    }

    .header img {
      width: 55px;
      height: 55px;
      object-fit: cover;
    }

    form {
      padding: 36px;
      display: flex;
      flex-direction: column;
      gap: 26px;
    }

    .question {
      background: #f8faff;
      padding: 22px 25px;
      border-radius: 14px;
      border: 1px solid #e2e7f1;
      transition: box-shadow 0.2s ease;
    }

    .question:hover {
      box-shadow: 0 2px 10px rgba(91, 124, 255, 0.08);
    }

    label {
      font-weight: 700;
      color: #1f2d55;
      display: block;
      margin-bottom: 18px;
      font-size: 1.05rem;
    }

    .options label {
      font-weight: 500;
      color: #3a3a3a;
      display: flex;
      align-items: center;
      gap: 8px;
      cursor: pointer;
      padding: 4px 0;
      transition: color 0.2s ease;
      margin-bottom: 10px;
    }

    .options label:hover {
      color: #5b7cff;
    }

    textarea,
    input[type="text"] {
      width: 95%;
      padding: 12px 14px;
      border-radius: 10px;
      border: 1px solid #cfd8e6;
      margin-top: 10px;
      font-size: 0.95rem;
      background: #fff;
      color: #333;
      transition: all 0.25s ease;
    }

    textarea:focus,
    input[type="text"]:focus {
      border-color: #5b7cff;
      outline: none;
      box-shadow: 0 0 6px rgba(91, 124, 255, 0.25);
    }

    input[type="radio"],
    input[type="checkbox"] {
      appearance: none;
      width: 18px;
      height: 18px;
      border: 2px solid #8da4f1;
      border-radius: 50%;
      position: relative;
      cursor: pointer;
      transition: all 0.2s ease;
    }

    input[type="checkbox"] {
      border-radius: 5px;
    }

    input[type="radio"]:checked::before,
    input[type="checkbox"]:checked::before {
      content: "";
      position: absolute;
      top: 50%;
      left: 50%;
      width: 10px;
      height: 10px;
      background: #5b7cff;
      transform: translate(-50%, -50%);
      border-radius: inherit;
      transition: background 0.2s ease;
    }

    input[type="radio"]:hover,
    input[type="checkbox"]:hover {
      border-color: #355acb;
    }

    button {
      background: linear-gradient(135deg, #678bee, #78dddd, #74b9ff);
      background-size: 200% 200%;
      animation: gradientMove 5s ease infinite;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 10px;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    button:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(59, 99, 209, 0.3);
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes gradientMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .alert-success {
        background: #e8f8f0;
        color: #2b7a4b;
        border: 1px solid #bde5c8;
        padding: 14px 18px;
        border-radius: 10px;
        margin: 0 36px 20px 36px;
        font-weight: 600;
        text-align: center;
        animation: fadeIn 0.5s ease, fadeOut 0.5s ease 4s forwards;
        }

        /* Desaparece */
        @keyframes fadeOut {
        to {
            opacity: 0;
            transform: translateY(-10px);
            visibility: hidden;
            margin: 0 0px 0px 0px;
            padding: 0px;
            font-weight: 0;
        }
        }

        select {
          width: 100%;
          padding: 8px;
          border-radius: 8px;
          border: 1px solid #ccc;
          background-color: #fff;
          font-size: 15px;
        }


        .descripcion-form {
          background: linear-gradient(135deg, #ffffffff, #ffffff);
          border-radius: 16px;
          padding: 1.8rem 2rem;
          max-width: 850px;
          text-align: center;
          box-shadow: 0 6px 14px rgba(63, 130, 184, 0.17);
          transition: transform 0.3s ease, box-shadow 0.3s ease;
          border-top: none;
          margin-bottom: 20px;
        }

        .descripcion-form h2 {
          color: #000000ff;
          margin-top: 0.1rem;
          margin-bottom: 0.5rem;
          font-weight: 600;
        }

        .descripcion-form p {
          color: #5b5c5fff;
          font-size: 1rem;
          line-height: 1.6;
          text-align: justify;
        }


        /* ===========================
          📱 Diseño Responsive
        =========================== */
        @media (max-width: 768px) {
          body {
            padding: 20px;
          }

          .form-container {
            box-shadow: none;
            border-radius: 0;
            max-width: 100%;
          }

          .header {
            flex-direction: column;
            align-items: center;
            text-align: center;
            gap: 10px;
          }

          .header img {
            width: 50px;
            height: 50px;
          }

          .descripcion-form {
            padding: 1.5rem;
            margin-bottom: 15px;
            box-shadow: none;
          }

          .descripcion-form p {
            font-size: 0.95rem;
            line-height: 1.5;
          }

          form {
            padding: 20px;
            gap: 20px;
          }

          .question {
            padding: 16px;
          }

          label {
            font-size: 1rem;
          }

          textarea,
          input[type="text"] {
            width: 100%;
            font-size: 0.9rem;
          }

          .options label {
            font-size: 0.9rem;
          }

          button {
            font-size: 0.95rem;
            padding: 10px;
          }

          .alert-success {
            margin: 0 20px 20px 20px;
            font-size: 0.9rem;
          }
        }

        @media (max-width: 480px) {
          .header h1 {
            font-size: 1.3rem;
          }

          .descripcion-form h2 {
            font-size: 1.1rem;
          }

          textarea,
          input[type="text"],
          select {
            font-size: 0.85rem;
          }

          .options label {
            gap: 6px;
          }
        }

  </style>
</head>

<body>
    
  <div class="form-container">
    <div class="header">
      <h1>Encuesta Aprendices</h1>
      <img src="{{ asset('logosena.png') }}" alt="Logo">
    </div>

    <section class="descripcion-form">
      <h2>Procedimiento de ejecución de la formación profesional integral</h2>
      <p>
        Cordial saludo estimado(a) aprendiz. <br>
        Con el propósito de mejorar continuamente la calidad de nuestra formación, el Centro de Teleinformática y Producción Industrial lo invita a responder la siguiente encuesta de opinión con respecto a los instructores que orientan su proceso de formación.
        La información suministrada por usted será protegida bajo la Ley 1581 de 2012 y los principios rectores para el tratamiento de datos personales - RGPD <br>
        Cuando envíe este formulario, no recopilará automáticamente sus detalles, como el nombre y la dirección de correo electrónico, a menos que lo proporcione usted mismo.

      </p>
    </section>

    @if(session('success'))
        <div class="alert-success">
            {{ session('success')}}
        </div>
        @endif

    <form method="POST" action="{{ route('respuestas.store') }}">
      @csrf

      @foreach($preguntas as $pregunta)
        <div class="question">
          <label>{{ $pregunta->textoPregunta }}</label>

          @if($pregunta->idPregunta == 1)
            <textarea name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" rows="3" placeholder="Escriba su respuesta" required></textarea>

          @elseif($pregunta->idPregunta == 2)
          <div class="options">
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Tecnólogo" required> Tecnólogo</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Técnico" required> Técnico</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Operario" required> Operario</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Auxiliar" required> Auxiliar</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Otro" required> Otro</label>
          </div> 

          @elseif($pregunta->idPregunta == 3)
            <select id="centro" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" required>
              <option value="" disabled selected>Seleccione un centro de formación</option>
              @foreach($centros as $centro)
                  <option value="{{ $centro->idCentroFormacion }}">{{ $centro->nombre }}</option>
              @endforeach
            </select>

          @elseif($pregunta->idPregunta == 4)
            <select id="programa" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" required disabled>
              <option value="" disabled selected>Seleccione un programa</option>
            </select>

          @elseif($pregunta->idPregunta == 5)
            <select id="instructor" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" required disabled>
              <option value="" disabled selected>Seleccione un instructor</option>
            </select>

          @elseif($pregunta->idPregunta == 6)
          <div class="options">
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Sí" required> Sí</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="No" required> No</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="No aplica" required> No aplica</label>
          </div>

          @elseif($pregunta->idPregunta == 7)
          <div class="options">
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Sí" required> Sí</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="No" required> No</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="No aplica" required> No aplica</label>
          </div>

          @elseif($pregunta->idPregunta == 8)
          <div class="options">
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Sí" required> Sí</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="No" required> No</label>
          </div>
          
          @elseif($pregunta->idPregunta == 9)
          <div class="options">
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi siempre" required> Casi siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Algunas veces" required> Algunas veces</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi nunca" required> Casi nunca</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Nunca" required> Nunca</label>
          </div> 

          @elseif($pregunta->idPregunta == 10)
          <div class="options">
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi siempre" required> Casi siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Algunas veces" required> Algunas veces</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi nunca" required> Casi nunca</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Nunca" required> Nunca</label>
          </div> 

          @elseif($pregunta->idPregunta == 11)
          <div class="options">
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi siempre" required> Casi siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Algunas veces" required> Algunas veces</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi nunca" required> Casi nunca</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Nunca" required> Nunca</label>
          </div> 

          @elseif($pregunta->idPregunta == 12)
          <div class="options">
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi siempre" required> Casi siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Algunas veces" required> Algunas veces</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi nunca" required> Casi nunca</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Nunca" required> Nunca</label>
          </div> 

          @elseif($pregunta->idPregunta == 13)
          <div class="options">
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi siempre" required> Casi siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Algunas veces" required> Algunas veces</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi nunca" required> Casi nunca</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Nunca" required> Nunca</label>
          </div> 

          @elseif($pregunta->idPregunta == 14)
          <div class="options">
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi siempre" required> Casi siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Algunas veces" required> Algunas veces</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi nunca" required> Casi nunca</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Nunca" required> Nunca</label>
          </div> 

          @elseif($pregunta->idPregunta == 15)
          <div class="options">
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi siempre" required> Casi siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Algunas veces" required> Algunas veces</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi nunca" required> Casi nunca</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Nunca" required> Nunca</label>
          </div> 

          @elseif($pregunta->idPregunta == 16)
          <div class="options">
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi siempre" required> Casi siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Algunas veces" required> Algunas veces</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi nunca" required> Casi nunca</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Nunca" required> Nunca</label>
          </div> 

          @elseif($pregunta->idPregunta == 17)
          <div class="options">
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi siempre" required> Casi siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Algunas veces" required> Algunas veces</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi nunca" required> Casi nunca</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Nunca" required> Nunca</label>
          </div> 

          @elseif($pregunta->idPregunta == 18)
          <div class="options">
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi siempre" required> Casi siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Algunas veces" required> Algunas veces</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi nunca" required> Casi nunca</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Nunca" required> Nunca</label>
          </div> 

          @elseif($pregunta->idPregunta == 19)
          <div class="options">
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi siempre" required> Casi siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Algunas veces" required> Algunas veces</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi nunca" required> Casi nunca</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Nunca" required> Nunca</label>
          </div> 

          @elseif($pregunta->idPregunta == 20)
          <div class="options">
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi siempre" required> Casi siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Algunas veces" required> Algunas veces</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi nunca" required> Casi nunca</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Nunca" required> Nunca</label>
          </div> 

          @elseif($pregunta->idPregunta == 21)
          <div class="options">
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi siempre" required> Casi siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Algunas veces" required> Algunas veces</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi nunca" required> Casi nunca</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Nunca" required> Nunca</label>
          </div> 

          @elseif($pregunta->idPregunta == 22)
          <div class="options">
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi siempre" required> Casi siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Algunas veces" required> Algunas veces</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi nunca" required> Casi nunca</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Nunca" required> Nunca</label>
          </div> 

          @elseif($pregunta->idPregunta == 23)
          <div class="options">
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi siempre" required> Casi siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Algunas veces" required> Algunas veces</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi nunca" required> Casi nunca</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Nunca" required> Nunca</label>
          </div> 

          @elseif($pregunta->idPregunta == 24)
          <div class="options">
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi siempre" required> Casi siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Algunas veces" required> Algunas veces</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi nunca" required> Casi nunca</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Nunca" required> Nunca</label>
          </div> 

          @elseif($pregunta->idPregunta == 25)
          <div class="options">
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi siempre" required> Casi siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Algunas veces" required> Algunas veces</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi nunca" required> Casi nunca</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Nunca" required> Nunca</label>
          </div> 

          @elseif($pregunta->idPregunta == 26)
          <div class="options">
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi siempre" required> Casi siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Algunas veces" required> Algunas veces</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi nunca" required> Casi nunca</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Nunca" required> Nunca</label>
          </div> 

          @elseif($pregunta->idPregunta == 27)
          <div class="options">
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi siempre" required> Casi siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Algunas veces" required> Algunas veces</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi nunca" required> Casi nunca</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Nunca" required> Nunca</label>
          </div> 

          @elseif($pregunta->idPregunta == 28)
          <div class="options">
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi siempre" required> Casi siempre</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Algunas veces" required> Algunas veces</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Casi nunca" required> Casi nunca</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Nunca" required> Nunca</label>
          </div> 

          @elseif($pregunta->idPregunta == 29)
          <div class="options">
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="Sí" required> Sí</label>
            <label><input type="radio" name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" value="No" required> No</label>
          </div>
          
          @elseif($pregunta->idPregunta == 30)
            <textarea name="preguntas[{{ $pregunta->idPregunta }}][respuesta]" rows="3" placeholder="Escriba su respuesta"></textarea>

          @endif

        </div>
      @endforeach

      <button type="submit">Enviar respuestas</button>

      
    </form>
  </div>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const centroSelect = document.getElementById('centro');
    const programaSelect = document.getElementById('programa');
    const instructorSelect = document.getElementById('instructor');

    if (!centroSelect || !programaSelect || !instructorSelect) return;

    // Cuando cambia el centro
    centroSelect.addEventListener('change', function() {
        const idCentro = this.value;

        programaSelect.innerHTML = '<option value="">Cargando programas...</option>';
        instructorSelect.innerHTML = '<option value="">Seleccione un programa primero</option>';
        programaSelect.disabled = true;
        instructorSelect.disabled = true;

        if (idCentro) {
            fetch(`/programas/${idCentro}`)
                .then(res => res.json())
                .then(data => {
                    programaSelect.disabled = false;
                    programaSelect.innerHTML = '<option value="">Seleccione un programa</option>';
                    data.forEach(p => {
                        programaSelect.innerHTML += `<option value="${p.idPrograma}">${p.nombrePrograma}</option>`;
                    });
                });
        }
    });

    // Cuando cambia el programa
    programaSelect.addEventListener('change', function() {
        const idPrograma = this.value;

        instructorSelect.innerHTML = '<option value="">Cargando instructores...</option>';
        instructorSelect.disabled = true;

        if (idPrograma) {
            fetch(`/instructores/${idPrograma}`)
                .then(res => res.json())
                .then(data => {
                    instructorSelect.disabled = false;
                    instructorSelect.innerHTML = '<option value="">Seleccione un instructor</option>';
                    data.forEach(r => {
                        instructorSelect.innerHTML += `<option value="${r.idResponsable}">${r.nombre}</option>`;
                    });
                });
        }
    });
});
</script>



</body>
</html>
