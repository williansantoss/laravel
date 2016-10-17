<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Usuario:</strong>
                {!! Form::text('user_id', null, array('placeholder' => 'Usuario','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Curso:</strong>
                {!! Form::text('curso_id', null, array('placeholder' => 'Curso','class' => 'form-control')) !!}
            </div>
        </div>        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Assinar</button>
        </div>
    </div>