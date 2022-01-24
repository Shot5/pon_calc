<?php
include 'functions.php';
$id = $_POST['id'];
if($_POST['types']){
$types = $_POST['types'];
}
$signal = $_POST['signal'];
form($signal,$id,$types);
?>
