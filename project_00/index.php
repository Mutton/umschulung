<?php
declare(strict_types=1);

function someFunc(string $str) : string {
  return $str." GOTCHA :D ";
}

echo someFunc("333");

?>
