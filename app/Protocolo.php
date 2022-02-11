<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Protocolo extends Model
{
    protected $fillable = ['contribuinte', 'descricao', 'data', 'prazo'];
    protected $primaryKey = 'numeroprot';
}
