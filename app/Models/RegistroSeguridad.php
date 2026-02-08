<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistroSeguridad extends Model
{
    protected $table = 'registros_seguridad';
    
    public $timestamps = false; 
    
    const CREATED_AT = 'fecha_registro';
    
    protected $fillable = [
        'tipo_evento',
        'usuario_id',
        'email',
        'direccion_ip',
        'detalles',
        'nivel_riesgo',
    ];

    // Relación con usuario
    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
}