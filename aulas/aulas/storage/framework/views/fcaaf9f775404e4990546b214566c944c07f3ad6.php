<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle de Séries</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light mb-2 d-flex justify-content-between" style="background-color: #e9ecef;">
        <a class="navbar-brand" href="<?php echo e(route('listar_series')); ?>">Home</a>
        <?php if(auth()->guard()->check()): ?>
        <a href="/sair" class="text-danger">Sair</a>
        <?php endif; ?>

        <?php if(auth()->guard()->guest()): ?>
        <a href="/entrar">Entrar</a>
        <?php endif; ?>
    </nav>

    <div class="container">
        <div class="jumbotron">
            <h1><?php echo $__env->yieldContent('cabecalho'); ?></h1>
        </div>

        <?php echo $__env->yieldContent('conteudo'); ?>
    </div>
</body>
</html>
<?php /* E:\vinicius-dias\1190-laravel-parte1\controle-series\resources\views/layout.blade.php */ ?>