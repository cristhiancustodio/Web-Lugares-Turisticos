<?php include("views/nav.php") ?>

<div class="album py-3 bg-light">
      <?php 
        $id = (int)$_GET["id_dep"];
        $depa= $dao->verunicoDepartamento($id);
        ?>
        <div class="container">
            <div class="title">
                <h1><?php echo $depa[1]?></h1>
                <h3>Lugares que puedes visitar</h3>
            </div>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


          <?php 
            $filas = $dao->verLugaresTuristicos($id);
            if($filas == null){
               require("views/error.php");
            }
            else{
              
              foreach ($filas as $item) {
          ?>  
            <div class="col">
              <div class="card shadow-sm">
                  <img src="public/img/<?php echo $item[2]?>.<?php echo $item[0]?>.jpg" alt="">
                
                <div class="card-body">
                    <p class="h4 card-text"><?php echo $item[1]?></p>
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Saber más</button>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            
                <?php 
                }
              }
              ?>
              
          </div>
        </div>
      </div>

<?php include("views/footer.php") ?>
