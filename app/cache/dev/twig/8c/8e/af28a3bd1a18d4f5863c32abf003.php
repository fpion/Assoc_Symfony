<?php

/* MyAppAssociationBundle:Member:find.html.twig */
class __TwigTemplate_8c8eaf28a3bd1a18d4f5863c32abf003 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<form id=\"form_find\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_member_find"), "html");
        echo "\" method=\"post\">
\t";
        // line 4
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "
\t<input type=\"submit\" value=\"find\" />
</form>

//...
";
    }

    public function getTemplateName()
    {
        return "MyAppAssociationBundle:Member:find.html.twig";
    }

    public function isTraitable()
    {
        return true;
    }
}
