<?php

/* MyAppAssociationBundle:Member:list.html.twig */
class __TwigTemplate_1e3938165c702cba3f3390472130a594 extends Twig_Template
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
        echo "Liste des membres";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<form id=\"form_find\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_member_find"), "html");
        echo "\" method=\"post\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "
    <input type=\"submit\" value=\"find\" />
</form>
<div class=\"loading\"></div>
<div id=\"find_results\"> 
    ";
        // line 12
        $this->env->loadTemplate("MyAppAssociationBundle:Member:list_member.html.twig")->display(array_merge($context, array("members" => $this->getContext($context, 'members'))));
        // line 13
        echo "
       ";
        // line 15
        echo "

<p><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_member_add"), "html");
        echo "\">Ajouter un membre</a></p>
</div>
<script>
    \$(\".loading\").hide();
    \$(\"#form_find\").submit(function(){ 
    \$(\".loading\").show();
    var motcle = \$(\"#find_motcle\").val();
    var DATA = 'motcle=' + motcle;
    \$.ajax({
    type: \"POST\",
    url: \"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_member_find"), "html");
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
        return "MyAppAssociationBundle:Member:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
