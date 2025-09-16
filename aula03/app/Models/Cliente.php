<?php

namespace App\Models; // dentro de uma caixinha

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente'; // nome da tabela

    public $fillable = ['id', 'primeiroNome', 'sobrenome'];

    public $timestamps = false;
}
