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
<section id="app">
    <header>
        <full-head :tags="tags" :colors="colors"></full-head>
    </header>
    <main>
        <?php require_once 'app/views/template/' . $page . '.php'; ?>
    </main>
</section>
<br><br><br><br>
<script type='text/javascript' src="/js/app.min.js"></script>
<?php foreach ($this->scripts as $path): ?>
    <script type='text/javascript' src="<?php echo $path; ?>"></script>
<?php endforeach; ?>
</body>
</html>
