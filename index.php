<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/index-responsive.css">

    <!-- Owl Css -->
    <link rel="stylesheet" href="style/Owl/owl.carousel.min.css">
    <link rel="stylesheet" href="style/Owl/owl.theme.default.min.css">

    <title>NETFLIX | Clone</title>
</head>
<body>

    <header>
        <div class="container">

            <h1 class="Logo">NETFLIX</h1>

            <nav>
                <a href="#">Início</a>
                <a href="#">Séries</a>
                <a href="#">Filmes</a>
                <a href="#">Bombando</a>
                <a href="#">Minha lista</a>
            </nav>

        </div>
    </header>

    <main>
        <div class="filme-principal">
            <div class="container">

                <h3 class="titulo">Grey's Anatomy</h3>
                
                <p class="descricao">
                    Os médicos do Grey Sloan Memorial Hospital lidam 
                    diariamente com casos e consequências de vida ou morte. 
                    É um no outro que eles encontram apoio, conforto, amizade e, 
                    às vezes, até mais que amizade... 
                    Juntos, eles descobrem o quanto a vida profissional e a pessoal 
                    podem ser complicadas e se misturarem no meio do caminho.
                </p>

                <div id="botao-filme-principal">

                    <button role="button" class="botao" id="botao-play">
                        <i class="fas fa-play"></i>
                        Assistir
                    </button>

                    <button role="button" class="botao" id="botao-info">
                        <i class="fas fa-info-circle"></i>
                        Mais informações
                    </button>

                </div>
            </div>
        </div>
    </main>

    <div class="carrosel-filmes">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img class="box-filme" src="img/mini1.jpg">
            </div>
            <div class="item">
                <img class="box-filme" src="img/mini2.jpg">
            </div>
            <div class="item">
                <img class="box-filme" src="img/mini3.jpg">
            </div>
            <div class="item">
                <img class="box-filme" src="img/mini4.jpg">
            </div>
            <div class="item">
                <img class="box-filme" src="img/mini5.jpg">
            </div>
            <div class="item">
                <img class="box-filme" src="img/mini6.jpg">
            </div>
            <div class="item">
                <img class="box-filme" src="img/mini7.jpg">
            </div>
            <div class="item">
                <img class="box-filme" src="img/mini8.jpg">
            </div>
            <div class="item">
                <img class="box-filme" src="img/mini9.jpg">
            </div>
            <div class="item">
                <img class="box-filme" src="img/mini10.jpg">
            </div>
        </div>

    
    </div>

    <script src="https://kit.fontawesome.com/f1936a9ae3.js" crossorigin="anonymous"></script>

    <!-- Owl js -->
    
    <script src="js/Owl/jquery.min.js"></script>
    <script src="js/Owl/owl.carousel.min.js"></script>
    <script src="js/Owl/setup.js"></script>

</body>
</html>