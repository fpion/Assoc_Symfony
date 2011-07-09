<?php

/* MyAppAssociationBundle:Category:list_category.html.twig */
class __TwigTemplate_ad636f55085475b7b4a2eeac9371742c extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 2
        echo "

<table>
    ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'categories'));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context['_key'] => $context['cat']) {
            // line 6
            echo "    <tr>
        <td>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'cat'), "nom", array(), "any", false), "html");
            echo "</td>
        <td><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_category_modify", array("id" => $this->getAttribute($this->getContext($context, 'cat'), "id", array(), "any", false))), "html");
            echo "\">Modifier</a></td>
        <td><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_category_delete", array("id" => $this->getAttribute($this->getContext($context, 'cat'), "id", array(), "any", false))), "html");
            echo "\">Supprimer</a></td>
    </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 12
            echo "    <tr><td>Aucune catégorie n'a été trouvée </td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 14
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "MyAppAssociationBundle:Category:list_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
