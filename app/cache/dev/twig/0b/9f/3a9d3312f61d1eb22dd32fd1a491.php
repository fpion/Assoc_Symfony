<?php

/* MyAppAssociationBundle:Member:addcontact.html.twig */
class __TwigTemplate_0b9f3a9d3312f61d1eb22dd32fd1a491 extends Twig_Template
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Gestion des contacts pour ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'member'), "PrenomNom", array(), "any", false), "html");
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<form id=\"form_find\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_contact_findaddmember"), "html");
        echo "\" method=\"post\">
        ";
        // line 10
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "
    <input type=\"submit\" value=\"find\" />
</form>
<div class=\"loading\"></div>        
<div id=\"find_results\"> 
    ";
        // line 15
        $this->env->loadTemplate("MyAppAssociationBundle:Contact:addtomember.html.twig")->display(array_merge($context, array("contacts" => $this->getContext($context, 'contacts'))));
        // line 16
        echo "</div>

<script>
    \$(\".loading\").hide();
    \$(\"#form_find\").submit(function(){ 
    \$(\".loading\").show();
    var motcle = \$(\"#find_motcle\").val();
    var DATA = 'motcle=' + motcle;
    \$.ajax({
    type: \"POST\",
    url: \"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_contact_find"), "html");
        echo "\",
    data: DATA,
    cache: false,
    success: function(data){
       \$('#find_results').html(data);
       \$(\".loading\").hide();
    }
    });    
    return false;
    });
</script>        
";
    }

    public function getTemplateName()
    {
        return "MyAppAssociationBundle:Member:addcontact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
