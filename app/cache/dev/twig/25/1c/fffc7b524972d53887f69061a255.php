<?php

/* MyAppAssociationBundle:Member:modify.html.twig */
class __TwigTemplate_251cfffc7b524972d53887f69061a255 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 2
        echo "

<html>
    <body>
        <h1>Modify </h1>
            ";
        // line 7
        if ($this->getContext($context, 'message')) {
            // line 8
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->getContext($context, 'message'), "html");
            echo "</p>
";
        }
        // line 10
        echo "
        <form action=\"\" method=\"post\" ";
        // line 11
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
        echo ">
    ";
        // line 12
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "
            <input type=\"submit\" />
        </form>
        <p><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_member_list"), "html");
        echo "\">Retour à la liste des membres</a></p>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "MyAppAssociationBundle:Member:modify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
