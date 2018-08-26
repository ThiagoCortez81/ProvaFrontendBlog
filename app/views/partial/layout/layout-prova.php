<!DOCTYPE html>
<html xmlns:https="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php require_once 'app/views/partial/layout-header-config.php'; ?>
    <link type="text/css" rel="stylesheet" href="/css/app.min.css"/>

    <?php foreach ($this->stylesheets as $href): ?>
        <link href="<?php echo $href; ?>" rel="stylesheet" type="text/css">
    <?php endforeach; ?>

    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono|Raleway:500" rel="stylesheet">
</head>
<body>
<header>
    <div class="jumbotron text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6 padding-0">
                    <input type="text" placeholder="Buscar..." class="top-search-input">
                    <!-- social icons -->
                    <br>
                    <img src="/img/social-media/facebook-outlined-icon.png" class="social-icons" alt="">
                    <img src="/img/social-media/linkedin-outlined-icon.png" class="social-icons" alt="">
                    <img src="/img/social-media/twitter-outlined-icon.png" class="social-icons" alt="">
                    <!-- end -->
                </div>
                <div class="col-md-6">
                    <button class="btn badge badge-success badge-size">
                        #Investidores
                    </button>
                    <button class="btn badge badge-success badge-size">
                        #Crédito
                    </button>
                    <button class="btn badge badge-success badge-size">
                        #Intercâmbio
                    </button>
                    <button class="btn badge badge-success badge-size">
                        #Financiamentos
                    </button>
                    <button class="btn badge badge-success badge-size">
                        #Dívidas
                    </button>
                    <button class="btn badge badge-success badge-size">
                        #Cursos
                    </button>
                </div>
            </div>
        </div>
        <div class="container main-jumbotron-content">
            <h1><b>Blog</b></h1>
            <h5 class="col-sm-5 padding-0">Cras tincidunt quis erat in semper. Nunc pellentesque dui nisi.</h5>
        </div>
    </div>
</header>
<main>
    <div class="container sombra-esquerda recuo-post-destaque background-white">
        <section class="row margin-left-0">
            <div class="col-md-4 padding-0 margin-bottom-10">
                <h5 class="margin-top-10">
                    <small><b>#Investimentos</b></small>
                </h5>
                <h1 class="text-purple"><b>Como funciona o investimento P2P (Peer-to-Peer)?</b></h1>
                <br>
                <h5 class="text-light-gray">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Aenean id mi eu eros gravida
                    mattis. In varius sed tellus a posuere.<br> Phasellus sit amet urna metus.
                </h5>
                <a href="#" class="btn btn-sm btn-ler-mais margin-top-10">LER MAIS</a>
            </div>
            <div class="col-md-8 padding-0 big-image-post-blog">
            </div>
        </section>
    </div>

    <div class="container sobra-esquerda background-white padding-left-0">
        <section class="row margin-left-0">
            <div class="col-md-4 padding-0">
                <div style="height: 150px; background-color: #FFAA55;"></div>
            </div>
        </section>
    </div>
    <!--    --><?php //require_once 'app/views/template/' . $page . '.php'; ?>
</main>
<br><br><br><br>
<script type='text/javascript' src="/js/app.min.js"></script>
<?php foreach ($this->scripts as $path): ?>
    <script type='text/javascript' src="<?php echo $path; ?>"></script>
<?php endforeach; ?>
</body>
</html>
