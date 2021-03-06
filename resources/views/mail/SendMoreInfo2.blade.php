<!DOCTYPE html>
<html>
 <head>
  <title>Message</title>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <!-- Styles -->
  <style>
      html, body {
          background-color: #fff;
          color: #636b6f;
          font-family: 'Nunito', sans-serif;
          font-weight: 200;
          height: 100vh;
          margin: 0;
      }
      .content { text-align: center; }
      .title { font-size: 84px; }
  </style>
 </head>
 <body>

  <div class="container box" style="overflow-x:scroll">
    <p>
    Hola,
    </p>
    <p>
    En primer lugar darte las gracias por ponerte en contacto con nosotros para el arreglo de tu equipación.
    </p>
    <p>
    Para poder darte un presupuesto correcto necesitamos algo más información.
    </p>
    <p>
    Al ser un problema de DAÑOS lo que necesitaríamos son fotos de las zonas dañadas para poder darte un presupuesto exacto.
    </p>
    <p>
    Puedes responder a este email adjuntándolas.
    </p>
    <p>
    Un saludo!
    </p>
    <hr>
    <p>
    {{ $msg['problema'] }}
    </p>
  </div>
 </body>
</html>
