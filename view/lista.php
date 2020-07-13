<?php include "cabecalho.php"?>

<body>

    <nav id="menu" class="nav-extended">
        <div class="nav-wrapper">
            <a class="brand-logo center">
                <h1>Ursal</h1>
            </a>

            <ul id="nav-mobile" class="right ">
                <li><a class="active" href="/">Galeria</a></li>
                <li><a class="active" href="/novo">Cadastre</a></li>
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

    <div class="row">
    <form  method="POST" ectype="multipart/form-data">
        <div class="col s6 offset-s3">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Cadastrar Serie</span>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="titulo" type="text" class="validate"  name="titulo" required>
                            <label for="titulo">Cadastre</label>
                        </div>
                    </div>

                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea  id="sinopse" class="materialize-textarea" name="sinopse"></textarea>
                                    <label for="sinopse" >Sinopse</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="nota" type="number" step=".1" min=0 max=10 class="validate" name="nota" requird >
                            <label for="nota" >Nota</label>
                        </div>
                    </div>
                    <div class="file-field input-field">
                        <div class="btn red light-4 black-text">
                            <span>Poster</span>
                            <input type="file" name="poster_file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text"  name="poster">
                        </div>
                    </div>

                    <div class="card-action">
                        <a class="btn waves-effect waves-light  grey" href="/">Voltar</a>
                        <button type="submit" class="waves-effect waves-light btn red">Cadastrar</button>
                    </div>
                </div>
            </div>
            </div>
            </form>
            </div>
            
</body>

</html>