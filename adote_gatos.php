<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
 
    <!-- Fontes -->
    <?php
        require_once("./includes/fonts.php");
    ?>

    
    
    <title>LocalizaCão - Adote</title>
    
</head>

<body>

<header>
    <!-- nav -->
    <?php
        require_once("./includes/nav.php");
    ?>
</header>

<main class="main">
    <aside class="aside">
        <div class="estados">
          <label for="estados">Estado</label>
          <select name="estados" id="estados" multiple>
            <option value="estado" selected disabled>Selecione o Estado</option> 
            <option value="ac">Acre</option> 
            <option value="al">Alagoas</option> 
            <option value="am">Amazonas</option> 
            <option value="ap">Amapá</option> 
            <option value="ba">Bahia</option> 
            <option value="ce">Ceará</option> 
            <option value="df">Distrito Federal</option> 
            <option value="es">Espírito Santo</option> 
            <option value="go">Goiás</option> 
            <option value="ma">Maranhão</option> 
            <option value="mt">Mato Grosso</option> 
            <option value="ms">Mato Grosso do Sul</option> 
            <option value="mg">Minas Gerais</option> 
            <option value="pa">Pará</option> 
            <option value="pb">Paraíba</option> 
            <option value="pr">Paraná</option> 
            <option value="pe">Pernambuco</option> 
            <option value="pi">Piauí</option> 
            <option value="rj">Rio de Janeiro</option> 
            <option value="rn">Rio Grande do Norte</option> 
            <option value="ro">Rondônia</option> 
            <option value="rs">Rio Grande do Sul</option> 
            <option value="rr">Roraima</option> 
            <option value="sc">Santa Catarina</option> 
            <option value="se">Sergipe</option> 
            <option value="sp">São Paulo</option> 
            <option value="to">Tocantins</option> 
          </select>
        </div>

        <div class="cidades">
          <label for="cidades">Cidade</label>
          <select name="cidades" id="cidades" multiple>
            <option value="">São Paulo</option>
            <option value="">Campinas</option>
          </select>
        </div>

        <div class="porte">
          <label>Porte</label>
          <div class="listaDeCheckboxes">
            <div>
              <input type="checkbox" name="marca1" id="marca1" />
              <label for="marca1">Pequeno</label>
            </div>
            <div>
              <input type="checkbox" name="marca2" id="marca2" />
              <label for="marca2">Médio</label>
            </div>
            <div>
              <input type="checkbox" name="marca3" id="marca3" />
              <label for="marca3">Grande</label>
            </div>
          </div>
        </div>
        
        <div class="sexo">
          <label>Sexo</label>
          <div class="listaDeCheckboxes">
            <div>
              <input type="checkbox" name="marca1" id="marca1" />
              <label for="marca1">Fêmea</label>
            </div>
            <div>
              <input type="checkbox" name="marca2" id="marca2" />
              <label for="marca2">Macho</label>
            </div>
          </div>
        </div>

        <div class="idade">
          <label>Idade</label>
          <div class="listaDeCheckboxes">
            <div>
              <input type="checkbox" name="marca1" id="marca1" />
              <label for="marca1">Filhote</label>
            </div>
            <div>
              <input type="checkbox" name="marca2" id="marca2" />
              <label for="marca2">Adulto</label>
            </div>
            <div>
              <input type="checkbox" name="marca3" id="marca3" />
              <label for="marca3">Idoso</label>
            </div>
          </div>
        </div>





    </aside>



 


    <!-- !!!!!!!!COMEÇO DOS CARDS!!!!! -->

        <section class="container">
        <section class="main-section">
            <div class="row">
                <div class="mx-auto">
                    <div class="col-sm-4 col-xs-12" >
                        <div class="card text-center" style="width: 18rem;">
                            <img class="card-img-top" src="images/gato1.jpg" alt="Imagem de capa do card">
                            <div class="card-body">
                                <h5 class="card-title">Chuchu</h5>
                                <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                                <a href="#" class="btn btn-primary">Visitar</a>
                            </div>
                            </div>
                    </div>        
                </div>    
                 
                <div class="mx-auto">
                    <div class="col-sm-4 col-xs-12" >
                        <div class="card text-center" style="width: 18rem;">
                                <img class="card-img-top" src="images/gato02.jpg" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h5 class="card-title">Belezinha</h5>
                                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                                    <a href="#" class="btn btn-primary">Visitar</a>
                                </div>
                                </div>
                    </div>  
                </div>              
                  
                <div class="mx-auto">
                    <div class="col-sm-4 col-xs-12" >    
                        <div class="card text-center" style="width: 18rem;">
                                <img class="card-img-top" src="images/gato3.jpg" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h5 class="card-title">Pantera</h5>
                                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                                    <a href="#" class="btn btn-primary">Visitar</a>
                                </div>
                                </div>
                    </div>
                </div>   
                    
            </div>
            <div class="row">
                <div class="mx-auto">
                    <div class="col-sm-4 col-xs-12" >
                        <div class="card text-center" style="width: 18rem;">
                            <img class="card-img-top" src="images/gato4.jpeg" alt="Imagem de capa do card">
                            <div class="card-body">
                                <h5 class="card-title">Feijão</h5>
                                <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                                <a href="#" class="btn btn-primary">Visitar</a>
                            </div>
                            </div>
                    </div>        
                </div>    
                 
                <div class="mx-auto">
                    <div class="col-sm-4 col-xs-12" >
                        <div class="card text-center" style="width: 18rem;">
                                <img class="card-img-top" src="images/gato5.jpeg" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h5 class="card-title">Anakin</h5>
                                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                                    <a href="#" class="btn btn-primary">Visitar</a>
                                </div>
                                </div>
                    </div>  
                </div>              
                  
                <div class="mx-auto">
                    <div class="col-sm-4 col-xs-12" >    
                        <div class="card text-center" style="width: 18rem;">
                                <img class="card-img-top" src="images/gato6.jpeg" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h5 class="card-title">Jupiter</h5>
                                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                                    <a href="#" class="btn btn-primary">Visitar</a>
                                </div>
                                </div>
                    </div>
                </div>   
                    
            </div>
            
            
            
            </section>


    </section>

</main>


<!-- Footer -->
<footer>
    <?php
        require_once("./includes/footer.php");
    ?>
</footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>