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

/* export/pdf_fiche_template.html.twig */
class __TwigTemplate_62866584f06010104e368f2f4f82d4c5 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "export/pdf_fiche_template.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "export/pdf_fiche_template.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Export Fiche</title>
    <style>
        body {
            font-family: Garamond, serif;
            color: #333; /* Dark text color */
            margin: 0;
            padding: 20px;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
            color: #2e3a59; /* Title color */
            text-align: center;
        }
        .content {
            margin-top: 20px;
        }
        .sectionn {
            display: flex;
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Light shadow */
        }
        .sectionn h3 {
            margin: 0;
            font-size: 18px;
            color: #2e3a59; /* Dark blue text for headings */
            font-weight: bold;
            width: 150px; /* Fixed width for consistency */
        }
        .sectionn p {
            margin: 0;
            font-size: 16px;
            color: #555; /* Slightly lighter gray for the content */
        }
        .sectionn .fiche-details {
            margin-left: 20px;
        }
        .keywords-list {
            list-style-type: disc;
            margin-left: 20px;
            padding: 0;
        }
        .keywords-list li {
            font-size: 16px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class=\"title\">Détails la fiche</div>
    <div class=\"content\">
        <div class=\"sectionn\">
            <h3>Référence:</h3>
            <p>";
        // line 60
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 60, $this->source); })()), "refer", [], "any", false, false, false, 60) == null)) ? ("Non spécifié") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 60, $this->source); })()), "refer", [], "any", false, false, false, 60), "html", null, true)));
        yield "</p>
        </div>
        <div class=\"sectionn\">
            <h3>Référence BIS:</h3>
            <p>";
        // line 64
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 64, $this->source); })()), "referBis", [], "any", false, false, false, 64) == null)) ? ("Non spécifié") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 64, $this->source); })()), "referBis", [], "any", false, false, false, 64), "html", null, true)));
        yield "</p>
        </div>
        <div class=\"sectionn\">
            <h3>Dénomination:</h3>
            <p>";
        // line 68
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 68, $this->source); })()), "denomination", [], "any", false, false, false, 68) == null)) ? ("Non spécifié") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 68, $this->source); })()), "denomination", [], "any", false, false, false, 68), "html", null, true)));
        yield "</p>
        </div>
        <div class=\"sectionn\">
            <h3>Texte:</h3>
            <p>";
        // line 72
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 72, $this->source); })()), "texte", [], "any", false, false, false, 72) == null)) ? ("Non spécifié") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 72, $this->source); })()), "texte", [], "any", false, false, false, 72), "html", null, true)));
        yield "</p>
        </div>
        <div class=\"sectionn\">
            <h3>Traduction:</h3>
            <p>";
        // line 76
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 76, $this->source); })()), "traduction", [], "any", false, false, false, 76) == null)) ? ("Non spécifié") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 76, $this->source); })()), "traduction", [], "any", false, false, false, 76), "html", null, true)));
        yield "</p>
        </div>
        <div class=\"sectionn\">
            <h3>Edition:</h3>
            <p>";
        // line 80
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 80, $this->source); })()), "edition", [], "any", false, false, false, 80) == null)) ? ("Non spécifié") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 80, $this->source); })()), "edition", [], "any", false, false, false, 80), "html", null, true)));
        yield "</p>
        </div>
        <div class=\"sectionn\">
            <h3>Commentaires:</h3>
            <p>";
        // line 84
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 84, $this->source); })()), "commentaire", [], "any", false, false, false, 84) == null)) ? ("Non spécifié") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 84, $this->source); })()), "commentaire", [], "any", false, false, false, 84), "html", null, true)));
        yield "</p>
        </div>
        <div class=\"sectionn\">
            <h3>Notes:</h3>
            <p>";
        // line 88
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 88, $this->source); })()), "notes", [], "any", false, false, false, 88) == null)) ? ("Non spécifié") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 88, $this->source); })()), "notes", [], "any", false, false, false, 88), "html", null, true)));
        yield "</p>
        </div>
        <div class=\"sectionn\">
            <h3>Statut:</h3>
            <p>";
        // line 92
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 92, $this->source); })()), "statut", [], "any", false, false, false, 92), "denomination", [], "any", false, false, false, 92) == null)) ? ("Non spécifié") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 92, $this->source); })()), "statut", [], "any", false, false, false, 92), "denomination", [], "any", false, false, false, 92), "html", null, true)));
        yield "</p>
        </div>
        <div class=\"sectionn\">
            <h3>Mot Clés:</h3>
            <div class=\"fiche-details\">
                ";
        // line 97
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 97, $this->source); })()), "motCles", [], "any", false, false, false, 97)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 98
            yield "                    <ul class=\"keywords-list\">
                        ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 99, $this->source); })()), "motCles", [], "any", false, false, false, 99));
            foreach ($context['_seq'] as $context["_key"] => $context["keyword"]) {
                // line 100
                yield "                            <li>";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["keyword"], "reference", [], "any", false, false, false, 100) == null)) ? ("Non spécifié") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["keyword"], "reference", [], "any", false, false, false, 100), "html", null, true)));
                yield " : ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["keyword"], "denomination", [], "any", false, false, false, 100) == null)) ? ("Non spécifié") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["keyword"], "denomination", [], "any", false, false, false, 100), "html", null, true)));
                yield "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['keyword'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            yield "                    </ul>
                ";
        } else {
            // line 104
            yield "                    <p><strong>Mots-clés :</strong> Non spécifié</p>
                ";
        }
        // line 106
        yield "            </div>
        </div>
    </div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "export/pdf_fiche_template.html.twig";
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
        return array (  201 => 106,  197 => 104,  193 => 102,  182 => 100,  178 => 99,  175 => 98,  173 => 97,  165 => 92,  158 => 88,  151 => 84,  144 => 80,  137 => 76,  130 => 72,  123 => 68,  116 => 64,  109 => 60,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Export Fiche</title>
    <style>
        body {
            font-family: Garamond, serif;
            color: #333; /* Dark text color */
            margin: 0;
            padding: 20px;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
            color: #2e3a59; /* Title color */
            text-align: center;
        }
        .content {
            margin-top: 20px;
        }
        .sectionn {
            display: flex;
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Light shadow */
        }
        .sectionn h3 {
            margin: 0;
            font-size: 18px;
            color: #2e3a59; /* Dark blue text for headings */
            font-weight: bold;
            width: 150px; /* Fixed width for consistency */
        }
        .sectionn p {
            margin: 0;
            font-size: 16px;
            color: #555; /* Slightly lighter gray for the content */
        }
        .sectionn .fiche-details {
            margin-left: 20px;
        }
        .keywords-list {
            list-style-type: disc;
            margin-left: 20px;
            padding: 0;
        }
        .keywords-list li {
            font-size: 16px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class=\"title\">Détails la fiche</div>
    <div class=\"content\">
        <div class=\"sectionn\">
            <h3>Référence:</h3>
            <p>{{ fiche.refer == null ? \x27Non spécifié\x27 : fiche.refer }}</p>
        </div>
        <div class=\"sectionn\">
            <h3>Référence BIS:</h3>
            <p>{{ fiche.referBis == null ? \x27Non spécifié\x27 : fiche.referBis }}</p>
        </div>
        <div class=\"sectionn\">
            <h3>Dénomination:</h3>
            <p>{{ fiche.denomination == null ? \x27Non spécifié\x27 : fiche.denomination }}</p>
        </div>
        <div class=\"sectionn\">
            <h3>Texte:</h3>
            <p>{{ fiche.texte == null ? \x27Non spécifié\x27 : fiche.texte }}</p>
        </div>
        <div class=\"sectionn\">
            <h3>Traduction:</h3>
            <p>{{ fiche.traduction == null ? \x27Non spécifié\x27 : fiche.traduction }}</p>
        </div>
        <div class=\"sectionn\">
            <h3>Edition:</h3>
            <p>{{ fiche.edition == null ? \x27Non spécifié\x27 : fiche.edition }}</p>
        </div>
        <div class=\"sectionn\">
            <h3>Commentaires:</h3>
            <p>{{ fiche.commentaire == null ? \x27Non spécifié\x27 : fiche.commentaire }}</p>
        </div>
        <div class=\"sectionn\">
            <h3>Notes:</h3>
            <p>{{ fiche.notes == null ? \x27Non spécifié\x27 : fiche.notes }}</p>
        </div>
        <div class=\"sectionn\">
            <h3>Statut:</h3>
            <p>{{ fiche.statut.denomination == null ? \x27Non spécifié\x27 : fiche.statut.denomination }}</p>
        </div>
        <div class=\"sectionn\">
            <h3>Mot Clés:</h3>
            <div class=\"fiche-details\">
                {% if fiche.motCles %}
                    <ul class=\"keywords-list\">
                        {% for keyword in fiche.motCles %}
                            <li>{{ keyword.reference == null ? \x27Non spécifié\x27 : keyword.reference }} : {{ keyword.denomination == null ? \x27Non spécifié\x27 : keyword.denomination }}</li>
                        {% endfor %}
                    </ul>
                {% else %}
                    <p><strong>Mots-clés :</strong> Non spécifié</p>
                {% endif %}
            </div>
        </div>
    </div>
</body>
</html>
", "export/pdf_fiche_template.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\export\\pdf_fiche_template.html.twig");
    }
}
