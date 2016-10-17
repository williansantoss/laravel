@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Simulado CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('simulado.create') }}"> Criar Novo Simulado</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Curso</th>
            <th>Questao</th>
            <th width="280px">Action</th>
        </tr>        
    @foreach ($cursos as $curso)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $curso->curso_id}}</td>
        <td>{{ $curso->descricao_pergunta}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('simulado.show',$curso->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('simulado.edit',$curso->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['simulado.destroy', $curso->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
    {!! $cursos->render() !!}
</div>    
@endsection