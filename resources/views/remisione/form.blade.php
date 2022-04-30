<style>
    .form-contro {

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

    width: 29%;
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

  .hidden
  {

  }



</style>

<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Documento') }} <br>
            {{ Form::select('doc', $clientes ,$remisione->doc, ['class' => 'form-contro' . ($errors->has('doc') ? ' is-invalid' : ''), 'placeholder' => 'Doc']) }}
            {!! $errors->first('doc', '<div class="invalid-feedback">:message</div>') !!}

            {{ $remisione->nombre1 }}
        </div>
        <div class="form-group">
            {{ Form::label('item1')}} <br>
            {{ Form::select('item1',$productos, $remisione->item1, ['class' => 'form-contro' . ($errors->has('item1') ? ' is-invalid' : ''), 'placeholder' => 'Item1']) }}

        
            {{ Form::text('cant1', $remisione->cant1, ['class' => 'form-cant' . ($errors->has('cant1') ? ' is-invalid' : ''), 'placeholder' => 'Cant1']) }}
            {!! $errors->first('cant1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item2') }} <br>
            {{ Form::select('item2',$productos, $remisione->item2, ['class' => 'form-contro' . ($errors->has('item2') ? ' is-invalid' : ''), 'placeholder' => 'Item2']) }}
            {!! $errors->first('item2', '<div class="invalid-feedback">:message</div>') !!}
        
    
            {{ Form::text('cant2', $remisione->cant2, ['class' => 'form-cant' . ($errors->has('cant2') ? ' is-invalid' : ''), 'placeholder' => 'Cant2']) }}
            {!! $errors->first('cant2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item3') }} <br>
            {{ Form::select('item3',$productos, $remisione->item3, ['class' => 'form-contro' . ($errors->has('item3') ? ' is-invalid' : ''), 'placeholder' => 'Item3']) }}
            {!! $errors->first('item3', '<div class="invalid-feedback">:message</div>') !!}

            {{ Form::text('cant3', $remisione->cant3, ['class' => 'form-cant' . ($errors->has('cant3') ? ' is-invalid' : ''), 'placeholder' => 'Cant3']) }}
            {!! $errors->first('cant3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item4') }} <br>
            {{ Form::select('item4',$productos, $remisione->item4, ['class' => 'form-contro' . ($errors->has('item4') ? ' is-invalid' : ''), 'placeholder' => 'Item4']) }}
            {!! $errors->first('item4', '<div class="invalid-feedback">:message</div>') !!}
        
    
            {{ Form::text('cant4', $remisione->cant4, ['class' => 'form-cant' . ($errors->has('cant4') ? ' is-invalid' : ''), 'placeholder' => 'Cant4']) }}
            {!! $errors->first('cant4', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item5') }} <br>
            {{ Form::select('item5',$productos, $remisione->item5, ['class' => 'form-contro' . ($errors->has('item5') ? ' is-invalid' : ''), 'placeholder' => 'Item5']) }}
            {!! $errors->first('item5', '<div class="invalid-feedback">:message</div>') !!}

            {{ Form::text('cant5', $remisione->cant5, ['class' => 'form-cant' . ($errors->has('cant5') ? ' is-invalid' : ''), 'placeholder' => 'Cant5']) }}
            {!! $errors->first('cant5', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item6') }} <br>
            {{ Form::select('item6',$productos, $remisione->item6, ['class' => 'form-contro' . ($errors->has('item6') ? ' is-invalid' : ''), 'placeholder' => 'Item6']) }}
            {!! $errors->first('item6', '<div class="invalid-feedback">:message</div>') !!}

            {{ Form::text('cant6', $remisione->cant6, ['class' => 'form-cant' . ($errors->has('cant6') ? ' is-invalid' : ''), 'placeholder' => 'Cant6']) }}
            {!! $errors->first('cant6', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item7') }} <br>
            {{ Form::select('item7',$productos, $remisione->item7, ['class' => 'form-contro' . ($errors->has('item7') ? ' is-invalid' : ''), 'placeholder' => 'Item7']) }}
            {!! $errors->first('item7', '<div class="invalid-feedback">:message</div>') !!}
        
    
            {{ Form::text('cant7', $remisione->cant7, ['class' => 'form-cant' . ($errors->has('cant7') ? ' is-invalid' : ''), 'placeholder' => 'Cant7']) }}
            {!! $errors->first('cant7', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item8') }} <br>
            {{ Form::select('item8',$productos, $remisione->item8, ['class' => 'form-contro' . ($errors->has('item8') ? ' is-invalid' : ''), 'placeholder' => 'Item8']) }}
            {!! $errors->first('item8', '<div class="invalid-feedback">:message</div>') !!}

            {{ Form::text('cant8', $remisione->cant8, ['class' => 'form-cant' . ($errors->has('cant8') ? ' is-invalid' : ''), 'placeholder' => 'Cant8']) }}
            {!! $errors->first('cant8', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item9') }} <br>
            {{ Form::select('item9',$productos, $remisione->item9, ['class' => 'form-contro' . ($errors->has('item9') ? ' is-invalid' : ''), 'placeholder' => 'Item9']) }}
            {!! $errors->first('item9', '<div class="invalid-feedback">:message</div>') !!}
        

            {{ Form::text('cant9', $remisione->cant9, ['class' => 'form-cant' . ($errors->has('cant9') ? ' is-invalid' : ''), 'placeholder' => 'Cant9']) }}
            {!! $errors->first('cant9', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item10') }} <br>
            {{ Form::select('item10',$productos, $remisione->item10, ['class' => 'form-contro' . ($errors->has('item10') ? ' is-invalid' : ''), 'placeholder' => 'Item10']) }}
            {!! $errors->first('item10', '<div class="invalid-feedback">:message</div>') !!}

            {{ Form::text('cant10', $remisione->cant10, ['class' => 'form-cant' . ($errors->has('cant10') ? ' is-invalid' : ''), 'placeholder' => 'Cant10']) }}
            {!! $errors->first('cant10', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item11') }} <br>
            {{ Form::select('item11',$productos, $remisione->item11, ['class' => 'form-contro' . ($errors->has('item11') ? ' is-invalid' : ''), 'placeholder' => 'Item11']) }}
            {!! $errors->first('item11', '<div class="invalid-feedback">:message</div>') !!}
            {{ Form::text('cant11', $remisione->cant11, ['class' => 'form-cant' . ($errors->has('cant11') ? ' is-invalid' : ''), 'placeholder' => 'Cant11']) }}
            {!! $errors->first('cant11', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item12') }} <br>
            {{ Form::select('item12',$productos, $remisione->item12, ['class' => 'form-contro' . ($errors->has('item12') ? ' is-invalid' : ''), 'placeholder' => 'Item12']) }}
            {!! $errors->first('item12', '<div class="invalid-feedback">:message</div>') !!}
        

            {{ Form::text('cant12', $remisione->cant12, ['class' => 'form-cant' . ($errors->has('cant12') ? ' is-invalid' : ''), 'placeholder' => 'Cant12']) }}
            {!! $errors->first('cant12', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item13') }} <br>
            {{ Form::select('item13',$productos, $remisione->item13, ['class' => 'form-contro' . ($errors->has('item13') ? ' is-invalid' : ''), 'placeholder' => 'Item13']) }}
            {!! $errors->first('item13', '<div class="invalid-feedback">:message</div>') !!}
        

            {{ Form::text('cant13', $remisione->cant13, ['class' => 'form-cant' . ($errors->has('cant13') ? ' is-invalid' : ''), 'placeholder' => 'Cant13']) }}
            {!! $errors->first('cant13', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item14') }} <br>
            {{ Form::select('item14',$productos, $remisione->item14, ['class' => 'form-contro' . ($errors->has('item14') ? ' is-invalid' : ''), 'placeholder' => 'Item14']) }}
            {!! $errors->first('item14', '<div class="invalid-feedback">:message</div>') !!}
        

            {{ Form::text('cant14', $remisione->cant14, ['class' => 'form-cant' . ($errors->has('cant14') ? ' is-invalid' : ''), 'placeholder' => 'Cant14']) }}
            {!! $errors->first('cant14', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item15') }} <br>
            {{ Form::select('item15',$productos, $remisione->item15, ['class' => 'form-contro' . ($errors->has('item15') ? ' is-invalid' : ''), 'placeholder' => 'Item15']) }}
            {!! $errors->first('item15', '<div class="invalid-feedback">:message</div>') !!}
        

            {{ Form::text('cant15', $remisione->cant15, ['class' => 'form-cant' . ($errors->has('cant15') ? ' is-invalid' : ''), 'placeholder' => 'Cant15']) }}
            {!! $errors->first('cant15', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('notas') }} <br>
            {{ Form::text('notas', $remisione->notas, ['class' => 'form-control' . ($errors->has('notas') ? ' is-invalid' : ''), 'placeholder' => 'Notas']) }}
            {!! $errors->first('notas', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        



        <div class="form-group">
            {{ Form::hidden('precio', 0 , ['class' => 'form-control'. ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>