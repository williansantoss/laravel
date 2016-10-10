@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-md-12">   
		<div class="row"><h1>{{ $curso }}</h1></div>
		<div class="col-md-12">
			<section id="questoes">						    	
		    	<div>  			        	
		        	@foreach ($questao as $quest)					     
					    <p>{{ $quest->descricao_pergunta }}</p>	

					    @foreach ($alternativas as $alternativa)
						    @if ($alternativa->questao_id == $quest->id)
						    	<p>{{ $alternativa->descricao_alternativa }}</p>
						    @endif	
						@endforeach	

					@endforeach
		        </div>  
			</section>
		</div>		
	</div>
</div>
@endsection