<?php

/* FrameworkBundle:Exception:error.rdf.twig */
class __TwigTemplate_dc8b3a5470f043845397999f0e38c55a extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        $this->env->loadTemplate("FrameworkBundle:Exception:error.xml.twig")->display(array_merge($context, array("exception" => $this->getContext($context, 'exception'))));
    }

    public function getTemplateName()
    {
        return "FrameworkBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
