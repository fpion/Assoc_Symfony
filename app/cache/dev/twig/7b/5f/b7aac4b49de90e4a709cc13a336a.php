<?php

/* MyAppAssociationBundle:Member:list_member.html.twig */
class __TwigTemplate_7b5fb7aac4b49de90e4a709cc13a336a extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 2
        echo "
<table>
\t\t";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'members'));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context['_key'] => $context['member']) {
            // line 5
            echo "    <tr>
        <td>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'member'), "Lastname", array(), "any", false), "html");
            echo "</td>
        <td>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'member'), "FirstName", array(), "any", false), "html");
            echo "</td>
        <td>";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'member'), "birthday", array(), "any", false), "d/m/Y"), "html");
            echo "</td>
        <td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'member'), "sexe", array(), "any", false), "html");
            echo "</td>
        <td><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_member_modify", array("id" => $this->getAttribute($this->getContext($context, 'member'), "id", array(), "any", false))), "html");
            echo "\">Modifier</a></td>
        <td><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_member_delete", array("id" => $this->getAttribute($this->getContext($context, 'member'), "id", array(), "any", false))), "html");
            echo "\">Supprimer</a></td>
        <td><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_member_managecontact", array("id" => $this->getAttribute($this->getContext($context, 'member'), "id", array(), "any", false))), "html");
            echo "\">Gerer les contacts</a></td>
        
    </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 16
            echo "    <tr><td>Aucun membres </td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 18
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "MyAppAssociationBundle:Member:list_member.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
