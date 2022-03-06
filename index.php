<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário de Contato</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="customscript.js" defer></script>
</head>

<body>
    <div class="container mx-auto bg-light mt-1 w-90">
        <header class="row">
            
            <div id="barra_acessibilidade" class="col-12 d-none">
                <ul id="atalhos">
                    <li><a href="#menu" accesskey="1">Ir para menu [1]</a></li>
                    <li><a href="#formulario" accesskey="2">Ir para formulário [2]</a></li>
                </ul>
            </div>

        
            <div class="col-sm-3">
                <img src="logoXpto.jpeg" width="50" height="50" alt="logotipo xpto colorido. ">
            </div>

            <div class="col-sm-9">
                <h1>Empresa XPTO</h1>
            </div>
        </header>

        <section class="row">
            <div class="col-12">
                <h2 class="d-none" id="menu">Menu</h2>
            </div>
            <div class="col-sm-4"></div>

            <div class="col-sm-4">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Alterna navegação">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home <span class="sr-only">(Página atual)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contato</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>

        <article class="col-12">
            <h2 id="formulario">Formulário de Contato</h2>
            <form action="#">
                <div class="form-group row">
                    <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" required>
                        <span class="error" style="display: none;" id="erroNome">Caixa nome obrigatório</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Digite seu email" required>
                        <span class="error" style="display: none;" id="erroEmail">Caixa e-mail obrigatório</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mensagem" class="col-sm-2 col-form-label">Mensagem</label>
                    <div class="col-sm-10">
                        <textarea class="form-control form-control-sm" id="mensagem" required></textarea>
                        <span class="error" style="display: none;" id="erroMensagem">Caixa mensagem obrigatório</span>

                        <div class="button">
                            <button type="submit" onclick="validarInputs(event)" class="btn btn-primary my-1">Enviar</button>
                            <small class="form-text text-muted">Caixa obrigatórios.</small>
                        </div>
                    </div>
                </div>
            </form>
        </article>

        <footer class=" row">
            <div class="col-12">
                <p>Copyright © 2022</p>
            </div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <noscript>Atualize seu navegador</noscript>

</body>

</html>