<?php

/* FrameworkBundle:Exception:exception.json.twig */
class __TwigTemplate_be8386e183eb6a9a4f7e114dc74f4048 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo json_encode($this->getAttribute($this->getContext($context, 'exception'), "toarray", array(), "any", false));
        echo "
";
    }

    public function getTemplateName()
    {
        return "FrameworkBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
