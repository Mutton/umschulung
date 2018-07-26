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

$someFunc = function (string $str) : string {
  return $str." GOTCHA :D ";
};

$shellCommand = "npm --version";
$shellResult = shell_exec($shellCommand);
$shellResult = is_null($shellResult)
  ? "NULL"
  : str_replace("\n", "<br>", $shellResult);

echoNewLine(false,
  date("l, Y-m-d h:i:s a"),
  $shellResult,
  $someFunc(""),
  "BLA",
  "BLI",
  "BLUBB"
);
?>
