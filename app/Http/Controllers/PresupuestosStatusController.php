<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presupuesto;
class PresupuestosStatusController extends Controller
{


    public function index(GenderDataTable $genderDataTable)
    {

    }

    /**
     * Show the form for creating a new Gender.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created Gender in storage.
     *
     * @param CreateGenderRequest $request
     *
     * @return Response
     */
    public function store(CreateGenderRequest $request)
    {

    }

    /**
     * Display the specified Gender.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified Gender.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {


        $Presupuesto = Presupuesto::select(
            'yIDN2_fv_entry_meta.data_id',
            'yIDN2_fv_entry_meta.meta_key',
            'yIDN2_fv_entry_meta.meta_value',
            'presupuesto_status.presupuesto',
            'presupuesto_status.status'
        )
        ->leftJoin('presupuesto_status', 'yIDN2_fv_entry_meta.data_id', '=', 'presupuesto_status.presupuesto_id')
        ->where('data_id', '=',$id )
        ->get();

        foreach ($Presupuesto as $presupuesto) {
            $Arr[$presupuesto['data_id']][$presupuesto['meta_key']] = $presupuesto['meta_value'];
            $Arr[$presupuesto['data_id']]['data_id'] = $presupuesto['data_id'];
            $Arr[$presupuesto['data_id']]['presupuesto'] = $presupuesto['presupuesto'];
            $Arr[$presupuesto['data_id']]['status'] = $presupuesto['status'];
        }
        foreach ($Arr as $arr) {
            if(isset($arr['problema'])){
                $row[] = $arr;
            }

        }

        return view('layouts.edit', ['header' => 'Editar', 'row' => $row]);

    }

    /**
     * Update the specified Gender in storage.
     *
     * @param  int              $id
     * @param UpdateGenderRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGenderRequest $request)
    {

    }

    /**
     * Remove the specified Gender from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {

    }


}
