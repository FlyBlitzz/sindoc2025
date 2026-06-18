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

/* export/pdf_motCleDenom_template.html.twig */
class __TwigTemplate_fae7d60b1ba4164424a59ab0a3df808e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "export/pdf_motCleDenom_template.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "export/pdf_motCleDenom_template.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>Export Fiche</title>
\t\t<style>
\t\t\tbody {
\t\t\t\tfont-family: Garamond, serif;
\t\t\t\tcolor: #333; /* Dark text color */
\t\t\t\tmargin: 0;
\t\t\t\tpadding: 20px;
\t\t\t}
\t\t\t.title {
\t\t\t\tfont-size: 24px;
\t\t\t\tfont-weight: bold;
\t\t\t\tcolor: #2e3a59; /* Title color */
\t\t\t\ttext-align: center;
\t\t\t}
\t\t\t.content {
\t\t\t\tmargin-top: 20px;
\t\t\t}
\t\t\t.sectionn {
\t\t\t\tdisplay: flex;
\t\t\t\tmargin-bottom: 15px;
\t\t\t\tpadding: 10px;
\t\t\t\tborder-radius: 8px;
\t\t\t\tbox-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Light shadow */
\t\t\t}
\t\t\t.sectionn h3 {
\t\t\t\tmargin: 0;
\t\t\t\tfont-size: 18px;
\t\t\t\tcolor: #2e3a59; /* Dark blue text for headings */
\t\t\t\tfont-weight: bold;
\t\t\t\twidth: 150px; /* Fixed width for consistency */
\t\t\t}
\t\t\t.sectionn p {
\t\t\t\tmargin: 0;
\t\t\t\tfont-size: 16px;
\t\t\t\tcolor: #555; /* Slightly lighter gray for the content */
\t\t\t}
\t\t\t.sectionn .fiche-details {
\t\t\t\tmargin-left: 20px;
\t\t\t}
\t\t\t.keywords-list {
\t\t\t\tlist-style-type: disc;
\t\t\t\tmargin-left: 20px;
\t\t\t\tpadding: 0;
\t\t\t}
\t\t\t.keywords-list li {
\t\t\t\tfont-size: 16px;
\t\t\t\tcolor: #555;
\t\t\t}
            .fiche-container {
            page-break-before: always; /* New page for each fiche */
            margin-top: 20px;
        }

        /* Prevent splitting content */
        .mot-cles-section {
            page-break-inside: avoid;
        }
\t\t</style>
\t</head>
\t<body>
    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 66
            yield "    <div class=\"fiche-container\">
\t\t<div class=\"title\">Détails la fiche</div>
\t\t<div class=\"content\">
\t\t\t<div class=\"sectionn\">
\t\t\t\t<h3>Référence:</h3>
\t\t\t\t<p>";
            // line 71
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "refer", [], "any", false, false, false, 71) == null)) ? ("Non spécifié") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "refer", [], "any", false, false, false, 71), "html", null, true)));
            yield "</p>
\t\t\t</div>
\t\t\t";
            // line 77
            yield "\t\t\t<div class=\"sectionn\">
\t\t\t\t<h3>Dénomination:</h3>
\t\t\t\t<p>";
            // line 79
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "denomination", [], "any", false, false, false, 79) == null)) ? ("Non spécifié") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "denomination", [], "any", false, false, false, 79), "html", null, true)));
            yield "</p>
\t\t\t</div>
\t\t\t<div class=\"sectionn\">
\t\t\t\t<h3>Texte:</h3>
\t\t\t\t<p>";
            // line 83
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "texte", [], "any", false, false, false, 83) == null)) ? ("Non spécifié") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "texte", [], "any", false, false, false, 83), "html", null, true)));
            yield "</p>
\t\t\t</div>
\t\t\t<div class=\"sectionn\">
\t\t\t\t<h3>Traduction:</h3>
\t\t\t\t<p>";
            // line 87
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "traduction", [], "any", false, false, false, 87) == null)) ? ("Non spécifié") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "traduction", [], "any", false, false, false, 87), "html", null, true)));
            yield "</p>
\t\t\t</div>
\t\t\t<div class=\"sectionn\">
\t\t\t\t<h3>Edition:</h3>
\t\t\t\t<p>";
            // line 91
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "edition", [], "any", false, false, false, 91) == null)) ? ("Non spécifié") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "edition", [], "any", false, false, false, 91), "html", null, true)));
            yield "</p>
\t\t\t</div>
\t\t\t<div class=\"sectionn\">
\t\t\t\t<h3>Commentaires:</h3>
\t\t\t\t<p>";
            // line 95
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "commentaire", [], "any", false, false, false, 95) == null)) ? ("Non spécifié") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "commentaire", [], "any", false, false, false, 95), "html", null, true)));
            yield "</p>
\t\t\t</div>
\t\t\t<div class=\"sectionn\">
\t\t\t\t<h3>Notes:</h3>
\t\t\t\t<p>";
            // line 99
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "notes", [], "any", false, false, false, 99) == null)) ? ("Non spécifié") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "notes", [], "any", false, false, false, 99), "html", null, true)));
            yield "</p>
\t\t\t</div>
\t\t\t<div class=\"sectionn\">
\t\t\t\t<h3>Statut:</h3>
\t\t\t\t<p>";
            // line 103
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "denomination", [], "any", false, false, false, 103) == null)) ? ("Non spécifié") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "denomination", [], "any", false, false, false, 103), "html", null, true)));
            yield "</p>
\t\t\t</div> 
\t\t\t<div class=\"sectionn mot-cles-section\">
    <h3>Mot Clés:</h3>
    <div class=\"fiche-details\">
        ";
            // line 108
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "motCles", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 109
                yield "            ";
                $context["keywords"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "motCles", [], "any", false, false, false, 109), ",");
                // line 110
                yield "            ";
                $context["keywordList"] = [];
                // line 111
                yield "            
           
            ";
                // line 113
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["keywords"]) || array_key_exists("keywords", $context) ? $context["keywords"] : (function () { throw new RuntimeError('Variable "keywords" does not exist.', 113, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                    // line 114
                    yield "                ";
                    $context["parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["key"], ":");
                    // line 115
                    yield "                ";
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 115, $this->source); })())) >= 2)) {
                        // line 116
                        yield "                    ";
                        $context["keywordList"] = Twig\Extension\CoreExtension::merge((isset($context["keywordList"]) || array_key_exists("keywordList", $context) ? $context["keywordList"] : (function () { throw new RuntimeError('Variable "keywordList" does not exist.', 116, $this->source); })()), [["reference" => Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source,                         // line 117
(isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 117, $this->source); })()), 0, [], "array", false, false, false, 117)), "denomination" => Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::slice($this->env->getCharset(),                         // line 118
(isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 118, $this->source); })()), 1, null), ":"))]]);
                        // line 120
                        yield "                ";
                    }
                    // line 121
                    yield "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['key'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 122
                yield "            ";
                $context["sortedKeywords"] = Twig\Extension\CoreExtension::sort($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), (isset($context["keywordList"]) || array_key_exists("keywordList", $context) ? $context["keywordList"] : (function () { throw new RuntimeError('Variable "keywordList" does not exist.', 122, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 122, $this->source); })()), "reference", [], "any", false, false, false, 122) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 122, $this->source); })()), "reference", [], "any", false, false, false, 122)); });
                // line 123
                yield "
            <ul class=\"keywords-list\">
                ";
                // line 125
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sortedKeywords"]) || array_key_exists("sortedKeywords", $context) ? $context["sortedKeywords"] : (function () { throw new RuntimeError('Variable "sortedKeywords" does not exist.', 125, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["keyword"]) {
                    // line 126
                    yield "                    <li>
                        ";
                    // line 127
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["keyword"], "reference", [], "any", false, false, false, 127), "html", null, true);
                    yield " : 
                        ";
                    // line 128
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["keyword"], "denomination", [], "any", true, true, false, 128) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["keyword"], "denomination", [], "any", false, false, false, 128)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["keyword"], "denomination", [], "any", false, false, false, 128), "html", null, true)) : ("Non spécifié"));
                    yield "
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['keyword'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 131
                yield "            </ul>
        ";
            } else {
                // line 133
                yield "            <p><strong>Mots-clés :</strong> Non spécifié</p>
        ";
            }
            // line 135
            yield "    </div>
</div> 
</div>
\t\t</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fiche'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        yield "\t</body>
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
        return "export/pdf_motCleDenom_template.html.twig";
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
        return array (  265 => 140,  255 => 135,  251 => 133,  247 => 131,  238 => 128,  234 => 127,  231 => 126,  227 => 125,  223 => 123,  220 => 122,  214 => 121,  211 => 120,  209 => 118,  208 => 117,  206 => 116,  203 => 115,  200 => 114,  196 => 113,  192 => 111,  189 => 110,  186 => 109,  184 => 108,  176 => 103,  169 => 99,  162 => 95,  155 => 91,  148 => 87,  141 => 83,  134 => 79,  130 => 77,  125 => 71,  118 => 66,  114 => 65,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>Export Fiche</title>
\t\t<style>
\t\t\tbody {
\t\t\t\tfont-family: Garamond, serif;
\t\t\t\tcolor: #333; /* Dark text color */
\t\t\t\tmargin: 0;
\t\t\t\tpadding: 20px;
\t\t\t}
\t\t\t.title {
\t\t\t\tfont-size: 24px;
\t\t\t\tfont-weight: bold;
\t\t\t\tcolor: #2e3a59; /* Title color */
\t\t\t\ttext-align: center;
\t\t\t}
\t\t\t.content {
\t\t\t\tmargin-top: 20px;
\t\t\t}
\t\t\t.sectionn {
\t\t\t\tdisplay: flex;
\t\t\t\tmargin-bottom: 15px;
\t\t\t\tpadding: 10px;
\t\t\t\tborder-radius: 8px;
\t\t\t\tbox-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Light shadow */
\t\t\t}
\t\t\t.sectionn h3 {
\t\t\t\tmargin: 0;
\t\t\t\tfont-size: 18px;
\t\t\t\tcolor: #2e3a59; /* Dark blue text for headings */
\t\t\t\tfont-weight: bold;
\t\t\t\twidth: 150px; /* Fixed width for consistency */
\t\t\t}
\t\t\t.sectionn p {
\t\t\t\tmargin: 0;
\t\t\t\tfont-size: 16px;
\t\t\t\tcolor: #555; /* Slightly lighter gray for the content */
\t\t\t}
\t\t\t.sectionn .fiche-details {
\t\t\t\tmargin-left: 20px;
\t\t\t}
\t\t\t.keywords-list {
\t\t\t\tlist-style-type: disc;
\t\t\t\tmargin-left: 20px;
\t\t\t\tpadding: 0;
\t\t\t}
\t\t\t.keywords-list li {
\t\t\t\tfont-size: 16px;
\t\t\t\tcolor: #555;
\t\t\t}
            .fiche-container {
            page-break-before: always; /* New page for each fiche */
            margin-top: 20px;
        }

        /* Prevent splitting content */
        .mot-cles-section {
            page-break-inside: avoid;
        }
\t\t</style>
\t</head>
\t<body>
    {% for fiche in fiches %}
    <div class=\"fiche-container\">
\t\t<div class=\"title\">Détails la fiche</div>
\t\t<div class=\"content\">
\t\t\t<div class=\"sectionn\">
\t\t\t\t<h3>Référence:</h3>
\t\t\t\t<p>{{ fiche.refer == null ? \x27Non spécifié\x27 : fiche.refer }}</p>
\t\t\t</div>
\t\t\t{# <div class=\"sectionn\">
\t\t\t\t<h3>Référence BIS:</h3>
\t\t\t\t<p>{{ fiche.referBis == null ? \x27Non spécifié\x27 : fiche.referBis }}</p>
\t\t\t</div> #}
\t\t\t<div class=\"sectionn\">
\t\t\t\t<h3>Dénomination:</h3>
\t\t\t\t<p>{{ fiche.denomination == null ? \x27Non spécifié\x27 : fiche.denomination }}</p>
\t\t\t</div>
\t\t\t<div class=\"sectionn\">
\t\t\t\t<h3>Texte:</h3>
\t\t\t\t<p>{{ fiche.texte == null ? \x27Non spécifié\x27 : fiche.texte }}</p>
\t\t\t</div>
\t\t\t<div class=\"sectionn\">
\t\t\t\t<h3>Traduction:</h3>
\t\t\t\t<p>{{ fiche.traduction == null ? \x27Non spécifié\x27 : fiche.traduction }}</p>
\t\t\t</div>
\t\t\t<div class=\"sectionn\">
\t\t\t\t<h3>Edition:</h3>
\t\t\t\t<p>{{ fiche.edition == null ? \x27Non spécifié\x27 : fiche.edition }}</p>
\t\t\t</div>
\t\t\t<div class=\"sectionn\">
\t\t\t\t<h3>Commentaires:</h3>
\t\t\t\t<p>{{ fiche.commentaire == null ? \x27Non spécifié\x27 : fiche.commentaire }}</p>
\t\t\t</div>
\t\t\t<div class=\"sectionn\">
\t\t\t\t<h3>Notes:</h3>
\t\t\t\t<p>{{ fiche.notes == null ? \x27Non spécifié\x27 : fiche.notes }}</p>
\t\t\t</div>
\t\t\t<div class=\"sectionn\">
\t\t\t\t<h3>Statut:</h3>
\t\t\t\t<p>{{ fiche.denomination == null ? \x27Non spécifié\x27 : fiche.denomination }}</p>
\t\t\t</div> 
\t\t\t<div class=\"sectionn mot-cles-section\">
    <h3>Mot Clés:</h3>
    <div class=\"fiche-details\">
        {% if fiche.motCles %}
            {% set keywords = fiche.motCles|split(\x27,\x27) %}
            {% set keywordList = [] %}
            
           
            {% for key in keywords %}
                {% set parts = key|split(\x27:\x27) %}
                {% if parts|length >= 2 %}
                    {% set keywordList = keywordList|merge([{
                        reference: parts[0]|trim,
                        denomination: parts[1:]|join(\x27:\x27)|trim
                    }]) %}
                {% endif %}
            {% endfor %}
            {% set sortedKeywords = keywordList|sort((a, b) => a.reference <=> b.reference) %}

            <ul class=\"keywords-list\">
                {% for keyword in sortedKeywords %}
                    <li>
                        {{ keyword.reference }} : 
                        {{ keyword.denomination ?? \x27Non spécifié\x27 }}
                    </li>
                {% endfor %}
            </ul>
        {% else %}
            <p><strong>Mots-clés :</strong> Non spécifié</p>
        {% endif %}
    </div>
</div> 
</div>
\t\t</div>
        {% endfor %}
\t</body>
</html>
", "export/pdf_motCleDenom_template.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\export\\pdf_motCleDenom_template.html.twig");
    }
}
