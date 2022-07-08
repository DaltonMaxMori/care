<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admissao extends Model
{
    use SoftDeletes;
    
    protected $table = 'admissao';
    protected $primaryKey = 'idAdmissao';
    public $timestamps = true;
    protected $fillable = [
        'dataAdmissao',
        'grauDependencia'
    ];
    use HasFactory;

    public function tipoAlvo()
    {
        return $this->belongsTo(TiposAlvos::class, 'idTipoAlvo', 'idTipoAlvo');
    }
}
