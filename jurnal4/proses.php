<?php
  if (isset($_POST['kirim'])) {
    $nama_gbr = $_FILES['gbr']['name'];
    $hobi1 = $_POST['hobi'];
    if ($nama_gbr != '') {
      $sumber = $_FILES['gbr']['tmp_name'];
      $target = "fileupload/$nama_gbr";
    }
  }


 ?>
