<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* layouts/main.tmpl */
class __TwigTemplate_77c6a74f1154b880d20e8e83795c99dcf99b69980203641923b04d60f0c2f60f extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">

    <title>Main</title>
</head>
<body>
<a href=\"/\">Главная</a>
<a href=\"/?c=product&a=catalog\">Каталог</a>
<a href=\"/?c=user\">Пользователи</a>
<br>
";
        // line 13
        echo ($context["content"] ?? null);
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "layouts/main.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layouts/main.tmpl", "C:\\OSPanel\\domains\\localhost\\engine_les_5\\templates\\layouts\\main.tmpl");
    }
}
