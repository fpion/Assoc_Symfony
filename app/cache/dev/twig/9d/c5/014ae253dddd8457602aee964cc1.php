<?php

/* MyAppAssociationBundle:Contact:add.html.twig */
class __TwigTemplate_9dc5014ae253dddd8457602aee964cc1 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 2
        echo "

<html>
    <body>
        <h1>Ajouter un Contact</h1>

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
        echo "\">Retour à la liste des contact</a></p>

    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "MyAppAssociationBundle:Contact:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
