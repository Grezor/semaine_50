<?php 
    include("header.php");

    include("connexion.php");

    $db=connect();
    $ID=$_GET['an_id']; 
    $resultApropos =  "SELECT * FROM annonces WHERE an_id = $ID";
    $resultApropos = $db->query($resultApropos);
    $row = $resultApropos->fetch(PDO::FETCH_OBJ);  
          ?>


    <!-- lE CAROUSEL-->


          <div class="card" style="width: 25rem;">
          <div id="carouselExemple" class="carousel slide" data-ride="carousel" data-interval="false">

<ol class="carousel-indicators">
    <li data-target="#carouselExemple" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExemple" data-slide-to="1"></li>
    <li data-target="#carouselExemple" data-slide-to="2"></li>
</ol>

    <div class="carousel">
    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="annexes/photos/annonce_1/1-1.jpg"
                class="d-block center-block" height="810"  >
        </div>

        <div class="carousel-item">
            <img src="annexes/photos/annonce_1/1-2.jpg"
                class="d-block" height="500">
        </div>

    </div>

    <a href="#carouselExemple" class="carousel-control-prev" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a href="#carouselExemple" class="carousel-control-next" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

    </div>

</div>

<script>
$('.carousel').carousel({

    pause: "null"

})
</script>
            <div class="card-body">
                <p class="text align-middle text-center"><?php echo $row->an_titre ?></p>
                <p class="text align-middle text-center"><?php echo $row->an_local ?></p>
                <p class="text align-middle text-center"><?php echo $row->an_prix ?> €</p>
                <p class="text align-middle text-center"><?php echo $row->an_description ?></p>
                <p class="text align-middle text-center"><?php echo $row->an_pieces ?></p>
                <p class="text align-middle text-center"><?php echo $row->an_surf_hab ?></p>
                

          <div class="text align-middle text-center">
              <a href="">   <button class="btn btn-outline-danger">Suprimer</button> </a>

        </div><br>


                <p class="text align-middle text-center">2020-11-13</p>


    

          </div>
          </div>





<?php
    include("footer.php");
    
?>