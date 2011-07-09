<?php

/* MyAppAssociationBundle:Category:list.html.twig */
class __TwigTemplate_a9c384807c4cd7c4377c9e8504097d72 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Liste des catégories";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
   ";
        // line 7
        $this->env->loadTemplate("MyAppAssociationBundle:Category:list_category.html.twig")->display(array_merge($context, array("categories" => $this->getContext($context, 'categories'))));
        // line 8
        echo "
        <p><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_category_add"), "html");
        echo "\">Ajouter une Categorie</a></p>
";
    }

    public function getTemplateName()
    {
        return "MyAppAssociationBundle:Category:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
