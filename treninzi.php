<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>GoldenGym</title>
</head>
<body>
    <?php include 'navbar.php';?>
    

<div class="contianer bg-image-treninzi justify-content-center pl-5">
<h1 class="text-center text-white pb-5 pt-4">Cijene</h1>
<div class="row justify-content-center d-flex">
  <div class="col-6">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action h3" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Crossfit</a>
      <a class="list-group-item list-group-item-action h3" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Trening snage</a>
      <a class="list-group-item list-group-item-action h3" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Kardio</a>    </div>
  </div>
  <div class="col-6">
    <div class="tab-content pr-4" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">Crossfit trening se održava 3 puta tjedno u terminima
        od 17-20h. Cijena je 20 eura mjesečno
      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">Trening snage drži ozloglašeni bodybuilder Pajo Pajić. 
        Želite ogromne bicepse? Volite grubo? Super, Pajo Pajić je opak i nema milosti prema vama. Istrošit će vam svaku kaloriju.
      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">Budimo realni, nitko danas više ne radi kardio.</div>
    </div>
  </div>
</div>
</div>
<hr>

<div class="container-fluid bgColor">
  <div class="row text-center padding kartica">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mt-5">
          <img class="karticaSlika" src="images/pexels-leon-ardho-1552242.jpg" alt="Renato" width="500px" height="auto">
          <p class="mt-3 pl-4">Crossfit je savršen omjer treninga snage i kondicije.</p>
      </div>
      
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mt-5">
          <img class="karticaSlika" src="images/pexels-pixabay-414029.jpg" alt="Ana" width="500px" height="auto">
          <p class="mt-3 pl-2">Na treninzima snage se fokusiramo na jačanje mišića progresivnim overload-om.</p>
      </div>
  </div>
</div>
<hr>

    <?php include 'footer.php';?>
    

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>