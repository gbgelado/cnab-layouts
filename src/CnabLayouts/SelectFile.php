<?php
namespace CnabLayouts;

use Symfony\Component\Yaml\Yaml;

class SelectFile
{
  public static function getFileLayout($banco = 'itau', $formato = 'cnab240', $tipo = 'pagamentos')
  {
    $arquivo = __DIR__.'/../../config/'.$banco.'/'.$formato.'/'.$tipo.'.yml';

    if (!file_exists($arquivo)) return false;

    return Yaml::parse(file_get_contents($arquivo));
  }
}
