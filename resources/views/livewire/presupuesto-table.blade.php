<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Presupuestos Web
    </h2>
</x-slot>
<div class="py-12">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">

          <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
{{$buscar}}
<input
wire:model="buscar"
class="form-input rounded-md shadow-sm mt-1 block w-full"
 type="text">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            nombre
                        </th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            problema
                        </th>

                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Presupuesto
                        </th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Fecha
                        </th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Status
                        </th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Acción
                        </th>

                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($presupuesto as $row)
                    @if($row['status_n'] == 1)
                    <tr>
                    @endif
                        <td class="px-6 py-4 whitespace-no-wrap">
                            <div class="flex items-center">

                                <div class="ml-4">
                                  <div class="text-sm leading-5 font-medium text-gray-900">
                                    {{$row['nombre']}}
                                  </div>
                                  <div class="text-sm leading-5 text-gray-500">
                                    {{$row['email']}}
                                  </div>
                                  <div class="text-sm leading-5 text-gray-500">
                                    {{$row['telefono']}}
                                   <a target="_blank" href="https://web.whatsapp.com/send?phone=34{{$row['telefono']}}"><i style="color: green" class="fab fa-whatsapp"></i></a>
                                  </div>
                                </div>
                        </td>

                        <td class="px-6 py-4 ">
                            {{$row['problema']}}
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap">
                            {{$row['presupuesto']}}
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap">
                            {{$row['captured']}}
                        </td>



                   {{-- $st[1] = "Sin Presupuestar";  blanco
                        $st[2] = "Presupuesto enviado";  amarillo
                        $st[3] = "Mas informacion";   rojo
                        $st[4] = "Presupuesto aprobado";  verde --}}
                        {{-- $st[5] = "Mas informacion 2";
                        $st[6] = "Mas informacion 3"; --}}
                        <td

                        {{-- $st[1] = "Sin Presupuestar";  blanco --}}
                        @if($row['status_n'] == 1)
                            bgcolor="#ffffff"
                        @endif
                        {{-- $st[2] = "Presupuesto enviado";  amarillo --}}
                        @if($row['status_n'] == 2)
                            bgcolor="#ffff00"
                        @endif

                        {{-- $st[4] = "Presupuesto aprobado";  verde  --}}
                        @if($row['status_n'] == 4)
                            bgcolor="#00ff00"
                        @endif

                        {{-- $st[3] = "Mas informacion";   rojo --}}
                        @if($row['status_n'] == 3)
                        bgcolor="#FF0000"
                        @endif
                        {{-- $st[5] = "Mas informacion 2";   rojo --}}
                        @if($row['status_n'] == 5)
                            bgcolor="#FF0000"
                        @endif
                        {{-- $st[6] = "Mas informacion 3";   rojo --}}
                        @if($row['status_n'] == 6)
                            bgcolor="#FF0000"
                        @endif







                         class="px-6 py-4 whitespace-no-wrap">
                            {{$row['status']}}
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap">
                            {!! Form::open(['route' => ['PresupuestosStatus.edit', $row['data_id']], 'method' => 'GET']) !!}

                             {!! Form::button('Estado', [
                                'type' => 'submit',
                                'class' => 'inline-flex
                                items-center
                                px-4 py-2
                                 bg-gray-800
                                 border border-transparent
                                 rounded-md
                                 font-semibold
                                 text-xs
                                 text-white
                                 uppercase
                                 tracking-widest
                                 hover:bg-gray-700
                                 active:bg-gray-900
                                 focus:outline-none
                                 focus:border-gray-900
                                 focus:shadow-outline-gray
                                  disabled:opacity-25 transition ease-in-out duration-150 ml-4',
                                // 'onclick' => "return confirm('Are you sure?')"
                                ]) !!}

                             {{-- <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 ml-4">
                                Editar
                            </button> --}}

                             {!! Form::close() !!}
                                </td>
                    </tr>
                    @endforeach


                </tbody>

            </table>
        </div>
    </div>
</div>
</div>


</div>

