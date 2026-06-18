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

/* export/pdf_motCle_template.html.twig */
class __TwigTemplate_7b300e865cedfa32953b51fa1954be7c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "export/pdf_motCle_template.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "export/pdf_motCle_template.html.twig"));

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
            /* Force page breaks */
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

\t\t";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 68
            yield "\t\t\t<div class=\"fiche-container\">
\t\t\t\t<div class=\"title\">Détails la fiche</div>
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<div class=\"sectionn\">
\t\t\t\t\t\t<h3>Référence:</h3>
\t\t\t\t\t\t<p>";
            // line 73
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "refer", [], "any", false, false, false, 73) == null)) ? ("Non spécifié") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "refer", [], "any", false, false, false, 73), "html", null, true)));
            yield "</p>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 79
            yield "                            
\t\t\t\t\t<div class=\"sectionn\">
\t\t\t\t\t\t<h3>Dénomination:</h3>
\t\t\t\t\t\t<p>";
            // line 82
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "denomination", [], "any", false, false, false, 82) == null)) ? ("Non spécifié") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "denomination", [], "any", false, false, false, 82), "html", null, true)));
            yield "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sectionn\">
\t\t\t\t\t\t<h3>Texte:</h3>
\t\t\t\t\t\t<p>";
            // line 86
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "texte", [], "any", false, false, false, 86) == null)) ? ("Non spécifié") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "texte", [], "any", false, false, false, 86), "html", null, true)));
            yield "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sectionn\">
\t\t\t\t\t\t<h3>Traduction:</h3>
\t\t\t\t\t\t<p>";
            // line 90
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "traduction", [], "any", false, false, false, 90) == null)) ? ("Non spécifié") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "traduction", [], "any", false, false, false, 90), "html", null, true)));
            yield "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sectionn\">
\t\t\t\t\t\t<h3>Edition:</h3>
\t\t\t\t\t\t<p>";
            // line 94
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "edition", [], "any", false, false, false, 94) == null)) ? ("Non spécifié") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "edition", [], "any", false, false, false, 94), "html", null, true)));
            yield "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sectionn\">
\t\t\t\t\t\t<h3>Commentaires:</h3>
\t\t\t\t\t\t<p>";
            // line 98
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "commentaire", [], "any", false, false, false, 98) == null)) ? ("Non spécifié") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "commentaire", [], "any", false, false, false, 98), "html", null, true)));
            yield "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sectionn\">
\t\t\t\t\t\t<h3>Notes:</h3>
\t\t\t\t\t\t<p>";
            // line 102
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "notes", [], "any", false, false, false, 102) == null)) ? ("Non spécifié") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "notes", [], "any", false, false, false, 102), "html", null, true)));
            yield "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sectionn\">
\t\t\t\t\t\t<h3>Statut:</h3>
\t\t\t\t\t\t<p>";
            // line 106
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "statut", [], "any", false, false, false, 106) == null)) ? ("Non spécifié") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "statut", [], "any", false, false, false, 106), "html", null, true)));
            yield "</p>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"sectionn mot-cles-section\">
\t\t\t\t\t\t<h3>Mot Clés:</h3>
\t\t\t\t\t\t<div class=\"fiche-details\">
\t\t\t\t\t\t\t";
            // line 111
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "motCles", [], "any", false, false, false, 111)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 112
                yield "\t\t\t\t\t\t\t\t";
                $context["keywords"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "motCles", [], "any", false, false, false, 112), ",");
                // line 113
                yield "\t\t\t\t\t\t\t\t";
                $context["keywordList"] = [];
                // line 114
                yield "
\t\t\t\t\t\t\t\t";
                // line 116
                yield "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["keywords"]) || array_key_exists("keywords", $context) ? $context["keywords"] : (function () { throw new RuntimeError('Variable "keywords" does not exist.', 116, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                    // line 117
                    yield "\t\t\t\t\t\t\t\t\t";
                    $context["parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["key"], ":");
                    // line 118
                    yield "\t\t\t\t\t\t\t\t\t";
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 118, $this->source); })())) >= 2)) {
                        // line 119
                        yield "\t\t\t\t\t\t\t\t\t\t";
                        $context["keywordList"] = Twig\Extension\CoreExtension::merge((isset($context["keywordList"]) || array_key_exists("keywordList", $context) ? $context["keywordList"] : (function () { throw new RuntimeError('Variable "keywordList" does not exist.', 119, $this->source); })()), [["reference" => Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source,                         // line 120
(isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 120, $this->source); })()), 0, [], "array", false, false, false, 120)), "denomination" => Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::slice($this->env->getCharset(),                         // line 121
(isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 121, $this->source); })()), 1, null), ":"))]]);
                        // line 123
                        yield "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 124
                    yield "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['key'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                yield "
\t\t\t\t\t\t\t\t";
                // line 127
                yield "\t\t\t\t\t\t\t\t";
                $context["sortedKeywords"] = Twig\Extension\CoreExtension::sort($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), (isset($context["keywordList"]) || array_key_exists("keywordList", $context) ? $context["keywordList"] : (function () { throw new RuntimeError('Variable "keywordList" does not exist.', 127, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 127, $this->source); })()), "reference", [], "any", false, false, false, 127) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 127, $this->source); })()), "reference", [], "any", false, false, false, 127)); });
                // line 128
                yield "
\t\t\t\t\t\t\t\t<ul class=\"keywords-list\">
\t\t\t\t\t\t\t\t\t";
                // line 130
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sortedKeywords"]) || array_key_exists("sortedKeywords", $context) ? $context["sortedKeywords"] : (function () { throw new RuntimeError('Variable "sortedKeywords" does not exist.', 130, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["keyword"]) {
                    // line 131
                    yield "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 132
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["keyword"], "reference", [], "any", false, false, false, 132), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 135
                    yield "\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['keyword'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 137
                yield "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
            } else {
                // line 139
                yield "\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<strong>Mots-clés :</strong>
\t\t\t\t\t\t\t\t\tNon spécifié</p>
\t\t\t\t\t\t\t";
            }
            // line 143
            yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fiche'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
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
        return "export/pdf_motCle_template.html.twig";
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
        return array (  272 => 148,  262 => 143,  256 => 139,  252 => 137,  245 => 135,  240 => 132,  237 => 131,  233 => 130,  229 => 128,  226 => 127,  223 => 125,  217 => 124,  214 => 123,  212 => 121,  211 => 120,  209 => 119,  206 => 118,  203 => 117,  198 => 116,  195 => 114,  192 => 113,  189 => 112,  187 => 111,  179 => 106,  172 => 102,  165 => 98,  158 => 94,  151 => 90,  144 => 86,  137 => 82,  132 => 79,  127 => 73,  120 => 68,  116 => 67,  48 => 1,);
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
            /* Force page breaks */
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

\t\t{% for fiche in fiches %}
\t\t\t<div class=\"fiche-container\">
\t\t\t\t<div class=\"title\">Détails la fiche</div>
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<div class=\"sectionn\">
\t\t\t\t\t\t<h3>Référence:</h3>
\t\t\t\t\t\t<p>{{ fiche.refer == null ? \x27Non spécifié\x27 : fiche.refer }}</p>
\t\t\t\t\t</div>
\t\t\t\t\t{# <div class=\"sectionn\">
\t\t\t\t\t\t\t\t\t<h3>Référence BIS:</h3>
\t\t\t\t\t\t\t\t\t<p>{{ fiche.refer_bis == null ? \x27Non spécifié\x27 : fiche.refer_bis }}</p>
\t\t\t\t\t\t\t\t</div>  #}
                            
\t\t\t\t\t<div class=\"sectionn\">
\t\t\t\t\t\t<h3>Dénomination:</h3>
\t\t\t\t\t\t<p>{{ fiche.denomination == null ? \x27Non spécifié\x27 : fiche.denomination }}</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sectionn\">
\t\t\t\t\t\t<h3>Texte:</h3>
\t\t\t\t\t\t<p>{{ fiche.texte == null ? \x27Non spécifié\x27 : fiche.texte }}</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sectionn\">
\t\t\t\t\t\t<h3>Traduction:</h3>
\t\t\t\t\t\t<p>{{ fiche.traduction == null ? \x27Non spécifié\x27 : fiche.traduction }}</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sectionn\">
\t\t\t\t\t\t<h3>Edition:</h3>
\t\t\t\t\t\t<p>{{ fiche.edition == null ? \x27Non spécifié\x27 : fiche.edition }}</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sectionn\">
\t\t\t\t\t\t<h3>Commentaires:</h3>
\t\t\t\t\t\t<p>{{ fiche.commentaire == null ? \x27Non spécifié\x27 : fiche.commentaire }}</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sectionn\">
\t\t\t\t\t\t<h3>Notes:</h3>
\t\t\t\t\t\t<p>{{ fiche.notes == null ? \x27Non spécifié\x27 : fiche.notes }}</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sectionn\">
\t\t\t\t\t\t<h3>Statut:</h3>
\t\t\t\t\t\t<p>{{ fiche.statut == null ? \x27Non spécifié\x27 : fiche.statut }}</p>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"sectionn mot-cles-section\">
\t\t\t\t\t\t<h3>Mot Clés:</h3>
\t\t\t\t\t\t<div class=\"fiche-details\">
\t\t\t\t\t\t\t{% if fiche.motCles %}
\t\t\t\t\t\t\t\t{% set keywords = fiche.motCles|split(\x27,\x27) %}
\t\t\t\t\t\t\t\t{% set keywordList = [] %}

\t\t\t\t\t\t\t\t{# Convert string to array of objects #}
\t\t\t\t\t\t\t\t{% for key in keywords %}
\t\t\t\t\t\t\t\t\t{% set parts = key|split(\x27:\x27) %}
\t\t\t\t\t\t\t\t\t{% if parts|length >= 2 %}
\t\t\t\t\t\t\t\t\t\t{% set keywordList = keywordList|merge([{
\t\t\t\t\t\t\t\t\treference: parts[0]|trim,
\t\t\t\t\t\t\t\t\tdenomination: parts[1:]|join(\x27:\x27)|trim
\t\t\t\t\t\t\t\t\t}]) %}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t\t{# Sort by reference #}
\t\t\t\t\t\t\t\t{% set sortedKeywords = keywordList|sort((a, b) => a.reference <=> b.reference) %}

\t\t\t\t\t\t\t\t<ul class=\"keywords-list\">
\t\t\t\t\t\t\t\t\t{% for keyword in sortedKeywords %}
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t{{ keyword.reference }}
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t{# {{ keyword.denomination ?? \x27Non spécifié\x27 }} #}
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<strong>Mots-clés :</strong>
\t\t\t\t\t\t\t\t\tNon spécifié</p>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t</body>
</html>
", "export/pdf_motCle_template.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\export\\pdf_motCle_template.html.twig");
    }
}
