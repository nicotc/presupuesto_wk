<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Presupuesto;
class PresupuestoTable extends Component
{


    public function render()
    {

        $row = [];
        $Presupuesto = Presupuesto::select(
            'yIDN2_fv_entry_meta.data_id',
            'yIDN2_fv_entry_meta.meta_key',
            'yIDN2_fv_entry_meta.meta_value',
            'presupuesto_status.presupuesto',
            'presupuesto_status.status'
        )
        ->leftJoin('presupuesto_status', 'yIDN2_fv_entry_meta.data_id', '=', 'presupuesto_status.presupuesto_id')
        ->get();



        // dd($Presupuesto);

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
        $presupuesto = $row;

        return view('livewire.presupuesto-table', ['presupuesto' =>$presupuesto] );
    }
}
