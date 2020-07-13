<?php include "cabecalho.php"?>
<?php
session_start();
require "./util/mensagem.php";

$controller = new SeriesController();
$series = $controller->index();
?>

<body>
    <nav id="menu" class="nav-extended">
        <div class="nav-wrapper">
            <a class="brand-logo center">
                <h1>Ursal</h1>
                <ul id="nav-mobile" class="right ">

                    <li><a class="active"><a href="/">Galeria</a></li>
                    <li><a class="active" href="/novo">Cadastre</a></li>
                    <div class="nav-content">
                </ul>
        </div>

        <div class="nav-content">
            <ul class="tabs tabs-transparent">
                <li class="tab"><a class="active" href="#test1">Ja assistido</a></li>
                <li class="tab"><a class="active" href="#test2">Todos</a></li>
                <li class="tab"><a class="active" href="#test3">Sua lista</a></li>

            </ul>
        </div>
    </nav>
    <div class="container">
        <!--primeiro card,ainda sera diminuido-->
        <div class="row">

            <?php foreach($series as $serie): ?>
            <div class="col s12 m6 l3">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="<?=$serie->poster?>">

                        <button class="btn-fav btn-floating halfway-fab waves-effect waves-light red"
                            data-id="<?=$serie->id ?>">
                            <i class="material-icons"><?=($serie->favorito) ?"favorite":"favorite_border"?></i></button>
                    </div>
                    <div class="card-content">
                        <p class="valign-wrapper">
                            <p> <i class="material-icons yellow-text">star</i><?=$serie->nota?></p>
                            <span class="card-title"><?= $serie->titulo?></span>
                            <p><?=$serie->sinopse?></p>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
    <?= Mensagem::mostrar();?>

    <script>
    document.querySelectorAll(".btn-fav").forEach(btn => {
      btn.addEventListener("click", e => {
        const id = btn.getAttribute("data-id")
        fetch(`/favoritar/${id}`)
        .then(response => response.json())
        .then(response => {
          if (response.success === "ok") {
            if (btn.querySelector("i").innerHTML === "favorite") {
              btn.querySelector("i").innerHTML = "favorite_border"
            } else {
              btn.querySelector("i").innerHTML = "favorite"
            }
          }
        })
        .catch( error => {
          M.toast({html: 'Erro ao favoritar'})
        })

      });
    });
  </script>
   
</body>

</html>