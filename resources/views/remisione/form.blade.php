<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('doc') }}
            {{ Form::text('doc', $remisione->doc, ['class' => 'form-control' . ($errors->has('doc') ? ' is-invalid' : ''), 'placeholder' => 'Doc']) }}
            {!! $errors->first('doc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item1') }}
            {{ Form::text('item1', $remisione->item1, ['class' => 'form-control' . ($errors->has('item1') ? ' is-invalid' : ''), 'placeholder' => 'Item1']) }}
            {!! $errors->first('item1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant1') }}
            {{ Form::text('cant1', $remisione->cant1, ['class' => 'form-control' . ($errors->has('cant1') ? ' is-invalid' : ''), 'placeholder' => 'Cant1']) }}
            {!! $errors->first('cant1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item2') }}
            {{ Form::text('item2', $remisione->item2, ['class' => 'form-control' . ($errors->has('item2') ? ' is-invalid' : ''), 'placeholder' => 'Item2']) }}
            {!! $errors->first('item2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant2') }}
            {{ Form::text('cant2', $remisione->cant2, ['class' => 'form-control' . ($errors->has('cant2') ? ' is-invalid' : ''), 'placeholder' => 'Cant2']) }}
            {!! $errors->first('cant2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item3') }}
            {{ Form::text('item3', $remisione->item3, ['class' => 'form-control' . ($errors->has('item3') ? ' is-invalid' : ''), 'placeholder' => 'Item3']) }}
            {!! $errors->first('item3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant3') }}
            {{ Form::text('cant3', $remisione->cant3, ['class' => 'form-control' . ($errors->has('cant3') ? ' is-invalid' : ''), 'placeholder' => 'Cant3']) }}
            {!! $errors->first('cant3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item4') }}
            {{ Form::text('item4', $remisione->item4, ['class' => 'form-control' . ($errors->has('item4') ? ' is-invalid' : ''), 'placeholder' => 'Item4']) }}
            {!! $errors->first('item4', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant4') }}
            {{ Form::text('cant4', $remisione->cant4, ['class' => 'form-control' . ($errors->has('cant4') ? ' is-invalid' : ''), 'placeholder' => 'Cant4']) }}
            {!! $errors->first('cant4', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item5') }}
            {{ Form::text('item5', $remisione->item5, ['class' => 'form-control' . ($errors->has('item5') ? ' is-invalid' : ''), 'placeholder' => 'Item5']) }}
            {!! $errors->first('item5', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant5') }}
            {{ Form::text('cant5', $remisione->cant5, ['class' => 'form-control' . ($errors->has('cant5') ? ' is-invalid' : ''), 'placeholder' => 'Cant5']) }}
            {!! $errors->first('cant5', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item6') }}
            {{ Form::text('item6', $remisione->item6, ['class' => 'form-control' . ($errors->has('item6') ? ' is-invalid' : ''), 'placeholder' => 'Item6']) }}
            {!! $errors->first('item6', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant6') }}
            {{ Form::text('cant6', $remisione->cant6, ['class' => 'form-control' . ($errors->has('cant6') ? ' is-invalid' : ''), 'placeholder' => 'Cant6']) }}
            {!! $errors->first('cant6', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item7') }}
            {{ Form::text('item7', $remisione->item7, ['class' => 'form-control' . ($errors->has('item7') ? ' is-invalid' : ''), 'placeholder' => 'Item7']) }}
            {!! $errors->first('item7', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant7') }}
            {{ Form::text('cant7', $remisione->cant7, ['class' => 'form-control' . ($errors->has('cant7') ? ' is-invalid' : ''), 'placeholder' => 'Cant7']) }}
            {!! $errors->first('cant7', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item8') }}
            {{ Form::text('item8', $remisione->item8, ['class' => 'form-control' . ($errors->has('item8') ? ' is-invalid' : ''), 'placeholder' => 'Item8']) }}
            {!! $errors->first('item8', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant8') }}
            {{ Form::text('cant8', $remisione->cant8, ['class' => 'form-control' . ($errors->has('cant8') ? ' is-invalid' : ''), 'placeholder' => 'Cant8']) }}
            {!! $errors->first('cant8', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item9') }}
            {{ Form::text('item9', $remisione->item9, ['class' => 'form-control' . ($errors->has('item9') ? ' is-invalid' : ''), 'placeholder' => 'Item9']) }}
            {!! $errors->first('item9', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant9') }}
            {{ Form::text('cant9', $remisione->cant9, ['class' => 'form-control' . ($errors->has('cant9') ? ' is-invalid' : ''), 'placeholder' => 'Cant9']) }}
            {!! $errors->first('cant9', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item10') }}
            {{ Form::text('item10', $remisione->item10, ['class' => 'form-control' . ($errors->has('item10') ? ' is-invalid' : ''), 'placeholder' => 'Item10']) }}
            {!! $errors->first('item10', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant10') }}
            {{ Form::text('cant10', $remisione->cant10, ['class' => 'form-control' . ($errors->has('cant10') ? ' is-invalid' : ''), 'placeholder' => 'Cant10']) }}
            {!! $errors->first('cant10', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item11') }}
            {{ Form::text('item11', $remisione->item11, ['class' => 'form-control' . ($errors->has('item11') ? ' is-invalid' : ''), 'placeholder' => 'Item11']) }}
            {!! $errors->first('item11', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant11') }}
            {{ Form::text('cant11', $remisione->cant11, ['class' => 'form-control' . ($errors->has('cant11') ? ' is-invalid' : ''), 'placeholder' => 'Cant11']) }}
            {!! $errors->first('cant11', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item12') }}
            {{ Form::text('item12', $remisione->item12, ['class' => 'form-control' . ($errors->has('item12') ? ' is-invalid' : ''), 'placeholder' => 'Item12']) }}
            {!! $errors->first('item12', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant12') }}
            {{ Form::text('cant12', $remisione->cant12, ['class' => 'form-control' . ($errors->has('cant12') ? ' is-invalid' : ''), 'placeholder' => 'Cant12']) }}
            {!! $errors->first('cant12', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item13') }}
            {{ Form::text('item13', $remisione->item13, ['class' => 'form-control' . ($errors->has('item13') ? ' is-invalid' : ''), 'placeholder' => 'Item13']) }}
            {!! $errors->first('item13', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant13') }}
            {{ Form::text('cant13', $remisione->cant13, ['class' => 'form-control' . ($errors->has('cant13') ? ' is-invalid' : ''), 'placeholder' => 'Cant13']) }}
            {!! $errors->first('cant13', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item14') }}
            {{ Form::text('item14', $remisione->item14, ['class' => 'form-control' . ($errors->has('item14') ? ' is-invalid' : ''), 'placeholder' => 'Item14']) }}
            {!! $errors->first('item14', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant14') }}
            {{ Form::text('cant14', $remisione->cant14, ['class' => 'form-control' . ($errors->has('cant14') ? ' is-invalid' : ''), 'placeholder' => 'Cant14']) }}
            {!! $errors->first('cant14', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item15') }}
            {{ Form::text('item15', $remisione->item15, ['class' => 'form-control' . ($errors->has('item15') ? ' is-invalid' : ''), 'placeholder' => 'Item15']) }}
            {!! $errors->first('item15', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant15') }}
            {{ Form::text('cant15', $remisione->cant15, ['class' => 'form-control' . ($errors->has('cant15') ? ' is-invalid' : ''), 'placeholder' => 'Cant15']) }}
            {!! $errors->first('cant15', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('notas') }}
            {{ Form::text('notas', $remisione->notas, ['class' => 'form-control' . ($errors->has('notas') ? ' is-invalid' : ''), 'placeholder' => 'Notas']) }}
            {!! $errors->first('notas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('precio', $remisione->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>