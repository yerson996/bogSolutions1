<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Remisione
 *
 * @property $id
 * @property $doc
 * @property $item1
 * @property $cant1
 * @property $item2
 * @property $cant2
 * @property $item3
 * @property $cant3
 * @property $item4
 * @property $cant4
 * @property $item5
 * @property $cant5
 * @property $item6
 * @property $cant6
 * @property $item7
 * @property $cant7
 * @property $item8
 * @property $cant8
 * @property $item9
 * @property $cant9
 * @property $item10
 * @property $cant10
 * @property $item11
 * @property $cant11
 * @property $item12
 * @property $cant12
 * @property $item13
 * @property $cant13
 * @property $item14
 * @property $cant14
 * @property $item15
 * @property $cant15
 * @property $notas
 * @property $precio
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Producto $producto
 * @property Producto $producto
 * @property Producto $producto
 * @property Producto $producto
 * @property Producto $producto
 * @property Producto $producto
 * @property Producto $producto
 * @property Producto $producto
 * @property Producto $producto
 * @property Producto $producto
 * @property Producto $producto
 * @property Producto $producto
 * @property Producto $producto
 * @property Producto $producto
 * @property Producto $producto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Remisione extends Model
{
    
    static $rules = [
		'doc' => 'required',
		'item1' => 'required',
		'cant1' => 'required',
		'item2' => 'required',
		'cant2' => 'required',
		'item3' => 'required',
		'cant3' => 'required',
		'item4' => 'required',
		'cant4' => 'required',
		'item5' => 'required',
		'cant5' => 'required',
		'item6' => 'required',
		'cant6' => 'required',
		'item7' => 'required',
		'cant7' => 'required',
		'item8' => 'required',
		'cant8' => 'required',
		'item9' => 'required',
		'cant9' => 'required',
		'item10' => 'required',
		'cant10' => 'required',
		'item11' => 'required',
		'cant11' => 'required',
		'item12' => 'required',
		'cant12' => 'required',
		'item13' => 'required',
		'cant13' => 'required',
		'item14' => 'required',
		'cant14' => 'required',
		'item15' => 'required',
		'cant15' => 'required',
		'notas' => 'required',
		'precio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['doc','item1','cant1','item2','cant2','item3','cant3','item4','cant4','item5','cant5','item6','cant6','item7','cant7','item8','cant8','item9','cant9','item10','cant10','item11','cant11','item12','cant12','item13','cant13','item14','cant14','item15','cant15','notas','precio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'doc');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'item1', 'item2' ,'item3','item4','item5','item6', 'item7' ,'item8','item9','item10', 'item11', 'item12' ,'item13','item14','item15');
    }
    
}