@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-md-12">   
		<div class="row"><h1>{{ $curso }}</h1></div>
		<div class="col-md-12">
			<section id="questoes">						    	
		    	<div>  			        	
		        	{{ $questao }}
		        </div>
		        <div class="alternativas">
		        	@foreach ($alternativas as $alternativa)
					     <p>{{ $alternativa->descricao_alternativa }}</p>
					@endforeach	            
		        </div>	
			</section>
		</div>		
	</div>
</div>
@endsection