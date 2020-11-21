<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Presupuestos Web
    </h2>
</x-slot>
<div class="py-12">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
<input class="form-input rounded-md shadow-sm mt-1 block w-full" type="text">
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
                            imagenes
                        </th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Presupuesto
                        </th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Acción
                        </th>

                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($presupuesto as $row)
                    <tr>
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
                            @php
                                 $urls_img = explode( ",", $row['imagenes']);
                                foreach ($urls_img as $img) {
                                    if(strlen($img)>0){
                                        echo '<div class="text-sm leading-5 text-gray-500">';
                                   echo "<a href='".$img."' target='_blank'> <img src=".$img." width='40'></a>";
                                   echo '</div>';
                                    }

                                }
                                //  dump($urls_img);


                            @endphp


                            {{-- {{$row['imagenes']}} --}}
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap">
                            {{$row['presupuesto']}}
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap">
                            {!! Form::open(['route' => ['PresupuestosStatus.destroy', $row['data_id']], 'method' => 'delete']) !!}
                            <select>
                               <option value="1">Sin Presupuestar</option>
                               <option value="2">Presupuesto enviado</option>
                               <option value="3">Mas informacion</option>
                               <option value="4">Presupuesto aprobado</option>
                           </select>
                             {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}

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

