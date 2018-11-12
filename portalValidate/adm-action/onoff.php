<?php
session_start();
ob_start();

if (!(isset($_SESSION['admin']))){
    header("location:../index.php");
}
else {

require_once("../config.php");

$sql="SELECT * FROM status WHERE aiubid='$un' and password=md5('$pw')";
$result=mysqli_query($conn,$sql);


$res=mysqli_fetch_array($result);

$count=mysqli_num_rows($result);

// If result matched $un and $pw, table row must be 1 row

if($count==1){

   $_SESSION['aiubid']=$un;
   //close the db connection here
   if($res['type']==1) {
       $_SESSION['admin']=1;
       header("location:admin.php");
   }
   else{
       header("location:user.php");
   }
}
else {
   //close the db connection here
   header("location:index.php");
}
//close the db connection here

$onoff=$_POST['onoff'];
if(!$onoff){
  echo "no on off";
}
else
echo $onoff;


}

  ?>
