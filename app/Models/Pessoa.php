<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pessoa extends Model
{   
    use SoftDeletes;
    
    protected $table = 'pessoa';
    protected $primaryKey = 'idPessoa';
    public $timestamps = true;
    protected $fillable = [
        'nomeCompleto',
        'cpf',
        'sexo',
        'dataDeNascimento',
        'endereco',
        'cidade',
        'bairro',
        'cep'
    ];
    use HasFactory;

    public function tipoAlvo()
    {
        return $this->belongsTo(TiposAlvos::class, 'idTipoAlvo', 'idTipoAlvo');
    }
    
}
