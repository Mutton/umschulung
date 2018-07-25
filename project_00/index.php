<?php
declare(strict_types=1);

function echoNewLine (bool $leadingNewLine, string ...$strings) {
  $newLine = "<br>";
  $firstLine = true;
  foreach ($strings as $string) {
    if ($firstLine && (!$leadingNewLine))
    {
      $firstLine = false;
      echo $string;
    }
    else
    {
      echo $newLine.$string;
    }
  }
}

function someFunc (string $str) : string {
  return $str." GOTCHA :D ";
}

$shellCommand = "dir";
$shellResult = shell_exec($shellCommand);

echoNewLine(false,
  date("l, Y-m-d h:i:s a"),
  $shellResult
);
?>
