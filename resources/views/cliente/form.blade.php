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

    width: 33%;
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

        <!-- Tipo de Persona -->
        <div class="form-group">
            {{ Form::label('Tipo de Persona y Documento') }}
            <br>
                <select class="form-cant" name="persona" id="persona">
                    <option value="0" selected disabled>--Seleccione Tipo de Persona--</option>
                    <option value="Natural" value="{{ isset($cliente->persona)?$cliente->persona:old('persona') }}" id="persona">Persona Natural</option>
                    <option value="Juridica" value="{{ isset($cliente->persona)?$cliente->persona:old('persona') }}" id="persona">Persona Juridica</option>
                </select>

        <!-- Tipo de Documento  -->

                <select class="form-cant" name="tipoDoc">
                    <option value="0" selected disabled>--Seleccione Tipo de Documento--</option>
                    <option value="CC" >Cedula de Ciudadania</option>
                    <option value="NIT" >Número de Identificación Tributaria</option>
                    <option value="CE" >Cedula Extranjera</option>
                </select>


        <!-- Documento -->

            {{ Form::text('id', $cliente->id, ['class' => 'form-cant' . ($errors->has('id') ? ' is-invalid' : ''), 'placeholder' => 'Documento']) }}
            {!! $errors->first('id', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('nombre1') }}
            {{ Form::text('nombre1', $cliente->nombre1, ['class' => 'form-control' . ($errors->has('nombre1') ? ' is-invalid' : ''), 'placeholder' => 'Nombre1']) }}
            {!! $errors->first('nombre1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre2') }}
            {{ Form::text('nombre2', $cliente->nombre2, ['class' => 'form-control' . ($errors->has('nombre2') ? ' is-invalid' : ''), 'placeholder' => 'Nombre2']) }}
            {!! $errors->first('nombre2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido1') }}
            {{ Form::text('apellido1', $cliente->apellido1, ['class' => 'form-control' . ($errors->has('apellido1') ? ' is-invalid' : ''), 'placeholder' => 'Apellido1']) }}
            {!! $errors->first('apellido1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido2') }}
            {{ Form::text('apellido2', $cliente->apellido2, ['class' => 'form-control' . ($errors->has('apellido2') ? ' is-invalid' : ''), 'placeholder' => 'Apellido2']) }}
            {!! $errors->first('apellido2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombreLegal') }}
            {{ Form::text('nombreLegal', $cliente->nombreLegal, ['class' => 'form-control' . ($errors->has('nombreLegal') ? ' is-invalid' : ''), 'placeholder' => 'Nombrelegal']) }}
            {!! $errors->first('nombreLegal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $cliente->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ciudad') }}
            {{ Form::text('ciudad', $cliente->ciudad, ['class' => 'form-control' . ($errors->has('ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad']) }}
            {!! $errors->first('ciudad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cel') }}
            {{ Form::text('cel', $cliente->cel, ['class' => 'form-control' . ($errors->has('cel') ? ' is-invalid' : ''), 'placeholder' => 'Cel']) }}
            {!! $errors->first('cel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo') }}
            {{ Form::email('correo', $cliente->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>


