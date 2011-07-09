<?php

/* FrameworkBundle:Exception:exception.rdf.twig */
class __TwigTemplate_881ddbb2dc0585a347b95d23033383f7 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        $this->env->loadTemplate("FrameworkBundle:Exception:exception.xml.twig")->display(array_merge($context, array("exception" => $this->getContext($context, 'exception'))));
    }

    public function getTemplateName()
    {
        return "FrameworkBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
