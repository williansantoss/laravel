@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Simulado</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('simulado.index') }}"> voltar</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::model($cursos, ['method' => 'PATCH','route' => ['simulado.update', $cursos->id]]) !!}
        @include('simulado.form')
    {!! Form::close() !!}
</div>    
@endsection