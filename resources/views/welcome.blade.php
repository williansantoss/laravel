<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">       
            
    </head>
    <body>
        <div>
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

            <div class="content">                
                    <?php 
                        $url = file_get_contents('https://rachacuca.com.br/quiz/36043/relacao-com-o-trabalho/');
                        preg_match_all("|<[^ol>]+>(.*)</[^ol>]+>|U",
                            $url,
                            $out, PREG_SET_ORDER);
                       // print_r($out);
                        $i = 80;
                        foreach ($out as $saida) {
                            print_r($saida[1]."<br>");
                            $i++;
                        }
                        //echo $out[0][0] . ", " . $out[0][1] . "\n";
                        //echo $out[1][0] . ", " . $out[1][1] . "\n";
                    ?>    
            </div>
        </div>
    </body>
</html> 
<!-- <style>
/*------------------------------------------------------------------------------------CSS GERAL*/
*{padding: 0; margin: 0; box-sizing:border-box; list-style: none; text-decoration: none; }

html,body{width: 100%; height: 100%; font-family: 'Open Sans', sans-serif;}

header{width: 100%; height: 90%; background:#21263f;}
.livro-azul,.livro-laranja{position:absolute; top:30%;}
.livro-azul{left:17%;}
.livro-laranja{right:17%;}
nav{width: 100%; height: 64px; background-color: #fff; position: fixed; z-index: 999; border-bottom: 1px solid #efefef;}
.menu{max-width:1280px; margin: 0 auto; padding: 16px 0;}
.logo,.ola{float: left; color:#fff;}
li, .ola, .perfil{float:right; display: inline-block; margin-left:10px; padding: 6px;}
li a{color: #21263f;}
li a:hover{text-decoration: underline;}
.entrar{background-color:#21263f; padding:8px; text-transform: uppercase; color: #fff;}
.entrar:hover{background-color: #fff; color:#21263f; text-decoration: none; border: 1px solid #21263f; }
header h1{text-align: center; position:relative; top: 35%; color: #fff; font-size: 46px; z-index:998;}
header p{text-align: center; position:relative; top: 40%; color: #fff; font-family:serif; font-size: 24px; color: #02050f; z-index:998; }
h2{line-height: 60px; text-transform: uppercase;}
section{width: 100%;}
article{max-width: 1000px; margin: 80px auto; color: #247075; line-height: 22px;}
.video{float: left; width: 60%; }
.video p{width: 500px;  font-weight: lighter; font-size: 18px; line-height: 26px;}
.noticias{float:right; width: 40%; border: 1px solid #efefef; padding: 20px 40px;  font-weight: lighter;}
.ver-mais a{text-decoration: underline; color: #f4b442;}
.preco{height: 300px; width: 100%; background-color: #37a8ae; color: #fff; text-align: center; }
.valor{width:60%; margin: 30px auto;}
.valor span{font-size: 60px; color: #fff; margin-bottom: 10px;}
.valor p{padding: 20px;}
.matricule-se{background-color:#F09C00; color: #fff; padding: 10px 40px; border-radius: 20px; font-size: 18px;}
.matricule-se:hover{background-color:#FFA727;}
.login{padding-top:300px; width:300px; margin: 0 auto; color: #d8f1f3;}
legend{font-size: 26px; margin-bottom: 4px;}
input{width: 300px; height: 40px; padding: 4px; margin-top: 6px;}
input[type="submit"]{background-color: #37a8ae; color:#fff; margin: 6px 0; border:none;  cursor: pointer;}
input[type="submit"]:hover{background-color: #fff; color:#37a8ae; }
.sou-cadastrado a, .rec-senha a{color:#d8f1f3;}
.sou-cadastrado a:hover, .rec-senha a:hover{text-decoration: underline;}
footer{height: 230px; width: 100%; background-color: #d8f1f3;}
.clearfix{clear: both;}

/*------------------------------------------------------------------------------------CSS AREA DO ALUNO
.navegacao{width: 100%; height: 64px; background-color: #37a8ae; position: relative;}
.menu-aluno{max-width: 1000px; margin: 0 auto; padding: 16px 0; color: #fff;}
.painel{height: 100%;}
.painel ul li{width:100%; padding-left: 30px; display: block; border-bottom: 1px solid #fff; text-transform: uppercase;}
.painel ul li:hover{background-color: #fff;}
.lateral-nav{width:20%; height:100%; float:left; background-color: #d8f1f3; color: #37a8ae;}
.rodape{width: 100%; height:100px;  background-color: #efefef;}
.cursos{width:100%; height:100%;}
.cursos h1{text-align: center; color:#37a8ae; padding: 30px; text-transform: uppercase;}
.cursos h2 {text-align: center; color:#37a8ae; text-transform: uppercase; font-size: 18px; line-height: 30px;}
.curso{width:300px; height: 300px; padding:6px; float: left; border:1px solid #efefef; margin-left: 30px;}*/
</style>
<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>TESTE</title>
<meta name="name" description="descrever aqui">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="estilo.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,400italic,600,600italic,700,700italic,300,300italic,800italic' rel='stylesheet' type='text/css'>
</head>

    <body>
        <header>
            <nav>
                <div class="menu">
                    <div class="logo"><a href="index.html"><img src="area-aluno/img/logo.png"></a></div>
                    <ul>
                        <li><a class="entrar" href="{{ url('/login') }}">entrar</a></li>
                        <li><a href="{{ url('/register') }}">cadastre-se</a></li>
                    </ul>
                </div>
            </nav>
                <h1>Direito do Trabalho e <br>Direito Processual do<br> Trabalho</h1>
                <p>Estudos para Concurso e OAB <br><br><a class="matricule-se" href="{{ url('/register') }}">Matricule-se</a></p>
            
        </header>
        <img class="livro-azul" src="area-aluno/img/livro-azul.png" alt="livro ilustrado"/>
        <img class="livro-laranja" src="area-aluno/img/livro-laranja.png" alt="livro ilustrado"/>
        <section>
            <article>
                <div class="video">
                   <iframe  width="500" height="300" src="https://www.youtube.com/embed/ZXN6tgE4g_4" frameborder="0" allowfullscreen> </iframe>
                   <h2>Sobre</h2>
                   <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt</p>
                </div>

                <aside class="noticias">

                    <h2>Notícias</h2>
                    <hr><br>
                    <h3>Noticia 1</h3>
                        <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo...  <span class="ver-mais"><a href="#">ver mais</a></span></p><br>
                    <h3>Noticia 2</h3>
                        <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo...  <span class="ver-mais"><a href="#">ver mais</a></span></p><br>
                    <h3>Noticia 3</h3>
                        <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo...  <span class="ver-mais"><a href="#">ver mais</a></span></p><br>
                </aside>
                <div class="clearfix"></div>
            </article>
        </section>
        <section class="preco">
            <article>
                    <div class="valor">
                        <h2>Preço</h2>
                        <span>00R$</span>
                        <p>Tenha acesso ilimitado a todos os cursos.</p>
                        <a class="matricule-se" href="{{ url('/register') }}">Matricule-se</a>
                    </div>
            </article>
        </section>
        <footer>

        </footer>
    </body>
</html> -->