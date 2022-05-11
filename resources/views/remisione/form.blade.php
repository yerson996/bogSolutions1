<style>
    .form-contro {

    width: 50%;
    height: calc(2.25rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    box-shadow: inset 0 0 0 transparent;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
  }

    .form-contr {

    width: 70%;
    height: calc(2.25rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    box-shadow: inset 0 0 0 transparent;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
  }

  .form-cant {

    width: 15%;
    height: calc(2.25rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    box-shadow: inset 0 0 0 transparent;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
  }

  .cont {
  background-color: #eeeeee;
  border-radius: 5px;
  box-shadow: 0px 0px 15px rgba(0,0,0,0.2);
  padding: 15px;
  margin-bottom: 30px;
}

</style>

<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
        {{ Form::label('INFORMACIÓN DE CLIENTE') }}  
        <div class="cont">

            <!-- Seleccionar Documento o nombres -->
            {{ Form::label('Documento') }} <br>
            <select id="doc" name="doc" class="js-example-basic-single form-control">
                <option value="0" data-precio="--" selected disabled>--Seleccione Documento--</option>
                @foreach($clientes as $cliente)cliente
                <option value="{{ $cliente->id }}"  data-nombre1="{{ $cliente->nombre1 }}" data-nombre2="{{ $cliente->nombre2 }}" data-legal="{{ $cliente->nombreLegal }}" 
                data-apellido1="{{ $cliente->apellido1 }}" data-apellido2="{{ $cliente->apellido2 }}" data-direccion="{{ $cliente->direccion }}" 
                data-ciudad="{{ $cliente->ciudad }}" data-cel="{{ $cliente->cel }}">{{ $cliente->id }} | {{ $cliente->nombre1 }}{{ $cliente->nombre2 }}{{ $cliente->apellido1 }}{{ $cliente->apellido2 }}{{ $cliente->nombreLegal }}</option>
                @endforeach                
            </select>

            <br>

            {!! $errors->first('doc', '<div class="invalid-feedback">:message</div>') !!}
        <br>
            <input class="form-contro" id="direccion" type="text" placeholder="Dirección" readonly/>
            <input class="form-cant" id="ciudad" type="text" placeholder="Ciudad" readonly/>
            <input class="form-cant" id="cel" type="number" placeholder="Celular" readonly/>
        </div>
        </div>




        {{ Form::label('PRODUCTOS') }} 
        <div class="cont">
        <!-- ITEM 1 --> 
        
        <div class="form-group">
            
            {{ Form::label('item1')}} <br>
            <select id="item1" name="item1" class="form-contro">
                <option value="0" data-precio1="--" selected disabled>--Seleccione producto--</option>
                @foreach($productos as $producto)
                <option value="{{ $producto->id }}" data-precio="{{ $producto->precio }}">{{ $producto->item}} | {{ $producto->nombre }} - {{ $producto->precio }}</option>      
                @endforeach
            </select>

            <input class="form-cant" name="precio1" id="precio1" type="number" placeholder="Precio item 1"/>

            <input class="form-cant" name="cant1" id="cant1" type="number" placeholder="Cantidad 1"/>

            <input class="form-cant" name="tprecio1" id="tprecio1" type="number" value="0" placeholder="Total Item 1" readonly/>

        </div>


        <!-- ITEM 2 --> 

        <div class="form-group">
            
            {{ Form::label('item2')}} <br>
            <select id="item2" name="item2" class="form-contro">
                <option value="0" data-precio2="--" selected disabled>--Seleccione producto--</option>
                @foreach($productos as $producto)
                <option value="{{ $producto->id }}" data-precio2="{{ $producto->precio }}">{{ $producto->item}} | {{ $producto->nombre }} - {{ $producto->precio }}</option>      
                @endforeach
            </select>

            <input class="form-cant" name="precio2" id="precio2" type="number" placeholder="Precio item 2"/>

            <input class="form-cant" name="cant2" id="cant2" type="number" placeholder="Cantidad 2"/>
            {!! $errors->first('cant2', '<div class="invalid-feedback">:message</div>') !!}

            <input class="form-cant" name="tprecio2" id="tprecio2" type="number" value="0" placeholder="Total Item 2" readonly/>

        </div>

            <!-- ITEM 3 --> 

            <div class="form-group">
            
            {{ Form::label('item3')}} <br>
            <select id="item3" name="item3" class="form-contro">
                <option value="0" data-precio3="--" selected disabled>--Seleccione producto--</option>
                @foreach($productos as $producto)
                <option value="{{ $producto->id }}" data-precio3="{{ $producto->precio }}">{{ $producto->item}} | {{ $producto->nombre }} - {{ $producto->precio }}</option>      
                @endforeach
            </select>

            <input class="form-cant" name="precio3" id="precio3" type="number" placeholder="Precio item 3"/>

            <input class="form-cant" name="cant3" id="cant3" type="number" placeholder="Cantidad 3"/>
            {!! $errors->first('cant3', '<div class="invalid-feedback">:message</div>') !!}

            <input class="form-cant" name="tprecio3" id="tprecio3" type="number" value="0" placeholder="Total Item 3" readonly/>

        </div>

            <!-- ITEM 4 --> 

            <div class="form-group">
                        
            {{ Form::label('item4')}} <br>
            <select id="item4" name="item4" class="form-contro">
                <option value="0" data-precio4="--" selected disabled>--Seleccione producto--</option>
                @foreach($productos as $producto)
                <option value="{{ $producto->id }}" data-precio4="{{ $producto->precio }}">{{ $producto->item}} | {{ $producto->nombre }} - {{ $producto->precio }}</option>      
                @endforeach
            </select>

            <input class="form-cant" name="precio4" id="precio4" type="number" placeholder="Precio item 4"/>

            <input class="form-cant" name="cant4" id="cant4" type="number" placeholder="Cantidad 4"/>
            {!! $errors->first('cant4', '<div class="invalid-feedback">:message</div>') !!}

            <input class="form-cant" name="tprecio4" id="tprecio4" type="number" value="0" placeholder="Total Item 4" readonly/>

        </div>

            <!-- ITEM 5 --> 

            <div class="form-group">
            
            {{ Form::label('item5')}} <br>
            <select id="item5" name="item5" class="form-contro">
                <option value="0" data-precio5="--" selected disabled>--Seleccione producto--</option>
                @foreach($productos as $producto)
                <option value="{{ $producto->id }}" data-precio5="{{ $producto->precio }}">{{ $producto->item}} | {{ $producto->nombre }} - {{ $producto->precio }}</option>      
                @endforeach
            </select>

            <input class="form-cant" name="precio5" id="precio5" type="number" placeholder="Precio item 5"/>

            <input class="form-cant" name="cant5" id="cant5" type="number" placeholder="Cantidad 5"/>
            {!! $errors->first('cant5', '<div class="invalid-feedback">:message</div>') !!}

            <input class="form-cant" name="tprecio5" id="tprecio5" type="number" value="0" placeholder="Total Item 5" readonly/>

        </div>

            <!-- ITEM 6 --> 

            <div class="form-group">
            
            {{ Form::label('item6')}} <br>
            <select id="item6" name="item6" class="form-contro">
                <option value="0" data-precio6="--" selected disabled>--Seleccione producto--</option>
                @foreach($productos as $producto)
                <option value="{{ $producto->id }}" data-precio6="{{ $producto->precio }}">{{ $producto->item}} | {{ $producto->nombre }} - {{ $producto->precio }}</option>      
                @endforeach
            </select>

            <input class="form-cant" name="precio6" id="precio6" type="number" placeholder="Precio item 6"/>

            <input class="form-cant" name="cant6" id="cant6" type="number" placeholder="Cantidad 6"/>
            {!! $errors->first('cant6', '<div class="invalid-feedback">:message</div>') !!}

            <input class="form-cant" name="tprecio6" id="tprecio6" type="number" value="0" placeholder="Total Item 6" readonly/>

        </div>

            <!-- ITEM 7 --> 

            <div class="form-group">
            
            {{ Form::label('item7')}} <br>
            <select id="item7" name="item7" class="form-contro">
                <option value="0" data-precio7="--" selected disabled>--Seleccione producto--</option>
                @foreach($productos as $producto)
                <option value="{{ $producto->id }}" data-precio7="{{ $producto->precio }}">{{ $producto->item}} | {{ $producto->nombre }} - {{ $producto->precio }}</option>      
                @endforeach
            </select>

            <input class="form-cant" name="precio7" id="precio7" type="number" placeholder="Precio item 7"/>

            <input class="form-cant" name="cant7" id="cant7" type="number" placeholder="Cantidad 7"/>
            {!! $errors->first('cant7', '<div class="invalid-feedback">:message</div>') !!}

            <input class="form-cant" name="tprecio7" id="tprecio7" type="number" value="0" placeholder="Total Item 7" readonly/>

        </div>

            <!-- ITEM 8 --> 

            <div class="form-group">
            
            {{ Form::label('item8')}} <br>
            <select id="item8" name="item8" class="form-contro">
                <option value="0" data-precio8="--" selected disabled>--Seleccione producto--</option>
                @foreach($productos as $producto)
                <option value="{{ $producto->id }}" data-precio8="{{ $producto->precio }}">{{ $producto->item}} | {{ $producto->nombre }} - {{ $producto->precio }}</option>      
                @endforeach
            </select>

            <input class="form-cant" name="precio8" id="precio8" type="number" placeholder="Precio item 8"/>

            <input class="form-cant" name="cant8" id="cant8" type="number" placeholder="Cantidad 8"/>
            {!! $errors->first('cant8', '<div class="invalid-feedback">:message</div>') !!}

            <input class="form-cant" name="tprecio8" id="tprecio8" type="number" value="0" placeholder="Total Item 8" readonly/>

        </div>

            <!-- ITEM 9 --> 

            <div class="form-group">
            
            {{ Form::label('item9')}} <br>
            <select id="item9" name="item9" class="form-contro">
                <option value="0" data-precio9="--" selected disabled>--Seleccione producto--</option>
                @foreach($productos as $producto)
                <option value="{{ $producto->id }}" data-precio9="{{ $producto->precio }}">{{ $producto->item}} | {{ $producto->nombre }} - {{ $producto->precio }}</option>      
                @endforeach
            </select>

            <input class="form-cant" name="precio9" id="precio9" type="number" placeholder="Precio item 9"/>

            <input class="form-cant" name="cant9" id="cant9" type="number" placeholder="Cantidad 9"/>
            {!! $errors->first('cant9', '<div class="invalid-feedback">:message</div>') !!}

            <input class="form-cant" name="tprecio9" id="tprecio9" type="number"  value="0" placeholder="Total Item 9" readonly/>

        </div>

            <!-- ITEM 10 --> 

            <div class="form-group">
            
            {{ Form::label('item10')}} <br>
            <select id="item10" name="item10" class="form-contro">
                <option value="0" data-precio10="--" selected disabled>--Seleccione producto--</option>
                @foreach($productos as $producto)
                <option value="{{ $producto->id }}" data-precio10="{{ $producto->precio }}">{{ $producto->item}} | {{ $producto->nombre }} - {{ $producto->precio }}</option>      
                @endforeach
            </select>

            <input class="form-cant" name="precio10" id="precio10" type="number" placeholder="Precio item 10"/>

            <input class="form-cant" name="cant10" id="cant10" type="number" placeholder="Cantidad 10"/>
            {!! $errors->first('cant10', '<div class="invalid-feedback">:message</div>') !!}

            <input class="form-cant" name="tprecio10" id="tprecio10" type="number" value="0" placeholder="Total Item 10" readonly/>


        {{ Form::label('TOTAL PRECIO PRODUCTOS')}} <br>
        <input type="button" value="Calcular" onclick="total()" class="btn btn-info"/>
        <input class="form-contro" id="Total" type="number" placeholder="Precio Total" readonly/>
        <input type="hidden" name="precio" value="0"/>
        

</div>
</div>

        {{ Form::label('INFORMACIÓN ADICIONAL') }}
    <div class="cont">
        <div class="form-group">
            {{ Form::label('notas') }} <br>
            {{ Form::text('notas', $remisione->notas, ['class' => 'form-control' . ($errors->has('notas') ? ' is-invalid' : ''), 'placeholder' => 'Notas']) }}
            {!! $errors->first('notas', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Metodo de pago') }} <br>
            <select id="pago" name="pago" class="form-contro">
                <option value="Efectivo">Efectivo</option>
                <option value="Transferencia">Transferencia</option>          
            </select>
        </div>
    </div> 




        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary" onclick="return confirm('¿Seguro de crear esta remision? Una vez creada no se podra editar')">Enviar</button>
    </div>
</div>




