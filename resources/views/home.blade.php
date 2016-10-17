@extends('layouts.app')

@section('content')
<style type="text/css">
    @charset "utf-8";
/* CSS Document */
section{width:100%; height:auto; background-color:#efefef;}
article{max-width:1280px; height:100%; margin:0 auto;}
.simulados{width:100%; height:360px; background-color:#ffffff; margin-bottom:30px; box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.2);}
.video-pdf{float:left; width:30%; height:100%; color:#fff; font-size:26px;}
.video,.pdf{width:100%; height:50%; background-color:#21263f; padding:40px; line-height:100px;}
.pdf{background-color:#aed2d3;}
.titulo{float:left; width:70%; height:100%;text-align:center; padding:30px;}
h1{font-size:2em; color:#aed2d3; text-transform:uppercase;}
.explicacao{width:60%; margin:0 auto; padding:20px 0; text-align:justify;}
.explicacao a, .video-pdf a{color:#fff; display:block; transition:0.3s;}
.video-pdf a:hover{font-size:28px; transition:0.3s;}
.questoes-botao{float:right; margin-top:30px; padding:15px 40px; background-color:#21263f; border:none; display:block; text-transform:uppercase; border-radius:30px; cursor:pointer; color:#fff;}
.questoes-botao:hover{background-color:#ff7443;}
.simulados img{float:left; margin-right:30px;}
.perguntas{width:100%; height:auto; background-color:#fff; padding:40px 60px;}
.alternativas{width:100%; margin:40px 0 200px 0;}
input[type=radio]{cursor:pointer;}
#questoes{width:100%; height:auto; background-color:#efefef;}
.resposta-comentario{color:#21263f; margin-top:10px;}
.resposta-comentario button{padding:8px; background:#393; border:none; color:#fff; cursor:pointer; font-size:20px; margin-right:10px;}
.resposta-comentario a{background:#efefef; padding:8px; cursor:pointer; margin-right:10px;}


.menu-hamburger{position:fixed; left:0; top:0; z-index:999; padding:20px; cursor:pointer;}
.menu-lateral{
  background: #aed2d3;
  left: -285px;   /*menu escondido*/
  height: 100%;
  position: fixed;
  width: 285px;
  margin-top:60px;
  transition:0.5s;

}
.aparecer{left:0; transition:0.5s;}
.menu-lateral li{border-bottom:1px solid #fff; width:100%; line-height:36px; padding-left:60px;}
.menu-lateral li a{display:block; color:#2e6868;}
.menu-lateral li:hover{background: #afdbdb;}
.clearfix{clear:both;}
</style>
<div class="container"> 
    <div class="col-md-12">
        <h1>Meus Cursos</h1>
        @foreach ($assinaturas as $assinatura)
            <div class="row">
                {{ ++$i }}
                <div class="col-xs-6 col-lg-4">
                    <h2>{{ $assinatura->id}}</h2>
                    
                    <p><a class="btn btn-info" href="#" role="button">Acessar &raquo;</a></p>
                </div><!--/.col-xs-6.col-lg-4-->
            </div>
        @endforeach        
        <br>
        <div class="simulados row">
            <div><h1>Cursos Disponíveis</h1></div>           
            <div class="col-xs-6 col-lg-4">
              <h2>Direito</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-success" href="#" role="button">Assinar &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h2>Direito 2</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-success" href="#" role="button">Assinar &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->            
        </div><!--/row-->                
    </div>          
</div>
@endsection
