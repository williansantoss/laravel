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
    <section>
        <article>
            <div class="simulados col-md-12">
                <div class="video-pdf col-md-4">
                    <div class="video">
                        <img src="img/video-icone.png" alt="icone de video"/>
                        <a href="#">ver video</a>
                    </div>
                    <div class="pdf">
                        <img src="img/pdf-icone.png" alt="icone de video"/>
                        <a href="#">ler pdf</a>
                    </div>                
                </div> 
                <div class="titulo col-md-8">
                        <h1>Direito do Trabalho</h1>
                        <div class="explicacao"><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla."</p>
                        <a class="questoes-botao" href="{{ url('/cursos/1') }}">Questões<a/>
                        </div>                    
                </div> 
                         
            </div>
            <div class="clearfix"></div>
            
            <div class="simulados col-md-12">
                <div class="video-pdf col-md-4">
                    <div class="video">
                        <img src="img/video-icone.png" alt="icone de video"/>
                        <a href="#">ver video</a>
                    </div>
                    <div class="pdf">
                        <img src="img/pdf-icone.png" alt="icone de video"/>
                        <a href="#">ler pdf</a>
                    </div>                
                </div> 
                <div class="titulocol-md-8">
                        <h1>Direito Processual do Trabalho</h1>
                        <div class="explicacao"><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla."</p>
                        <a class="questoes-botao" href="{{ url('/cursos/2') }}">Questões<a/>
                        </div>                    
                </div> 
                         
            </div>
            <div class="clearfix"></div>
        </article>
    </section>
</div>
@endsection
