<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Bootstrap CSS -->
        @include('comuns.bootstrap')

        <!-- Estilos (path do arquivo css) -->
        <link rel="stylesheet" href="/css/home.css">

        <!-- Título e Favicon -->
        <title>Adoção de Crianças - Home</title>
        <link rel="icon" href="/imagens/favicon.png"/>
    </head>
    
    <body>
    <!--Navbar Menu-->
    <!--Menu-->
    <nav class="navbar navbar1 navbar-expand-md fixed-top">
        <div class="container-fluid container-menu" style="position: relative;">
            <!-- Brand -->
            <a class="navbar-brand navbar-brand-dashboard logo" href="/dashboard">
                <img src="/imagens/favicon.png" style="width: 8%; height: auto">
                
            <!-- Brand -->
            </a>  
            
            <h4 class="bem-vindo centraliza">Adoção de Crianças</h4>
            
            <!-- Busca Desktop -->
            <div class="invisivel-mobile">
                <form class="d-flex" method="GET" action="">
                    @csrf
                    <input class="form-control form-control-sm" name="busca" placeholder="Busca..." aria-label="Busca...">   
                    <button 
                        class="btn btn-outline-success" type="submit">Ir
                    </button>
                </form>
            </div>
            <!-- Busca Desktop -->

            <!-- Busca Mobile -->
            <div class="btn-group invisivel-desktop">
                <button type="button " class="btn" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" style="color: #fff">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
                <ul class="dropdown-menu dropdown-menu-end busca-mobile">
                    <form class="d-flex posicao-busca" method="GET" action="">
                        @csrf
                        <input class="form-control form-control-sm" name="busca" placeholder="Busca..." aria-label="Busca...">   
                        <button 
                            class="btn btn-outline-success" type="submit">Ir
                        </button>
                    </form>
                </ul>
            </div>
            <!-- Busca Mobile -->
            
        </div>

    </nav>
<!--Menu-->
    </body>
</html>