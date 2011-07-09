<?php

/* MyAppAssociationBundle::layout.html.twig */
class __TwigTemplate_c37e51c6bacb9dc79b9bfd3794246155 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 2
        echo "
<html>
    <head>
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappassociation/css/main.css"), "html");
        echo "\" type=\"text/css\" media=\"all\" />
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js\" type=\"text/javascript\"></script> 
    </head>
    <body>
        <div id=\"page\">
            <div id=\"header\">
                <ul id=\"menu\">
                    <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_accueil"), "html");
        echo "\">Accueil</a></li>
                    <li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_category_list"), "html");
        echo "\">Categories</a></li>
                    <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_member_list"), "html");
        echo "\">Membres</a></li>                    
                    <li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_contact_list"), "html");
        echo "\">Contact</a></li>
                </ul>
            </div>
            <div id=\"choisir_langue\">Choisir la langue :
                <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_lang_choice", array("lang" => "fr")), "html");
        echo "\">FR</a> |
                <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_lang_choice", array("lang" => "en")), "html");
        echo "\">EN</a>
            </div>
            <div id=\"content\">
                <h1>";
        // line 25
        echo $this->renderBlock("title", $context, $blocks);
        echo "</h1>
                ";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "            </div>
            <div id=\"footer\">
                <p>Tous droits réservés © 2011</p>
            </div>
        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Gestion des membres";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "                ";
    }

    public function getTemplateName()
    {
        return "MyAppAssociationBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
