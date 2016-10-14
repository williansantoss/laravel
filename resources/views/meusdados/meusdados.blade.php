@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-md-12">   
		<div class="row text-left"><h1>Alteração de Dados:</h1></div>
		<div class="col-md-12">
			<form class="form-horizontal" role="form" method="POST" action="">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Nome</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ $nome }}" required autofocus>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div> 
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ $email }}" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div> 
                 <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Alterar
                        </button>
                    </div>
                </div>              
            </form>			       
		</div>		
	</div>
</div>
@endsection