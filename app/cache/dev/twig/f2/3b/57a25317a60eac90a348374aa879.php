<?php

/* MyAppAssociationBundle:Default:index.html.twig */
class __TwigTemplate_f23b57a25317a60eac90a348374aa879 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("MyAppAssociationBundle::layout.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
       ";
        // line 5
        echo $this->env->getExtension('actions')->renderAction("MyAppAssociationBundle:Member:top", array("max" => 3), array());
        // line 6
        echo "       

";
    }

    public function getTemplateName()
    {
        return "MyAppAssociationBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
