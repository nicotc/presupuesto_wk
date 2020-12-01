<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @livewireStyles





        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-dropdown')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">

                        <div class="p-10">
            <table>
                <tr>
                    <td>
                        <table class="min-w-full divide-y" >
                            <tr>
                                <td class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Nombre
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    {{$row[0]['nombre']}}
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Email
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    {{$row[0]['email']}}
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Telefono
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    {{$row[0]['telefono']}}
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Problema
                                </td>
                                <td class="px-6 py-4 ">
                                    {{$row[0]['problema']}}
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Imagenes
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    @php
                                    $urls_img = explode( ",", $row[0]['imagenes']);
                                   foreach ($urls_img as $img) {
                                       if(strlen($img)>0){

                                      echo "<a href='".$img."' target='_blank'> <img src=".$img." width='60'></a>";

                                       }

                                   }
                                   //  dump($urls_img);


                               @endphp

                                    {{-- {{$row[0]['imagenes']}} --}}
                                </td>
                            </tr>
                        </table>

                    </td>
                    <td style="background: honeydew">
                    <form method="POST" action="/PresupuestosStatus/{{$row[0]['data_id']}}" accept-charset="UTF-8">
                        {!!  Form::token() !!}

                        <input name="_method" type="hidden" value="PATCH">
                        <table class="min-w-full divide-y">
                            <tr>
                                <td>
                                    <label style="padding: 25px">Presupuesto</label>
                                </td>
                                <td style="padding: 25px">
                                   <input type="text" value=" {{$row[0]['presupuesto']}}" name='presupuesto'>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <label style="padding: 25px"> Estado</label>
                                </td>
                                <td style="padding: 25px">
                                    <select name="estatus">
                                        <option value="1">Sin Presupuestar</option>
                                        <option value="2">Presupuesto enviado</option>
                                        <option value="3">Mas informacion</option>
                                        <option value="4">Presupuesto aprobado</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                </td>
                                <td style="padding: 25px">
                                    {!! Form::button('Editar', [
                                        'type' => 'submit',
                                        'class' => 'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 ml-4',
                                        // 'onclick' => "return confirm('Are you sure?')"
                                        ]) !!}
                            </tr>



                            </tr>
                        </table>
                        {!! Form::close() !!}
                    </td>
                </tr>

            </table>



                </div>

            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
