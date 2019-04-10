<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset("css/app.css")); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset("css/estilos.css")); ?>" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title><?php echo $__env->yieldContent("title"); ?></title>
</head>
<body>
<header class="bg-secondary">
    <div id="head">
        <br>
        <div  class="row font-weight-normal" id="titulo">
            <div class="col-md-1"></div>
            <div class="col-md-1"></div>
            <div class="col-md-1"><h3>TEMPLATE</h3></div>
            <div class="col-md-1"></div>
            <div class="col-md-1"></div>
            <div class="col-md-1"></div>
            <div class="col-md-1"></div>
            <div class="col-md-1"></div>
            <div class="col-md-1">CONTACT</div>
            <div class="col-md-1">LOGIN</div>
            <div class="col-md-1"></div>
            <div class="col-md-1"></div>
        </div>
        <br>
    </div>
</header>
<section class="container" >
    <?php echo $__env->yieldContent("content"); ?>

        <div id="tem" >
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>

</section>
<footer class="bg-secondary text-white " class="bg-primary text-center">
    <div id="footer">

           <h3>Location</h3>
           <p>3481 Melrose Place<br>Berbely Hills, CA 90210</p>



    <div id="contenedor2">
        <h3>Around the web</h3>

    </div>
    <div id="contenedor3">
        <h3>About Freelancer</h3>
        <p>Freelance is a free to use open source<br>Boostrap theme created by Start<br>boostrap</p>
    </div>
    </div>
</footer>
</body>
</html>