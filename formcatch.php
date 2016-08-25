<?php

//Datos de Facturación.
$non_fac = $_POST['non_fac'];
$raz_soc = $_POST['raz_soc'];
$nom_com = $_POST['nom_com'];
$RFC = $_POST['RFC'];

    //Domicilio Fiscal.
$st_fis = $_POST['st_fis'];
$ext_fis = $_POST['ext_fis'];
$int_fis = $_POST['int_fis'];
$col_fis = $_POST['col_fis'];
$cd_fis = $_POST['cd_fis'];
$edo_fis = $_POST['edo_fis'];
$cp_fis = $_POST['cp_fis'];
$tel_fis = $_POST['tel_fis'];
$cel_fis = $_POST['cel_fis'];
$ema_fis = $_POST['ema_fis'];

//Datos de Envío
$non_env = $_POST['non_env'];

    //Nombre del comprador.
$nom_dir = $_POST['nom_dir'];
$ape_dir = $_POST['ape_dir'];

    //Domicilio de Entrega.
$same = $_POST['same'];
$st_dir = $_POST['st_dir'];
$ext_dir = $_POST['ext_dir'];
$int_dir = $_POST['int_dir'];
$col_dir = $_POST['col_dir'];
$cd_dir = $_POST['cd_dir'];
$edo_dir = $_POST['edo_dir'];
$cp_dir = $_POST['cp_dir'];
$tel_fis = $_POST['tel_dir'];
$cel_fis = $_POST['cel_dir'];
$ema_fis = $_POST['ema_dir'];

//Forma de envío.
$env = $_POST['env'];

//Forma de Pago.
$paid = $_POST['paid'];

echo "<br/>   DATOS RECIBIDOS";
if($non_fac == ""){
    $non_fac = "Con factura";
}
//Datos de Facturación.
echo "<br/>   ".$non_fac;
echo "<br/>   ".$raz_soc;
echo "<br/>   ".$nom_com;
echo "<br/>   ".$RFC;

    //Domicilio Fiscal.
echo "<br/>   ".$st_fis;
echo "<br/>   ".$ext_fis;
echo "<br/>   ".$int_fis;
echo "<br/>   ".$col_fis;
echo "<br/>   ".$cd_fis;
echo "<br/>   ".$edo_fis;
echo "<br/>   ".$cp_fis;
echo "<br/>   ".$tel_fis;
echo "<br/>   ".$cel_fis;
echo "<br/>   ".$ema_fis;

//Datos de Envío
echo "<br/>   ".$non_env;

    //Nombre del comprador.
echo "<br/>   ".$nom_dir;
echo "<br/>   ".$ape_dir;

    //Domicilio de Entrega.
echo "<br/>   ".$same;
echo "<br/>   ".$st_dir;
echo "<br/>   ".$ext_dir;
echo "<br/>   ".$int_dir;
echo "<br/>   ".$col_dir;
echo "<br/>   ".$cd_dir;
echo "<br/>   ".$edo_dir;
echo "<br/>   ".$cp_dir;
echo "<br/>   ".$tel_fis;
echo "<br/>   ".$cel_fis;
echo "<br/>   ".$ema_fis;

//Forma de envío.
echo "<br/>   ".$env;

//Forma de Pago.
echo "<br/>   ".$paid;

?>