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
<body class="bgColor">
    <?php include 'navbar.php';?>

    <div class="container-fluid pt-3">
        <hr>
    </div>

<div  class="container col-12 col-xl-8 col-lg-8 col-sm-12 col-xs-6 pt-3 pb-3" >	
    <form action="insert.php" method="POST" style="padding-bottom: 30px;">
      <div class="form-group">
        <label for="ime" >Ime</label>
        <input name="ime" type="text" class="form-control" id="ime" aria-describedby="emailHelp" placeholder="Ime">
        <small id="imeHelp" class="form-text text-muted">Ime novih bodybuildera!</small>
      </div>
      <div class="form-group">
        <label for="prezime" >Prezime</label>
        <input name="prezime" type="text" class="form-control" id="prezime" aria-describedby="emailHelp" placeholder="Prezime">
        <small id="prezimeHelp" class="form-text text-muted">Prezime novih bodybuildera!</small>
      </div>
      <div class="form-group pb-3">
        <label for="email">E-mail</label>
        <input name="email" type="email" class="form-control" id="email" placeholder="e-Mail">
        <small id="emailHelp" class="form-text text-muted">E-mail da vam šaljemo novosti</small>
      </div>
      <div class="form-group">
            <label for="mobitel">Broj mobitela</label><br>
            <input name="broj_mobitela" type="tel" id="broj_mobitela" name="mobitel" placeholder="099-451-1212" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br><br>        
      </div>
      <div class="form-group pb-3 mt-n4">
            <p>Odaberi spol</p> 
            <input name="spol" type="radio" id="spolM" name="spolM" value="M">
            <label class="radio-opcija" for="spolF">Muško</label><br>
            <input name="spol" type="radio" id="spolF" name="spolF" value="Ž">
            <label class="radio-opcija" for="spolF">Žensko</label><br>  
      </div>
      <div class="form-group">
        <label for="datumR" >Datum rođenja:&nbsp</label>
        <input name="datum_rodenja" type="date" id="datum_rodenja" name="datumR">
      </div>
      <div class="form-group">
        <label for="datumP" >Datum početka:&nbsp</label>
        <input name="datum_pocetka" type="date" id="datum_pocetka" name="datumP"> 
      </div>
      
      <div class="form-check">
        <input name="salji_obavijesti" type="checkbox" class="form-check-input" id="salji_obavijesti">
        <label class="form-check-label" for="exampleCheck1" style="padding-bottom: 20px; color:white;">Šalji mi obavijesti na e-mail</label>
      </div>
      
      <button type="submit" class="btn btn-danger">Pošalji</button>
    </form>
</div>

    <div class="container-fluid pt-3">
        <hr>
    </div>

    <?php include 'footer.php';?>
    

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>