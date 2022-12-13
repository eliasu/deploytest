<?php
exec("/bin/bash /www/htdocs/w01abbc7/command-g.de/public/cronjobs/pushing.sh 2>&1", $out, $result);
echo "Returncode: " .$result ."<br>";
echo "Ausgabe des Scripts: " ."<br>";
echo "<pre>"; print_r($out);
?>