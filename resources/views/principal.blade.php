<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--meta Barra do governo-->
    <meta property="creator.productor" content="http://estruturaorganizacional.dados.gov.br/id/unidade-organizacional/103859">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--style Barra do governo-->
    <style>.quickbutton-separator{width:100%;border-bottom:1px solid #e5e5e5;margin-top:5px;margin-bottom:5px}.quickbutton-heading{font-weight:bold;text-transform:uppercase;color:#555;padding:0;margin-top:5px;margin-bottom:5px;border-bottom:2px solid #337ab7}.quickbutton .btn{height:65px;;margin-bottom:5px}.quickbutton .btn-block+.btn-block{margin-top:0px}.quickbutton .btn img{max-height:100%;top:0;bottom:0;left:0;right:0;position:absolute;margin:auto;padding:2px}@media (max-width:767px){.quickbutton .row{margin-left:0;margin-right:0}}#barra-brasil div,#barra-brasil a,#barra-brasil ul,#barra-brasil li{margin:0;padding:0;font-size:100%;font-family:inherit;vertical-align:baseline}#barra-brasil ul{list-style:none}@font-face{font-family:"Open Sans";font-style:normal;font-weight:700;src:local("Open Sans Bold"),local("OpenSans-Bold")}#barra-brasil{height:32px;background:#f1f1f1;font-weight:bold;font-size:12px;line-height:32px;font-family:"Open Sans",Arial,Helvetica,sans-serif;border-bottom:1px solid #dfdfdf;box-sizing:content-box}#barra-brasil a{text-decoration:none}body.contraste #barra-brasil{background:#000 !important}div#wrapper-barra-brasil{position:relative;overflow:hidden;margin:0 auto;width:100%;max-width:960px;height:100%}#barra-brasil .brasil-flag{float:left;padding:7px 0 6px;width:115px;height:19px;border-right:2px solid #dfdfdf}#barra-brasil .brasil-flag .link-barra{display:block;padding-left:42px;width:43px;background:url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNiIgaGVpZ2h0PSIxOSIgdmlld0JveD0iMCAwIDEwMDAwMCA3MDAwMCI+PHBhdGggZmlsbD0iIzAwOTIzRiIgZD0iTTAgMGgxMDAwMDB2NzAwMDBIMHoiLz48cGF0aCBmaWxsPSIjRjhDMzAwIiBkPSJNNTAwMDAgODUwMEw4NTAwIDM1MDAwbDQxNTAwIDI2NTAwIDQxNTAwLTI2NTAwTDUwMDAwIDg1MDB6Ii8+PGNpcmNsZSBmaWxsPSIjMjgxNjZGIiBjeD0iNDk5NjMiIGN5PSIzNTAwMCIgcj0iMTc0NjQiLz48cGF0aCBmaWxsPSIjRkZGIiBkPSJNMzk1MzcgMjk2MDVjMTAzODggMCAxOTkxMSAzODIxIDI3MjM4IDEwMTI3IDI0Mi04NTAgNDIxLTE3MjYgNTMyLTI2MjItNzU5Ny02MTYyLTE3MjY1LTk4NjItMjc3NzAtOTg2Mi0xODIxIDAtMzYxNyAxMTQtNTM4MiAzMzAtMzc3IDgwNS02OTUgMTY0Mi05NDggMjUwNyAyMDY1LTMxNiA0MTc5LTQ4MCA2MzMwLTQ4MHoiLz48L3N2Zz4K") 8px center no-repeat;text-transform:uppercase;line-height:19px}#barra-brasil .acesso-info{position:absolute;left:130px}#barra-brasil .list{position:absolute;top:0;right:0}#barra-brasil .list .first{border-left:2px solid #dfdfdf}#barra-brasil .list-item{display:inline-block;height:32px;line-height:32px;border-right:2px solid #dfdfdf}#barra-brasil .list-item a{padding:8px 15px 8px 13px}#barra-brasil .link-barra{color:#606060}body.contraste #barra-brasil .link-barra{color:#FF0 !important;text-decoration:underline}#menu-icon{position:absolute;top:3px;border-top:15px double #606060;border-bottom:5px solid #606060;display:none;width:20px;right:5px}@media only screen and (max-width:959px){#barra-brasil #menu-icon{display:inline-block;padding:5px 3px 0px 3px}#barra-brasil .list .first{border-left:1px solid #dfdfdf}#barra-brasil nav:hover #menu-icon,#barra-brasil nav:active #menu-icon,#barra-brasil nav:focus #menu-icon{background-color:#DDD}body.contraste #barra-brasil nav:hover #menu-icon,body.contraste #barra-brasil nav:active #menu-icon,body.contraste #barra-brasil nav:focus #menu-icon{background-color:#606060 !important}#barra-brasil ul.list,#barra-brasil ul.list:active,#barra-brasil ul.list:focus{overflow:hidden;height:0px;transition:0.3s;padding-top:32px;width:auto;position:absolute;z-index:9}#barra-brasil .list-item{display:block;text-align:center;height:30px;background:#EEE;border:1px solid #dfdfdf}#barra-brasil .list-item a{padding:8px 30px 8px 28px}body.contraste #barra-brasil .list-item{background:#000 !important}body.contraste #menu-icon{border-top:15px double #fff !important;border-bottom:5px solid #fff !important}#barra-brasil .list a:active li,#barra-brasil .list a:focus li,#barra-brasil .list a:hover li{background:#DDD}body.contraste #barra-brasil .list a:active li,body.contraste #barra-brasil .list a:focus li,body.contraste #barra-brasil .list a:hover li{background:#606060 !important}#barra-brasil nav:active ul.list,#barra-brasil nav:focus ul.list,#barra-brasil nav:hover ul.list{height:150px;transition:0.5s}div#wrapper-barra-brasil{overflow:visible}}@media screen and (min-width:960px){#wrapper-barra-brasil{width:960px}}@media print{#barra-brasil .list{display:none}#barra-brasil .acesso-info .link-barra:after{content:" - Barra GovBr"}}

    </style>

 </head>
 <body>
<!--Barra do governo-->
  <style>
    #barra-brasil #brasil-vlibras .link-vlibras{display:inline-table !important}
    
    .card:hover{
      border-color:#113d63(13, 110, 253);
      box-shadow: 0 0 10px 2px rgba(19, 57, 114, 0.6);
    }

    

    
  
  </style>
    <div id="barra-brasil">
         <div id="wrapper-barra-brasil">
                <div class="brasil-flag"><a href="http://brasil.gov.br" class="link-barra">Brasil</a>
                </div>
                <span class="acesso-info"><a href="http://brasil.gov.br/barra#acesso-informacao" class="link-barra">Acesso ?? informa????o</a></span>
                <nav>
                    <ul class="list"><li><a href="#" id="menu-icon"></a>
                      </li><li class="list-item first"><a href="http://brasil.gov.br/barra#participe" class="link-barra">Participe</a>
                      </li><li class="list-item"><a href="http://www.servicos.gov.br/?pk_campaign=barrabrasil" class="link-barra" id="barra-brasil-orgao">Servi??os</a>
                      </li><li class="list-item"><a href="http://www.planalto.gov.br/legislacao" class="link-barra">Legisla????o</a>
                      </li><li class="list-item last last-item"><a href="http://brasil.gov.br/barra#orgaos-atuacao-canais" class="link-barra">Canais</a></li>
                    </ul>
                </nav>
         </div>
     </div>
<!--fim Barra do governo-->

    <!-- banner -->
  <div class="logo" style="background-color: #466d83;" id="topo">   
    <div class="container" >
            
        <div class="col-sm-8">
                
        <!--<img width="80" height="80" src="img/ifmg-vertical-branca.png" class="img-responsive" alt="Imagem Responsiva"> -->
            <span class="orgtitle" style="color:white;">Instituto Federal de Educa????o, Ci??ncia e Tecnologia de Minas Gerais</span> 
            <h1 class="orgname" style="color:white;"> Campus Formiga </h1> 
            <span class="orgsubordination" style="color:white;">Minist??rio da Educa????o</span> 
       
        </div>

    </div>
</div>
<!--banner --> 



    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light text-black shadow-sm" style="background-color: #67a8cd; ">
            <div class="container">
                <a class="navbar-brand"  href="{{ url('/') }}">
                <strong>Banco de Oportunidades</strong> para Vagas de Est??gio e Trabalho
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Acesse</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Quero me cadastrar</a>
                                </li>
                            @endif
                        @else


                        <li class="nav-item">
                        <a  class="nav-link" href="{{ url('/home') }}" ><i class="fa fa-th"></i> Meu espa??o</a>
                        </li>              
                                              
                        
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>



        <main class="py-4"><!-- Conteudo da p??gina-->
                          

          <div class="container">
            <div class="row justify-content-center ">
               <div class="card-group">                
                       
                <div class="card m-2" >
                  <a href="https://formiga.ifmg.edu.br">
                  <img src='/image/setorestagio3.png' class="card-img-top" alt="..." style="opacity: 0.8"></a> 
                  <div class="card-body">
                    <h5 class="card-title">O setor de est??gios do IFMG - Campus Formiga</h5>
                    <p class="card-text">Esta se????o cont??m informa????es sobre o setor de est??gios, legisla????o e documenta????o para a formaliza????o da pr??tica de est??gio.</p>
                  </div>
                </div>               
                
                <div class="card m-2" >
                  <img src="/image/oportunidades3.png" class="card-img-top" alt="..." style=" opacity: 0.9">
                  <div class="card-body ">
                    <h5 class="card-title">Oportunidades de Est??gio e Emprego</h5>
                    <p class="card-text">Conhe??a as vagas dispon??veis para voc??, estudante e egresso que desejam uma oportunidade de est??gio e trabalho.</p>
                  </div>
                </div>             
               
                <div class="card m-2" >
                  <img src="/image/convenios3.png" class="card-img-top" alt="..." style="opacity: 0.8">
                  <div class="card-body ">
                    <h5 class="card-title">Empresas Conveniadas</h5>
                    <p class="card-text">Conhe??a os nossos parceiros e seja voc?? tamb??m uma empresa conveniada com o IFMG - Campus Formiga.</p>
                  </div>
                </div>
                                
            </div>  <!-- fim card-group -->
          </div> <!-- fim row -->            
            
            <div class="row justify-content-center">
              <div class="card-group">           
                <div class="card m-2">
                  <a href="https://formiga.ifmg.edu.br">
                  <img src="/image/cursos3.png" class="card-img-top" alt="..." style=" opacity: 0.7"></a>
                  <div class="card-body">
                    <h5 class="card-title">Programas de est??gio, cursos e oficinas de extens??o</h5>
                    <p class="card-text">Aos alunos e egressos, fiquem atentos aos programas de est??gio, cursos e oficinas de extens??o que estejam dispon??veis.</p>
                  </div>
                </div>
              
                <div class="card m-2">
                  <img src="/image/cursos3.png" class="card-img-top" alt="..." style=" opacity: 0.8">
                  <div class="card-body">
                    <h5 class="card-title">Programas de est??gio, cursos e oficinas de extens??o</h5>
                    <p class="card-text">Aos alunos e egressos, fiquem atentos aos programas de est??gio, cursos e oficinas de extens??o que estejam dispon??veis.</p>
                  </div>
                </div>
                <div class="card m-2">
                  <img src="/image/cursos3.png" class="card-img-top" alt="..." style=" opacity: 0.8">
                  <div class="card-body">
                    <h5 class="card-title">Programas de est??gio, cursos e oficinas de extens??o</h5>
                    <p class="card-text">Aos alunos e egressos, fiquem atentos aos programas de est??gio, cursos e oficinas de extens??o que estejam dispon??veis.</p>
                  </div>
                </div>
              </div>   <!-- fim card-group -->  
            </div> <!-- fim row -->
          </div> <!-- fim container -->                           
                         
                              
                    
        </main> <!-- Fim Conteudo da p??gina-->
    </div>



    <!-- Footer-->
    <footer class="bg-light text-center text-white" >
    
    
    <!-- Grid container 

    <div class="container p-4 pb-0" >
    
    <section class="mb-4 " >
       
      <a
        class="btn btn-primary btn-floating m-1 rounded-circle"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fa fa-facebook-f fa-lg"></i></a>

      
      <a
        class="btn btn-primary btn-floating m-1 rounded-circle"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fa fa-twitter"></i
      ></a>

      
      <a
        class="btn btn-primary btn-floating m-1 rounded-circle"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fa fa-google"></i></a>

      
      <a
        class="btn btn-primary btn-floating m-1 rounded-circle"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fa fa-linkedin"></i
      ></a>

  </div>
  ----Grid container -->


  <!-- Copyright -->
  <div class="text-center p-3 text-black shadow-sm" style="background-color: #67a8cd;">
      <strong>Banco de Oportunidades </strong> - Desenvolvido por Rog??rio Canto 
  </div>
    <!-- Copyright -->
</footer>




</body>
</html>
