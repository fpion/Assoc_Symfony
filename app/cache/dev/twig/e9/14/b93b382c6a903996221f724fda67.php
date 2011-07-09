<?php

/* FrameworkBundle:Exception:exception.atom.twig */
class __TwigTemplate_e914b93b382c6a903996221f724fda67 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        $this->env->loadTemplate("FrameworkBundle:Exception:exception.xml.twig")->display(array_merge($context, array("exception" => $this->getContext($context, 'exception'))));
    }

    public function getTemplateName()
    {
        return "FrameworkBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
