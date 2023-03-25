<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">    
      
  </head>
 <body>
  
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CV    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php if (isset($_SESSION['homepage'])){echo'active';}?> mx-3" aria-current="page" href="<?= site_url();?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if (isset($_SESSION['profilepage'])){echo'active';}?> mx-3" aria-current="page" href="<?= site_url('profile');?>">Profile</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            catagory
          </a>
        
          <ul class="dropdown-menu">
            <div class="input-group m-2">
              <form method="post" action="<?= base_url("catagory");?>">
                <select class="form-select" id="catagory" name="catagory">
                  <option value="0">All</option>
                  <option value="sports">Sports</option>
                  <option value="education">Education</option>
                  <option value="cericular">Cericular</option>
                </select>
        <button class="btn btn-primary mt-3" type="submit">Search</button>
              </form>
            </div>
        </ul>
        </li>
      </ul>
      
      <form class="d-flex mt-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit">Search</button>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php 
        if(!isset($_SESSION['adminloginpage'])|| isset($_SESSION['homepage']))
        {
          if(!isset($_SESSION['user']))
          { 
            echo '<li class="nav-item">
              <a class="btn btn-primary mx-3" href="'.site_url("login").'">login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary " href="'. site_url("signup").'">signup</a>
            </li>';
          }
        
          if(isset($_SESSION['user']))
          {
           echo'<li class="nav-item">
            <a class="btn btn-danger mx-3" href="'.base_url("logout").'">logout</a>
            </li>';
          }
        }
       
        if(isset($_SESSION['admin']))
        {
          echo'<li class="nav-item">
          <a class="btn btn-danger mx-3" href="'.base_url("adminlogout").'">logout</a>
          </li>';
        }
        ?> 
        </ul>

      </form>
    </div>
  </div>
</nav>