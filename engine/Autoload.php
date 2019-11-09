<?php

namespace app\engine;

class Autoload
{

  public function loadClass($className)
    {
      $fileName = str_replace(['app\\', '\\'], [DIR_ROOT . '/../', DS], $className) . ".php";
//      $fileName = str_replace(['app\\', '\\'], [ '../', '/'], $className) . ".php";   // относительный путь
      if (file_exists($fileName)) {
            include $fileName;
        }
    }
}