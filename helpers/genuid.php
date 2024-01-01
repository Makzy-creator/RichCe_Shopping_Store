

<?php
function getRandomID(){
$length = random_bytes('36');
return sha1(bin2hex($length));
}
?>