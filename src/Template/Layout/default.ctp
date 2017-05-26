<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'ANUNCIE E VENDA';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('Anuncie e venda') ?>
    </title>
<link href="/TCC10/webroot/css/bootstrap.min.css" rel="stylesheet">
<link href="/TCC10/webroot/css/font-awesome.min.css" rel="stylesheet">
<link href="/TCC10/webroot/css/prettyPhoto.css" rel="stylesheet">
<link href="/TCC10/webroot/css/price-range.css" rel="stylesheet">
<link href="/TCC10/webroot/css/animate.css" rel="stylesheet">
<link href="/TCC10/webroot/css/main.css" rel="stylesheet">
<link href="/TCC10/webroot/css/responsive.css" rel="stylesheet">

</head>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <h5><i class="fa fa-phone"></i> +55 53 991968584</a></h5></li>
                            <h5><i class="fa fa-envelope"></i> marcelfontcast@gmail.com</a></h5>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <div class="mainmenu">
                       <?php if($loggedIn) : ?>
                            <ul>
                                <li><h2><?= $this->request->session()->read('Auth.User.username')  ?></h2></li>
                                <li><h6><?= $this->Html->link('Logout', ['controller' => 'users' , 'action' => 'Logout']); ?></h6></li>
                            </ul>
                        <?php else : ?>
                            <h3><?= $this->Html->link('Entrar', ['controller' => 'users' , 'action' => 'Login']); ?></h3>
                        <?php endif ;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->
<div class="header-middle"><!--header-middle-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="logo pull-left">
                    <a href="/TCC10/"><img src="/TCC10/webroot/img/home/logo.png" alt="" /></a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="shop-menu pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href="/TCC10/users/view"><i class="fa fa-user"></i> Minha conta</a></li>
                        <li><a href="#"><i class="fa fa-star"></i> Lista de desejos</a></li>
                        <li><a href="/TCC10/users/login"><i class="fa fa-lock"></i> Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!--/header-middle-->
<div class="header-bottom"><!--header-bottom-->
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="mainmenu pull-left">
                    <ul class="nav navbar-nav collapse navbar-collapse">
                        <li><a href="/TCC10/" class="active">Home</a></li>
                        <li><a href="/TCC10/Contacts/index">Contato</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="search_box pull-right">
                    <input type="text" background-image="/TCC10/webroot/img/home/searchicon.png" placeholder="Buscar"/>
                </div>
            </div>
        </div>
    </div>
</div><!--/header-bottom-->
</header>
<div class="container clearfix">
      <?= $this->fetch('content') ?>
</div>
<script src="/TCC10/webroot/js/jquery.js"></script>
<script src="/TCC10/webroot/js/bootstrap.min.js"></script>
<script src="/TCC10/webroot/js/jquery.scrollUp.min.js"></script>
<script src="/TCC10/webroot/js/price-range.js"></script>
<script src="/TCC10/webroot/js/jquery.prettyPhoto.js"></script>
<script src="/TCC10/webroot/js/main.js"></script>

</body>
</html>
