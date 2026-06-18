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

/* fiche/detail_fiche_total_rech.html.twig */
class __TwigTemplate_cf704c835d59f959f58056665db748d9 extends Template
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
        // line 80
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/detail_fiche_total_rech.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/detail_fiche_total_rech.html.twig"));

        $this->parent = $this->load("base.html.twig", 80);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 82
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

        // line 83
        yield "\t";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 83, $this->source); })()), "refer", [], "any", false, false, false, 83), "html", null, true);
        yield "
\t";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 84, $this->source); })()), "denomination", [], "any", false, false, false, 84), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 87
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

        // line 88
        yield "\t<!DOCTYPE html>
\t<html lang=\"fr\">
\t\t<head>
\t\t\t<meta charset=\"UTF-8\">
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/ajoutFiche.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
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
\t\t";
        // line 153
        yield "\t\t<body>
\t\t\t<div class=\"back-to-list-button\">
\t\t\t\t<a href=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_recherche_resultat", ["livreId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "session", [], "any", false, false, false, 155), "get", ["livreIdSelectionne"], "method", false, false, false, 155)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\">
\t\t\t\t\tRetour à la liste
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"fiche-detail-container\">
\t\t\t\t<div>
\t\t\t\t";
        // line 161
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 161, $this->source); })()))) {
            // line 162
            yield "\t\t\t\t\t<div class=\"modifier-btn-container\">
\t\t\t\t\t\t<a href=\"";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fiche_edit_total_rech", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 163, $this->source); })()), "getIdFiche", [], "method", false, false, false, 163), "previousFicheId" => (((($tmp = (isset($context["previous_fiche"]) || array_key_exists("previous_fiche", $context) ? $context["previous_fiche"] : (function () { throw new RuntimeError('Variable "previous_fiche" does not exist.', 163, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["previous_fiche"]) || array_key_exists("previous_fiche", $context) ? $context["previous_fiche"] : (function () { throw new RuntimeError('Variable "previous_fiche" does not exist.', 163, $this->source); })()), "getIdFiche", [], "method", false, false, false, 163)) : (null)), "nextFicheId" => (((($tmp = (isset($context["next_fiche"]) || array_key_exists("next_fiche", $context) ? $context["next_fiche"] : (function () { throw new RuntimeError('Variable "next_fiche" does not exist.', 163, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["next_fiche"]) || array_key_exists("next_fiche", $context) ? $context["next_fiche"] : (function () { throw new RuntimeError('Variable "next_fiche" does not exist.', 163, $this->source); })()), "getIdFiche", [], "method", false, false, false, 163)) : (null)), "index" => (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 163, $this->source); })()), "total" => (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 163, $this->source); })())]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\tModifier
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 168
        yield "\t\t\t\t\t<h1 class=\"text-center\">Détails de la Fiche</h1>
\t\t\t\t</div>

\t\t\t\t<div class=\"text-center mb-4\">
\t\t\t\t\t<strong>Vous êtes sur la fiche
\t\t\t\t\t\t";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 173, $this->source); })()), "html", null, true);
        yield "
\t\t\t\t\t\tsur
\t\t\t\t\t\t";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 175, $this->source); })()), "html", null, true);
        yield "</strong>
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Numéro de la fiche:</strong>
\t\t\t\t\t";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 179, $this->source); })()), "getIdFiche", [], "method", false, false, false, 179), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Livre:</strong>
\t\t\t\t\t";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 183, $this->source); })()), "livre", [], "any", false, false, false, 183), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Édition:</strong>
\t\t\t\t\t";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 187, $this->source); })()), "edition", [], "any", false, false, false, 187), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Référence:</strong>
\t\t\t\t\t";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 191, $this->source); })()), "refer", [], "any", false, false, false, 191), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Dénomination:</strong>
\t\t\t\t\t";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 195, $this->source); })()), "denomination", [], "any", false, false, false, 195), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Statut:</strong>
\t\t\t\t\t";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 199, $this->source); })()), "statut", [], "any", false, false, false, 199), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Texte:</strong>
\t\t\t\t\t";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 203, $this->source); })()), "texte", [], "any", false, false, false, 203), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Traduction:</strong>
\t\t\t\t\t";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 207, $this->source); })()), "traduction", [], "any", false, false, false, 207), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Notes:</strong>
\t\t\t\t\t";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 211, $this->source); })()), "notes", [], "any", false, false, false, 211), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Commentaire:</strong>
\t\t\t\t\t";
        // line 215
        yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 215, $this->source); })()), "commentaire", [], "any", false, false, false, 215), "<p><i><strong><em><br>");
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t<strong>Mots Clés:</strong>
\t\t\t\t\t<div class=\"mot-cles\">
\t\t\t\t\t\t";
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 220, $this->source); })()), "MotCles", [], "any", false, false, false, 220));
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
            // line 221
            yield "\t\t\t\t\t\t\t<span title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["motCle"], "denomination", [], "any", false, false, false, 221), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["motCle"], "reference", [], "any", false, false, false, 222), "html", null, true);
            yield "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
            // line 224
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 224)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ",
\t\t\t\t\t\t\t";
            }
            // line 226
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
            // line 227
            yield "\t\t\t\t\t\t\t<span>Aucun mot-clé associé.</span>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['motCle'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"navigation-buttons\">
\t\t\t\t\t";
        // line 233
        if ((($tmp =  !(null === (isset($context["previous_fiche"]) || array_key_exists("previous_fiche", $context) ? $context["previous_fiche"] : (function () { throw new RuntimeError('Variable "previous_fiche" does not exist.', 233, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 234
            yield "\t\t\t\t\t\t<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_fiche_total", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["previous_fiche"]) || array_key_exists("previous_fiche", $context) ? $context["previous_fiche"] : (function () { throw new RuntimeError('Variable "previous_fiche" does not exist.', 234, $this->source); })()), "getIdFiche", [], "method", false, false, false, 234), "index" => ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 234, $this->source); })()) - 1), "total" => (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 234, $this->source); })())]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t&lt;&lt; Précédent
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        // line 238
        yield "\t\t\t\t\t";
        if ((($tmp =  !(null === (isset($context["next_fiche"]) || array_key_exists("next_fiche", $context) ? $context["next_fiche"] : (function () { throw new RuntimeError('Variable "next_fiche" does not exist.', 238, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 239
            yield "\t\t\t\t\t\t<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_fiche_total", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["next_fiche"]) || array_key_exists("next_fiche", $context) ? $context["next_fiche"] : (function () { throw new RuntimeError('Variable "next_fiche" does not exist.', 239, $this->source); })()), "getIdFiche", [], "method", false, false, false, 239), "index" => ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 239, $this->source); })()) + 1), "total" => (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 239, $this->source); })())]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\tSuivant &gt;&gt;
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        // line 243
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
        return "fiche/detail_fiche_total_rech.html.twig";
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
        return array (  374 => 243,  366 => 239,  363 => 238,  355 => 234,  353 => 233,  347 => 229,  340 => 227,  327 => 226,  322 => 224,  317 => 222,  312 => 221,  294 => 220,  286 => 215,  279 => 211,  272 => 207,  265 => 203,  258 => 199,  251 => 195,  244 => 191,  237 => 187,  230 => 183,  223 => 179,  216 => 175,  211 => 173,  204 => 168,  196 => 163,  193 => 162,  191 => 161,  182 => 155,  178 => 153,  119 => 94,  115 => 93,  108 => 88,  95 => 87,  82 => 84,  77 => 83,  64 => 82,  41 => 80,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# {% extends \x27base.html.twig\x27 %}

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
        {% if previous_fiche is not null %}
            <a href=\"{{ path(\x27detail_fiche_total\x27, {id: previous_fiche.getIdFiche()}) }}\" style=\"margin-right: 20px\" ><strong><<</strong></a>
        {% endif %}
        {% if next_fiche is not null %}
            <a href=\"{{ path(\x27detail_fiche_total\x27, {id: next_fiche.getIdFiche()}) }}\" ><strong>>></strong></a>
        {% endif %}
    </div>
</div>
</div>

</body>
</html>
{% endblock %}

{% block title %}
    {{ fiche.refer }} {{ fiche.denomination }}
{% endblock %} #}
{% extends \x27base.html.twig\x27 %}

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
\t\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
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
\t\t{# <script>
    \t\tconst isAdmin = {{ is_granted(\x27ROLE_ADMIN\x27) ? \x27true\x27 : \x27false\x27 }};
\t\t</script> #}
\t\t<body>
\t\t\t<div class=\"back-to-list-button\">
\t\t\t\t<a href=\"{{ path(\x27fiche_recherche_resultat\x27, { livreId: app.session.get(\x27livreIdSelectionne\x27) }) }}\" class=\"btn btn-secondary\">
\t\t\t\t\tRetour à la liste
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"fiche-detail-container\">
\t\t\t\t<div>
\t\t\t\t{% if is_granted(\x27ROLE_ADMIN\x27) or canEdit %}
\t\t\t\t\t<div class=\"modifier-btn-container\">
\t\t\t\t\t\t<a href=\"{{ path(\x27app_fiche_edit_total_rech\x27, { \x27id\x27: fiche.getIdFiche(), \x27previousFicheId\x27: previous_fiche ? previous_fiche.getIdFiche() : null, \x27nextFicheId\x27: next_fiche ? next_fiche.getIdFiche() : null, \x27index\x27: index,\x27total\x27: total }) }}\" class=\"btn btn-primary\">
\t\t\t\t\t\t\tModifier
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
\t\t\t\t\t{{ fiche.commentaire|striptags(\x27<p><i><strong><em><br>\x27)|raw }}
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
{% endblock %}
", "fiche/detail_fiche_total_rech.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\fiche\\detail_fiche_total_rech.html.twig");
    }
}
