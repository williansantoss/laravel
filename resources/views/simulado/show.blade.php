@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Simulado</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('simulado.index') }}"> Voltar</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                {{ $cursos->descricao_pergunta}}
            </div>
        </div>       
    </div>
</div>
@endsection