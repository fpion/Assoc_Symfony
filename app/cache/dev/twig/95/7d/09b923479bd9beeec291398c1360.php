<?php

/* MyAppAssociationBundle:Member:add.html.twig */
class __TwigTemplate_957d09b923479bd9beeec291398c1360 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 2
        echo "

<html>
    <body>
        <h1>Ajouter un membre</h1>

";
        // line 8
        if ($this->getContext($context, 'message')) {
            // line 9
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->getContext($context, 'message'), "html");
            echo "</p>
";
        }
        // line 11
        echo "
        <form action=\"\" method=\"post\" ";
        // line 12
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
        echo ">
    ";
        // line 13
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "
            <input type=\"submit\" />
        </form>
        <p><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_member_list"), "html");
        echo "\">Retour à la liste des membres</a></p>

    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "MyAppAssociationBundle:Member:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
