<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* server/user_groups/user_listings.twig */
class __TwigTemplate_23865a6c240266efba8c93140f9bd5f41ac927b5496a034841199e2478d1c7f5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<h2>";
        echo twig_escape_filter($this->env, twig_sprintf(_gettext("Users of '%s' user group"), ($context["user_group_special_chars"] ?? null)), "html", null, true);
        echo "</h2>
";
        // line 2
        if ((($context["num_rows"] ?? null) == 0)) {
            // line 3
            echo "    <p>";
echo _gettext("No users were found belonging to this user group.");
            echo "</p>
";
        } else {
            // line 5
            echo "<table class=\"table table-striped w-auto\">
    <thead>
        <tr>
            <th>#</th>
            <th>";
echo _gettext("User");
            // line 9
            echo "</th>
        </tr>
    </thead>
    <tbody>
    ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                // line 14
                echo "        <tr>
            <td>";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "count", [], "any", false, false, false, 15), "html", null, true);
                echo "</td>
            <td>";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "user", [], "any", false, false, false, 16), "html", null, true);
                echo "</td>
        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    </tbody>
</table>

";
        }
    }

    public function getTemplateName()
    {
        return "server/user_groups/user_listings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 19,  74 => 16,  70 => 15,  67 => 14,  63 => 13,  57 => 9,  50 => 5,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/user_groups/user_listings.twig", "D:\\XAMMP\\phpMyAdmin\\templates\\server\\user_groups\\user_listings.twig");
    }
}
