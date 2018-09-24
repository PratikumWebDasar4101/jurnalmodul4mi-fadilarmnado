<?php
include 'proses.php';
if (isset($_POST['kirim'])) {
  echo "Data User <br>";
  if (move_uploaded_file($sumber,$target)) {
    echo "Nama File :"." ".$nama_gbr."<br>"."<br>";
  }else {

    echo $_FILES['gbr']['error'] ;
  }
  }

  /*$hobi1 = array('hobi[]' => '',

               'hobi[]' => ''
        );*/
?>

<img src="<?php echo $target; ?>" width="400px">
<input type="submit" name="delete" value="delete">
<?php
if (isset($_POST['kirim'])) {
foreach ($hobi1 as $key => $value) {
echo "<br><br>Hobi saya :".$value.'<br>';
}
}
if (isset($_POST['delete'])) {
  unset($hobi1);
  header("location: formawal.html");
}
 ?>
