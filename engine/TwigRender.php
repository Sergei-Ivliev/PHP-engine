<?php

namespace app\engine;

use app\interfaces\IRenderer;

class TwigRender implements IRenderer
{

    protected $twig;

    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader('../templates');
        $twig = new \Twig\Environment($loader, [
            'cache' => '../compilation_cache',
        ]);
        $this->twig = $twig;
    }

  /**
   * @param $template
   * @param array $params
   * @return string
   * @throws \Twig\Error\LoaderError
   * @throws \Twig\Error\RuntimeError
   * @throws \Twig\Error\SyntaxError
   */
  public function renderTemplate($template, $params = [])
    {
        $filename = $template . ".tmpl";
        return $this->twig->render($filename, $params);
    }
}