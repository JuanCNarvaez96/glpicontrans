<?php
include('Net/SFTP.php');
include('Net/SFTP/Stream.php');
define('NET_SFTP_LOGGING', NET_SFTP_LOG_COMPLEX);

$sftp = new Net_SFTP('172.16.1.19');
if (!$sftp->login('desarrollo-ti', 'RK8XQgbtnW')) {
    exit('Login Failed');
}

//$stream = fopen("ssh2.sftp://$sftp/srv/www/digitalFile/Usuarios", 'r');
//$sftp = print_r($sftp->nlist('/srv/www/digitalFile/Usuarios/wycruz/')); // == $sftp->nlist('.')
//print_r($sftp->rawlist('/srv/www/digitalFile/Usuarios/wycruz/')); // == $sftp->rawlist('.')
//$sftp->write('/srv/www/digitalFile/Usuarios/wycruz/foto.jpg');
//echo '<img src="'.$sftp.'/srv/www/digitalFile/Usuarios/wycruz/'.$sftp[0][2].'">';

echo json_encode(print_r($sftp->nlist('/srv/www/digitalFile/Usuarios/wycruz/')));

?>




