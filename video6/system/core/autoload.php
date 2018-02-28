<?php
defined('BASEPATH') or exit('No se permite acceso directo');
  spl_autoload_register(function ($class) {
    if(is_file(CORE . "$class.php"))
      require CORE . "$class.php";
  });