<?php
    $saborMarmita = [
        1 => [
            "nome" => "marmita feijoada",
            "ingrediente principal" => "feijao preto",
            "acompanhamento" => "arroz",
            "acompanhamento2" => "carne de Boi",
            "acompanhamento3" => "farofa",
            "imagem" => "Images/feijoada.jpg"
        ],
        2 => [
            "nome" => "marmita saudavel",
            "ingrediente principal" => "saladas",
            "acompanhamento" => "arroz",
            "acompanhamento2" => "carne de boi ou filé de frango",
            "acompanhamento3" => "feijão",
            "imagem" => "Images/saudavel.jpg"
        ],
        3 => [
            "nome" => "marmita basica",
            "ingrediente principal" => "arroz",
            "acompanhamento" => "feijão",
            "acompanhamento2" => "Ovo frito",
            "acompanhamento3" => "farofa ou saladas",
            "imagem" => "Images/basica.jpg"
        ],
        4 => [
            "nome" => "marmita gurmet",
            "ingrediente principal" => "Arroz da casa temperado",
            "acompanhamento" => "Filé mignom",
            "acompanhamento2" => "feijao",
            "acompanhamento3" => "farofa",
            "imagem" => "Images/gurmet.jpg"
        ],
        5 => [
            "nome" => "marmita bruta",
            "ingrediente principal" => "Arroz temperado",
            "acompanhamento" => "feijão carioca ou preto",
            "acompanhamento2" => "carne a escolha do cliente",
            "acompanhamento3" => "farofa",
            "imagem" => "Images/bruta.jpg"
        ],
        6 => [
            "nome" => "marmita vegana",
            "ingrediente principal" => "salada",
            "acompanhamento" => "arroz integral",
            "acompanhamento2" => "carne de soja",
            "acompanhamento3" => "feijao",
            "imagem" => "Images/vegana.jpg"
        ],
    ];
?>

<!DOCTYPE html> 
<head>
    <link rel="stylesheet" href="Mapa1.css">

</head>
    <main>
        <section class="header">
            <nav class="menu-h">
                <img class="logo" src="images/Logo.jpg" alt="Logo"/>
                <ul class="menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Conheça a dona Rita</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
        </section>
        <section class="body">
            <img class= "marmita" src="images/Fotomarmita.jpg" alt="marmitas"/>
        </section>
        <div>
            <h1 class="titulo">Venham conferir nossas marmitas</h1>
            <div class="gmarmita">
               <?php foreach ($saborMarmita as $marmita) : ?>
                    <div>
                        <img class="fotosm" src=" <?php echo $marmita["imagem"] ?>" alt="imagem">
                        <span class="textos"><?php echo $marmita["ingrediente principal"]  ?></span>
                        <span class="textos"><?php echo $marmita["acompanhamento"]  ?></span>
                        <span class="textos"><?php echo $marmita["acompanhamento2"]  ?></span>
                        <span class="textos"><?php echo $marmita["acompanhamento3"]  ?></span>
                    </div>
               <?php endforeach; ?>                   
            </div>
        </div>
        <section class="rodape">
            <h1 class="rodape-titulo">Quer saber mais?</h1>
            <div class="listap">
                <div class="lista">
                        <h2 class="hlista">Nossas paginas</h2>
                        <span>Home</span>
                        <span>Blog</span>
                        <span>Conheça a dona Rita</span>
                        <span>Contato</span>
                    </div>
                    <div class="lista">
                        <h2 class="hlista">Links uteis</h2>
                        <span>politicas de privacidade</span>
                        <span>aviso legal</span>
                        <span>Conheça a dona Rita</span>
                        <span>termos de uso</span>
                    </div>
                    <div class="lista">
                        <h2 class="hlista">Sobre o projeto</h2>
                        <span>projeto de divulgaçao das marmitas Dona Rita</span>
                </div>
            </div>
        </section>
    </main>
