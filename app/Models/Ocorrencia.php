<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ocorrencia extends Model
{   
    use SoftDeletes;
    
    protected $table = 'ocorrencia';
    protected $primaryKey = 'idOcorrencia';
    public $timestamps = true;
    protected $fillable = [
        'tipo',
        'descricao'
    ];
    use HasFactory;

    public function tipoAlvo()
    {
        return $this->belongsTo(TiposAlvos::class, 'idTipoAlvo', 'idTipoAlvo');
    }
    
}
