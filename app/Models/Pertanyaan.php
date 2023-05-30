<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tumbuhan extends Model
{
    use HasFactory;
    protected $table = 'tb_pertanyaan'; 
    protected $primaryKey = 'id'; 
}
