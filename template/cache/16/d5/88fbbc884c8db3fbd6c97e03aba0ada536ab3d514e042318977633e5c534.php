<?php

/* base.tpl.php */
class __TwigTemplate_16d588fbbc884c8db3fbd6c97e03aba0ada536ab3d514e042318977633e5c534 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Teste Twig: ";
        echo twig_escape_filter($this->env, (isset($context["nome"]) ? $context["nome"] : null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "base.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
