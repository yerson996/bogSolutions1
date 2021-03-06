<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $persona
 * @property $tipoDoc
 * @property $id
 * @property $nombre1
 * @property $nombre2
 * @property $apellido1
 * @property $apellido2
 * @property $nombreLegal
 * @property $direccion
 * @property $ciudad
 * @property $cel
 * @property $correo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'persona' => 'required',
		'tipoDoc' => 'required',
		'id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['persona','tipoDoc','id','nombre1','nombre2','apellido1','apellido2','nombreLegal','direccion','ciudad','cel','correo'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function remisiones()
	{
		return $this->hasMany('App\Models\Remisione','persona','tipoDoc','id','nombre1','nombre2','apellido1','apellido2','nombreLegal','direccion','ciudad','cel','correo');
	}

}
