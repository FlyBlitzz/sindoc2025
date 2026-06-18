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

/* fiche/detail_fiche_total.html.twig */
class __TwigTemplate_9f43b5e274db061f0955a3deef69d15d extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/detail_fiche_total.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/detail_fiche_total.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "\t";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 4, $this->source); })()), "refer", [], "any", false, false, false, 4), "html", null, true);
        yield "
\t";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 5, $this->source); })()), "denomination", [], "any", false, false, false, 5), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "\t<!DOCTYPE html>
\t<html lang=\"fr\">
\t\t<head>
\t\t\t<meta charset=\"UTF-8\">
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/ajoutFiche.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css\">
\t\t\t<style>
\t\t\t\t.fiche-detail-container {
\t\t\t\t\tposition:relative;
\t\t\t\t\tmax-width: 800px;
\t\t\t\t\tmargin: 50px auto;
\t\t\t\t\tpadding: 20px;
\t\t\t\t\tbackground-color: #f9f9f9;
\t\t\t\t\tborder-radius: 10px;
\t\t\t\t\tbox-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
\t\t\t\t}
\t\t\t\t.fiche-detail-container h1 {
\t\t\t\t\tfont-size: 2rem;
\t\t\t\t\tfont-weight: bold;
\t\t\t\t\tcolor: #333;
\t\t\t\t\tmargin-bottom: 20px;
\t\t\t\t}
\t\t\t\t.fiche-detail-container .detail-item {
\t\t\t\t\tmargin-bottom: 15px;
\t\t\t\t\tfont-size: 1.1rem;
\t\t\t\t}
\t\t\t\t.fiche-detail-container .detail-item strong {
\t\t\t\t\tcolor: #555;
\t\t\t\t\tmargin-right: 10px;
\t\t\t\t}
\t\t\t\t.fiche-detail-container .mot-cles {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\tflex-wrap: wrap;
\t\t\t\t\tgap: 5px;
\t\t\t\t}
\t\t\t\t.fiche-detail-container .mot-cles span {
\t\t\t\t\tbackground-color: #e9ecef;
\t\t\t\t\tpadding: 5px 10px;
\t\t\t\t\tborder-radius: 5px;
\t\t\t\t\tfont-size: 0.9rem;
\t\t\t\t}
\t\t\t\t.fiche-detail-container .navigation-buttons {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\tjustify-content: space-between;
\t\t\t\t\tmargin-top: 20px;
\t\t\t\t}
\t\t\t\t.fiche-detail-container .navigation-buttons a {
\t\t\t\t\ttext-decoration: none;
\t\t\t\t\tfont-size: 1.2rem;
\t\t\t\t}
\t\t\t\t.back-to-list-button {
\t\t\t\t\tpadding: 1em;
\t\t\t\t\tfloat: left;
\t\t\t\t}
\t\t\t\t.modifier-btn-container {
\t\t\t\t\tdisplay: flex;
    \t\t\t\tjustify-content: end;
\t\t\t\t}
\t\t\t</style>
\t\t</head>
\t\t<body>
\t\t\t<div class=\"back-to-list-button\">
\t\t\t\t<a href=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_list", ["livre" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "session", [], "any", false, false, false, 73), "get", ["livreIdSelectionne"], "method", false, false, false, 73)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\">
\t\t\t\t\tRetour à la liste
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"fiche-detail-container\">
\t\t\t\t<div>
\t\t\t\t\t";
        // line 79
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 80
            yield "\t\t\t\t\t\t<div class=\"modifier-btn-container\">
\t\t\t\t\t\t\t<a href=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fiche_edit_total", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 81, $this->source); })()), "getIdFiche", [], "method", false, false, false, 81), "previousFicheId" => (((($tmp = (isset($context["previous_fiche"]) || array_key_exists("previous_fiche", $context) ? $context["previous_fiche"] : (function () { throw new RuntimeError('Variable "previous_fiche" does not exist.', 81, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["previous_fiche"]) || array_key_exists("previous_fiche", $context) ? $context["previous_fiche"] : (function () { throw new RuntimeError('Variable "previous_fiche" does not exist.', 81, $this->source); })()), "getIdFiche", [], "method", false, false, false, 81)) : (null)), "nextFicheId" => (((($tmp = (isset($context["next_fiche"]) || array_key_exists("next_fiche", $context) ? $context["next_fiche"] : (function () { throw new RuntimeError('Variable "next_fiche" does not exist.', 81, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["next_fiche"]) || array_key_exists("next_fiche", $context) ? $context["next_fiche"] : (function () { throw new RuntimeError('Variable "next_fiche" does not exist.', 81, $this->source); })()), "getIdFiche", [], "method", false, false, false, 81)) : (null)), "index" => (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 81, $this->source); })()), "total" => (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 81, $this->source); })())]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-pencil-fill\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 86
        yield "\t\t\t\t\t<h1 class=\"text-center\">Détails de la Fiche</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"text-center mb-4\">
\t\t\t\t\t<strong>Vous êtes sur la fiche
\t\t\t\t\t\t";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 90, $this->source); })()), "html", null, true);
        yield "
\t\t\t\t\t\tsur
\t\t\t\t\t\t";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 92, $this->source); })()), "html", null, true);
        yield "</strong>
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Numéro de la fiche:</strong>
\t\t\t\t\t";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 96, $this->source); })()), "getIdFiche", [], "method", false, false, false, 96), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Livre:</strong>
\t\t\t\t\t";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 100, $this->source); })()), "livre", [], "any", false, false, false, 100), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Édition:</strong>
\t\t\t\t\t";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 104, $this->source); })()), "edition", [], "any", false, false, false, 104), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Référence:</strong>
\t\t\t\t\t";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 108, $this->source); })()), "refer", [], "any", false, false, false, 108), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Dénomination:</strong>
\t\t\t\t\t";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 112, $this->source); })()), "denomination", [], "any", false, false, false, 112), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Statut:</strong>
\t\t\t\t\t";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 116, $this->source); })()), "statut", [], "any", false, false, false, 116), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Texte:</strong>
\t\t\t\t\t";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 120, $this->source); })()), "texte", [], "any", false, false, false, 120), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Traduction:</strong>
\t\t\t\t\t";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 124, $this->source); })()), "traduction", [], "any", false, false, false, 124), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Notes:</strong>
\t\t\t\t\t";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 128, $this->source); })()), "notes", [], "any", false, false, false, 128), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Commentaire:</strong>
\t\t\t\t\t";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 132, $this->source); })()), "commentaire", [], "any", false, false, false, 132), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Mots Clés:</strong>
\t\t\t\t\t<div class=\"mot-cles\">
\t\t\t\t\t\t";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 137, $this->source); })()), "MotCles", [], "any", false, false, false, 137));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["motCle"]) {
            // line 138
            yield "\t\t\t\t\t\t\t<span title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["motCle"], "denomination", [], "any", false, false, false, 138), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["motCle"], "reference", [], "any", false, false, false, 139), "html", null, true);
            yield "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
            // line 141
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ",
\t\t\t\t\t\t\t";
            }
            // line 143
            yield "\t\t\t\t\t\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 144
            yield "\t\t\t\t\t\t\t<span>Aucun mot-clé associé.</span>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['motCle'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"navigation-buttons\">
\t\t\t\t\t";
        // line 150
        if ((($tmp =  !(null === (isset($context["previous_fiche"]) || array_key_exists("previous_fiche", $context) ? $context["previous_fiche"] : (function () { throw new RuntimeError('Variable "previous_fiche" does not exist.', 150, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 151
            yield "\t\t\t\t\t\t<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_fiche_total", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["previous_fiche"]) || array_key_exists("previous_fiche", $context) ? $context["previous_fiche"] : (function () { throw new RuntimeError('Variable "previous_fiche" does not exist.', 151, $this->source); })()), "getIdFiche", [], "method", false, false, false, 151), "index" => ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 151, $this->source); })()) - 1), "total" => (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 151, $this->source); })())]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t&lt;&lt; Précédent
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        // line 155
        yield "\t\t\t\t\t";
        if ((($tmp =  !(null === (isset($context["next_fiche"]) || array_key_exists("next_fiche", $context) ? $context["next_fiche"] : (function () { throw new RuntimeError('Variable "next_fiche" does not exist.', 155, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 156
            yield "\t\t\t\t\t\t<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_fiche_total", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["next_fiche"]) || array_key_exists("next_fiche", $context) ? $context["next_fiche"] : (function () { throw new RuntimeError('Variable "next_fiche" does not exist.', 156, $this->source); })()), "getIdFiche", [], "method", false, false, false, 156), "index" => ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 156, $this->source); })()) + 1), "total" => (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 156, $this->source); })())]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\tSuivant &gt;&gt;
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        // line 160
        yield "\t\t\t\t</div>

\t\t\t</div>
\t\t</body>
\t</html>
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
        return "fiche/detail_fiche_total.html.twig";
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
        return array (  371 => 160,  363 => 156,  360 => 155,  352 => 151,  350 => 150,  344 => 146,  337 => 144,  324 => 143,  319 => 141,  314 => 139,  309 => 138,  291 => 137,  283 => 132,  276 => 128,  269 => 124,  262 => 120,  255 => 116,  248 => 112,  241 => 108,  234 => 104,  227 => 100,  220 => 96,  213 => 92,  208 => 90,  202 => 86,  194 => 81,  191 => 80,  189 => 79,  180 => 73,  119 => 15,  115 => 14,  108 => 9,  95 => 8,  82 => 5,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}
\t{{ fiche.refer }}
\t{{ fiche.denomination }}
{% endblock %}

{% block body %}
\t<!DOCTYPE html>
\t<html lang=\"fr\">
\t\t<head>
\t\t\t<meta charset=\"UTF-8\">
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset(\x27css/bootstrap.min.css\x27) }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset(\x27css/ajoutFiche.css\x27) }}\">
\t\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css\">
\t\t\t<style>
\t\t\t\t.fiche-detail-container {
\t\t\t\t\tposition:relative;
\t\t\t\t\tmax-width: 800px;
\t\t\t\t\tmargin: 50px auto;
\t\t\t\t\tpadding: 20px;
\t\t\t\t\tbackground-color: #f9f9f9;
\t\t\t\t\tborder-radius: 10px;
\t\t\t\t\tbox-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
\t\t\t\t}
\t\t\t\t.fiche-detail-container h1 {
\t\t\t\t\tfont-size: 2rem;
\t\t\t\t\tfont-weight: bold;
\t\t\t\t\tcolor: #333;
\t\t\t\t\tmargin-bottom: 20px;
\t\t\t\t}
\t\t\t\t.fiche-detail-container .detail-item {
\t\t\t\t\tmargin-bottom: 15px;
\t\t\t\t\tfont-size: 1.1rem;
\t\t\t\t}
\t\t\t\t.fiche-detail-container .detail-item strong {
\t\t\t\t\tcolor: #555;
\t\t\t\t\tmargin-right: 10px;
\t\t\t\t}
\t\t\t\t.fiche-detail-container .mot-cles {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\tflex-wrap: wrap;
\t\t\t\t\tgap: 5px;
\t\t\t\t}
\t\t\t\t.fiche-detail-container .mot-cles span {
\t\t\t\t\tbackground-color: #e9ecef;
\t\t\t\t\tpadding: 5px 10px;
\t\t\t\t\tborder-radius: 5px;
\t\t\t\t\tfont-size: 0.9rem;
\t\t\t\t}
\t\t\t\t.fiche-detail-container .navigation-buttons {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\tjustify-content: space-between;
\t\t\t\t\tmargin-top: 20px;
\t\t\t\t}
\t\t\t\t.fiche-detail-container .navigation-buttons a {
\t\t\t\t\ttext-decoration: none;
\t\t\t\t\tfont-size: 1.2rem;
\t\t\t\t}
\t\t\t\t.back-to-list-button {
\t\t\t\t\tpadding: 1em;
\t\t\t\t\tfloat: left;
\t\t\t\t}
\t\t\t\t.modifier-btn-container {
\t\t\t\t\tdisplay: flex;
    \t\t\t\tjustify-content: end;
\t\t\t\t}
\t\t\t</style>
\t\t</head>
\t\t<body>
\t\t\t<div class=\"back-to-list-button\">
\t\t\t\t<a href=\"{{ path(\x27fiche_list\x27, { livre: app.session.get(\x27livreIdSelectionne\x27) }) }}\" class=\"btn btn-secondary\">
\t\t\t\t\tRetour à la liste
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"fiche-detail-container\">
\t\t\t\t<div>
\t\t\t\t\t{% if is_granted(\x27ROLE_ADMIN\x27) %}
\t\t\t\t\t\t<div class=\"modifier-btn-container\">
\t\t\t\t\t\t\t<a href=\"{{ path(\x27app_fiche_edit_total\x27, { \x27id\x27: fiche.getIdFiche(), \x27previousFicheId\x27: previous_fiche ? previous_fiche.getIdFiche() : null, \x27nextFicheId\x27: next_fiche ? next_fiche.getIdFiche() : null, \x27index\x27: index, \x27total\x27: total }) }}\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-pencil-fill\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<h1 class=\"text-center\">Détails de la Fiche</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"text-center mb-4\">
\t\t\t\t\t<strong>Vous êtes sur la fiche
\t\t\t\t\t\t{{ index }}
\t\t\t\t\t\tsur
\t\t\t\t\t\t{{ total }}</strong>
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Numéro de la fiche:</strong>
\t\t\t\t\t{{ fiche.getIdFiche() }}
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Livre:</strong>
\t\t\t\t\t{{ fiche.livre }}
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Édition:</strong>
\t\t\t\t\t{{ fiche.edition }}
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Référence:</strong>
\t\t\t\t\t{{ fiche.refer }}
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Dénomination:</strong>
\t\t\t\t\t{{ fiche.denomination }}
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Statut:</strong>
\t\t\t\t\t{{ fiche.statut }}
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Texte:</strong>
\t\t\t\t\t{{ fiche.texte }}
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Traduction:</strong>
\t\t\t\t\t{{ fiche.traduction }}
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Notes:</strong>
\t\t\t\t\t{{ fiche.notes }}
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Commentaire:</strong>
\t\t\t\t\t{{ fiche.commentaire }}
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Mots Clés:</strong>
\t\t\t\t\t<div class=\"mot-cles\">
\t\t\t\t\t\t{% for motCle  in fiche.MotCles %}
\t\t\t\t\t\t\t<span title=\"{{ motCle.denomination }}\">
\t\t\t\t\t\t\t\t{{ motCle.reference }}
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t{% if not loop.last %},
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<span>Aucun mot-clé associé.</span>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"navigation-buttons\">
\t\t\t\t\t{% if previous_fiche is not null %}
\t\t\t\t\t\t<a href=\"{{ path(\x27detail_fiche_total\x27, {id: previous_fiche.getIdFiche(), index: index - 1, total: total}) }}\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t&lt;&lt; Précédent
\t\t\t\t\t\t</a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if next_fiche is not null %}
\t\t\t\t\t\t<a href=\"{{ path(\x27detail_fiche_total\x27, {id: next_fiche.getIdFiche(), index: index + 1, total: total}) }}\" class=\"btn btn-primary\">
\t\t\t\t\t\t\tSuivant &gt;&gt;
\t\t\t\t\t\t</a>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>

\t\t\t</div>
\t\t</body>
\t</html>
{% endblock %}", "fiche/detail_fiche_total.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\fiche\\detail_fiche_total.html.twig");
    }
}
