<?php
  echo "Node version: " . exec("node --version") . "\n";
  while (true) {
    fwrite(STDOUT, "SUCCESS" . PHP_EOL);
    sleep(10);
  }
?>
