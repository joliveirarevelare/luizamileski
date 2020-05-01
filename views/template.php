<html>
	<head>
		<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width,user-scalable=0" />

<link rel="stylesheet" type="text/css" href="/assets/css/template.css" />

<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css" />

<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



<title>Luiza Mileski</title>
<link rel="shortcut icon" href="/assets/images/logo.jpg" type="image/ico" />
	</head>
	<body>
		 <div class="barra">    
  </div>
  
  <div class="container">
    <div class=topo>
        <div>
          <a href="/"><img id="logo" src="/assets/images/logo.jpg" height="200px"></a>
        </div>

              <div class="topoesq">
              <b>Siga nossas redes socias:</b>
              <a href="http://www.facebook.com.br/Luiza-Mileski-535758559941473/" target="_blank"><img src=/assets/images/facebook.png height="25px"></a>
              <a href="http://www.instagram.com/luizamileski/" target="_blank"><img src=/assets/images/instagram.jpg height="25px"></a>
              <a href="http://www.twitter.com.br"><img src=/assets/images/twitter.png height="25px"></a>
              </div>


        
        <div class="topodir">
          <a href="/contato" class="contato">
            <img src=/assets/images/whats.jpg height="25px">
            (14) 99876-5432
          </a>
          <div class=topodirint>
            <a href="/login" id="entrada">
              <img class="porta" src="/assets/images/entrar.png" height="24px"/>
              <div class="entrar">Entrar</div>
            </a>  
            <a href="/carrinho" id="compras">
              <img class="cestinha" src="/assets/images/cesta.png" height="24px"/>
              <div id="cesta">Minha Cesta</div>
            </a>
          </div>
          <form> 
              <input type="text" name="busca" placeholder="O que você procura?"/>
              <span>
                  <img src=/assets/images/lupa.png height="25px">
              </span>
          </form>
        </div>
    </div>
  </div>
  		<nav class="menu">      
    <div class="menu-bar">
      <div>
        <ul class="girls">
          <li class=><a href="/categoria/ver/1">Meninas</a></li>
          <ul class="hidden">
            <li><a href="/categoria/ver/7">1 a 3 anos</a></li>
            <li><a href="/categoria/ver/8">4 a 6 anos</a></li>
            <li><a href="/categoria/ver/9">8 a 12 anos</a></li>
            <li><a href="/categoria/ver/10">12 a 16 anos</a></li>
          </ul>
        </ul>
      </div>


      <div>
        <ul class="boys">
          <li class=><a href="/categoria/ver/2">Meninos</a></li>
          <ul class="hidden">
            <li><a href="/categoria/ver/11">1 a 3 anos</a></li>
            <li><a href="/categoria/ver/12">4 a 6 anos</a></li>
            <li><a href="/categoria/ver/13">8 a 12 anos</a></li>
            <li><a href="/categoria/ver/14">12 a 16 anos</a></li>
          </ul>
        </ul>
      </div>

      <div>
        <ul class="babys">
          <li class=><a href="/categoria/ver/3">Bebês</a></li>
          <ul class="hidden">
            <li><a href="/categoria/ver/15">Tamanho Rn</a></li>
            <li><a href="/categoria/ver/16">Tamanho P</a></li>
            <li><a href="/categoria/ver/17">Tamanho M</a></li>
            <li><a href="/categoria/ver/18">Tamanho G</a></li>
          </ul>
        </ul>
      </div>

      <div>
        <ul class="Teens">
          <li class=><a href="/categoria/ver/4">Teens</a></li>
          <ul class="hidden">
            <li><a href="/categoria/ver/19">12 a 18 anos</a></li>
          </ul>
        </ul>
      </div>

      <div>
        <ul class="adults">
          <li class=><a href="/categoria/ver/5">Adultos</a></li>
          <ul class="hidden">
            <li><a href="/categoria/ver/20">P e M Masc.</a></li>
            <li><a href="/categoria/ver/21">P e M Fem.</a></li>
            <li><a href="/categoria/ver/22">G e GG Masc.</a></li>
            <li><a href="/categoria/ver/23">G e GG Fem.</a></li>
          </ul>
        </ul>
      </div>

      <div>
        <ul class="bands">
          <li class=><a href="/categoria/ver/6">Marcas</a></li>
          <ul class="hidden">
          </ul>
        </ul>
      </div>

      
    
  </div>      
  </nav>     
    <div class="faixa">
    </div>

		<div class="container">
			<?php $this->loadViewInTemplate($viewName, $viewData); ?>
		</div>
		
</html>