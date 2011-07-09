<?php

/* FrameworkBundle:Exception:error.js.twig */
class __TwigTemplate_f9d4b6e9a035fb2e26a5494b718fada3 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, $this->getContext($context, 'status_code'), "html");
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, 'status_text'), "html");
        echo "

*/
";
    }

    public function getTemplateName()
    {
        return "FrameworkBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
