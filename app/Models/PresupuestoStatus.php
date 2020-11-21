<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresupuestoStatus extends Model
{
    use HasFactory;
    protected $table = 'presupuesto_status';

   protected $fillable = [
    'id',
    'presupuesto_id',
    'presupuesto',
    'status'
    ];







}
