<html>
        <head>
                <title>CodeIgniter Tutorial</title>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/css/bootstrap.min.css" integrity="sha512-6KY5s6UI5J7SVYuZB4S/CZMyPylqyyNZco376NM2Z8Sb8OxEdp02e1jkKk/wZxIEmjQ6DRCEBhni+gpr9c4tvA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        </head>
        <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="<?php echo site_url('/home')?>">View Posts</a>
                                        </li>
                                <?php if(!$this->session->has_userdata('user')) {?>
                                        <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="<?php echo site_url('login_view')?>">Login</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="<?php echo site_url('register_view')?>">Register</a>
                                        </li>
                                <?php }else {?>
                                        <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="<?php echo site_url('news')?>">My Posts</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="<?php echo site_url('logout')?>">Logout</a>
                                        </li>
                                <?php }?>
                        </ul>
                     
                        </div>
                </div>
        </nav>
                <h1>Page Title : <?php echo $title; ?></h1>