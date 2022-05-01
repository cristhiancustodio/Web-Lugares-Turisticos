<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/sidebar.css">
    <link rel="stylesheet" href="public/css/album.css">
    <title>Peru</title>
</head>
<body>
    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }
  
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
      </style>
<div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
    <a href="" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
      <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-5 fw-semibold">Perú</span>
    </a>
    <ul class="list-unstyled ps-0">
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
          Regiones del Perú
        </button>
        <div class="collapse show" id="home-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <?php 
              include("./controllers/c_daoWeb.php");
              $dao = new DaoWeb();
              $filas = $dao->verDepartamentos();
              foreach($filas as $row){
            ?>
            <li><a href="lugares.php?id_dep= <?php echo $row[0]?> " class="link-dark rounded"><?php echo $row[1]?></a></li>
            <?php }?>
            
          </ul>
        </div>
      </li>
      <li class="border-top my-3"></li>
    </ul>
  </div>