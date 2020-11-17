<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Presupuesto;
class PresupuestoTable extends Component
{


    public function render()
    {

        $row = [];
        $Presupuesto = Presupuesto::all();

        foreach ($Presupuesto as $presupuesto) {
            $Arr[$presupuesto['data_id']][$presupuesto['meta_key']] = $presupuesto['meta_value'];
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
