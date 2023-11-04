<?php
include 'opremaConnect.php';


global $ukupno_iznos;
global $ukupnoBezKupona;
global $vrijednostKupona;
global $ukupnoSaKuponom;
while($suma = mysqli_fetch_assoc($resultSum)){
    $ukupno_iznos = $suma['total'];
    // $ukupnoBezKupona = promijeniDecimalniSeparator($ukupno_iznos);
    $ukupnoBezKupona=number_format($ukupno_iznos, 2, ',', '.');
}

$vrijednostKupona = round(0.3*$ukupno_iznos,2);
$vrijednostKupona = number_format($vrijednostKupona, 2, ',', '.');

$ukupnoSaKuponom = round(0.7*$ukupno_iznos,2);
$ukupnoSaKuponom = number_format($ukupnoSaKuponom, 2, ',', '.');

// $ukupnoBezKupona = round($red['total'],2);
// $vrijednostKupona = round(0.3*$ukupnoBezKupona,2)
// $ukupnoSaKuponom = round(0.7*$ukupnoBezKupona,2);

// $suma = mysqli_fetch_array($resultSum);
// $total = $suma[0];

// $ukupnoBezKupona="2";
// while($red = mysqli_fetch_assoc($resultSum)){
//     $ukupno_iznos = $red['total'];
// //     break;
// //     // global $ukupnoBezKupona;
// //     // $ukupnoBezKupona = promijeniDecimalniSeparator($ukupno_iznos);

// //     // $ukupno = str_split($ukupno_iznos);
// //     // $ukupno = str_replace('.',',',$ukupno);
// //     // $ukupno_string = "";
// //     // foreach($ukupno as $znak){
// //     //     $ukupno_string = $ukupno_string.$znak;
// //     // }
// //     // global $ukupnoSaKuponom;
// //     // $ukupnoSaKuponom = round(0.7*$ukupno_iznos,2);

// //     // global $vrijednostKupona;
// //     // $vrijednostKupona = round(0.3*$ukupno_iznos,2);
    
// //     // global $ukupnoBezKupona;
// //     // $ukupnoBezKupona = $ukupno_string;
//      }

function promijeniDecimalniSeparator($iznos){
    $iznos = str_split($iznos);
    $iznos = str_replace('.',',',$iznos);
    $iznos_string = "";
    foreach($iznos as $znak){
        $iznos_string = $iznos_string.$znak;
    }
    return $iznos_string;

}

function izlistajCijeneSaKuponom(){
    global $result;
    while ($row=mysqli_fetch_assoc($result)){
        $row_naziv = $row["naziv"];
        $row_cijena = round(0.7*$row["cijena"],2);
        $row_cijena = str_split($row_cijena);
        $row_cijena = str_replace('.',',',$row_cijena);
        $row_cijena_string = "";
        foreach($row_cijena as $znak){
            $row_cijena_string = $row_cijena_string.$znak;
        }
        echo "<tr><td>".$row_naziv."</td><td>".$row_cijena_string."€"."</td></tr>";
        }
}

function izlistajCijeneBezKupona(){
    global $result;
    while ($row=mysqli_fetch_assoc($result)){
        $row_naziv = $row["naziv"];
        $row_cijena = $row["cijena"];
        $row_cijena = number_format($row_cijena, 2, ',', '.');
        // $row_cijena = str_split($row_cijena);
        // $row_cijena = str_replace('.',',',$row_cijena);
        // $row_cijena_string = "";
        // foreach($row_cijena as $znak){
        //     $row_cijena_string = $row_cijena_string.$znak;
        // }
        echo "<tr><td>".$row_naziv."</td><td>".$row_cijena."€"."</td></tr>";
        } 
}

function izlistajSveukupnoSaKuponom(){
    global $resultSum;
    global $ukupnoSaKuponom;
    global $ukupnoBezKupona;
    
    // while($red = mysqli_fetch_assoc($resultSum)){
    //     $ukupno = $red['total'];
    //     $ukupno = round(0.7*$ukupno,2);
    //     $ukupnoSaKuponom = promijeniDecimalniSeparator($ukupno);
    //     }
}

function izlistajSveukupnoBezKupona(){
    global $resultSum;
    global $ukupnoBezKupona;
    echo $ukupnoBezKupona."€";
    // while($red = mysqli_fetch_assoc($resultSum)){
    //     $ukupno = $red['total'];
    //     $ukupnoBezKupona = promijeniDecimalniSeparator($ukupno);
    //     echo $d."€";
    //     }
}

function vrijednostKupona(){
    global $resultSum;
    global $vrijednostKupona;
    while($red = mysqli_fetch_array($resultSum)){
        $ukupno = $red['total'];
        $ukupno = round(0.3*$ukupno,2);
        $vrijednostKupona = promijeniDecimalniSeparator($ukupno);
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>GoldenGym</title>

    <style>
        .modal-dialog {
        position: absolute;
        top: 100px;
        right: 100px;
        bottom: 0;
        left: 0;
        z-index: 10040;
        overflow: auto;
        overflow-y: auto;
        }
    </style>
</head>

<body>

<?php include 'navbar.php';?>

<hr>

<div class="container-fluid bgColorOprema pt-5">
<table class="table table-dark table-bordered table-hover">
  <thead class="thead-light">
    <tr>
      <th scope="col">Naziv proizvoda</th>
      <th scope="col">Cijena</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if(mysqli_num_rows($result)>0){
        if (isset($_POST['kupon'])){
            if ($_POST['kupon']=="1234"){
                izlistajCijeneSaKuponom();
                }
            else {
                izlistajCijeneBezKupona();
                }
            }
        elseif (mysqli_num_rows($result)>0){
            izlistajCijeneBezKupona();
            }
        }
    ?>
    <tr>
        <td><b>Sveukupno</b></td>
        <td>
            <?php
            if (isset($_POST['kupon'])){
                $kupon = $_POST['kupon'];
                if ($kupon=="1234"){
                    // izlistajSveukupnoSaKuponom();
                    // vrijednostKupona();
                    // izlistajSveukupnoBezKupona();
                    echo "Vrijednost kupona: 30% = ".$vrijednostKupona ."€"."<br>";
                    echo "Ukupno bez kupona: ".$ukupnoBezKupona."€"."<br>"; 
                    echo "Kupon: -".$vrijednostKupona."€"."<br><br>";
                    echo "<b>Sveukupno: </b>".$ukupnoSaKuponom."€";
                    // izlistajSveukupnoBezKupona();
                    
                    }
                else {
                    izlistajSveukupnoBezKupona();    
                }
                }
            else{
                izlistajSveukupnoBezKupona();
            }
            ?>
        </td>
    </tr>
    <thead class="thead-light">
        <tr>
            <td>
                <form action="" method="post">
                    <label class="pr-3" for="kupon">KUPON</label>
                    <input type="text" name="kupon" id="kupon" placeholder="1111" pattern="[0-9]{4}">
                    <input name="button" type="submit" class="ml-3 mb-2 btn btn-secondary" value="Primjeni kupon">

                </form>
            </td>
        </tr>
    </thead>
  </tbody>
</table>
</div>

<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content bg-success">
      <div class="modal-header justify-content">
        <h5 class="modal-title" id="exampleModalLabel">Uspješno ste iskoristili kupon</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvori</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade " id="modalGreska" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content bg-danger">
      <div class="modal-header justify-content">
        <h5 class="modal-title" id="exampleModalLabel">Krivi unos!</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvori</button>
      </div>
    </div>
  </div>
</div>


<?php
if (isset($_POST['kupon'])){
    if ($_POST['kupon']=="1234"){
        echo "<script>";
        echo "$('#exampleModal').modal('show');";
        echo "</script>";
    }
    else{
        echo "<script>";
        echo "$('#modalGreska').modal('show');";
        echo "</script>";
    }
}?>


</body>
</html>