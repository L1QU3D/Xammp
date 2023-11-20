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

/* server/privileges/choose_user_group.twig */
class __TwigTemplate_5b4f97685f553e13d9e8b2e1256374ad0f1d567d5af9b012a9bac15cb75ffcf1 extends Template
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
        echo "<form class=\"ajax\" id=\"changeUserGroupForm\" action=\"";
        echo PhpMyAdmin\Url::getFromRoute("/server/privileges");
        echo "\" method=\"post\">
  ";
        // line 2
        echo PhpMyAdmin\Url::getHiddenInputs(($context["params"] ?? null));
        echo "
  <input type=\"hidden\" name=\"changeUserGroup\" value=\"1\">

  <label class=\"form-label\" for=\"userGroupSelect\">";
echo _gettext("User group:");
        // line 5
        echo "</label>
  <select class=\"form-select\" name=\"userGroup\" id=\"userGroupSelect\">
    <option value=\"\"></option>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["all_user_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 9
            echo "      <option value=\"";
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "\"";
            echo (((($context["user_group"] ?? null) == $context["option"])) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "  </select>
</form>
";
    }

    public function getTemplateName()
    {
        return "server/privileges/choose_user_group.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 11,  58 => 9,  54 => 8,  49 => 5,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/privileges/choose_user_group.twig", "D:\\XAMMP\\phpMyAdmin\\templates\\server\\privileges\\choose_user_group.twig");
    }
}
