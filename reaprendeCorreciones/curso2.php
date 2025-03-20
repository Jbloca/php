<?php

header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Crear el enlace de cierre de sesión con el token CSRF
$logoutLink = "./logout.php?csrf_token=" .urlencode($csrf_token);


?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/favicon/faviconRe.ico" type="image/x-icon">
    
    <!-- Map CSS -->
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css">
    
    <!-- Libs CSS -->
    <link rel="stylesheet" href="./assets/css/libs.bundle.css">
    
    <!-- Theme CSS -->
    <link rel="stylesheet" href="./assets/css/theme.bundle.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    
     <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>
  <!-- Agrega aquí las referencias a tus bibliotecas de Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    

    
    <!-- Title -->
    <title>Dashboard 2</title>
    

    
  </head>
  <body>
      
      <?php
      $mensajeBienvenida = '';
    if (isset($_COOKIE['user_id'])) {
               $mensajeBienvenida = "Bienvenido a la página de inicio. <a href='logout.php'>Cerrar sesión</a>";
    } else {
        header('Location: login.php');
        exit(); // Asegura que no se muestre contenido adicional si no se ha iniciado sesión.
    }
    ?>

        




    <!-- MODALS -->
    <!-- Modal: Members -->
    <div class="modal fade" id="modalMembers" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-card card" data-list='{"valueNames": ["name"]}'>
            <div class="card-header">
    
              <!-- Title -->
              <h4 class="card-header-title" id="exampleModalCenterTitle">
                Add a member
              </h4>
    
              <!-- Close -->
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    
            </div>
            <div class="card-header">
    
              <!-- Form -->
              <form>
                <div class="input-group input-group-flush input-group-merge input-group-reverse">
                  <input class="form-control list-search" type="search" placeholder="Search">
                  <div class="input-group-text">
                    <span class="fe fe-search"></span>
                  </div>
                </div>
              </form>
    
            </div>
            <div class="card-body">
    
              <!-- List group -->
              <ul class="list-group list-group-flush list my-n3">
                <li class="list-group-item">
                  <div class="row align-items-center">
                    <div class="col-auto">
    
                      <!-- Avatar -->
                      <a href="./profile-posts.html" class="avatar">
                        <img src="./assets/img/avatars/profiles/avatar-9.png" alt="..." class="avatar-img rounded-circle">
                      </a>
    
                    </div>
                    <div class="col ms-n2">
    
                      <!-- Title -->
                      <h4 class="mb-1 name">
                        <a href="./profile-posts.html">Miyah Myles</a>
                      </h4>
    
                      <!-- Time -->
                      <p class="small mb-0">
                        <span class="text-success">●</span> Online
                      </p>
    
                    </div>
                    <div class="col-auto">
    
                      <!-- Button -->
                      <a href="#!" class="btn btn-sm btn-white">
                        Add
                      </a>
    
                    </div>
                  </div> <!-- / .row -->
                </li>
                <li class="list-group-item">
                  <div class="row align-items-center">
                    <div class="col-auto">
    
                      <!-- Avatar -->
                      <a href="./profile-posts.html" class="avatar">
                        <img src="./assets/img/avatars/profiles/avatar-9.png" alt="..." class="avatar-img rounded-circle">
                      </a>
    
                    </div>
                    <div class="col ms-n2">
    
                      <!-- Title -->
                      <h4 class="mb-1 name">
                        <a href="./profile-posts.html">Ryu Duke</a>
                      </h4>
    
                      <!-- Time -->
                      <p class="small mb-0">
                        <span class="text-success">●</span> Online
                      </p>
    
                    </div>
                    <div class="col-auto">
    
                      <!-- Button -->
                      <a href="#!" class="btn btn-sm btn-white">
                        Add
                      </a>
    
                    </div>
                  </div> <!-- / .row -->
                </li>
                <li class="list-group-item">
                  <div class="row align-items-center">
                    <div class="col-auto">
    
                      <!-- Avatar -->
                      <a href="./profile-posts.html" class="avatar">
                        <img src="./assets/img/avatars/profiles/avatar-9.png" alt="..." class="avatar-img rounded-circle">
                      </a>
    
                    </div>
                    <div class="col ms-n2">
    
                      <!-- Title -->
                      <h4 class="mb-1 name">
                        <a href="./profile-posts.html">Glen Rouse</a>
                      </h4>
    
                      <!-- Time -->
                      <p class="small mb-0">
                        <span class="text-warning">●</span> Busy
                      </p>
    
                    </div>
                    <div class="col-auto">
    
                      <!-- Button -->
                      <a href="#!" class="btn btn-sm btn-white">
                        Add
                      </a>
    
                    </div>
                  </div> <!-- / .row -->
                </li>
                <li class="list-group-item">
                  <div class="row align-items-center">
                    <div class="col-auto">
    
                      <!-- Avatar -->
                      <a href="./profile-posts.html" class="avatar">
                        <img src="./assets/img/avatars/profiles/avatar9.png" alt="..." class="avatar-img rounded-circle">
                      </a>
    
                    </div>
                    <div class="col ms-n2">
    
                      <!-- Title -->
                      <h4 class="mb-1 name">
                        <a href="./profile-posts.html">Grace Gross</a>
                      </h4>
    
                      <!-- Time -->
                      <p class="small mb-0">
                        <span class="text-danger">●</span> Offline
                      </p>
    
                    </div>
                    <div class="col-auto">
    
                      <!-- Button -->
                      <a href="#!" class="btn btn-sm btn-white">
                        Add
                      </a>
    
                    </div>
                  </div> <!-- / .row -->
                </li>
              </ul>
    
            </div>
          </div>
        </div>
      </div>
    </div>
    


    <!-- OFFCANVAS -->
    
    <!-- Offcanvas: Search -->
    <div class="offcanvas offcanvas-start" id="sidebarOffcanvasSearch" tabindex="-1">
      <div class="offcanvas-body" data-list='{"valueNames": ["name"]}'>
    
        <!-- Form -->
        <form class="mb-4">
          <div class="input-group input-group-merge input-group-rounded input-group-reverse">
            <input class="form-control list-search" type="search" placeholder="Search">
            <div class="input-group-text">
              <span class="fe fe-search"></span>
            </div>
          </div>
        </form>
    
        <!-- List group -->
        <div class="my-n3">
          <div class="list-group list-group-flush list-group-focus list">
            <a class="list-group-item" href="./team-overview.html">
              <div class="row align-items-center">
                <div class="col-auto">
    
                  <!-- Avatar -->
                  <div class="avatar">
                    <img src="./assets/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                  </div>
    
                </div>
                <div class="col ms-n2">
    
                  <!-- Title -->
                  <h4 class="text-body text-focus mb-1 name">
                    Airbnb
                  </h4>
    
                  <!-- Time -->
                  <p class="small text-body-secondary mb-0">
                    <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                  </p>
    
                </div>
              </div> <!-- / .row -->
            </a>
            <a class="list-group-item" href="./team-overview.html">
              <div class="row align-items-center">
                <div class="col-auto">
    
                  <!-- Avatar -->
                  <div class="avatar">
                    <img src="./assets/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                  </div>
    
                </div>
                <div class="col ms-n2">
    
                  <!-- Title -->
                  <h4 class="text-body text-focus mb-1 name">
                    Medium Corporation
                  </h4>
    
                  <!-- Time -->
                  <p class="small text-body-secondary mb-0">
                    <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                  </p>
    
                </div>
              </div> <!-- / .row -->
            </a>
            <a class="list-group-item" href="./project-overview.html">
              <div class="row align-items-center">
                <div class="col-auto">
    
                  <!-- Avatar -->
                  <div class="avatar avatar-4by3">
                    <img src="./assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                  </div>
    
                </div>
                <div class="col ms-n2">
    
                  <!-- Title -->
                  <h4 class="text-body text-focus mb-1 name">
                    Homepage Redesign
                  </h4>
    
                  <!-- Time -->
                  <p class="small text-body-secondary mb-0">
                    <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                  </p>
    
                </div>
              </div> <!-- / .row -->
            </a>
            <a class="list-group-item" href="./project-overview.html">
              <div class="row align-items-center">
                <div class="col-auto">
    
                  <!-- Avatar -->
                  <div class="avatar avatar-4by3">
                    <img src="./assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                  </div>
    
                </div>
                <div class="col ms-n2">
    
                  <!-- Title -->
                  <h4 class="text-body text-focus mb-1 name">
                    Travels & Time
                  </h4>
    
                  <!-- Time -->
                  <p class="small text-body-secondary mb-0">
                    <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                  </p>
    
                </div>
              </div> <!-- / .row -->
            </a>
            <a class="list-group-item" href="./project-overview.html">
              <div class="row align-items-center">
                <div class="col-auto">
    
                  <!-- Avatar -->
                  <div class="avatar avatar-4by3">
                    <img src="./assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                  </div>
    
                </div>
                <div class="col ms-n2">
    
                  <!-- Title -->
                  <h4 class="text-body text-focus mb-1 name">
                    Safari Exploration
                  </h4>
    
                  <!-- Time -->
                  <p class="small text-body-secondary mb-0">
                    <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                  </p>
    
                </div>
              </div> <!-- / .row -->
            </a>
            <a class="list-group-item" href="./profile-posts.html">
              <div class="row align-items-center">
                <div class="col-auto">
    
                  <!-- Avatar -->
                  <div class="avatar">
                    <img src="./assets/img/avatars/profiles/avatar-9.png" alt="..." class="avatar-img rounded-circle">
                  </div>
    
                </div>
                <div class="col ms-n2">
    
                  <!-- Title -->
                  <h4 class="text-body text-focus mb-1 name">
                    Dianna Smiley
                  </h4>
    
                  <!-- Status -->
                  <p class="text-body small mb-0">
                    <span class="text-success">●</span> Online
                  </p>
    
                </div>
              </div> <!-- / .row -->
            </a>
            <a class="list-group-item" href="./profile-posts.html">
              <div class="row align-items-center">
                <div class="col-auto">
    
                  <!-- Avatar -->
                  <div class="avatar">
                    <img src="./assets/img/avatars/profiles/avatar-9.png" alt="..." class="avatar-img rounded-circle">
                  </div>
    
                </div>
                <div class="col ms-n2">
    
                  <!-- Title -->
                  <h4 class="text-body text-focus mb-1 name">
                    Ab Hadley
                  </h4>
    
                  <!-- Status -->
                  <p class="text-body small mb-0">
                    <span class="text-danger">●</span> Offline
                  </p>
    
                </div>
              </div> <!-- / .row -->
            </a>
          </div>
        </div>
    
      </div>
    </div>
    
    <!-- Offcanvas: Activity -->
    <div class="offcanvas offcanvas-start" id="sidebarOffcanvasActivity" tabindex="-1">
      <div class="offcanvas-header">
    
        <!-- Title -->
        <h4 class="offcanvas-title">
          Notifications
        </h4>
    
        <!-- Navs -->
        <ul class="nav nav-tabs nav-tabs-sm modal-header-tabs">
          <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#modalActivityAction">Action</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#modalActivityUser">User</a>
          </li>
        </ul>
    
      </div>
      <div class="offcanvas-body">
        <div class="tab-content">
          <div class="tab-pane fade show active" id="modalActivityAction">
    
            <!-- List group -->
            <div class="list-group list-group-flush list-group-activity my-n3">
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">
    
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                        <i class="fe fe-mail"></i>
                      </div>
                    </div>
    
                  </div>
                  <div class="col ms-n2">
    
                    <!-- Heading -->
                    <h5 class="mb-1">
                      Launchday 1.4.0 update email sent
                    </h5>
    
                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      Sent to all 1,851 subscribers over a 24 hour period
                    </p>
    
                    <!-- Time -->
                    <small class="text-body-secondary">
                      2m ago
                    </small>
    
                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">
    
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                        <i class="fe fe-archive"></i>
                      </div>
                    </div>
    
                  </div>
                  <div class="col ms-n2">
    
                    <!-- Heading -->
                    <h5 class="mb-1">
                      New project "Goodkit" created
                    </h5>
    
                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      Looks like there might be a new theme soon.
                    </p>
    
                    <!-- Time -->
                    <small class="text-body-secondary">
                      2h ago
                    </small>
    
                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">
    
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                        <i class="fe fe-code"></i>
                      </div>
                    </div>
    
                  </div>
                  <div class="col ms-n2">
    
                    <!-- Heading -->
                    <h5 class="mb-1">
                      Dashkit 1.5.0 was deployed.
                    </h5>
    
                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      A successful to deploy to production was executed.
                    </p>
    
                    <!-- Time -->
                    <small class="text-body-secondary">
                      2m ago
                    </small>
    
                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">
    
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                        <i class="fe fe-git-branch"></i>
                      </div>
                    </div>
    
                  </div>
                  <div class="col ms-n2">
    
                    <!-- Heading -->
                    <h5 class="mb-1">
                      "Update Dependencies" branch was created.
                    </h5>
    
                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      This branch was created off of the "master" branch.
                    </p>
    
                    <!-- Time -->
                    <small class="text-body-secondary">
                      2m ago
                    </small>
    
                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">
    
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                        <i class="fe fe-mail"></i>
                      </div>
                    </div>
    
                  </div>
                  <div class="col ms-n2">
    
                    <!-- Heading -->
                    <h5 class="mb-1">
                      Launchday 1.4.0 update email sent
                    </h5>
    
                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      Sent to all 1,851 subscribers over a 24 hour period
                    </p>
    
                    <!-- Time -->
                    <small class="text-body-secondary">
                      2m ago
                    </small>
    
                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">
    
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                        <i class="fe fe-archive"></i>
                      </div>
                    </div>
    
                  </div>
                  <div class="col ms-n2">
    
                    <!-- Heading -->
                    <h5 class="mb-1">
                      New project "Goodkit" created
                    </h5>
    
                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      Looks like there might be a new theme soon.
                    </p>
    
                    <!-- Time -->
                    <small class="text-body-secondary">
                      2h ago
                    </small>
    
                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">
    
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                        <i class="fe fe-code"></i>
                      </div>
                    </div>
    
                  </div>
                  <div class="col ms-n2">
    
                    <!-- Heading -->
                    <h5 class="mb-1">
                      Dashkit 1.5.0 was deployed.
                    </h5>
    
                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      A successful to deploy to production was executed.
                    </p>
    
                    <!-- Time -->
                    <small class="text-body-secondary">
                      2m ago
                    </small>
    
                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">
    
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                        <i class="fe fe-git-branch"></i>
                      </div>
                    </div>
    
                  </div>
                  <div class="col ms-n2">
    
                    <!-- Heading -->
                    <h5 class="mb-1">
                      "Update Dependencies" branch was created.
                    </h5>
    
                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      This branch was created off of the "master" branch.
                    </p>
    
                    <!-- Time -->
                    <small class="text-body-secondary">
                      2m ago
                    </small>
    
                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">
    
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                        <i class="fe fe-mail"></i>
                      </div>
                    </div>
    
                  </div>
                  <div class="col ms-n2">
    
                    <!-- Heading -->
                    <h5 class="mb-1">
                      Launchday 1.4.0 update email sent
                    </h5>
    
                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      Sent to all 1,851 subscribers over a 24 hour period
                    </p>
    
                    <!-- Time -->
                    <small class="text-body-secondary">
                      2m ago
                    </small>
    
                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">
    
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                        <i class="fe fe-archive"></i>
                      </div>
                    </div>
    
                  </div>
                  <div class="col ms-n2">
    
                    <!-- Heading -->
                    <h5 class="mb-1">
                      New project "Goodkit" created
                    </h5>
    
                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      Looks like there might be a new theme soon.
                    </p>
    
                    <!-- Time -->
                    <small class="text-body-secondary">
                      2h ago
                    </small>
    
                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">
    
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                        <i class="fe fe-code"></i>
                      </div>
                    </div>
    
                  </div>
                  <div class="col ms-n2">
    
                    <!-- Heading -->
                    <h5 class="mb-1">
                      Dashkit 1.5.0 was deployed.
                    </h5>
    
                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      A successful to deploy to production was executed.
                    </p>
    
                    <!-- Time -->
                    <small class="text-body-secondary">
                      2m ago
                    </small>
    
                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">
    
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                        <i class="fe fe-git-branch"></i>
                      </div>
                    </div>
    
                  </div>
                  <div class="col ms-n2">
    
                    <!-- Heading -->
                    <h5 class="mb-1">
                      "Update Dependencies" branch was created.
                    </h5>
    
                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      This branch was created off of the "master" branch.
                    </p>
    
                    <!-- Time -->
                    <small class="text-body-secondary">
                      2m ago
                    </small>
    
                  </div>
                </div> <!-- / .row -->
              </a>
            </div>
    
          </div>

        </div>
      </div>
    </div>

    <!-- NAVIGATION -->
    <div data-bs-theme="">
      <nav class="navbar navbar-vertical fixed-start navbar-expand-md" id="sidebar">
        <div class="container-fluid">
      
          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <!-- Brand -->
          <a class="navbar-brand" href="./index.html">
            <img src="./assets/img/mb_logo.png" class="navbar-brand-img mx-auto" alt="...">
          </a>
      
          <!-- User (xs) -->
          <div class="navbar-user d-md-none">
      
            <!-- Dropdown -->
            <div class="dropdown">
      
              <!-- Toggle -->
              <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-sm avatar-online">
                  <img src="./assets/img/avatars/profiles/avatar-9.png" class="avatar-img rounded-circle" alt="...">
                </div>
              </a>
      
              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarIcon">
                <a href="./sign-in.html" class="dropdown-item">Desconectar</a>
              </div>
      
            </div>
      
          </div>
      
          <!-- Collapse -->
          <div class="collapse navbar-collapse" id="sidebarCollapse">
      
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
              <div class="input-group input-group-rounded input-group-merge input-group-reverse">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-text">
                  <span class="fe fe-search"></span>
                </div>
              </div>
            </form>
      
            <!-- Navigation -->
            <ul class="navbar-nav">
              <li class="nav-item">
                  <!-- Primera sección: Bancarizados -->
                  <a class="nav-link" href="./index.php">
                    <i class="fe fe-home"></i> Bancarizados
                  </a>
                </li>
                
                <li class="nav-item">
                  <!-- Segunda sección: Extorsiones + Préstamos informales con subopciones -->
                  <a class="nav-link" href="#sidebarExtorsiones" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarExtorsiones">
                    <i class="fe fe-home"></i> Extorsiones + Préstamos informales
                  </a>
                  <div class="collapse" id="sidebarExtorsiones">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="./curso2.php" class="nav-link">
                          2024
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="./curso2-dic.php" class="nav-link">
                          Diciembre-2024
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="./curso2-ene.php" class="nav-link">
                         Enero-2024
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="./curso2-feb.php" class="nav-link">
                         Febrero-2024
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="./curso2-mar.php" class="nav-link">
                         Marzo-2025
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>



              <li class="nav-item d-md-none">
                <a class="nav-link" data-bs-toggle="offcanvas" href="#sidebarOffcanvasActivity" aria-contrtols="sidebarOffcanvasActivity">
                  <span class="fe fe-bell"></span> Notifications
                </a>
              </li>
            </ul>
            
            
            <!-- Push content down -->
            <div class="mt-auto"></div>
      
      
              <!-- User (md) -->
              <div class="navbar-user d-none d-md-flex" id="sidebarUser">
      
                <!-- Dropup -->
                <div class="dropup">
      
                  <!-- Toggle -->
                  <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                      <img src="./assets/img/avatars/profiles/avatar-9.png" class="avatar-img rounded-circle" alt="...">
                    </div>
                  </a>
      
                  <!-- Menu -->
                   <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                    <a href="<?php echo htmlspecialchars($logoutLink, ENT_QUOTES, 'UTF-8'); ?>" class="dropdown-item">Desconectar</a>
                  </div>
      
                </div>
      
      
              </div>
           
          </div> <!-- / .navbar-collapse -->
      
        </div>
      </nav>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content">

      
      

      <!-- HEADER -->
      <div class="header">
        <div class="container-fluid">

          <!-- Body -->
          <div class="header-body">
            <div class="row align-items-end">
              <div class="col">

                <!-- Pretitle -->
                <h6 class="header-pretitle">
                  Descripcion General
                </h6>

                <!-- Title -->
                <h1 class="header-title">
                  Extorsiones + Préstamos informales
                </h1>

              </div>
              <div class="col-auto">

                <!-- Button <button id="downloadCsvButton" class="btn btn-primary">Descargar CSV</button>   -->
                
                <a href="/informe2.csv" class="btn btn-primary lift">
                    Descargar CSV
                </a>
                <a href="/Dashboard2.xlsx" class="btn btn-primary lift">
                    Descargar Excel
                </a>
              </div>  
                
            </div> <!-- / .row -->
          </div> <!-- / .header-body -->

        </div>
      </div> <!-- / .header -->

      <!-- CARDS -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-lg-12 col-xl">

            <!-- Value  -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center gx-0">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="text-uppercase text-body-secondary mb-2">
                      Participantes
                    </h6>

                    <!-- Heading -->
                    <span class="h2 mb-0" id="numSuscritos">
                      0
                    </span>

                    
                  </div>
                  <div class="col-auto">

                    <!-- Icon -->
                    <span class="h2 fa-regular fa-user text-body-secondary mb-0"></span>

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

          </div>
          
        </div> <!-- / .row -->
        
        
        <div class="row">
            <div class="col-8 col-lg-4 col-xl">
            <!-- Hours -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center gx-0">
                  <div class="col">
                    <!-- Title -->
                    <h6 class="text-uppercase text-body-secondary mb-2">
                      Promedio Satisfacción "Más préstamos pagando puntual"
                    </h6>
                    <!-- Heading -->
                    <span class="h2 mb-0" id="promedioSatis">
                      0
                    </span>
                  </div>
                  <div class="col-auto">
                    <!-- Icon -->
                    <span class="h2 fe fe-briefcase text-body-secondary mb-0"></span>
                  </div>
                </div> <!-- / .row -->
              </div>
            </div>
          </div>
          
          
          <div class="col-8 col-lg-4 col-xl">
            <!-- Hours -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center gx-0">
                  <div class="col">
                    <!-- Title -->
                    <h6 class="text-uppercase text-body-secondary mb-2">
                      Promedio Satisfacción "Desembolsa un crédito desde tu celular"
                    </h6>
                    <!-- Heading -->
                    <span class="h2 mb-0" id="promedioSatis2">
                      0
                    </span>
                  </div>
                  <div class="col-auto">
                    <!-- Icon -->
                    <span class="h2 fe fe-briefcase text-body-secondary mb-0"></span>
                  </div>
                </div> <!-- / .row -->
              </div>
            </div>
          </div>
          
          <div class="col-8 col-lg-4 col-xl">
            <!-- Hours -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center gx-0">
                  <div class="col">
                    <!-- Title -->
                    <h6 class="text-uppercase text-body-secondary mb-2">
                      Promedio Satisfacción "Diseña promociones de impacto"
                    </h6>
                    <!-- Heading -->
                    <span class="h2 mb-0" id="promedioSatis3">
                      0
                    </span>
                  </div>
                  <div class="col-auto">
                    <!-- Icon -->
                    <span class="h2 fe fe-briefcase text-body-secondary mb-0"></span>
                  </div>
                </div> <!-- / .row -->
              </div>
            </div>
          </div>
        </div> <!-- / .row -->
        
        <div class="row">
            <div class="col-12 col-lg-4 col-xl">
            <!-- Hours -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center gx-0">
                  <div class="col">
                    <!-- Title -->
                    <h6 class="text-uppercase text-body-secondary mb-2">
                      Promedio Satisfacción "Fideliza a tus clientes"
                    </h6>
                    <!-- Heading -->
                    <span class="h2 mb-0" id="promedioSatis4">
                      0
                    </span>
                  </div>
                  <div class="col-auto">
                    <!-- Icon -->
                    <span class="h2 fe fe-briefcase text-body-secondary mb-0"></span>
                  </div>
                </div> <!-- / .row -->
              </div>
            </div>
          </div>
          
          
          <div class="col-12 col-lg-4 col-xl">
            <!-- Hours -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center gx-0">
                  <div class="col">
                    <!-- Title -->
                    <h6 class="text-uppercase text-body-secondary mb-2">
                      Promedio Satisfacción "Claves para incrementar tus ventas"
                    </h6>
                    <!-- Heading -->
                    <span class="h2 mb-0" id="promedioSatis5">
                      0
                    </span>
                  </div>
                  <div class="col-auto">
                    <!-- Icon -->
                    <span class="h2 fe fe-briefcase text-body-secondary mb-0"></span>
                  </div>
                </div> <!-- / .row -->
              </div>
            </div>
          </div>
        </div> <!-- / .row -->
        
        <div class="row">
            <div class="col-8 col-lg-4 col-xl">

            <!-- Exit -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center gx-0">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="text-uppercase text-body-secondary mb-2">
                      Tasa de Finalización "Más préstamos pagando puntual"
                    </h6>

                    <!-- Heading -->
                    <span>%
                        <span class="h2 mb-0" id="tasaCurso1">
                       0
                    </span>
                    </span>

                  </div>
                  <div class="col-auto">

                    <!-- Chart -->
                    <span class="h2 fa-solid fa-chart-line text-body-secondary mb-0"></span>

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

          </div>
          
          <div class="col-8 col-lg-4 col-xl">

            <!-- Exit -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center gx-0">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="text-uppercase text-body-secondary mb-2">
                      Tasa de Finalización "Desembolsa un crédito desde tu celular"
                    </h6>

                    <!-- Heading -->
                    <span>%
                        <span class="h2 mb-0" id="tasaCurso2">
                       0
                    </span>
                    </span>

                  </div>
                  <div class="col-auto">

                    <!-- Chart -->
                    <div class="chart chart-sparkline">
                      <canvas class="chart-canvas" id="sparklineChart"></canvas>
                    </div>

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

          </div>
          
          <div class="col-8 col-lg-4 col-xl">

            <!-- Exit -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center gx-0">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="text-uppercase text-body-secondary mb-2">
                      Tasa de Finalización "Diseña promociones de impacto"
                    </h6>

                    <!-- Heading -->
                    <span>%
                        <span class="h2 mb-0" id="tasaCurso3">
                       0
                    </span>
                    </span>

                  </div>
                  <div class="col-auto">

                    <!-- Chart -->
                    <span class="h2 fa-solid fa-chart-line text-body-secondary mb-0"></span>

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

          </div>
          
        </div>
        
        <div class="row">
            <div class="col-12 col-lg-4 col-xl">

            <!-- Exit -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center gx-0">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="text-uppercase text-body-secondary mb-2">
                      Tasa de Finalización "Fideliza a tus clientes"
                    </h6>

                    <!-- Heading -->
                    <span>%
                        <span class="h2 mb-0" id="tasaCurso4">
                       0
                    </span>
                    </span>

                  </div>
                  <div class="col-auto">

                    <!-- Chart -->
                    <span class="h2 fa-solid fa-chart-line text-body-secondary mb-0"></span>

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

          </div>
          
          <div class="col-12 col-lg-4 col-xl">

            <!-- Exit -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center gx-0">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="text-uppercase text-body-secondary mb-2">
                      Tasa de Finalización "Claves para incrementar tus ventas"
                    </h6>

                    <!-- Heading -->
                    <span>%
                        <span class="h2 mb-0" id="tasaCurso5">
                       0
                    </span>
                    </span>

                  </div>
                  <div class="col-auto">

                    <!-- Chart -->
                    <span class="h2 fa-solid fa-chart-line text-body-secondary mb-0"></span>

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

          </div>
          
        </div>
        
        <div class="row">
          <div class="col-12 col-xl-12">
            <!-- Sales -->
            <div class="card">
              <div class="card-header">
                    <!-- Title -->
                    <h4 class="card-header-title">
                      Actividad
                    </h4>
              </div>
              <div class="card-body">
                    <div class="chart">
                      <canvas id="salesChart1" class="chart-canvas"></canvas>
                    </div>
              </div>
            </div>
          </div>
        </div> <!-- / .row -->
        
        
        <div class="row">
          <div class="col-12 col-xl-4">

            <!-- Traffic -->
            <div class="card">
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                  Más préstamos pagando puntual - Pregunta 1
                </h4>

                <!-- Tabs -->
                <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                  <li class="nav-item" id="version1_1Tab">
                <a href="#" class="nav-link active" data-bs-toggle="tab">
                    Total
                </a>
                </li>
                 <li class="nav-item" id="version1_1bTab">
                <a href="#" class="nav-link" data-bs-toggle="tab">
                    Porcentaje
                </a>
                </li>
                </ul>

              </div>
              <div class="card-body">

                <!-- Chart -->
                <div class="chart chart-appended">
                  <canvas id="donutChart1" class="chart-canvas" data-toggle="legend" data-target="#donutChart1Legend"></canvas>
                </div>

                <!-- Legend -->
                <div id="donutChart1Legend" class="chart-legend"></div>

              </div>
            </div>
          </div>
          <div class="col-12 col-xl-4">

            <!-- Traffic -->
            <div class="card">
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                  Más préstamos pagando puntual - Pregunta 2
                </h4>

                <!-- Tabs -->
                <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                  <li class="nav-item" id="version1_2Tab">
                <a href="#" class="nav-link active" data-bs-toggle="tab">
                    Total
                </a>
                </li>
                 <li class="nav-item" id="version1_2bTab">
                <a href="#" class="nav-link" data-bs-toggle="tab">
                    Porcentaje
                </a>
                </li>
                </ul>

              </div>
              <div class="card-body">

                <!-- Chart -->
                <div class="chart chart-appended">
                  <canvas id="donutChart2" class="chart-canvas" data-toggle="legend" data-target="#donutChart2Legend"></canvas>
                </div>

                <!-- Legend -->
                <div id="donutChart2Legend" class="chart-legend"></div>

              </div>
            </div>
          </div>
          <div class="col-12 col-xl-4">

            <!-- Traffic -->
            <div class="card">
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                  Más préstamos pagando puntual - Pregunta 3
                </h4>

                <!-- Tabs -->
                <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                  <li class="nav-item" id="version1_3Tab">
                <a href="#" class="nav-link active" data-bs-toggle="tab">
                    Total
                </a>
                </li>
                 <li class="nav-item" id="version1_3bTab">
                <a href="#" class="nav-link" data-bs-toggle="tab">
                    Porcentaje
                </a>
                </li>
                </ul>

              </div>
              <div class="card-body">

                <!-- Chart -->
                <div class="chart chart-appended">
                  <canvas id="donutChart3" class="chart-canvas" data-toggle="legend" data-target="#donutChart3Legend"></canvas>
                </div>

                <!-- Legend -->
                <div id="donutChart3Legend" class="chart-legend"></div>

              </div>
            </div>
          </div>
        </div> <!-- / .row -->
      
        
        
        <div class="row">
          <div class="col-12 col-xl-4">

            <!-- Traffic -->
            <div class="card">
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                  Desembolsa un crédito desde tu celular - Pregunta 1
                </h4>

                <!-- Tabs -->
                <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                  <li class="nav-item" id="version2_1Tab">
                <a href="#" class="nav-link active" data-bs-toggle="tab">
                    Total
                </a>
                </li>
                 <li class="nav-item" id="version2_1bTab">
                <a href="#" class="nav-link" data-bs-toggle="tab">
                    Porcentaje
                </a>
                </li>
                </ul>

              </div>
              <div class="card-body">

                <!-- Chart -->
                <div class="chart chart-appended">
                  <canvas id="donutChart4" class="chart-canvas" data-toggle="legend" data-target="#donutChart4Legend"></canvas>
                </div>

                <!-- Legend -->
                <div id="donutChart4Legend" class="chart-legend"></div>

              </div>
            </div>
          </div>
          <div class="col-12 col-xl-4">

            <!-- Traffic -->
            <div class="card">
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                  Desembolsa un crédito desde tu celular - Pregunta 2
                </h4>

                <!-- Tabs -->
                <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                  <li class="nav-item" id="version2_2Tab">
                <a href="#" class="nav-link active" data-bs-toggle="tab">
                    Total
                </a>
                </li>
                 <li class="nav-item" id="version2_2bTab">
                <a href="#" class="nav-link" data-bs-toggle="tab">
                    Porcentaje
                </a>
                </li>
                </ul>

              </div>
              <div class="card-body">

                <!-- Chart -->
                <div class="chart chart-appended">
                  <canvas id="donutChart5" class="chart-canvas" data-toggle="legend" data-target="#donutChart5Legend"></canvas>
                </div>

                <!-- Legend -->
                <div id="donutChart5Legend" class="chart-legend"></div>

              </div>
            </div>
          </div>
          <div class="col-12 col-xl-4">

            <!-- Traffic -->
            <div class="card">
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                  Desembolsa un crédito desde tu celular - Pregunta 3
                </h4>

                <!-- Tabs -->
                <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                  <li class="nav-item" id="version2_3Tab">
                <a href="#" class="nav-link active" data-bs-toggle="tab">
                    Total
                </a>
                </li>
                 <li class="nav-item" id="version2_3bTab">
                <a href="#" class="nav-link" data-bs-toggle="tab">
                    Porcentaje
                </a>
                </li>
                </ul>

              </div>
              <div class="card-body">

                <!-- Chart -->
                <div class="chart chart-appended">
                  <canvas id="donutChart6" class="chart-canvas" data-toggle="legend" data-target="#donutChart6Legend"></canvas>
                </div>

                <!-- Legend -->
                <div id="donutChart6Legend" class="chart-legend"></div>

              </div>
            </div>
          </div>
        </div> <!-- / .row -->
        
         <div class="row">
          <div class="col-12 col-xl-4">

            <!-- Traffic -->
            <div class="card">
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                  Diseña promociones de impacto - Pregunta 1
                </h4>

                <!-- Tabs -->
                <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                  <li class="nav-item" id="version3_1Tab">
                <a href="#" class="nav-link active" data-bs-toggle="tab">
                    Total
                </a>
                </li>
                 <li class="nav-item" id="version3_1bTab">
                <a href="#" class="nav-link" data-bs-toggle="tab">
                    Porcentaje
                </a>
                </li>
                </ul>

              </div>
              <div class="card-body">

                <!-- Chart -->
                <div class="chart chart-appended">
                  <canvas id="donutChart7" class="chart-canvas" data-toggle="legend" data-target="#donutChart7Legend"></canvas>
                </div>

                <!-- Legend -->
                <div id="donutChart7Legend" class="chart-legend"></div>

              </div>
            </div>
          </div>
          <div class="col-12 col-xl-4">

            <!-- Traffic -->
            <div class="card">
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                  Diseña promociones de impacto - Pregunta 2
                </h4>

                <!-- Tabs -->
                <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                  <li class="nav-item" id="version3_2Tab">
                <a href="#" class="nav-link active" data-bs-toggle="tab">
                    Total
                </a>
                </li>
                 <li class="nav-item" id="version3_2bTab">
                <a href="#" class="nav-link" data-bs-toggle="tab">
                    Porcentaje
                </a>
                </li>
                </ul>

              </div>
              <div class="card-body">

                <!-- Chart -->
                <div class="chart chart-appended">
                  <canvas id="donutChart8" class="chart-canvas" data-toggle="legend" data-target="#donutChart8Legend"></canvas>
                </div>

                <!-- Legend -->
                <div id="donutChart8Legend" class="chart-legend"></div>

              </div>
            </div>
          </div>
          <div class="col-12 col-xl-4">

            <!-- Traffic -->
            <div class="card">
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                  Diseña promociones de impacto - Pregunta 3
                </h4>

                <!-- Tabs -->
                <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                  <li class="nav-item" id="version3_3Tab">
                <a href="#" class="nav-link active" data-bs-toggle="tab">
                    Total
                </a>
                </li>
                 <li class="nav-item" id="version3_3bTab">
                <a href="#" class="nav-link" data-bs-toggle="tab">
                    Porcentaje
                </a>
                </li>
                </ul>

              </div>
              <div class="card-body">

                <!-- Chart -->
                <div class="chart chart-appended">
                  <canvas id="donutChart9" class="chart-canvas" data-toggle="legend" data-target="#donutChart9Legend"></canvas>
                </div>

                <!-- Legend -->
                <div id="donutChart9Legend" class="chart-legend"></div>

              </div>
            </div>
          </div>
        </div> <!-- / .row -->
        
        <div class="row">
          <div class="col-12 col-xl-4">

            <!-- Traffic -->
            <div class="card">
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                  Fideliza a tus clientes - Pregunta 1
                </h4>

                <!-- Tabs -->
                <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                  <li class="nav-item" id="version4_1Tab">
                <a href="#" class="nav-link active" data-bs-toggle="tab">
                    Total
                </a>
                </li>
                 <li class="nav-item" id="version4_1bTab">
                <a href="#" class="nav-link" data-bs-toggle="tab">
                    Porcentaje
                </a>
                </li>
                </ul>

              </div>
              <div class="card-body">

                <!-- Chart -->
                <div class="chart chart-appended">
                  <canvas id="donutChart10" class="chart-canvas" data-toggle="legend" data-target="#donutChart10Legend"></canvas>
                </div>

                <!-- Legend -->
                <div id="donutChart10Legend" class="chart-legend"></div>

              </div>
            </div>
          </div>
          <div class="col-12 col-xl-4">

            <!-- Traffic -->
            <div class="card">
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                  Fideliza a tus clientes - Pregunta 2
                </h4>

                <!-- Tabs -->
                <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                  <li class="nav-item" id="version4_2Tab">
                <a href="#" class="nav-link active" data-bs-toggle="tab">
                    Total
                </a>
                </li>
                 <li class="nav-item" id="version4_2bTab">
                <a href="#" class="nav-link" data-bs-toggle="tab">
                    Porcentaje
                </a>
                </li>
                </ul>

              </div>
              <div class="card-body">

                <!-- Chart -->
                <div class="chart chart-appended">
                  <canvas id="donutChart11" class="chart-canvas" data-toggle="legend" data-target="#donutChart11Legend"></canvas>
                </div>

                <!-- Legend -->
                <div id="donutChart11Legend" class="chart-legend"></div>

              </div>
            </div>
          </div>
          <div class="col-12 col-xl-4">

            <!-- Traffic -->
            <div class="card">
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                  Fideliza a tus clientes - Pregunta 3
                </h4>

                <!-- Tabs -->
                <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                  <li class="nav-item" id="version4_3Tab">
                <a href="#" class="nav-link active" data-bs-toggle="tab">
                    Total
                </a>
                </li>
                 <li class="nav-item" id="version4_3bTab">
                <a href="#" class="nav-link" data-bs-toggle="tab">
                    Porcentaje
                </a>
                </li>
                </ul>

              </div>
              <div class="card-body">

                <!-- Chart -->
                <div class="chart chart-appended">
                  <canvas id="donutChart12" class="chart-canvas" data-toggle="legend" data-target="#donutChart12Legend"></canvas>
                </div>

                <!-- Legend -->
                <div id="donutChart12Legend" class="chart-legend"></div>

              </div>
            </div>
          </div>
        </div> <!-- / .row -->
        
        <div class="row">
          <div class="col-12 col-xl-4">

            <!-- Traffic -->
            <div class="card">
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                  Claves para incrementar tus ventas - Pregunta 1
                </h4>

                <!-- Tabs -->
                <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                  <li class="nav-item" id="version5_1Tab">
                <a href="#" class="nav-link active" data-bs-toggle="tab">
                    Total
                </a>
                </li>
                 <li class="nav-item" id="version5_1bTab">
                <a href="#" class="nav-link" data-bs-toggle="tab">
                    Porcentaje
                </a>
                </li>
                </ul>

              </div>
              <div class="card-body">

                <!-- Chart -->
                <div class="chart chart-appended">
                  <canvas id="donutChart13" class="chart-canvas" data-toggle="legend" data-target="#donutChart13Legend"></canvas>
                </div>

                <!-- Legend -->
                <div id="donutChart13Legend" class="chart-legend"></div>

              </div>
            </div>
          </div>
          <div class="col-12 col-xl-4">

            <!-- Traffic -->
            <div class="card">
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                  Claves para incrementar tus ventas - Pregunta 2
                </h4>

                <!-- Tabs -->
                <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                  <li class="nav-item" id="version5_2Tab">
                <a href="#" class="nav-link active" data-bs-toggle="tab">
                    Total
                </a>
                </li>
                 <li class="nav-item" id="version5_2bTab">
                <a href="#" class="nav-link" data-bs-toggle="tab">
                    Porcentaje
                </a>
                </li>
                </ul>

              </div>
              <div class="card-body">

                <!-- Chart -->
                <div class="chart chart-appended">
                  <canvas id="donutChart14" class="chart-canvas" data-toggle="legend" data-target="#donutChart14Legend"></canvas>
                </div>

                <!-- Legend -->
                <div id="donutChart14Legend" class="chart-legend"></div>

              </div>
            </div>
          </div>
          <div class="col-12 col-xl-4">

            <!-- Traffic -->
            <div class="card">
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                  Claves para incrementar tus ventas - Pregunta 3
                </h4>

                <!-- Tabs -->
                <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                  <li class="nav-item" id="version5_3Tab">
                <a href="#" class="nav-link active" data-bs-toggle="tab">
                    Total
                </a>
                </li>
                 <li class="nav-item" id="version5_3bTab">
                <a href="#" class="nav-link" data-bs-toggle="tab">
                    Porcentaje
                </a>
                </li>
                </ul>

              </div>
              <div class="card-body">

                <!-- Chart -->
                <div class="chart chart-appended">
                  <canvas id="donutChart15" class="chart-canvas" data-toggle="legend" data-target="#donutChart15Legend"></canvas>
                </div>

                <!-- Legend -->
                <div id="donutChart15Legend" class="chart-legend"></div>

              </div>
            </div>
          </div>
        </div> <!-- / .row -->
        
      </div>

    </div><!-- / .main-content -->

    


    <!-- JAVASCRIPT -->
    
    <!-- jQuery -->
<script src="./assets/js/jquery/jquery.min.js"></script>
    
    
    <!-- Map JS -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
    
    <!-- Vendor JS -->
    <script src="./assets/js/vendor.bundle.js"></script>
    
    <!-- Theme JS -->
    <script src="./assets/js/theme.bundle.js"></script>
    
    <script src="./assets/js/datatables/jquery.dataTables.min.js"></script>
<script src="./assets/js/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="./assets/js/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="./assets/js/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="./assets/js/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="./assets/js/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="./assets/js/jszip/jszip.min.js"></script>
<script src="./assets/js/pdfmake/pdfmake.min.js"></script>
<script src="./assets/js/pdfmake/vfs_fonts.js"></script>
<script src="./assets/js/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="./assets/js/datatables-buttons/js/buttons.print.min.js"></script>
<script src="./assets/js/datatables-buttons/js/buttons.colVis.min.js"></script>
    
    
    

<script>
  function cargarTabla() {
    const timestamp = Date.now();
    const csvUrl = `informe2.csv?timestamp=${timestamp}`;

    fetch(csvUrl)
      .then(response => response.text())
      .then(data => {
        const rows = data.split('\n');
        const lastActivityColumn = 3;
        const phoneNumbers = new Set();

        let totalSatisfaccion = 0;
        let totalFilasConSatisfaccion = 0;
        let totalSatisfaccion2 = 0;
        let totalFilasConSatisfaccion2 = 0;
        let totalSatisfaccion3 = 0;
        let totalFilasConSatisfaccion3 = 0;
        let totalSatisfaccion4 = 0;
        let totalFilasConSatisfaccion4 = 0;
        let totalSatisfaccion5 = 0;
        let totalFilasConSatisfaccion5 = 0;
        const pregunta1_1Data = { a: 0, b: 0, c: 0 };
        const pregunta1_2Data = { a: 0, b: 0, c: 0 };
        const pregunta1_3Data = { a: 0, b: 0, c: 0 };
        const pregunta2_1Data = { a: 0, b: 0, c: 0 };
        const pregunta2_2Data = { a: 0, b: 0, c: 0 };
        const pregunta2_3Data = { a: 0, b: 0, c: 0 };
        const pregunta3_1Data = { a: 0, b: 0, c: 0 };
        const pregunta3_2Data = { a: 0, b: 0, c: 0 };
        const pregunta3_3Data = { a: 0, b: 0, c: 0 };
        const pregunta4_1Data = { a: 0, b: 0, c: 0 };
        const pregunta4_2Data = { a: 0, b: 0, c: 0 };
        const pregunta4_3Data = { a: 0, b: 0, c: 0 };
        const pregunta5_1Data = { a: 0, b: 0, c: 0 };
        const pregunta5_2Data = { a: 0, b: 0, c: 0 };
        const pregunta5_3Data = { a: 0, b: 0, c: 0 };
        let usersFinishedCurso1 = 0;
        let usersFinishedCurso2 = 0;
        let usersFinishedCurso3 = 0;
        let usersFinishedCurso4 = 0;
        let usersFinishedCurso5 = 0;
        const headerRow = document.createElement('tr');
        const headerData = rows[0].split(',');

        for (let i = 1; i < rows.length; i++) {
          const dataRow = document.createElement('tr');
          const rowData = parseCSVRow(rows[i]);
          const curso1Status = rowData[12];
          const curso2Status = rowData[11];
          const curso3Status = rowData[8];
          const curso4Status = rowData[9];
          const curso5Status = rowData[10];

          
          if (curso1Status && curso1Status.trim().toUpperCase() === "FINALIZADO") {
           usersFinishedCurso1++;
          }
          if (curso2Status && curso2Status.trim().toUpperCase() === "FINALIZADO") {
           usersFinishedCurso2++;
          }
          if (curso3Status && curso3Status.trim().toUpperCase() === "FINALIZADO") {
           usersFinishedCurso3++;
          }
          if (curso4Status && curso4Status.trim().toUpperCase() === "FINALIZADO") {
           usersFinishedCurso4++;
          }
          if (curso5Status && curso5Status.trim().toUpperCase() === "FINALIZADO") {
           usersFinishedCurso5++;
          }

          const satisfaccion = parseFloat(rowData[33]);
          if (!isNaN(satisfaccion)) {
            totalSatisfaccion += satisfaccion;
            totalFilasConSatisfaccion++;
          }
          
          const satisfaccion2 = parseFloat(rowData[32]);
          if (!isNaN(satisfaccion2)) {
            totalSatisfaccion2 += satisfaccion2;
            totalFilasConSatisfaccion2++;
          }
          
          const satisfaccion3 = parseFloat(rowData[29]);
          if (!isNaN(satisfaccion3)) {
            totalSatisfaccion3 += satisfaccion3;
            totalFilasConSatisfaccion3++;
          }
          
          const satisfaccion4 = parseFloat(rowData[30]);
          if (!isNaN(satisfaccion4)) {
            totalSatisfaccion4 += satisfaccion4;
            totalFilasConSatisfaccion4++;
          }
          
          const satisfaccion5 = parseFloat(rowData[31]);
          if (!isNaN(satisfaccion5)) {
            totalSatisfaccion5 += satisfaccion5;
            totalFilasConSatisfaccion5++;
          }
          

          const phoneNumber = rowData[0];
          if (phoneNumber) {
            phoneNumbers.add(phoneNumber);
          }

          const pregunta1_1Value = rowData[25];
          if (pregunta1_1Value === 'VERDADERO') {
            pregunta1_1Data.a++;
          } else if (pregunta1_1Value === 'FALSO') {
            pregunta1_1Data.b++;
          } else if (pregunta1_1Value === 'C') {
            pregunta1_1Data.c++;
          }

          const pregunta1_2Value = rowData[26];
          if (pregunta1_2Value === 'A') {
            pregunta1_2Data.a++;
          } else if (pregunta1_2Value === 'B') {
            pregunta1_2Data.b++;
          } else if (pregunta1_2Value === 'C') {
            pregunta1_2Data.c++;
          }

          const pregunta1_3Value = rowData[27];
          if (pregunta1_3Value === 'A') {
            pregunta1_3Data.a++;
          } else if (pregunta1_3Value === 'B') {
            pregunta1_3Data.b++;
          } else if (pregunta1_3Value === 'C') {
            pregunta1_3Data.c++;
          }
          
          const pregunta2_1Value = rowData[22];
          if (pregunta2_1Value === 'A') {
            pregunta2_1Data.a++;
          } else if (pregunta2_1Value === 'B') {
            pregunta2_1Data.b++;
          } else if (pregunta2_1Value === 'C') {
            pregunta2_1Data.c++;
          }

          const pregunta2_2Value = rowData[23];
          if (pregunta2_2Value === 'A') {
            pregunta2_2Data.a++;
          } else if (pregunta2_2Value === 'B') {
            pregunta2_2Data.b++;
          } else if (pregunta2_2Value === 'C') {
            pregunta1_2Data.c++;
          }

          const pregunta2_3Value = rowData[24];
          if (pregunta2_3Value === 'A') {
            pregunta2_3Data.a++;
          } else if (pregunta2_3Value === 'B') {
            pregunta2_3Data.b++;
          } else if (pregunta2_3Value === 'C') {
            pregunta2_3Data.c++;
          }
          
          const pregunta3_1Value = rowData[13];
          if (pregunta3_1Value === 'A') {
            pregunta3_1Data.a++;
          } else if (pregunta3_1Value === 'B') {
            pregunta3_1Data.b++;
          } else if (pregunta3_1Value === 'C') {
            pregunta3_1Data.c++;
          }

          const pregunta3_2Value = rowData[14];
          if (pregunta3_2Value === 'A') {
            pregunta3_2Data.a++;
          } else if (pregunta3_2Value === 'B') {
            pregunta3_2Data.b++;
          } else if (pregunta3_2Value === 'C') {
            pregunta3_2Data.c++;
          }

          const pregunta3_3Value = rowData[15];
          if (pregunta3_3Value === 'A') {
            pregunta3_3Data.a++;
          } else if (pregunta3_3Value === 'B') {
            pregunta3_3Data.b++;
          } else if (pregunta3_3Value === 'C') {
            pregunta3_3Data.c++;
          }
          
          const pregunta4_1Value = rowData[16];
          if (pregunta4_1Value === 'A') {
            pregunta4_1Data.a++;
          } else if (pregunta4_1Value === 'B') {
            pregunta4_1Data.b++;
          } else if (pregunta4_1Value === 'C') {
            pregunta4_1Data.c++;
          }

          const pregunta4_2Value = rowData[17];
          if (pregunta4_2Value === 'A') {
            pregunta4_2Data.a++;
          } else if (pregunta4_2Value === 'B') {
            pregunta4_2Data.b++;
          } else if (pregunta4_2Value === 'C') {
            pregunta4_2Data.c++;
          }

          const pregunta4_3Value = rowData[18];
          if (pregunta4_3Value === 'A') {
            pregunta4_3Data.a++;
          } else if (pregunta4_3Value === 'B') {
            pregunta4_3Data.b++;
          } else if (pregunta4_3Value === 'C') {
            pregunta4_3Data.c++;
          }
          
          const pregunta5_1Value = rowData[19];
          if (pregunta5_1Value === 'A') {
            pregunta5_1Data.a++;
          } else if (pregunta5_1Value === 'B') {
            pregunta5_1Data.b++;
          } else if (pregunta5_1Value === 'C') {
            pregunta5_1Data.c++;
          }

          const pregunta5_2Value = rowData[20];
          if (pregunta5_2Value === 'A') {
            pregunta5_2Data.a++;
          } else if (pregunta5_2Value === 'B') {
            pregunta5_2Data.b++;
          } else if (pregunta5_2Value === 'C') {
            pregunta5_2Data.c++;
          }

          const pregunta5_3Value = rowData[21];
          if (pregunta5_3Value === 'A') {
            pregunta5_3Data.a++;
          } else if (pregunta5_3Value === 'B') {
            pregunta5_3Data.b++;
          } else if (pregunta5_3Value === 'C') {
            pregunta5_3Data.c++;
          }
        }

        document.getElementById('numSuscritos').textContent = phoneNumbers.size;
        const totalUsers = rows.filter(user => user !== null && user !== undefined && user !== '').length-1;

        const percentageFinishedCurso1 = (usersFinishedCurso1 / totalUsers) * 100;
        document.getElementById('tasaCurso1').textContent = percentageFinishedCurso1.toFixed(2);
        const percentageFinishedCurso2 = (usersFinishedCurso2 / totalUsers) * 100;
        document.getElementById('tasaCurso2').textContent = percentageFinishedCurso2.toFixed(2);
        const percentageFinishedCurso3 = (usersFinishedCurso3 / totalUsers) * 100;
        document.getElementById('tasaCurso3').textContent = percentageFinishedCurso3.toFixed(2);
        const percentageFinishedCurso4 = (usersFinishedCurso4 / totalUsers) * 100;
        document.getElementById('tasaCurso4').textContent = percentageFinishedCurso4.toFixed(2);
        const percentageFinishedCurso5 = (usersFinishedCurso5 / totalUsers) * 100;
        document.getElementById('tasaCurso5').textContent = percentageFinishedCurso5.toFixed(2);
        
        
        let promedioSatisfaccion = 0;
        if (totalFilasConSatisfaccion > 0) {
          promedioSatisfaccion = totalSatisfaccion / totalFilasConSatisfaccion;
        }
        
        let promedioSatisfaccion2 = 0;
        if (totalFilasConSatisfaccion2 > 0) {
          promedioSatisfaccion2 = totalSatisfaccion2 / totalFilasConSatisfaccion2;
        }
        
        let promedioSatisfaccion3 = 0;
        if (totalFilasConSatisfaccion3 > 0) {
          promedioSatisfaccion3 = totalSatisfaccion3 / totalFilasConSatisfaccion3;
        }

        let promedioSatisfaccion4 = 0;
        if (totalFilasConSatisfaccion4 > 0) {
          promedioSatisfaccion4 = totalSatisfaccion4 / totalFilasConSatisfaccion4;
        }

        let promedioSatisfaccion5 = 0;
        if (totalFilasConSatisfaccion5 > 0) {
          promedioSatisfaccion5 = totalSatisfaccion5 / totalFilasConSatisfaccion5;
        }


        document.getElementById('promedioSatis').textContent = promedioSatisfaccion.toFixed(2);
        document.getElementById('promedioSatis2').textContent = promedioSatisfaccion2.toFixed(2);
        document.getElementById('promedioSatis3').textContent = promedioSatisfaccion3.toFixed(2);
        document.getElementById('promedioSatis4').textContent = promedioSatisfaccion4.toFixed(2);
        document.getElementById('promedioSatis5').textContent = promedioSatisfaccion5.toFixed(2);
        
     /*----------DATA 1 ------------------------------------------*/
        
        const total1_1 = pregunta1_1Data.a + pregunta1_1Data.b + pregunta1_1Data.c;
        const correcto2 = (pregunta1_1Data.b / total1_1) * 100;
        const incorrecto2 = ((pregunta1_1Data.a + pregunta1_1Data.c) / total1_1) * 100;

        const total1_2 = pregunta1_2Data.a + pregunta1_2Data.b + pregunta1_2Data.c;
        const correcto3 = (pregunta1_2Data.a / total1_2) * 100;
        const incorrecto3 = ((pregunta1_2Data.b + pregunta1_2Data.c) / total1_2) * 100;

        const total1_3 = pregunta1_3Data.a + pregunta1_3Data.b + pregunta1_3Data.c;
        const correcto4 = (pregunta1_3Data.b / total1_3) * 100;
        const incorrecto4 = ((pregunta1_3Data.a + pregunta1_3Data.c) / total1_3) * 100;
        
        /*-------DATA 2 ---------------------------------------------------*/
        
        const total2_1 = pregunta2_1Data.a + pregunta2_1Data.b + pregunta2_1Data.c;
        const correcto5 = (pregunta2_1Data.a / total2_1) * 100;
        const incorrecto5 = ((pregunta2_1Data.b + pregunta2_1Data.c) / total2_1) * 100;

        const total2_2 = pregunta2_2Data.a + pregunta2_2Data.b + pregunta2_2Data.c;
        const correcto6 = (pregunta2_2Data.a / total2_2) * 100;
        const incorrecto6 = ((pregunta2_2Data.b + pregunta2_2Data.c) / total2_2) * 100;

        const total2_3 = pregunta2_3Data.a + pregunta2_3Data.b + pregunta2_3Data.c;
        const correcto7 = (pregunta2_3Data.b / total2_3) * 100;
        const incorrecto7 = ((pregunta2_3Data.a + pregunta2_3Data.c) / total2_3) * 100;
        
        /*---------DATA 3 ------------------------------------------------*/
        
        const total3_1 = pregunta3_1Data.a + pregunta3_1Data.b + pregunta3_1Data.c;
        const correcto8 = (pregunta3_1Data.b / total3_1) * 100;
        const incorrecto8 = ((pregunta3_1Data.a + pregunta3_1Data.c) / total3_1) * 100;

        const total3_2 = pregunta3_2Data.a + pregunta3_2Data.b + pregunta3_2Data.c;
        const correcto9 = (pregunta3_2Data.a / total3_2) * 100;
        const incorrecto9 = ((pregunta3_2Data.b + pregunta3_2Data.c) / total3_2) * 100;

        const total3_3 = pregunta3_3Data.a + pregunta3_3Data.b + pregunta3_3Data.c;
        const correcto10 = (pregunta3_3Data.b / total3_3) * 100;
        const incorrecto10 = ((pregunta3_3Data.a + pregunta3_3Data.c) / total3_3) * 100;
        
        /*------DATA 4 ----------------------------------------------------*/
        
        const total4_1 = pregunta4_1Data.a + pregunta4_1Data.b + pregunta4_1Data.c;
        const correcto11 = (pregunta4_1Data.b / total4_1) * 100;
        const incorrecto11 = ((pregunta4_1Data.a + pregunta4_1Data.c) / total4_1) * 100;

        const total4_2 = pregunta4_2Data.a + pregunta4_2Data.b + pregunta4_2Data.c;
        const correcto12 = (pregunta4_2Data.a / total4_2) * 100;
        const incorrecto12 = ((pregunta4_2Data.b + pregunta4_2Data.c) / total4_2) * 100;

        const total4_3 = pregunta4_3Data.a + pregunta4_3Data.b + pregunta4_3Data.c;
        const correcto13 = (pregunta4_3Data.a / total4_3) * 100;
        const incorrecto13 = ((pregunta4_3Data.b + pregunta4_3Data.c) / total4_3) * 100;
        
        /*--------DATA 5--------------------------------------------------*/
        
        const total5_1 = pregunta5_1Data.a + pregunta5_1Data.b + pregunta5_1Data.c;
        const correcto14 = (pregunta5_1Data.a / total5_1) * 100;
        const incorrecto14 = ((pregunta5_1Data.b + pregunta5_1Data.c) / total5_1) * 100;

        const total5_2 = pregunta5_2Data.a + pregunta5_2Data.b + pregunta5_2Data.c;
        const correcto15 = (pregunta5_2Data.a / total5_2) * 100;
        const incorrecto15 = ((pregunta5_2Data.b + pregunta5_2Data.c) / total5_2) * 100;

        const total5_3 = pregunta5_3Data.a + pregunta5_3Data.b + pregunta5_3Data.c;
        const correcto16 = (pregunta5_3Data.b / total5_3) * 100;
        const incorrecto16 = ((pregunta5_3Data.a + pregunta5_3Data.c) / total5_3) * 100;

        const dataVersions = {
          version1_1: {
            labels: ['Verdadero', 'Falso'],
            datasets: [{
              data: [pregunta1_1Data.a, pregunta1_1Data.b],
              backgroundColor: ['#008429', '#F8D000']
            }]
          },
          version1_1b: {
            labels: ['% Correcto', '% Incorrecto'],
            datasets: [{
              data: [correcto2, incorrecto2],
              backgroundColor: ['#008429', '#F8D000']
            }]
          },
          version1_2: {
            labels: ['Opción A', 'Opción B', 'Opción C'],
            datasets: [{
              data: [pregunta1_2Data.a, pregunta1_2Data.b, pregunta1_2Data.c],
              backgroundColor: ['#008429', '#F8D000', '#F7911E']
            }]
          },
          version1_2b: {
            labels: ['% Correcto', '% Incorrecto'],
            datasets: [{    
              data: [correcto3, incorrecto3],
              backgroundColor: ['#008429', '#F8D000']
            }]
          },
          version1_3: {
            labels: ['Opción A', 'Opción B', 'Opción C'],
            datasets: [{
              data: [pregunta1_3Data.a, pregunta1_3Data.b, pregunta1_3Data.c],
              backgroundColor: ['#008429', '#F8D000', '#F7911E']
            }]
          },
          version1_3b: {
            labels: ['% Correcto', '% Incorrecto'],
            datasets: [{
              data: [correcto4, incorrecto4],
              backgroundColor: ['#008429', '#F8D000']
            }]
          },
          
          /*----------------------------------------------------*/
          
          version2_1: {
            labels: ['Verdadero', 'Falso'],
            datasets: [{
              data: [pregunta2_1Data.a, pregunta2_1Data.b],
              backgroundColor: ['#008429', '#F8D000']
            }]
          },
          version2_1b: {
            labels: ['% Correcto', '% Incorrecto'],
            datasets: [{
              data: [correcto5, incorrecto5],
              backgroundColor: ['#008429', '#F8D000']
            }]
          },
          version2_2: {
            labels: ['Opción A', 'Opción B', 'Opción C'],
            datasets: [{
              data: [pregunta2_2Data.a, pregunta2_2Data.b, pregunta2_2Data.c],
              backgroundColor: ['#008429', '#F8D000', '#F7911E']
            }]
          },
          version2_2b: {
            labels: ['% Correcto', '% Incorrecto'],
            datasets: [{    
              data: [correcto6, incorrecto6],
              backgroundColor: ['#008429', '#F8D000']
            }]
          },
          version2_3: {
            labels: ['Opción A', 'Opción B', 'Opción C'],
            datasets: [{
              data: [pregunta2_3Data.a, pregunta2_3Data.b, pregunta2_3Data.c],
              backgroundColor: ['#008429', '#F8D000', '#F7911E']
            }]
          },
          version2_3b: {
            labels: ['% Correcto', '% Incorrecto'],
            datasets: [{
              data: [correcto7, incorrecto7],
              backgroundColor: ['#008429', '#F8D000']
            }]
          },
          
          /*----------------------------------------------------*/
          
          version3_1: {
            labels: ['Verdadero', 'Falso'],
            datasets: [{
              data: [pregunta3_1Data.a, pregunta3_1Data.b],
              backgroundColor: ['#008429', '#F8D000']
            }]
          },
          version3_1b: {
            labels: ['% Correcto', '% Incorrecto'],
            datasets: [{
              data: [correcto8, incorrecto8],
              backgroundColor: ['#008429', '#F8D000']
            }]
          },
          version3_2: {
            labels: ['Verdadero', 'Falso'],
            datasets: [{
              data: [pregunta3_2Data.a, pregunta3_2Data.b],
              backgroundColor: ['#008429', '#F8D000']
            }]
          },
          version3_2b: {
            labels: ['% Correcto', '% Incorrecto'],
            datasets: [{    
              data: [correcto9, incorrecto9],
              backgroundColor: ['#008429', '#F8D000']
            }]
          },
          version3_3: {
            labels: ['Verdadero', 'Falso'],
            datasets: [{
              data: [pregunta3_3Data.a, pregunta3_3Data.b],
              backgroundColor: ['#008429', '#F8D000']
            }]
          },
          version3_3b: {
            labels: ['% Correcto', '% Incorrecto'],
            datasets: [{
              data: [correcto10, incorrecto10],
              backgroundColor: ['#008429', '#F8D000']
            }]
          },
          
          /*----------------------------------------------------*/
          
          version4_1: {
            labels: ['Verdadero', 'Falso'],
            datasets: [{
              data: [pregunta4_1Data.a, pregunta4_1Data.b],
              backgroundColor: ['#008429', '#F8D000']
            }]
          },
          version4_1b: {
            labels: ['% Correcto', '% Incorrecto'],
            datasets: [{
              data: [correcto11, incorrecto11],
              backgroundColor: ['#008429', '#F8D000']
            }]
          },
          version4_2: {
            labels: ['Verdadero', 'Falso'],
            datasets: [{
              data: [pregunta4_2Data.a, pregunta4_2Data.b],
              backgroundColor: ['#008429', '#F8D000']
            }]
          },
          version4_2b: {
            labels: ['% Correcto', '% Incorrecto'],
            datasets: [{    
              data: [correcto12, incorrecto12],
              backgroundColor: ['#008429', '#F8D000']
            }]
          },
          version4_3: {
            labels: ['Verdadero', 'Falso'],
            datasets: [{
              data: [pregunta4_3Data.a, pregunta4_3Data.b],
              backgroundColor: ['#008429', '#F8D000']
            }]
          },
          version4_3b: {
            labels: ['% Correcto', '% Incorrecto'],
            datasets: [{
              data: [correcto13, incorrecto13],
              backgroundColor: ['#008429', '#F8D000']
            }]
          },
          
          /*----------------------------------------------------*/
          
          version5_1: {
            labels: ['Verdadero', 'Falso'],
            datasets: [{
              data: [pregunta5_1Data.a, pregunta5_1Data.b],
              backgroundColor: ['#008429', '#F8D000']
            }]
          },
          version5_1b: {
            labels: ['% Correcto', '% Incorrecto'],
            datasets: [{
              data: [correcto14, incorrecto14],
              backgroundColor: ['#008429', '#F8D000']
            }]
          },
          version5_2: {
            labels: ['Verdadero', 'Falso'],
            datasets: [{
              data: [pregunta5_2Data.a, pregunta5_2Data.b],
              backgroundColor: ['#008429', '#F8D000']
            }]
          },
          version5_2b: {
            labels: ['% Correcto', '% Incorrecto'],
            datasets: [{    
              data: [correcto15, incorrecto15],
              backgroundColor: ['#008429', '#F8D000']
            }]
          },
          version5_3: {
            labels: ['Verdadero', 'Falso'],
            datasets: [{
              data: [pregunta5_3Data.a, pregunta5_3Data.b],
              backgroundColor: ['#008429', '#F8D000']
            }]
          },
          version5_3b: {
            labels: ['% Correcto', '% Incorrecto'],
            datasets: [{
              data: [correcto16, incorrecto16],
              backgroundColor: ['#008429', '#F8D000']
            }]
          }
        };

        const chartData = dataVersions.version1_1;
        const chartData2 = dataVersions.version1_2;
        const chartData3 = dataVersions.version1_3;
        const chartData4 = dataVersions.version2_1;
        const chartData5 = dataVersions.version2_2;
        const chartData6 = dataVersions.version2_3;
        const chartData7 = dataVersions.version3_1;
        const chartData8 = dataVersions.version3_2;
        const chartData9 = dataVersions.version3_3;
        const chartData10 = dataVersions.version4_1;
        const chartData11 = dataVersions.version4_2;
        const chartData12 = dataVersions.version4_3;
        const chartData13 = dataVersions.version5_1;
        const chartData14 = dataVersions.version5_2;
        const chartData15 = dataVersions.version5_3;

        const doughnutChart = new Chart('donutChart1', {
          type: 'doughnut',
          options: {
            plugins: {
              legend: {
                display: true,
                position: 'bottom',
              },
              tooltip: {
                callbacks: {
                  afterLabel: function () {
                    return '';
                  }
                }
              }
            }
          },
          data: chartData
        });

        const doughnutChart2 = new Chart('donutChart2', {
          type: 'doughnut',
          options: {
            plugins: {
              legend: {
                display: true,
                position: 'bottom',
              },
              tooltip: {
                callbacks: {
                  afterLabel: function () {
                    return '';
                  }
                }
              }
            }
          },
          data: chartData2
        });

        const doughnutChart3 = new Chart('donutChart3', {
          type: 'doughnut',
          options: {
            plugins: {
              legend: {
                display: true,
                position: 'bottom',
              },
              tooltip: {
                callbacks: {
                  afterLabel: function () {
                    return '';
                  }
                }
              }
            }
          },
          data: chartData3
        });
        
        const doughnutChart4 = new Chart('donutChart4', {
          type: 'doughnut',
          options: {
            plugins: {
              legend: {
                display: true,
                position: 'bottom',
              },
              tooltip: {
                callbacks: {
                  afterLabel: function () {
                    return '';
                  }
                }
              }
            }
          },
          data: chartData4
        });

        const doughnutChart5 = new Chart('donutChart5', {
          type: 'doughnut',
          options: {
            plugins: {
              legend: {
                display: true,
                position: 'bottom',
              },
              tooltip: {
                callbacks: {
                  afterLabel: function () {
                    return '';
                  }
                }
              }
            }
          },
          data: chartData5
        });

        const doughnutChart6 = new Chart('donutChart6', {
          type: 'doughnut',
          options: {
            plugins: {
              legend: {
                display: true,
                position: 'bottom',
              },
              tooltip: {
                callbacks: {
                  afterLabel: function () {
                    return '';
                  }
                }
              }
            }
          },
          data: chartData6
        });
        
        const doughnutChart7 = new Chart('donutChart7', {
          type: 'doughnut',
          options: {
            plugins: {
              legend: {
                display: true,
                position: 'bottom',
              },
              tooltip: {
                callbacks: {
                  afterLabel: function () {
                    return '';
                  }
                }
              }
            }
          },
          data: chartData7
        });
        
        const doughnutChart8 = new Chart('donutChart8', {
          type: 'doughnut',
          options: {
            plugins: {
              legend: {
                display: true,
                position: 'bottom',
              },
              tooltip: {
                callbacks: {
                  afterLabel: function () {
                    return '';
                  }
                }
              }
            }
          },
          data: chartData8
        });
        
        const doughnutChart9 = new Chart('donutChart9', {
          type: 'doughnut',
          options: {
            plugins: {
              legend: {
                display: true,
                position: 'bottom',
              },
              tooltip: {
                callbacks: {
                  afterLabel: function () {
                    return '';
                  }
                }
              }
            }
          },
          data: chartData9
        });
        
        const doughnutChart10 = new Chart('donutChart10', {
          type: 'doughnut',
          options: {
            plugins: {
              legend: {
                display: true,
                position: 'bottom',
              },
              tooltip: {
                callbacks: {
                  afterLabel: function () {
                    return '';
                  }
                }
              }
            }
          },
          data: chartData10
        });
        
        const doughnutChart11 = new Chart('donutChart11', {
          type: 'doughnut',
          options: {
            plugins: {
              legend: {
                display: true,
                position: 'bottom',
              },
              tooltip: {
                callbacks: {
                  afterLabel: function () {
                    return '';
                  }
                }
              }
            }
          },
          data: chartData11
        });
        
        const doughnutChart12 = new Chart('donutChart12', {
          type: 'doughnut',
          options: {
            plugins: {
              legend: {
                display: true,
                position: 'bottom',
              },
              tooltip: {
                callbacks: {
                  afterLabel: function () {
                    return '';
                  }
                }
              }
            }
          },
          data: chartData12
        });
        
        const doughnutChart13 = new Chart('donutChart13', {
          type: 'doughnut',
          options: {
            plugins: {
              legend: {
                display: true,
                position: 'bottom',
              },
              tooltip: {
                callbacks: {
                  afterLabel: function () {
                    return '';
                  }
                }
              }
            }
          },
          data: chartData13
        });
        
        const doughnutChart14 = new Chart('donutChart14', {
          type: 'doughnut',
          options: {
            plugins: {
              legend: {
                display: true,
                position: 'bottom',
              },
              tooltip: {
                callbacks: {
                  afterLabel: function () {
                    return '';
                  }
                }
              }
            }
          },
          data: chartData14
        });
        
        const doughnutChart15 = new Chart('donutChart15', {
          type: 'doughnut',
          options: {
            plugins: {
              legend: {
                display: true,
                position: 'bottom',
              },
              tooltip: {
                callbacks: {
                  afterLabel: function () {
                    return '';
                  }
                }
              }
            }
          },
          data: chartData15
        });
        
        document.querySelector('#version1_1Tab').addEventListener('click', () => {
          doughnutChart.data = dataVersions.version1_1;
          doughnutChart.update();
        });

        document.querySelector('#version1_1bTab').addEventListener('click', () => {
          doughnutChart.data = dataVersions.version1_1b;
          doughnutChart.update();
        });

        document.querySelector('#version1_2Tab').addEventListener('click', () => {
          doughnutChart2.data = dataVersions.version1_2;
          doughnutChart2.update();
        });

        document.querySelector('#version1_2bTab').addEventListener('click', () => {
          doughnutChart2.data = dataVersions.version1_2b;
          doughnutChart2.update();
        });

        document.querySelector('#version1_3Tab').addEventListener('click', () => {
          doughnutChart3.data = dataVersions.version1_3;
          doughnutChart3.update();
        });

        document.querySelector('#version1_3bTab').addEventListener('click', () => {
          doughnutChart3.data = dataVersions.version1_3b;
          doughnutChart3.update();
        });
        
       /*-------------------------------------------------------------------*/
       
        document.querySelector('#version2_1Tab').addEventListener('click', () => {
          doughnutChart4.data = dataVersions.version2_1;
          doughnutChart4.update();
        });

        document.querySelector('#version2_1bTab').addEventListener('click', () => {
          doughnutChart4.data = dataVersions.version2_1b;
          doughnutChart4.update();
        });

        document.querySelector('#version2_2Tab').addEventListener('click', () => {
          doughnutChart5.data = dataVersions.version2_2;
          doughnutChart5.update();
        });

        document.querySelector('#version2_2bTab').addEventListener('click', () => {
          doughnutChart5.data = dataVersions.version2_2b;
          doughnutChart5.update();
        });

        document.querySelector('#version2_3Tab').addEventListener('click', () => {
          doughnutChart6.data = dataVersions.version2_3;
          doughnutChart6.update();
        });

        document.querySelector('#version2_3bTab').addEventListener('click', () => {
          doughnutChart6.data = dataVersions.version2_3b;
          doughnutChart6.update();
        });
        
         /*-------------------------------------------------------------------*/
       
        document.querySelector('#version3_1Tab').addEventListener('click', () => {
          doughnutChart7.data = dataVersions.version3_1;
          doughnutChart7.update();
        });

        document.querySelector('#version3_1bTab').addEventListener('click', () => {
          doughnutChart7.data = dataVersions.version3_1b;
          doughnutChart7.update();
        });

        document.querySelector('#version3_2Tab').addEventListener('click', () => {
          doughnutChart8.data = dataVersions.version3_2;
          doughnutChart8.update();
        });

        document.querySelector('#version3_2bTab').addEventListener('click', () => {
          doughnutChart8.data = dataVersions.version3_2b;
          doughnutChart8.update();
        });

        document.querySelector('#version3_3Tab').addEventListener('click', () => {
          doughnutChart9.data = dataVersions.version3_3;
          doughnutChart9.update();
        });

        document.querySelector('#version3_3bTab').addEventListener('click', () => {
          doughnutChart9.data = dataVersions.version3_3b;
          doughnutChart9.update();
        });
        
        
         /*-------------------------------------------------------------------*/
       
        document.querySelector('#version4_1Tab').addEventListener('click', () => {
          doughnutChart10.data = dataVersions.version4_1;
          doughnutChart10.update();
        });

        document.querySelector('#version4_1bTab').addEventListener('click', () => {
          doughnutChart10.data = dataVersions.version4_1b;
          doughnutChart10.update();
        });

        document.querySelector('#version4_2Tab').addEventListener('click', () => {
          doughnutChart11.data = dataVersions.version4_2;
          doughnutChart11.update();
        });

        document.querySelector('#version4_2bTab').addEventListener('click', () => {
          doughnutChart11.data = dataVersions.version4_2b;
          doughnutChart11.update();
        });

        document.querySelector('#version4_3Tab').addEventListener('click', () => {
          doughnutChart12.data = dataVersions.version4_3;
          doughnutChart12.update();
        });

        document.querySelector('#version4_3bTab').addEventListener('click', () => {
          doughnutChart12.data = dataVersions.version4_3b;
          doughnutChart12.update();
        });
        
         /*-------------------------------------------------------------------*/
       
        document.querySelector('#version5_1Tab').addEventListener('click', () => {
          doughnutChart13.data = dataVersions.version5_1;
          doughnutChart13.update();
        });

        document.querySelector('#version5_1bTab').addEventListener('click', () => {
          doughnutChart13.data = dataVersions.version5_1b;
          doughnutChart13.update();
        });

        document.querySelector('#version5_2Tab').addEventListener('click', () => {
          doughnutChart14.data = dataVersions.version5_2;
          doughnutChart14.update();
        });

        document.querySelector('#version5_2bTab').addEventListener('click', () => {
          doughnutChart14.data = dataVersions.version5_2b;
          doughnutChart14.update();
        });

        document.querySelector('#version5_3Tab').addEventListener('click', () => {
          doughnutChart15.data = dataVersions.version5_3;
          doughnutChart15.update();
        });

        document.querySelector('#version5_3bTab').addEventListener('click', () => {
          doughnutChart15.data = dataVersions.version5_3b;
          doughnutChart15.update();
        });
        
       // Crear un objeto para almacenar las fechas y contar los usuarios por día
        const userCounts = {};

        // Filtrar filas que tengan un valor en la columna "last activity at" y que no estén en blanco
        const rowsWithLastActivity = rows.slice(1).filter(row => {
          // Dividir la fila en columnas
          const columns = row.split(',');
        
          // Verificar si la columna "last activity at" tiene un valor y no está en blanco
          return columns.length > lastActivityColumn && columns[lastActivityColumn].trim() !== '';
        });

        // Iterar a través de las filas filtradas y contar los usuarios por día
        rowsWithLastActivity.forEach(row => {
          const columns = row.split(',');
          const lastActivity = columns[lastActivityColumn].trim();
    
      // Intentar obtener la fecha a partir de la cadena
      const dateMatch = lastActivity.match(/(\d{1,2})\/(\d{1,2})\/(\d{4})/);
    
      if (dateMatch) {
        // Construir la fecha en formato YYYY-MM-DD
        const dateKey = `${dateMatch[3]}-${dateMatch[1].padStart(2, '0')}-${dateMatch[2].padStart(2, '0')}`;
    
        // Incrementar el contador para esa fecha
        userCounts[dateKey] = (userCounts[dateKey] || 0) + 1;
      }
});

// Extraer las fechas y cantidades en arrays separados
const dates = Object.keys(userCounts);
const counts = dates.map(date => userCounts[date]);

// Crear el gráfico de barras
const ctx = document.getElementById('salesChart1').getContext('2d');
const salesChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: dates.reverse(),
    datasets: [
      {
        label: 'Usuarios por día',
        data: counts.reverse(),
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1
      }
    ]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});

      })
      .catch(error => console.error('Error:', error));

  }
  function parseCSVRow(row) {
    const values = [];
    let insideQuotedValue = false;
    let currentValue = "";

    for (let i = 0; i < row.length; i++) {
      if (row[i] === '"') {
        insideQuotedValue = !insideQuotedValue;
      } else if (row[i] === ',' && !insideQuotedValue) {
        values.push(currentValue);
        currentValue = "";
      } else {
        currentValue += row[i];
      }
    }

    values.push(currentValue);

    return values;
  }
  window.onload = cargarTabla;
</script>



  </body>
</html>
