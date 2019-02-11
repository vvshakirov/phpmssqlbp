<?php
  echo "Node version: " + exec("node --version");
  while (true) {
    fwrite(STDOUT, "SUCCESS" . PHP_EOL);
    sleep(10);
  }
?>
