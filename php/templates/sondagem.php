<!DOCTYPE html>
<html lang="pt">
<head>
<title>Registar</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
</head>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Sistema de<br>Informação<br>Centro de Saúde</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="index.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Inicio</a> 
    <a href="questionario.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Registar Utente</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Registar Médico</a> 
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Registar Consulta</a> 
    <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Listar Utentes</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Listar Médicos</a>
    <a href="#contacto" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Listar Consulta</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Centro de saúde</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->

  <form class="w3-container w3-small" action="config.php" method="POST"></form>
      <h2>Inquerito sobre a atividade</h2>
      <div class="w3-container w3-text-red w3-small w3-padding-16"> 
        <!--Mensagem de inserção de um aluno com sucesso -->

      </div>

      <tr>
        <div class="nprocesso">
          <label for="nprocesso">Nº processo</label>
          <input type="text" id="nprocesso" name="nprocesso"><br>
        </div>
        <div class="nome">
          <label for="nome">Nome:</label>
          <input type="text" id="nome" name="nome"><br>
        </div>
        <div class="turma">
          <label for="turma">Turma:</label>
          <input type="text" id="turma" name="turma"><br>
        </div>
        <div class="ano">
          <label for="ano">Ano:</label>
          <input type="text" id="ano" name="ano"><br>
        </div>
      </tr>
      <tr>
        <td colspan="2">
          <div class="pergunta">
            Achou a atividade interessante?<span id="asterisco">*</span><br></div>
          <input type="radio" id="sim" name="interesse" required value="Sim"><label for="sim">Sim </label><br>
          <input type="radio" id="nao" name="interesse" required value="Não"><label for="nao">Não </label><br>
        </td>
      </tr>
      <div class="pergunta">

        <label for="number-selecionado">Classifique a atividade de 0-10.</label><br>
        <select id="number-selecionado" name="number-selecionado">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>

        </td>
        <tr>
          <div class="pergunta">
            <td> <label for="opiniao">O que achou mais interessante sobre a atividade?</label></td><br>
          </div>
          <td><textarea name="opiniao" rows="4" cols="50"></textarea></td><br>
        </tr>
        <tr>
          <td colspan="2" class="botoes_acao">
            <input type="submit" id="submeter" value="Submeter" class="bt_submeter">
            <input type="reset" id="limpar" value="Limpar">
          </td>
        </tr>
    </form>
  </fieldset>
                </form>
        </div>
<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Sistema de Informação-Centro de saúde</p></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>