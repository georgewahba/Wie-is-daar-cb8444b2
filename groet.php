<?php
echo "hoi gebruiker!";

$line= readline(":");
(readline_add_history($line));

print_r("de gebruiker zegt:") && print_r($line);


 ?>