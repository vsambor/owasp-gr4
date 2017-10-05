<?php
    $metaTitle  = isset($metaTitle) && $metaTitle ? 'TT-Bet | '.$metaTitle : 'TT-Bet';
    $metaKw     = isset($metaKw) && $metaKw ? $metaKw : 'TT-Bet';
    $metaDesc   = isset($metaDesc) && $metaDesc ? $metaDesc : '';
    $uri        = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <title><?=$metaTitle?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="<?=$metaKw?>">
    <meta name="description" content="<?=$metaDesc?>">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">  
    <link rel="stylesheet" href="<?=$SETTINGS['site_url']?>/css/style.css">
    <link rel="stylesheet" href="<?=$SETTINGS['site_url']?>/css/login.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="<?=$SETTINGS['site_url']?>/js/functions.js"></script>           
</head>

<style>
    body {overflow-x: hidden;}
</style>

<body>
<nav class="navbar navbar-default" >
  <div class="container container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?=$SETTINGS['site_url']?>">Home</a>
        
        <?php if(!$logged) { require_once $PATH."/include/login.inc.php"; ?>
            
            <div class="pull-right hidden-lg hidden-md visible-sm visible-xs" style="padding-top:10px; padding-right: 10px;">       
                <a href="javascript:showLogin();"><button type="button" class="btn btn-default btn-sm btn-header"><b>Login</b></button></a>
            </div> 
        
        <?php } else { ?>
        
            <div class="pull-right hidden-lg hidden-md visible-sm visible-xs" style="padding-right: 10px;">  
                <?php require $PATH."/include/logged.inc.php"; ?>
            </div>
        
        <?php } ?>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-left" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php if($logged) { ?>
            <li <?php if($uri == '/timeline.php'){echo 'class="nav-item-active"';}?> ><a href="<?=$SETTINGS['site_url']?>/timeline.php">Timeline</a></li>
            <li <?php if($uri == '/work.php'){echo 'class="active"';}?> ><a href="<?=$SETTINGS['site_url']?>/work.php">Work</a></li>
        
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?=$SETTINGS['site_url']?>/branches.php">Branches</a></li>
                    <li><a href="<?=$SETTINGS['site_url']?>/set-values.php">App Values</a></li>
                    <li><a href="<?=$SETTINGS['site_url']?>/todo.php">Todo</a></li>
                </ul>
            </li>   
          
        <?php } ?>
      </ul>
    </div><!-- /.navbar-collapse -->

    <?php if(!$logged) { require_once $PATH."/include/login.inc.php"; ?>
            
        <div class="pull-right visible-lg visible-md hidden-sm hidden-xs" style="padding-top:10px; padding-right: 10px;">       
            <a href="javascript:showLogin();"><button type="button" class="btn btn-default btn-sm btn-header"><b>Login</b></button></a>
        </div> 

    <?php } else { ?>

        <div class="pull-right visible-lg visible-md hidden-sm hidden-xs" style="padding-right: 10px;">  
            <?php require $PATH."/include/logged.inc.php"; ?>
        </div>

    <?php } ?>
    
  </div>
</nav>