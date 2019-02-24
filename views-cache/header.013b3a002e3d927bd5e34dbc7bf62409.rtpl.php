<?php if(!class_exists('Rain\Tpl')){exit;}?><!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>ChatDevs</title>

    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="/resources/css/style.css">
    <link rel="stylesheet" href="/resources/css/chat.css">
    <link rel="stylesheet" href="/resources/css/dashboard.css">

        
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>

    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>

  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">ChatDevs - Simples.Inovação</a>
      <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <p style="position: absolute; right: 10%; top: 30%; color: #fff;"><?php echo getUserName(); ?></p>
          <a class="nav-link" href="/logout">Sair do Sistema</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="/dashboard">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item disabled">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Perfil
                </a>
              </li>
              <li class="nav-item disabled">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Configurações
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/logout">
                  <span data-feather="users"></span>
                  Sair
                </a>
              </li>
            </ul>

            
          </div>
        </nav>

        
      </div>
    </div>