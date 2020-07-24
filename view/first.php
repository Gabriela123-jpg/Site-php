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
                   <!-- <div class="nav-content">-->
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
            <div class="col s7 m4 xl3">
                <div class="card hoverable card-serie">
                    <div class="card-image">
                    <img src="<?= $serie->poster?>" class="activator"/>
                       
                        <button class="btn-fav btn-floating halfway-fab waves-effect waves-light red"   data-id="<?=$serie->id ?>">
                            <i class="material-icons"><?=($serie->favorito) ?"favorite":"favorite_border"?></i></button>
                    </div>
                    <div class="card-content">
                        <p class="valign-wrapper">
                            <p> <i class="material-icons yellow-text">star</i><?=$serie->nota?></p>
                            <span class="card-title activar truncate">
                            <?= $serie->titulo?></span>
                           <!--<p>--><!--?=$serie->sinopse?></p>-->
                    </div>
                    <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><?= $serie->titulo ?><i class="material-icons right">close</i></span>
              <p><?= substr($serie->sinopse, 0, 500) . "..." ?></p>
              <button class="waves-effect waves-light btn-small right red accent-2 btn-delete" data-id="<?= $serie->id ?>"><i class="material-icons">delete</i></button>
                </div>
            </div>
            </div>
                <?php endforeach ?>
        </div>
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

    document.querySelectorAll(".btn-delete").forEach(btn => {
      btn.addEventListener("click", e => {
        const id = btn.getAttribute("data-id")
        const requestConfig= {method: "DELETE" , header: new Headers()}
        fetch(`/series/${id}`,requestConfig)
        .then(response => response.json())
        .then(response => {
          if (response.success === "ok") {
            const card =  btn.closest(".col")
           card.classList.add("fadeOut")
            setTimeout(()=>card.remove(),1000)
            }
        })
        .catch( error => {
          M.toast({html: 'Erro ao deletar'
          })
        })

      });
    });
  </script>
   
</body>

</html>