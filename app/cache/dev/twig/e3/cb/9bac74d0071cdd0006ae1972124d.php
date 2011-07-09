<?php

/* MyAppAssociationBundle:Contact:addtomember.html.twig */
class __TwigTemplate_e3cb9bac74d0071cdd0006ae1972124d extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 2
        echo "<table>
\t\t";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'contacts'));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context['_key'] => $context['contact']) {
            // line 4
            echo "    <tr>
        ";
            // line 5
            $this->env->loadTemplate("MyAppAssociationBundle:Contact:sum_contact.html.twig")->display(array_merge($context, array("contact" => $this->getContext($context, 'contact'))));
            // line 6
            echo "        <!-- <td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_contact_modify", array("id" => $this->getAttribute($this->getContext($context, 'contact'), "id", array(), "any", false))), "html");
            echo "\">Ajouter le contact</a></td> -->
        
    </tr>
\t\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 10
            echo "    <tr><td>Aucun contacts </td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 12
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "MyAppAssociationBundle:Contact:addtomember.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
