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

/* fiche/detail_fichePdf.html.twig */
class __TwigTemplate_0f0ec411811062eafed723accfea27e3 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/detail_fichePdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/detail_fichePdf.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

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

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/showUser.css"), "html", null, true);
        yield "\">
</head>
<body>
<div class=\"card-body\">
    <h1 class=\"username\">Les détails de la fiche</h1>

    <div>
        <strong>Numero de la fiche:</strong> ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 15, $this->source); })()), "getIdFiche", [], "method", false, false, false, 15), "html", null, true);
        yield "
    </div>
    <div>
        <strong>Livre:</strong> ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 18, $this->source); })()), "livre", [], "any", false, false, false, 18), "html", null, true);
        yield "
    </div>
    <div>
        <strong>Edition:</strong> ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 21, $this->source); })()), "edition", [], "any", false, false, false, 21), "html", null, true);
        yield "
    </div>
    <div>
        <strong>Reference:</strong> ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 24, $this->source); })()), "refer", [], "any", false, false, false, 24), "html", null, true);
        yield "
    </div>
    <div>
        <strong>Denomination:</strong> ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 27, $this->source); })()), "denomination", [], "any", false, false, false, 27), "html", null, true);
        yield "
    </div>
    <div>
        <strong>Statut:</strong> ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 30, $this->source); })()), "statut", [], "any", false, false, false, 30), "html", null, true);
        yield "
    </div>
    <div>
        <strong>Texte:</strong> ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 33, $this->source); })()), "texte", [], "any", false, false, false, 33), "html", null, true);
        yield "
    </div>
    <div>
        <strong>Traduction:</strong> ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 36, $this->source); })()), "traduction", [], "any", false, false, false, 36), "html", null, true);
        yield "
    </div>
    <div>
        <strong>Notes:</strong> ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 39, $this->source); })()), "notes", [], "any", false, false, false, 39), "html", null, true);
        yield "
    </div>
    <div>
        <strong>Commentaire:</strong> ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 42, $this->source); })()), "commentaire", [], "any", false, false, false, 42), "html", null, true);
        yield "
    </div>

   <div>
    <strong>Mots Clés :</strong>
    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 47, $this->source); })()), "getMotCles", [], "method", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["motCle"]) {
            // line 48
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 48, $this->source); })()), "getFicheMotCles", [], "method", false, false, false, 48));
            foreach ($context['_seq'] as $context["_key"] => $context["ficheMotCles"]) {
                // line 49
                yield "            ";
                if (($context["motCle"] == CoreExtension::getAttribute($this->env, $this->source, $context["ficheMotCles"], "getMotCle", [], "method", false, false, false, 49))) {
                    // line 50
                    yield "                <span title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["motCle"], "getDenomination", [], "method", false, false, false, 50), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["motCle"], "getReference", [], "method", false, false, false, 50), "html", null, true);
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ficheMotCles"], "getPrecision", [], "method", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield ":";
                    }
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ficheMotCles"], "getPrecision", [], "method", false, false, false, 50), "html", null, true);
                    yield "</span>,
            ";
                }
                // line 51
                yield "   
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['ficheMotCles'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['motCle'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "</div>

</div>
</body>
</html>
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
        return "fiche/detail_fichePdf.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  192 => 54,  186 => 53,  179 => 51,  167 => 50,  164 => 49,  159 => 48,  155 => 47,  147 => 42,  141 => 39,  135 => 36,  129 => 33,  123 => 30,  117 => 27,  111 => 24,  105 => 21,  99 => 18,  93 => 15,  83 => 8,  79 => 7,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/bootstrap.min.css\x27) }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/showUser.css\x27) }}\">
</head>
<body>
<div class=\"card-body\">
    <h1 class=\"username\">Les détails de la fiche</h1>

    <div>
        <strong>Numero de la fiche:</strong> {{ fiche.getIdFiche() }}
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

</div>
</body>
</html>
{% endblock %}
", "fiche/detail_fichePdf.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\fiche\\detail_fichePdf.html.twig");
    }
}
