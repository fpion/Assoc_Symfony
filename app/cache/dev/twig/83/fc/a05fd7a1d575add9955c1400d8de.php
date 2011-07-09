<?php

/* MyAppAssociationBundle:Contact:sum_contact.html.twig */
class __TwigTemplate_83fca05fd7a1d575add9955c1400d8de extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 2
        echo "<td>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'contact'), "Lastname", array(), "any", false), "html");
        echo "</td>
<td>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'contact'), "FirstName", array(), "any", false), "html");
        echo "</td>
<td>";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'contact'), "birthday", array(), "any", false), "d/m/Y"), "html");
        echo "</td>
<td>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'contact'), "sexe", array(), "any", false), "html");
        echo "</td>
<td>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'contact'), "email", array(), "any", false), "html");
        echo "</td>
<td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'contact'), "tel", array(), "any", false), "html");
        echo "</td>";
    }

    public function getTemplateName()
    {
        return "MyAppAssociationBundle:Contact:sum_contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
