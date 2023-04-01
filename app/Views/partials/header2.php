<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">    
    <style>
    .image {
      display: flex;
      justify-content: center;
      align-items: center;
      /* width: 100%; */
      /* height: auto; */

    }
    .logo {
        padding: 100px 0px 0px 0px;
        width: 30vw;
    }
    .achievement{
        justify: center;
    }

    /* Google Fonts */
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

    /* Global */
     html {
      /* min-height: 100%; */
      /* overflow: hidden; */
    }

    body {
      /* height: calc(100vh - 8em); */
      color: black;
      font-family: 'Roboto', sans-serif;
      font-weight: bold;
    }

   .line-1 {
      position: relative;
      top: 8vh;
      width: 51vw; 
      margin: 30px auto auto auto;
      border-right: 2px solid rgba(255, 255, 255, .75);
      font-size: 180%;
      text-align: center;
      /* white-space: nowrap; */
      /* overflow-x: hidden; */
      transform: translateY(-50%);
    }

    @media screen and (min-width: 1535px) {
      html {
      /* min-height: 100%; */
      /* overflow: hidden; */
    }

    body {
      /* height: calc(100vh - 8em); */
      color: black;
      font-family: 'Roboto', sans-serif;
      font-weight: bold;
    }

    .line-1 {
      position: relative;
      top: 8vh;
      overflow-wrap: break-word;
      inline-size: 51vw;
      /* width: 51vw; */
      margin: 0 auto auto auto;
      border-right: 2px solid rgba(255, 255, 255, .75);
      font-size: 180%;
      text-align: center;
      white-space: nowrap;
      overflow-x: hidden;
      transform: translateY(-50%);
    }

    /* Animation */
    .anim-typewriter {
      animation: typewriter-forward 7s steps(51) 0.5s infinite normal both,
        blinkTextCursor 500ms steps(51) infinite normal;
    }

    @keyframes typewriter-forward {
      0% {
        width: 0;
      }

      50% {
        width: 51vw;
      }
      100% {
        width: 0;
      }
}

    @keyframes blinkTextCursor {
      from {
        border-right-color: black;
      }

      to {
        border-right-color: transparent;
      }
    }
    }
  </style>
  </head>
 <body>
  
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    
    <a class="navbar-brand mx-3" href="#"><img  style="border-radius:50%"  src="<?=base_url("uploads/cv.jpeg")?>"  width="45px" hight="45px" alt="...">  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-trget="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php if (isset($_SESSION['homepage'])){echo'active';}?> mx-3" aria-current="page" style="font-size:20px;" href="<?= site_url();?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if (isset($_SESSION['profilepage'])){echo'active';}?> mx-3" aria-current="page" style="font-size:20px;" href="<?= site_url('profile');?>">Profile</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="font-size:20px;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
        
          <ul class="dropdown-menu">
            <div class="input-group m-2">
              <form method="post" action="<?= base_url("catagory");?>">
                <select class="form-select" id="catagory" name="catagory">
                  <option value="0">All</option>
                  <?php foreach($categorys as $category):?>
              <option value="<?=$category['category_name'];?>"><?=$category['category_name'];?></option>
              <?php endforeach;?>
                </select>
        <button class="btn btn-primary mt-3" type="submit">Search</button>
              </form>
            </div>
        </ul>
        </li>
      </ul>
      
      <form class="d-flex mt-3" role="search">
        <input name="search" class="form-control me-2" id="search" type="search" placeholder="Search" aria-label="Search">
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