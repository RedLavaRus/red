<?php
/*   $guard = new Guard;

   echo $guard->hashpassf('vlada2002',4,"482fe9a1c05d58ad");
   echo '<br>';

   */

  //Auth::authriz(DB::pdo(), 'ribaaa','vlada2002',1);
  $host = 'localhost';
  $port = 25575;
  $password = 'dfgkjsnnIOU83432NJK';
  $timeout=3;

  $rcon = new Rcon($host, $port, $password, $timeout);
  
  if ($rcon->connect())
  {
    $res = $rcon->sendCommand("list");
  }
  else
  {
    echo "error";
  }
  echo $res;
  echo "<br><br><br><br>";
  print_r($res);
//  }

?>