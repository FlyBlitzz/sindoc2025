<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* fiche/detail_fiche.html.twig */
class __TwigTemplate_4d410fc4577ac87c431b56d87e4db633 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/detail_fiche.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/detail_fiche.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\">
   <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/ajoutFiche.css"), "html", null, true);
        yield "\">
</head>
<body>
<body>
   <div class=\"card-body classs\" style=\"width: 100%;     margin: 150px auto;\">
<div class=\"card-body\">
    <h1 class=\"username\">Les détails de la fiche</h1>
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 18
            yield "    <div>
        <strong>Numéro de la fiche:</strong> ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getIdFiche", [], "method", false, false, false, 19), "html", null, true);
            yield "
    </div>
    <div>
        <strong>Livre:</strong> ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "livre", [], "any", false, false, false, 22), "html", null, true);
            yield "
    </div>
    <div>
        <strong>Edition:</strong> ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "edition", [], "any", false, false, false, 25), "html", null, true);
            yield "
    </div>
    <div>
        <strong>Reference:</strong> ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "refer", [], "any", false, false, false, 28), "html", null, true);
            yield "
    </div>
    <div>
        <strong>Denomination:</strong> ";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "denomination", [], "any", false, false, false, 31), "html", null, true);
            yield "
    </div>
    <div>
        <strong>Statut:</strong> ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "statut", [], "any", false, false, false, 34), "html", null, true);
            yield "
    </div>
    <div>
        <strong>Texte:</strong> ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "texte", [], "any", false, false, false, 37), "html", null, true);
            yield "
    </div>
    <div>
        <strong>Traduction:</strong> ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "traduction", [], "any", false, false, false, 40), "html", null, true);
            yield "
    </div>
    <div>
        <strong>Notes:</strong> ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "notes", [], "any", false, false, false, 43), "html", null, true);
            yield "
    </div>
    <div>
        <strong>Commentaire:</strong> ";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "commentaire", [], "any", false, false, false, 46), "html", null, true);
            yield "
    </div>

   <div>
    <strong>Mots Clés :</strong>
    ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getMotCles", [], "method", false, false, false, 51));
            foreach ($context['_seq'] as $context["_key"] => $context["motCle"]) {
                // line 52
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getFicheMotCles", [], "method", false, false, false, 52));
                foreach ($context['_seq'] as $context["_key"] => $context["ficheMotCles"]) {
                    // line 53
                    yield "            ";
                    if (($context["motCle"] == CoreExtension::getAttribute($this->env, $this->source, $context["ficheMotCles"], "getMotCle", [], "method", false, false, false, 53))) {
                        // line 54
                        yield "                <span title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["motCle"], "getDenomination", [], "method", false, false, false, 54), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["motCle"], "getReference", [], "method", false, false, false, 54), "html", null, true);
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ficheMotCles"], "getPrecision", [], "method", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield ":";
                        }
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ficheMotCles"], "getPrecision", [], "method", false, false, false, 54), "html", null, true);
                        yield "</span>,
            ";
                    }
                    // line 55
                    yield "   
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['ficheMotCles'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['motCle'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "  
</div>
 <div>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fiche'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "        ";
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 61, $this->source); })()));
        yield "
    </div>
</div>
</div>

</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 71
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 71, $this->source); })()), "refer", [], "any", false, false, false, 71), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 71, $this->source); })()), "denomination", [], "any", false, false, false, 71), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "fiche/detail_fiche.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  245 => 71,  232 => 70,  212 => 61,  198 => 57,  191 => 55,  179 => 54,  176 => 53,  171 => 52,  167 => 51,  159 => 46,  153 => 43,  147 => 40,  141 => 37,  135 => 34,  129 => 31,  123 => 28,  117 => 25,  111 => 22,  105 => 19,  102 => 18,  98 => 17,  88 => 10,  84 => 9,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block body %}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/bootstrap.min.css\x27) }}\">
   <link rel=\"stylesheet\" href=\"{{ asset(\x27css/ajoutFiche.css\x27) }}\">
</head>
<body>
<body>
   <div class=\"card-body classs\" style=\"width: 100%;     margin: 150px auto;\">
<div class=\"card-body\">
    <h1 class=\"username\">Les détails de la fiche</h1>
    {% for fiche in pagination %}
    <div>
        <strong>Numéro de la fiche:</strong> {{ fiche.getIdFiche() }}
    </div>
    <div>
        <strong>Livre:</strong> {{ fiche.livre }}
    </div>
    <div>
        <strong>Edition:</strong> {{ fiche.edition }}
    </div>
    <div>
        <strong>Reference:</strong> {{ fiche.refer }}
    </div>
    <div>
        <strong>Denomination:</strong> {{ fiche.denomination }}
    </div>
    <div>
        <strong>Statut:</strong> {{ fiche.statut }}
    </div>
    <div>
        <strong>Texte:</strong> {{ fiche.texte }}
    </div>
    <div>
        <strong>Traduction:</strong> {{ fiche.traduction }}
    </div>
    <div>
        <strong>Notes:</strong> {{ fiche.notes }}
    </div>
    <div>
        <strong>Commentaire:</strong> {{ fiche.commentaire }}
    </div>

   <div>
    <strong>Mots Clés :</strong>
    {% for motCle in fiche.getMotCles() %}
        {% for ficheMotCles in fiche.getFicheMotCles() %}
            {% if motCle == ficheMotCles.getMotCle() %}
                <span title=\"{{ motCle.getDenomination() }}\">{{ motCle.getReference() }}{% if ficheMotCles.getPrecision() %}:{% endif %}{{ ficheMotCles.getPrecision() }}</span>,
            {% endif %}   
        {% endfor %}
    {% endfor %}  
</div>
 <div>
 {% endfor %}
        {{ knp_pagination_render(pagination) }}
    </div>
</div>
</div>

</body>
</html>
{% endblock %}

{% block title %}
    {{ fiche.refer }} {{ fiche.denomination }}
{% endblock %}", "fiche/detail_fiche.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\fiche\\detail_fiche.html.twig");
    }
}
