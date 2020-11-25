<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Presupuesto;
use Illuminate\Support\Collection;
class PresupuestoTable extends Component
{

    public $buscar = "";

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
        ->orderByDesc('data_id')
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
        $buscar = $this->buscar;
        $presupuesto = collect($row)
            ->filter(function ($item) use ($buscar) {
                if (strlen($buscar)>1) {
                    return false !== (
                        stristr($item['nombre'], $buscar) or
                        stristr($item['problema'], $buscar)
                    );
                }else{
                    return true;
                }
        });
        //  ->where('nombre','LIKE', "%{$this->buscar}%");

// dd($presupuesto);
        // $presupuesto = $row;

        return view('livewire.presupuesto-table', ['presupuesto' =>$presupuesto] );
    }
}
