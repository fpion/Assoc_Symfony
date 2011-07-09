<?php

/* FrameworkBundle:Exception:error.json.twig */
class __TwigTemplate_03d3fd8c6ee16446fa20da3b9a0a7837 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo json_encode(array("error" => array("code" => $this->getContext($context, 'status_code'), "message" => $this->getContext($context, 'status_text'))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "FrameworkBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
