<?php
$name= $_GET['name'];
header("Content-disposition: attachment; filename=$name");
header("Content-type: application/pdf");

readfile("../noteshub/noteshub_admin/pdfs/$name");
?>