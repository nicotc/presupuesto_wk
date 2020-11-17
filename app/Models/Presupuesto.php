<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{
    use HasFactory;
    protected $table = 'yidn2_fv_entry_meta';

   protected $fillable = [
        'id',
        'data_id',
        'meta_key',
        'meta_value',
    ];






}
