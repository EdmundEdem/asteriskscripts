#!/usr/bin/php -q
<?php

require_once "/var/lib/asterisk/agi-bin/phpagi-asmanager.php";

$amiuser="kerls";
$amipass="67@xxx.com";

$astman = new AGI_AsteriskManager();
$conn=$astman->connect("127.0.0.1", $amiuser, $amipass);

if($conn)
{
   $command="sip set debug off";

   if(isset($argv[1]))
      $command="sip set debug ".trim($argv[1]);

   $astman->Command($command);
   $astman->disconnect();
}
?>
