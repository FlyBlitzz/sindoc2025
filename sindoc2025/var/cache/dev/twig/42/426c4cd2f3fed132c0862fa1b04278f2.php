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

/* fiche/detail_fiche_total_sav_req.html.twig */
class __TwigTemplate_b503b31e023f092802bf535e75997922 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/detail_fiche_total_sav_req.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/detail_fiche_total_sav_req.html.twig"));

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
\t\t\t\t\tmax-width: 800px;
\t\t\t\t\tmargin: 50px auto;
\t\t\t\t\tpadding: 20px;
\t\t\t\t\tbackground-color: #f9f9f9;
\t\t\t\t\tborder-radius: 10px;
\t\t\t\t\tbox-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
\t\t\t\t\tposition: relative;
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
\t\t\t";
        // line 78
        yield "\t\t\t<div class=\"fiche-detail-container\">
\t\t\t\t";
        // line 85
        yield "\t\t\t\t<div>
\t\t\t\t";
        // line 86
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 86, $this->source); })()))) {
            // line 87
            yield "\t\t\t\t\t<div class=\"modifier-btn-container\">
\t\t\t\t\t\t<a href=\"";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fiche_edit_total_sav_req", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 88, $this->source); })()), "getIdFiche", [], "method", false, false, false, 88), "previousFicheId" => (((($tmp = (isset($context["previous_fiche"]) || array_key_exists("previous_fiche", $context) ? $context["previous_fiche"] : (function () { throw new RuntimeError('Variable "previous_fiche" does not exist.', 88, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["previous_fiche"]) || array_key_exists("previous_fiche", $context) ? $context["previous_fiche"] : (function () { throw new RuntimeError('Variable "previous_fiche" does not exist.', 88, $this->source); })()), "getIdFiche", [], "method", false, false, false, 88)) : (null)), "nextFicheId" => (((($tmp = (isset($context["next_fiche"]) || array_key_exists("next_fiche", $context) ? $context["next_fiche"] : (function () { throw new RuntimeError('Variable "next_fiche" does not exist.', 88, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["next_fiche"]) || array_key_exists("next_fiche", $context) ? $context["next_fiche"] : (function () { throw new RuntimeError('Variable "next_fiche" does not exist.', 88, $this->source); })()), "getIdFiche", [], "method", false, false, false, 88)) : (null)), "index" => (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 88, $this->source); })()), "reqId" => (isset($context["reqId"]) || array_key_exists("reqId", $context) ? $context["reqId"] : (function () { throw new RuntimeError('Variable "reqId" does not exist.', 88, $this->source); })()), "total" => (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 88, $this->source); })())]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t<i class=\"bi bi-pencil-fill\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 93
        yield "\t\t\t\t\t<h1 class=\"text-center\">Détails de la Fiche</h1>
\t\t\t\t</div>

\t\t\t\t<div class=\"text-center mb-4\">
\t\t\t\t\t<strong>Vous êtes sur la fiche
\t\t\t\t\t\t";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 98, $this->source); })()), "html", null, true);
        yield "
\t\t\t\t\t\tsur
\t\t\t\t\t\t";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 100, $this->source); })()), "html", null, true);
        yield "</strong>
\t\t\t\t</div>

\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Numéro de la fiche:</strong>
\t\t\t\t\t";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 105, $this->source); })()), "getIdFiche", [], "method", false, false, false, 105), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Livre:</strong>
\t\t\t\t\t";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 109, $this->source); })()), "livre", [], "any", false, false, false, 109), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Édition:</strong>
\t\t\t\t\t";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 113, $this->source); })()), "edition", [], "any", false, false, false, 113), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Référence:</strong>
\t\t\t\t\t";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 117, $this->source); })()), "refer", [], "any", false, false, false, 117), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Dénomination:</strong>
\t\t\t\t\t";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 121, $this->source); })()), "denomination", [], "any", false, false, false, 121), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Statut:</strong>
\t\t\t\t\t";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 125, $this->source); })()), "statut", [], "any", false, false, false, 125), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Texte:</strong>
\t\t\t\t\t";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 129, $this->source); })()), "texte", [], "any", false, false, false, 129), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Traduction:</strong>
\t\t\t\t\t";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 133, $this->source); })()), "traduction", [], "any", false, false, false, 133), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Notes:</strong>
\t\t\t\t\t";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 137, $this->source); })()), "notes", [], "any", false, false, false, 137), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Commentaire:</strong>
\t\t\t\t\t";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 141, $this->source); })()), "commentaire", [], "any", false, false, false, 141), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Mots Clés:</strong>
\t\t\t\t\t<div class=\"mot-cles\">
\t\t\t\t\t
\t\t\t\t\t\t";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 147, $this->source); })()), "motCles", [], "any", false, false, false, 147));
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
            // line 148
            yield "\t\t\t\t\t
\t\t\t\t\t\t\t<span title=\"";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["motCle"], "denomination", [], "any", false, false, false, 149), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["motCle"], "reference", [], "any", false, false, false, 150), "html", null, true);
            yield "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
            // line 152
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 152)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ",
\t\t\t\t\t\t\t";
            }
            // line 154
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
            // line 155
            yield "\t\t\t\t\t\t\t<span>Aucun mot-clé associé.</span>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['motCle'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"navigation-buttons\">
\t\t\t\t\t";
        // line 161
        if ((($tmp =  !(null === (isset($context["previous_fiche"]) || array_key_exists("previous_fiche", $context) ? $context["previous_fiche"] : (function () { throw new RuntimeError('Variable "previous_fiche" does not exist.', 161, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 162
            yield "\t\t\t\t\t\t<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_fiche_total_sav_req", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["previous_fiche"]) || array_key_exists("previous_fiche", $context) ? $context["previous_fiche"] : (function () { throw new RuntimeError('Variable "previous_fiche" does not exist.', 162, $this->source); })()), "getIdFiche", [], "method", false, false, false, 162), "index" => ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 162, $this->source); })()) - 1), "total" => (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 162, $this->source); })()), "reqId" => (isset($context["reqId"]) || array_key_exists("reqId", $context) ? $context["reqId"] : (function () { throw new RuntimeError('Variable "reqId" does not exist.', 162, $this->source); })())]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t&lt;&lt; Précédent
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        // line 166
        yield "\t\t\t\t\t";
        if ((($tmp =  !(null === (isset($context["next_fiche"]) || array_key_exists("next_fiche", $context) ? $context["next_fiche"] : (function () { throw new RuntimeError('Variable "next_fiche" does not exist.', 166, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 167
            yield "\t\t\t\t\t\t<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_fiche_total_sav_req", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["next_fiche"]) || array_key_exists("next_fiche", $context) ? $context["next_fiche"] : (function () { throw new RuntimeError('Variable "next_fiche" does not exist.', 167, $this->source); })()), "getIdFiche", [], "method", false, false, false, 167), "index" => ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 167, $this->source); })()) + 1), "total" => (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 167, $this->source); })()), "reqId" => (isset($context["reqId"]) || array_key_exists("reqId", $context) ? $context["reqId"] : (function () { throw new RuntimeError('Variable "reqId" does not exist.', 167, $this->source); })())]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\tSuivant &gt;&gt;
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        // line 171
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
        return "fiche/detail_fiche_total_sav_req.html.twig";
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
        return array (  372 => 171,  364 => 167,  361 => 166,  353 => 162,  351 => 161,  345 => 157,  338 => 155,  325 => 154,  320 => 152,  315 => 150,  311 => 149,  308 => 148,  290 => 147,  281 => 141,  274 => 137,  267 => 133,  260 => 129,  253 => 125,  246 => 121,  239 => 117,  232 => 113,  225 => 109,  218 => 105,  210 => 100,  205 => 98,  198 => 93,  190 => 88,  187 => 87,  185 => 86,  182 => 85,  179 => 78,  119 => 15,  115 => 14,  108 => 9,  95 => 8,  82 => 5,  77 => 4,  64 => 3,  41 => 1,);
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
\t\t\t\t\tmax-width: 800px;
\t\t\t\t\tmargin: 50px auto;
\t\t\t\t\tpadding: 20px;
\t\t\t\t\tbackground-color: #f9f9f9;
\t\t\t\t\tborder-radius: 10px;
\t\t\t\t\tbox-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
\t\t\t\t\tposition: relative;
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
\t\t\t{# <div class=\"back-to-list-button\">
\t\t\t\t<a href=\"{{ path(\x27savreq_app_sav_requete_show\x27, { \x27id\x27: reqId }) }}\" class=\"btn btn-secondary\">
\t\t\t\t\tRetour à la liste
\t\t\t\t</a>

\t\t\t</div> #}
\t\t\t<div class=\"fiche-detail-container\">
\t\t\t\t{# <div class=\"modifier-btn-container\">
\t\t\t\t\t<a href=\"{{ path(\x27app_fiche_edit_total_sav_req\x27, {\x27id\x27: fiche.getIdFiche()}) }}\" class=\"btn btn-primary\">
\t\t\t\t\t\t<i class=\"bi bi-pencil-fill\"></i>
\t\t\t\t\t\t
\t\t\t\t\t</a>
\t\t\t\t</div> #}
\t\t\t\t<div>
\t\t\t\t{% if is_granted(\x27ROLE_ADMIN\x27) or canEdit %}
\t\t\t\t\t<div class=\"modifier-btn-container\">
\t\t\t\t\t\t<a href=\"{{ path(\x27app_fiche_edit_total_sav_req\x27, { \x27id\x27: fiche.getIdFiche(), \x27previousFicheId\x27: previous_fiche ? previous_fiche.getIdFiche() : null, \x27nextFicheId\x27: next_fiche ? next_fiche.getIdFiche() : null, \x27index\x27: index, \x27reqId\x27: reqId, \x27total\x27: total }) }}\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t<i class=\"bi bi-pencil-fill\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
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
\t\t\t\t\t
\t\t\t\t\t\t{% for motCle in fiche.motCles %}
\t\t\t\t\t
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
\t\t\t\t\t\t<a href=\"{{ path(\x27detail_fiche_total_sav_req\x27, {id: previous_fiche.getIdFiche(), index: index - 1, total: total, reqId:reqId}) }}\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t&lt;&lt; Précédent
\t\t\t\t\t\t</a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if next_fiche is not null %}
\t\t\t\t\t\t<a href=\"{{ path(\x27detail_fiche_total_sav_req\x27, {id: next_fiche.getIdFiche(), index: index + 1, total: total, reqId:reqId}) }}\" class=\"btn btn-primary\">
\t\t\t\t\t\t\tSuivant &gt;&gt;
\t\t\t\t\t\t</a>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>

\t\t\t</div>
\t\t</body>
\t</html>
{% endblock %}
", "fiche/detail_fiche_total_sav_req.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\fiche\\detail_fiche_total_sav_req.html.twig");
    }
}
