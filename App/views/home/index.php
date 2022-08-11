<!DOCTYPE html>
<html lang='pt-br'>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <style>
    	li {

    		font-weight: bolder;
    		letter-spacing: 2px;
    		}

    	li :hover {
    		color: #18ffff;
    		}

    	#botao {
    		font-weight: bolder;
    		letter-spacing: 3px;
    		}
    		
    	#divbotao :hover {
    		border-radius:60px  ;
    		}

  </style>        

	<title>API - Exame da OAB</title>
</head>		
 
<body>

	 <nav>
	    <div class="nav-wrapper indigo darken-4">
	      
	      <ul id="nav-mobile" class="left">
	        <li><a href="<?php URL_BASE ?>/">.: Home</a></li>
	        <li><a href="#">.: Documentação</a></li>
	        <li><a href="<?php URL_BASE ?>/client.php" title="Faça download de um script PHP simples para consumo dos dados desta API" target="_blancK">.: REST Client Script</a></li>
	      </ul>
	    	
	      <a href="<?php URL_BASE ?>/" class="brand-logo center hide-on-med-and-down" title="O futuro da advocacia está na ciência de dados">
            <img title="" src="<?php URL_BASE ?>/images/justica.svg" />
	      </a>
	      	
	    </div>
	  </nav>



<div class="container">
		<div class="container" style="padding: 30px;">
			
			<h1 class="red-text text-darken-4 " style="text-shadow: 4px 4px #ffebee; font-weight: bolder;">
        Exame da OAB API
      </h1>

			<h4 class="blue-text text-darken-1">Confiável, grátis e fácil de usar</h4> 
			<br>
			<blockquote>
				<p class="flow-text">Aqui você encontra estatísiticas do Exame da Oab 2010/2021</p>
				<p class="flow-text">Os dados estão nos formato { JSON }</p>

				<p class="flow-text">Eles são públicos e podem ser <a href="https://examedeordem.oab.org.br/DadosEstatisticos" target="_blancK" title="Clique para visitar o site da OAB">verificados no site da OAB</a>
        <p class="flow-text">
            O futuro da advocacia está na ciência de dados
        </p>
			</blockquote>
			<br>
			<div id="divbotao">

				<a id="botao" href="" class="waves-effect waves-light btn indigo darken-4" >
					SAIBA COMO UTILIZAR
				</a>
			</div>

		</div>
	</div>
<br>




 <footer class="page-footer red accent-4" style="margin-top: 30px;">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">PROJETO EXPLICADO</h5>
                <blockquote>
                <p class="flow-text" style="text-align: justify; font-weight: 100; font-size: 20px;">
                Este projeto visa disponiblizar dados estruturados do exame da OAB no formato JSON que é, atualmente, o formato preferível para intercâmbio de dados em reazão de sua simplicidade e facilidade de uso e de conversão. A inteface com o usuário se dá por meio de uma API REST de livre acesso. O público-alvo são todos aqueles interessados em ciência, análise e visualização de dados, juristas ou não. </p>
              </blockquote>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">ENTRE EM CONTATO!</h5>
                <br>
                
                <ul>
                  <li>
                    <a class="grey-text text-lighten-3" href="https://www.facebook.com/paulo.andrade.brazilian" target="_blanck">
                      <img title="" src="<?php URL_BASE ?>/images/facebook.svg" />
                      /paulo.andrade.brazilian
                    </a>
                  </li>
<br>
                  <li>
                      <img title="" src="<?php URL_BASE ?>/images/google.svg" />
                      <a class="grey-text text-lighten-3" href="mailto:eupauloandrade@gmail.com" target="_blanck">
                      eupauloandrade@gmail.com
                    </a>
                  </li>
<br>
                  <li>
                    <a class="grey-text text-lighten-3" href="https://www.linkedin.com/in/devpauloandrade/" target="_blanck">
                      <img title="" src="<?php URL_BASE ?>/images/linkedin.svg" />
                      /in/devpauloandrade/
                    </a>
                  </li>
<br>
                  <li>
                    <a class="grey-text text-lighten-3" href="https://pt.stackoverflow.com/users/291458/dev-paulo-andrade" target="_blanck">
                      <img title="" src="<?php URL_BASE ?>/images/stackoverflow.svg" />
                      /dev-paulo-andrade
                    </a>
                  </li>
<br>
                  <li>
                      <a class="grey-text text-lighten-3" href="https://wa.me/5583998052853" target="_blanck">
                      <img title="" src="<?php URL_BASE ?>/images/whatsapp.svg" />
                      (83) 99805-2853
                    </a>
                  </li>
                </ul>
              
              </div>
            </div>
          </div>
          <div class="footer-copyright" >
            <div class="container">
            	<center>
            		© 2022 Copyright - Dev. Paulo Andrade	
            	</center>
            </div>
          </div>
        </footer>
       
</body>
</html>