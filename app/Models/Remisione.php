<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Remisione
 *
 * @property $id
 * @property $doc
 * 
 * @property $item1
 * @property $cant1
 * @property $tprecio1
 * 
 * @property $item2
 * @property $cant2
 * @property $tprecio2
 * 
 * @property $item3
 * @property $cant3
 * @property $tprecio3
 * 
 * @property $item4
 * @property $cant4
 * @property $tprecio4
 * 
 * @property $item5
 * @property $cant5
 * @property $tprecio5

 * @property $item6
 * @property $cant6
 * @property $tprecio6
 * 
 * @property $item7
 * @property $cant7
 * @property $tprecio7
 * 
 * @property $item8
 * @property $cant8
 * @property $tprecio8
 * 
 * @property $item9
 * @property $cant9
 * @property $tprecio9
 * 
 * @property $item10
 * @property $cant10
 * @property $tprecio10 
 * 
 * @property $item11
 * @property $cant11
 * @property $tprecio11
 * 
 * @property $item12
 * @property $cant12
 * @property $tprecio12
 * 
 * @property $item13
 * @property $cant13
 * @property $tprecio13
 * 
 * @property $item14
 * @property $cant14
 * @property $tprecio14
 * 
 * @property $item15
 * @property $cant15
 * @property $tprecio15
 * 
 * @property $notas
 * @property $pago
 * @property $precio
 * 
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
        'tprecio1' => 'required',
		'precio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['doc','item1','cant1','item2','tprecio1','tprecio2','tprecio3','tprecio4','tprecio5','tprecio6','tprecio7','tprecio8','tprecio9','tprecio10','tprecio11','tprecio12','tprecio13','tprecio14','tprecio15','cant2','item3','cant3','item4','cant4','item5','cant5','item6','cant6','item7','cant7','item8','cant8','item9','cant9','item10','cant10','item11','cant11','item12','cant12','item13','cant13','item14','cant14','item15','cant15','notas','precio','pago'];


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