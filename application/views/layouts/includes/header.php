<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>The GameStore</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/starter-template/">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <!-- Favicons -->

    <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css">

    <!-- Links to javascript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <!--    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>-->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    <script>window.jQuery </script>

</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="http://localhost:8888/gameStore/">The GameStore</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost:8888/gameStore/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost:8888/gameStore/user/register">Create Account</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <div class="form-group">
                <input name="username" class="form-control mr-sm-2" type="text" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <input name="password" class="form-control mr-sm-2" type="password" placeholder="Enter Password">
            </div>
            <button name="submit" class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
        </form>
    </div>
</nav>

<main role="main" class="container">

    <div class="row">
        <div class="col-md-4">
            <?php $this->load->view('layouts/includes/sidebar.php') ?>
        </div>

    </div>
    <!------------------------------------- The Game Store ------------------------------->
    <div class="col-md-8">

        <div class="card ">
            <div class="card-header card-header-blue">
                <h3 class="card-title">The GameStore</h3>
            </div>
            <div class="card-body">
