<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universo do Bruxo - Chapéu seletor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
        <!-- navbar inicial -->
<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="img/harrypotter.jpg" alt="" width="40" height="30" class="d-inline-block align-text-top">
      Universo do Bruxo
    </a>
  </div>
</nav>
<div class="bg-dark"> <br> <!-- Fim navbar -->
<div class="p-3 mb-2 bg-dark text-white" style="text-align: center;">
<h2 class ="">BEM VINDO AO CHAPÉU SELETOR</h2><br>

<div class="container">
<p> O Chapéu Seletor é um artefato consciente de Hogwarts que determina magicamente para qual das quatro Casas cada novo aluno vai ser mandado. Essas quatro Casas são Grifinória, Lufa-Lufa, Corvinal e Sonserina. </p>
</div>

<div class="container text-center">
<div class="row">
<div class="col">
<form  method="POST">
    <label for="nome"> Informe seu nome e clique no chapéu :  </label><input type="text" id="nome" name="nome"> <br><br>
    </div>
   <div class="container" style="margin: 2px 0px -140px 0px ;">
    <input type="image" src="img/chapeuseletor.jpg" style="" height="70%" width="30%" value="Verificar Casa"/> 
    
</div>
</div>

  
    
<?php
 
 $casa = array("GRIFINÓRIA","SONSERIANA","CONVINAL","LUFA-LUFA"); 
 $numcasa = sizeof($casa);

    if (isset($_POST["nome"]) && !empty($_POST["nome"])){
       $nome = $_POST["nome"];
    
    $sorteio[1] = $casa[rand(0,$numcasa - 1)];
    
    

    echo"<div class='container' style='text-align:center'><h3 style='color: white'><b> Parabéns " .$nome. " a casa sortida foi "   .$sorteio[1]. "  .</b></h3></div></div><br><br>";


     }else{
         
     }

?>

<!-- carrossel -->

  
<div class="container">
<div class="card-group">
  <div class="card border border-3">
    <img src="img/grifi.jpg" class="card-img-top" alt="Grifinória">
    <div class="card-body">
      <h5 class="card-title">Grifinória</h5>
      <p class="card-text"><i>"Quem sabe sua morada é a Grifinória
Casa onde habitam os corações indômitos.
Ousadia e sangue-frio e nobreza
Destacam os alunos da Grifinória dos demais."<br>
— O Chapéu Seletor</i></p>
    </div>
  </div>

  <div class="card border border-3">
    <img src="img/corvinal.jpg" class="card-img-top" alt="Cornival">
    <div class="card-body">
      <h5 class="card-title">Cornival</h5>
      <p class="card-text"><i>"Ou será a velha e sábia Corvinal,
A casa dos que têm a mente sempre alerta,
Onde os homens de grande espírito e saber
Sempre encontrarão companheiros seus iguais."<br>
— O Chapéu Seletor</i></p>
    </div>
  </div>

  <div class="card border border-3">

    <img src="img/sonserina.jpg" class="card-img-top" alt="Sonserina">
    <div class="card-body">
      <h5 class="card-title">Sonserina</h5>
      <p class="card-text"><i>"Ou quem sabe a Sonserina será a sua casa
E ali fará seus verdadeiros amigos,
Homens de astúcia que usam quaisquer meios
Para atingir os fins que antes colimaram."<br>
— O Chapéu Seletor</i></p>
    </div>
  </div>

  <div class="card border border-3">

    <img src="img/lufa.jpg" class="card-img-top" alt="Lufa-Lufa">
    <div class="card-body">
      <h5 class="card-title">Lufa-Lufa</h5>
      <p class="card-text"><i>"Quem sabe é na Lufa-Lufa que você vai morar,
Onde seus moradores são justos e leais
Pacientes, sinceros, sem medo da dor."<br>
— O Chapéu Seletor</i></p>
    </div>
    
  </div>
</div>
</div>
   <br><br>






<div class="container">
<div class="row">
<div class="p-3 mb-2 bg-dark text-white" style="text-align: center;">
<h2> Escola de Magia e Bruxaria de Hogwarts</h2><br>


    <h3 class="card-title">Grifinória</h3>
    </div>
    <div class="card col-9" style="width: 20rem; margin: 0% 8% 3%; " >
  <img src="img/grifibrasao.png" class="card-img-top" alt="Brasão Grifinória">
  <div class="card-body">
  
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><b>Fundador: </b> Godrico Gryffindor</li>
    <li class="list-group-item"><b>Cores da casa:</b>  Escarlate e ouro</li>
    <li class="list-group-item"><b>Animal:</b> Leão</li>
    <li class="list-group-item"><b>Elemento:</b> Fogo</li>
    <li class="list-group-item"><b>traços:</b> Coragem | Bravura | Ousadia | Nobreza | Cavalheirismo |</li>
    <li class="list-group-item"><b>Diretor:</b> Godric Grifinória † | Minerva McGonagall (anteriormente)</li>
    <li class="list-group-item"><b>Fantasma:</b> Nick Quase Sem Cabeça</li>
    <li class="list-group-item"><b>Sala comunal:</b>Torre da Grifinória</li>
  </ul>
</div> 
</div>

    
 

    <p class="col-6" id="TextoCasa">A Grifinória, fundada por Godrico Gryffindor, é uma das quatro casas da Escola de Magia e Bruxaria de Hogwarts. Ao estabelecê-la, Godrico instruiu o Chapéu Seletor a classificar estudantes que obtivessem características as quais ele mais valorizava, como a coragem, o cavalheirismo e a determinação. Suas cores são o escarlate e o ouro e seu animal emblemático é um leão. Sir Nicholas de Mimsy-Porpington, também conhecido como "Nick Quase Sem Cabeça" é o fantasma patrono da casa.

A casa corresponde aproximadamente ao elemento fogo, e é por esta razão, que suas cores foram escolhidas; elas também podem corresponder a um leão; com o escarlate representando sua crina e cauda e o ouro simbolizando sua pelagem.</p>
    
  </div>
</div> 

<div class="container">
<div class="row">
<div class="p-3 mb-2 bg-dark text-white" style="text-align: center;">
  <h3 class="card-title">Cornival</h3><br>
    </div>
<div class="card col-9 " style="width: 19rem; margin: 0% 8% 3%; ">
<img src="img/cornibrasao.png" class="card-img-top" alt="Brasão Cornival">
<div class="card-body">

<ul class="list-group list-group-flush">
<li class="list-group-item"><b>Fundador: </b> Rowena Ravenclaw</li>
<li class="list-group-item"><b>Cores da casa:</b>  Azul e bronze</li>
<li class="list-group-item"><b>Animal:</b> Águia</li>
<li class="list-group-item"><b>Elemento:</b> Ar</li>
<li class="list-group-item"><b>traços:</b> Sagacidade | Aprendizagem | Sabedoria | Aceitacão | Inteligencia | Criatividade |</li>
<li class="list-group-item"><b>Diretor:</b> Rowena Ravenclaw † | Fílio Flitwick</li>
<li class="list-group-item"><b>Fantasma:</b> Dama Cinzenta</li>
<li class="list-group-item"><b>Sala comunal:</b>Sala Comunal da Corvinal</li>
</ul>
</div> 
</div>


<p class="col-6" id="TextoCasa"> A Corvinal, fundada por Rowena Ravenclaw, é uma das quatro casas da Escola de Magia e Bruxaria de Hogwarts. Seus membros, comumente, são caracterizados por sua inteligência, aprendizado e sabedoria. Suas cores são o azul e bronze, o animal emblemático é uma águia e sua fantasma patrono é a Dama Cinzenta. A casa possui um diretor notável, o Mestre de Feitiços Fílio Flitwick.
A casa corresponde aproximadamente ao elemento ar, e é por essa razão que suas cores foram escolhidas; o azul representa o céu e o bronze pode representar as penas de uma águia, ambos tendo muita relação com tal elemento.</p>

    </div>
    </div>


    <div class="container">
<div class="row">
<div class="p-3 mb-2 bg-dark text-white" style="text-align: center;">
<h3 class="card-title">Sonserina</h3><br>
    </div>

<div class="card col-9 " style="width: 19rem; margin: 0% 8% 3%; ">
<img src="img/sonsebrasao.png" class="card-img-top" alt="Brasão Sonserina">
<div class="card-body">

<ul class="list-group list-group-flush">
<li class="list-group-item"><b>Fundador: </b> Salazar Slytherin</li>
<li class="list-group-item"><b>Cores da casa:</b> Verde e prata</li>
<li class="list-group-item"><b>Animal:</b> Serpente</li>
<li class="list-group-item"><b>Elemento:</b> Água</li>
<li class="list-group-item"><b>traços:</b> Despezo pelas regras | Determinação | Criatividade | Orgulho | Astúcia | Ambição | Autopreservação | </li>
<li class="list-group-item"><b>Diretor:</b> Salazar Sonserina† | Horácio Slughorn | Severo Snape†</li>
<li class="list-group-item"><b>Fantasma:</b> Barão Sangrento</li>
<li class="list-group-item"><b>Sala comunal:</b>
Masmorra da Sonserina</li>
</ul>
</div> 
</div>

<p class="col-6" id="TextoCasa"> A Sonserina, fundada por Salazar Slytherin, é uma das quatro casas da Escola de Magia e Bruxaria de Hogwarts. Ao estabelecer a casa, Salazar instruiu o Chapéu Seletor a escolher somente alunos que obtivessem algumas de suas características particulares as quais ele prezava. Entre elas incluem a astúcia, desenvoltura, liderança e ambição. Vários membros da Sonserina possuem uma certa tendência em formar grupos, muitas vezes adquirindo líderes, o que exemplifica ainda mais as qualidades ambiciosas de Slytherin.
O fundador, de acordo com o próprio Chapéu Seletor, valorizava e favorecia estudantes de sangue puro. Entretanto, qualquer aluno que possui um status sanguíneo diferente, pode ser colocado na casa.Seu animal emblemático é uma serpente e suas cores são verde e prata. Há dois diretores notáveis da Sonserina; Horácio Slughorn que assumiu o cargo duas vezes (primeiro se aposentou em 1981 e retornou como diretor em 1997 até pouco antes de 2016) e Severo Snape. O fantasma patrono da casa é o Barão Sangrento.
A Sonserina corresponde aproximadamente ao elemento água, dado que as serpentes são comumente associadas aos mares e lagos na mitologia da Europa Ocidental, bem como por serem animais fisicamente fluidos e flexíveis. Da mesma forma, na mitologia celta, a água é vista como um portal para outro mundo, levando a especulação de que o elemento foi escolhido para simbolizar a esperança de vários Sonserinos por uma comunidade inteiramente "pura". Suas cores também se baseiam nas águas ao redor de lagos — que por sua vez são frequentemente esverdeados — e prata para a associação da água cinzenta da chuva.</p>

    </div>
    </div>

<div class="container">
<div class="row">
<div class="p-3 mb-2 bg-dark text-white" style="text-align: center;">
<h3 class="card-title">Lufa-Lufa</h3>
    </div>

<div class="card col-9" style="width: 19rem; margin: 0% 8% 3%; ">
<img src="img/lafabrasao.png" class="card-img-top" alt="Brasão">
<div class="card-body">

<ul class="list-group list-group-flush">
<li class="list-group-item"><b>Fundador: </b> Helga Hufflepuff</li>
<li class="list-group-item"><b>Cores da casa:</b> Amarelo e preto</li>
<li class="list-group-item"><b>Animal:</b> Texugo</li>
<li class="list-group-item"><b>Elemento:</b> Terra</li>
<li class="list-group-item"><b>traços:</b> Trabalho árduo | Justiça | Lealdade | Paciência | Sinceridade | Modéstia | </li>
<li class="list-group-item"><b>Diretor:</b> Helga Lufa-Lufa † | Pomona Sprout</li>
<li class="list-group-item"><b>Fantasma:</b> Frei Gorducho</li>
<li class="list-group-item"><b>Sala comunal:</b> Porão da Lufa-Lufa</li>
</ul>
</div> 
</div>


<p class="col-6" id="TextoCasa"> A Lufa-Lufa, fundada por Helga Hufflepuff, é uma das quatro casas da Escola de Magia e Bruxaria de Hogwarts, sendo conhecida como a mais inclusiva entre as outras três; valorizando o trabalho árduo, a dedicação, a paciência, a lealdade e o jogo limpo ao invés de uma aptidão particular de seus membros. Seu animal emblemático é um texugo e suas cores são o amarelo e o preto. A diretora da casa mais notável é a Mestra de Herbologia Pomona Sprout e seu fantasma patrono é o Frei Gorducho.
A casa corresponde aproximadamente ao elemento terra, e é por essa razão que suas cores foram escolhidas: o amarelo representa o trigo, enquanto o preto um símbolo do solo. Os estudantes classificados para a Lufa-Lufa comumente demonstram habilidades excepcionais em Herbologia, dado à correspondência da casa com a terra. </p>

    </div>
    </div>



    </div>
    </div>
    <footer>
	<div>
    	<h5>&copy; Todos os direitos reservados. 2022</h5>
	</div>
	</footer>
  
</body>
</html>
