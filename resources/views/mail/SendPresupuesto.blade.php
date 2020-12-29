<!DOCTYPE html>
    <html>
    <head>
    <title>Message</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
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
            <p>Hola,</p>
            <p>En primer lugar darte las gracias por ponerte en contacto con nosotros para el arreglo de tu equipación.</p>
            <p>Con la información que nos has facilitado estimamos que podemos llevar a cabo el arreglo y tendrá un coste de {{ $msg['presupuesto'] }} €</p>
            <p>El precio indicado es final e incluye el servicio de transporte RECOGIDA / ENTREGA donde tu nos digas.</p>
            <p>En el caso de que estuvieras interésado simplemente responde a este email y estaremos encantados de detallarte como haríamos el arreglo, como tramitaríamos la recogida del mismo y como podrías hacer el pago.</p>
            <p>Un saludo!</p>
            <hr>
            <p>{{ $msg['problema'] }}</p>
        </div>
    </body>
</html>
