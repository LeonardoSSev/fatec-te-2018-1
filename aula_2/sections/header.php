<?php
    $url = $_SERVER['REQUEST_URI'];
    $paginaAtiva = explode('/', $url);
    $paginaAtiva = end($paginaAtiva);

    if ($paginaAtiva == "politic.php" || $paginaAtiva == "education.php" || $paginaAtiva == "sport.php") {

?>
<div class="carousel slide" id="carousel-181816">
    <ol class="carousel-indicators">
        <li class="active" data-slide-to="0" data-target="#carousel-181816">
        </li>
        <li data-slide-to="1" data-target="#carousel-181816">
        </li>
        <li data-slide-to="2" data-target="#carousel-181816">
        </li>
    </ol>
    <div class="carousel-inner">
        <div class="item <?=$paginaAtiva == 'sport.php' ? 'active' : ''?>">
            <img alt="Carousel Bootstrap First" src="https://www.peninsulamembers.com/_filelib/ImageGallery/Page_Banner/_Peninsula-Banner10.1600x500.jpg">
            <div class="carousel-caption">
                <h4 style="color:white;">
                Golf: Golfista Melo Gouveia segue em 111.º lugar no NBO Open
                </h4>
                <p>
                O português Ricardo Melo Gouveia terminou esta quinta-feira no 111.º lugar a primeira volta do NBO Open, prova do circuito europeu de golfe, que é liderada pelos ingleses Paul Waring e Matthew Southgate.
                </p>
            </div>
        </div>
        <div class="item <?=$paginaAtiva == 'politic.php' ? 'active' : '' ?>">
            <img alt="Carousel Bootstrap Second" src="http://www.cartaecronica.com.br/thumb.php?imagem=_58c82626af73e.jpg&folder=noticias&x=2560&y=500">
            <div class="carousel-caption">
                <h4 style="color:white;">
                    Eleições na Holanda e o início de um ano de apreensão política na Europa
                </h4>
                <p>
                Os regimes parlamentaristas estão, de certa maneira, mais protegidos dos extremistas de todos as fidelidades políticas. O sistema torna praticamente impossível a construção de unanimidade.
                </p>
            </div>
        </div>
        <div class="item <?=$paginaAtiva == 'education.php' ? 'active' : '' ?>">
            <img alt="Carousel Bootstrap Third" src="http://novachance.org.br/teste/wp-content/uploads/2016/06/educa%C3%A7%C3%A3o-2-1600x500.jpg">
            <div class="carousel-caption">
                <h4 style="color:white;">
                    Um triste recuo para a educação infantil em Curitiba
                </h4>
                <p>
                    Flexibilizar a regra de ingresso de profissionais para atuarem na educação infantil é retroceder no respeito aos cidadãos e cidadãs curitibanos que têm menos de 5 anos
                </p>
            </div>
        </div>
    </div> <a class="left carousel-control" href="#carousel-181816" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-181816" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

<?php
    }
?>