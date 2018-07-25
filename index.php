<?php
  declare(strict_types=1);

  if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
	   $uri = 'https://';
  } else {
	   $uri = 'http://';
  }
  $uri .= $_SERVER['HTTP_HOST'];
  header('Location: '.$uri.'/umschulung/project_00');
  exit;
?>
