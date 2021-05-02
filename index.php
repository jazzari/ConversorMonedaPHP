
<?php  

    if (isset($_POST['monto'])) {
      define ("cantidad", $_POST['monto']);
    } else {
      define ("cantidad", 0);
    }
    if (isset($_POST['moneda'])) {
       // define ("mon", $_POST['moneda']);
        $mon = $_POST['moneda'];
    }
    $peseta = 166.386;
    $dolar = 1.21;
    $conversion = 0;

    if ($mon == "pesetas") {
        $conversion=cantidad*$peseta;
        echo cantidad, " euros son ", number_format($conversion,3,",","."), " pesetas.";
    }
    else {
        $conversion=cantidad*$dolar;
        echo cantidad, " euros son ", number_format($conversion,3,",","."), " dólares.";
    } 
?>
   
