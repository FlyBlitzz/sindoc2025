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

/* fiche/Fiche_doublons.html.twig */
class __TwigTemplate_91345482ab17731f24507c3a4fd120f5 extends Template
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
            'Pagetitle' => [$this, 'block_Pagetitle'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/Fiche_doublons.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/Fiche_doublons.html.twig"));

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

        yield "Liste des fiches en double";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_Pagetitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Pagetitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Pagetitle"));

        // line 5
        yield "    Liste des fiches
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/showUser.css"), "html", null, true);
        yield "\">
        <!-- Lien vers Bootstrap CSS -->
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/listeUsers.css"), "html", null, true);
        yield "\">
    </head>

    ";
        // line 19
        yield "    ";
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "    ";
            $context["doublonTrouve"] = false;
            // line 21
            yield "    ";
            $context["fichesEnDouble"] = [];
            // line 22
            yield "    ";
            $context["idSet"] = [];
            // line 23
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["fiche1"]) {
                // line 24
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 24, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["fiche2"]) {
                    // line 25
                    yield "            ";
                    if (($context["fiche1"] != $context["fiche2"])) {
                        // line 26
                        yield "                ";
                        if (((((((((((((CoreExtension::getAttribute($this->env, $this->source, $context["fiche1"], "getRefer", [], "method", false, false, false, 26) == CoreExtension::getAttribute($this->env, $this->source, $context["fiche2"], "getRefer", [], "method", false, false, false, 26)) && (CoreExtension::getAttribute($this->env, $this->source,                         // line 27
$context["fiche1"], "getReferBis", [], "method", false, false, false, 27) == CoreExtension::getAttribute($this->env, $this->source, $context["fiche2"], "getReferBis", [], "method", false, false, false, 27))) && (CoreExtension::getAttribute($this->env, $this->source,                         // line 28
$context["fiche1"], "getDenomination", [], "method", false, false, false, 28) == CoreExtension::getAttribute($this->env, $this->source, $context["fiche2"], "getDenomination", [], "method", false, false, false, 28))) && (CoreExtension::getAttribute($this->env, $this->source,                         // line 29
$context["fiche1"], "getTexte", [], "method", false, false, false, 29) == CoreExtension::getAttribute($this->env, $this->source, $context["fiche2"], "getTexte", [], "method", false, false, false, 29))) && (CoreExtension::getAttribute($this->env, $this->source,                         // line 30
$context["fiche1"], "getTraduction", [], "method", false, false, false, 30) == CoreExtension::getAttribute($this->env, $this->source, $context["fiche2"], "getTraduction", [], "method", false, false, false, 30))) && (CoreExtension::getAttribute($this->env, $this->source,                         // line 31
$context["fiche1"], "getNotes", [], "method", false, false, false, 31) == CoreExtension::getAttribute($this->env, $this->source, $context["fiche2"], "getNotes", [], "method", false, false, false, 31))) && (CoreExtension::getAttribute($this->env, $this->source,                         // line 32
$context["fiche1"], "getEdition", [], "method", false, false, false, 32) == CoreExtension::getAttribute($this->env, $this->source, $context["fiche2"], "getEdition", [], "method", false, false, false, 32))) && (CoreExtension::getAttribute($this->env, $this->source,                         // line 33
$context["fiche1"], "getCommentaire", [], "method", false, false, false, 33) == CoreExtension::getAttribute($this->env, $this->source, $context["fiche2"], "getCommentaire", [], "method", false, false, false, 33))) && (CoreExtension::getAttribute($this->env, $this->source,                         // line 34
$context["fiche1"], "isVisible", [], "method", false, false, false, 34) == CoreExtension::getAttribute($this->env, $this->source, $context["fiche2"], "isVisible", [], "method", false, false, false, 34))) && (CoreExtension::getAttribute($this->env, $this->source,                         // line 35
$context["fiche1"], "getStatut", [], "method", false, false, false, 35) == CoreExtension::getAttribute($this->env, $this->source, $context["fiche2"], "getStatut", [], "method", false, false, false, 35))) && (CoreExtension::getAttribute($this->env, $this->source,                         // line 36
$context["fiche1"], "getLivre", [], "method", false, false, false, 36) == CoreExtension::getAttribute($this->env, $this->source, $context["fiche2"], "getLivre", [], "method", false, false, false, 36))) && (Twig\Extension\CoreExtension::sort($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source,                         // line 37
$context["fiche1"], "getMotCles", [], "method", false, false, false, 37)) == Twig\Extension\CoreExtension::sort($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, $context["fiche2"], "getMotCles", [], "method", false, false, false, 37))))) {
                            // line 38
                            yield "                    ";
                            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["fiche1"], "getIdFiche", [], "method", false, false, false, 38), (isset($context["idSet"]) || array_key_exists("idSet", $context) ? $context["idSet"] : (function () { throw new RuntimeError('Variable "idSet" does not exist.', 38, $this->source); })()))) {
                                // line 39
                                yield "                        ";
                                $context["doublonTrouve"] = true;
                                // line 40
                                yield "                        ";
                                $context["idSet"] = Twig\Extension\CoreExtension::merge((isset($context["idSet"]) || array_key_exists("idSet", $context) ? $context["idSet"] : (function () { throw new RuntimeError('Variable "idSet" does not exist.', 40, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["fiche1"], "getIdFiche", [], "method", false, false, false, 40), CoreExtension::getAttribute($this->env, $this->source, $context["fiche2"], "getIdFiche", [], "method", false, false, false, 40)]);
                                // line 41
                                yield "                        ";
                                $context["fichesEnDouble"] = Twig\Extension\CoreExtension::merge((isset($context["fichesEnDouble"]) || array_key_exists("fichesEnDouble", $context) ? $context["fichesEnDouble"] : (function () { throw new RuntimeError('Variable "fichesEnDouble" does not exist.', 41, $this->source); })()), [$context["fiche1"], $context["fiche2"]]);
                                // line 42
                                yield "                    ";
                            }
                            // line 43
                            yield "                ";
                        }
                        // line 44
                        yield "            ";
                    }
                    // line 45
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['fiche2'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['fiche1'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            yield "    <div class=\"classs\" style=\"width: 84%;     margin: 150px auto; margin-top: 0px;\">

        <div class=\"row\">
            ";
            // line 50
            yield from $this->load("_partials/_adminnav.html.twig", 50)->unwrap()->yield($context);
            // line 51
            yield "
            <main class=\"col-9 container border border-light bg-white p-2\">
                ";
            // line 53
            if ((($tmp = (isset($context["doublonTrouve"]) || array_key_exists("doublonTrouve", $context) ? $context["doublonTrouve"] : (function () { throw new RuntimeError('Variable "doublonTrouve" does not exist.', 53, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 54
                yield "                    <h4>Ces fiches sont dupliquées :</h4>
                    ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fichesEnDouble"]) || array_key_exists("fichesEnDouble", $context) ? $context["fichesEnDouble"] : (function () { throw new RuntimeError('Variable "fichesEnDouble" does not exist.', 55, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
                    // line 56
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 56) % 2 == 0)) {
                        // line 57
                        yield "                            <table class=\"table table-bordered\">
                                <thead>
                                <tr style=\"background-color: rgba(0, 0, 0, 0.4); \">
                                    <th scope=\"col\">ID</th>
                                    <th scope=\"col\">Reference</th>
                                    <th scope=\"col\">Livre</th>
                                    <th scope=\"col\">Dénomination</th>
                                    <th scope=\"col\">Statut</th>
                                    <th scope=\"col\">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    ";
                        // line 71
                        yield "                                    <td>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getIdFiche", [], "method", false, false, false, 71), "html", null, true);
                        yield "</td>
                                    <td>";
                        // line 72
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getRefer", [], "method", false, false, false, 72), "html", null, true);
                        yield "</td>
                                    <td>";
                        // line 73
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "livre", [], "any", false, false, false, 73), "getNom", [], "method", false, false, false, 73), "html", null, true);
                        yield "</td>
                                    <td>";
                        // line 74
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "denomination", [], "any", false, false, false, 74), "html", null, true);
                        yield "</td>
                                    <td>";
                        // line 75
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "statut", [], "any", false, false, false, 75), "getDenomination", [], "method", false, false, false, 75), "html", null, true);
                        yield "</td>
                                    <td>
                                        <a href=\"";
                        // line 77
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_fiche_total", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getIdFiche", [], "method", false, false, false, 77)]), "html", null, true);
                        yield "\"
                                           class=\"btn btn-primary btn-sm me-2 tooltip-link\" data-tooltip=\"Afficher la fiche\"><i class=\"fas fa-eye me-1\"></i></a>
                                        ";
                        // line 79
                        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "getId", [], "method", false, false, false, 79), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getLivre", [], "method", false, false, false, 79), "getIdLivreAuto", [], "method", false, false, false, 79)))) {
                            // line 80
                            yield "                                            <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fiche_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getIdFiche", [], "method", false, false, false, 80)]), "html", null, true);
                            yield "\"
                                               class=\"btn btn-outline-primary btn-sm me-2 tooltip-link\" data-tooltip=\"Modifier la fiche\"><i class=\"fas fa-edit me-1\"></i></a>
                                            <a href=\"#\"
                                               onclick=\"return confirmDeleteFiche(\x27";
                            // line 83
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_fiche", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getIdFiche", [], "method", false, false, false, 83)]), "html", null, true);
                            yield "\x27);\"
                                               class=\"btn btn-outline-danger btn-sm delete-link tooltip-link\" data-tooltip=\"Supprimer la fiche\"><i class=\"fas fa-trash me-1\"></i></a>
                                        ";
                        }
                        // line 86
                        yield "                                    </td>
                                </tr>
                                <tr>
                                    <td>";
                        // line 89
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fichesEnDouble"]) || array_key_exists("fichesEnDouble", $context) ? $context["fichesEnDouble"] : (function () { throw new RuntimeError('Variable "fichesEnDouble" does not exist.', 89, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 89) + 1), [], "array", false, false, false, 89), "getIdFiche", [], "method", false, false, false, 89), "html", null, true);
                        yield "</td>
                                    <td>";
                        // line 90
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fichesEnDouble"]) || array_key_exists("fichesEnDouble", $context) ? $context["fichesEnDouble"] : (function () { throw new RuntimeError('Variable "fichesEnDouble" does not exist.', 90, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 90) + 1), [], "array", false, false, false, 90), "getRefer", [], "method", false, false, false, 90), "html", null, true);
                        yield "</td>
                                    <td>";
                        // line 91
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fichesEnDouble"]) || array_key_exists("fichesEnDouble", $context) ? $context["fichesEnDouble"] : (function () { throw new RuntimeError('Variable "fichesEnDouble" does not exist.', 91, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 91) + 1), [], "array", false, false, false, 91), "livre", [], "any", false, false, false, 91), "getNom", [], "method", false, false, false, 91), "html", null, true);
                        yield "</td>
                                    <td>";
                        // line 92
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fichesEnDouble"]) || array_key_exists("fichesEnDouble", $context) ? $context["fichesEnDouble"] : (function () { throw new RuntimeError('Variable "fichesEnDouble" does not exist.', 92, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 92) + 1), [], "array", false, false, false, 92), "denomination", [], "any", false, false, false, 92), "html", null, true);
                        yield "</td>
                                    <td>";
                        // line 93
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fichesEnDouble"]) || array_key_exists("fichesEnDouble", $context) ? $context["fichesEnDouble"] : (function () { throw new RuntimeError('Variable "fichesEnDouble" does not exist.', 93, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 93) + 1), [], "array", false, false, false, 93), "statut", [], "any", false, false, false, 93), "getDenomination", [], "method", false, false, false, 93), "html", null, true);
                        yield "</td>
                                    <td>
                                        <a href=\"";
                        // line 95
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_fiche_total", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fichesEnDouble"]) || array_key_exists("fichesEnDouble", $context) ? $context["fichesEnDouble"] : (function () { throw new RuntimeError('Variable "fichesEnDouble" does not exist.', 95, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 95) + 1), [], "array", false, false, false, 95), "getIdFiche", [], "method", false, false, false, 95)]), "html", null, true);
                        yield "\"
                                           class=\"btn btn-primary btn-sm me-2 tooltip-link\" data-tooltip=\"Afficher la fiche\"><i class=\"fas fa-eye me-1\"></i></a>
                                        ";
                        // line 97
                        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "getId", [], "method", false, false, false, 97), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fichesEnDouble"]) || array_key_exists("fichesEnDouble", $context) ? $context["fichesEnDouble"] : (function () { throw new RuntimeError('Variable "fichesEnDouble" does not exist.', 97, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 97) + 1), [], "array", false, false, false, 97), "getLivre", [], "method", false, false, false, 97), "getIdLivreAuto", [], "method", false, false, false, 97)))) {
                            // line 98
                            yield "                                            <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fiche_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fichesEnDouble"]) || array_key_exists("fichesEnDouble", $context) ? $context["fichesEnDouble"] : (function () { throw new RuntimeError('Variable "fichesEnDouble" does not exist.', 98, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 98) + 1), [], "array", false, false, false, 98), "getIdFiche", [], "method", false, false, false, 98)]), "html", null, true);
                            yield "\"
                                               class=\"btn btn-outline-primary btn-sm me-2 tooltip-link\" data-tooltip=\"Modifier la fiche\"><i class=\"fas fa-edit me-1\"></i></a>
                                            <a href=\"#\"
                                               onclick=\"return confirmDeleteFiche(\x27";
                            // line 101
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_fiche", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fichesEnDouble"]) || array_key_exists("fichesEnDouble", $context) ? $context["fichesEnDouble"] : (function () { throw new RuntimeError('Variable "fichesEnDouble" does not exist.', 101, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 101) + 1), [], "array", false, false, false, 101), "getIdFiche", [], "method", false, false, false, 101)]), "html", null, true);
                            yield "\x27);\"
                                               class=\"btn btn-outline-danger btn-sm delete-link tooltip-link\" data-tooltip=\"Supprimer la fiche\"><i class=\"fas fa-trash me-1\"></i></a>
                                        ";
                        }
                        // line 104
                        yield "                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        ";
                    }
                    // line 109
                    yield "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 110
                yield "
                ";
            } else {
                // line 112
                yield "                    <h4 style=\"text-align: center\">Aucune fiche n\x27est dupliquée !</h4>
                ";
            }
            // line 114
            yield "                ";
        }
        // line 115
        yield "            </main>
        </div>
    </div>

    <script>
        function confirmDeleteFiche(url) {
            if (confirm(\"Êtes-vous sûr de vouloir supprimer cette fiche ?\")) {
                window.location.href = url;
            }
            return false;
        }
    </script>

    <style>
        .tooltip-link {
            position: relative;
            display: inline-block;
            text-decoration: none;
            cursor: pointer;
        }


        .tooltip-link::after {
            content: attr(data-tooltip);
            position: absolute;
            bottom: 120%;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 5px 10px;
            font-size: 12px;
            white-space: nowrap;
            border-radius: 5px;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s, visibility 0.3s;
        }

        /* Show tooltip on hover */
        .tooltip-link:hover::after {
            opacity: 1;
            visibility: visible;
        }
    </style>

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
        return "fiche/Fiche_doublons.html.twig";
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
        return array (  390 => 115,  387 => 114,  383 => 112,  379 => 110,  365 => 109,  358 => 104,  352 => 101,  345 => 98,  343 => 97,  338 => 95,  333 => 93,  329 => 92,  325 => 91,  321 => 90,  317 => 89,  312 => 86,  306 => 83,  299 => 80,  297 => 79,  292 => 77,  287 => 75,  283 => 74,  279 => 73,  275 => 72,  270 => 71,  255 => 57,  252 => 56,  235 => 55,  232 => 54,  230 => 53,  226 => 51,  224 => 50,  219 => 47,  213 => 46,  207 => 45,  204 => 44,  201 => 43,  198 => 42,  195 => 41,  192 => 40,  189 => 39,  186 => 38,  184 => 37,  183 => 36,  182 => 35,  181 => 34,  180 => 33,  179 => 32,  178 => 31,  177 => 30,  176 => 29,  175 => 28,  174 => 27,  172 => 26,  169 => 25,  164 => 24,  159 => 23,  156 => 22,  153 => 21,  150 => 20,  147 => 19,  141 => 15,  135 => 12,  131 => 11,  126 => 8,  113 => 7,  101 => 5,  88 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Liste des fiches en double{% endblock %}
{% block Pagetitle %}
    Liste des fiches
{% endblock %}
{% block body %}
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"stylesheet\" href=\"{{ asset(\x27css/bootstrap.min.css\x27) }}\">
        <link rel=\"stylesheet\" href=\"{{ asset(\x27css/showUser.css\x27) }}\">
        <!-- Lien vers Bootstrap CSS -->
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"{{ asset(\x27css/listeUsers.css\x27) }}\">
    </head>

    {# Vérifier si il y\x27a des doublons #}
    {% if is_granted(\x27ROLE_ADMIN\x27) %}
    {% set doublonTrouve = false %}
    {% set fichesEnDouble = [] %}
    {% set idSet = [] %}
    {% for fiche1 in fiches %}
        {% for fiche2 in fiches %}
            {% if fiche1 != fiche2 %}
                {% if fiche1.getRefer() == fiche2.getRefer() and
                    fiche1.getReferBis() == fiche2.getReferBis() and
                    fiche1.getDenomination() == fiche2.getDenomination() and
                    fiche1.getTexte() == fiche2.getTexte() and
                    fiche1.getTraduction() == fiche2.getTraduction() and
                    fiche1.getNotes() == fiche2.getNotes() and
                    fiche1.getEdition() == fiche2.getEdition() and
                    fiche1.getCommentaire() == fiche2.getCommentaire() and
                    fiche1.isVisible() == fiche2.isVisible() and
                    fiche1.getStatut() == fiche2.getStatut() and
                    fiche1.getLivre() == fiche2.getLivre() and
                    fiche1.getMotCles()|sort == fiche2.getMotCles()|sort %}
                    {% if fiche1.getIdFiche() not in idSet %}
                        {% set doublonTrouve = true %}
                        {% set idSet = idSet|merge([fiche1.getIdFiche(), fiche2.getIdFiche()]) %}
                        {% set fichesEnDouble = fichesEnDouble|merge([fiche1, fiche2]) %}
                    {% endif %}
                {% endif %}
            {% endif %}
        {% endfor %}
    {% endfor %}
    <div class=\"classs\" style=\"width: 84%;     margin: 150px auto; margin-top: 0px;\">

        <div class=\"row\">
            {% include \"_partials/_adminnav.html.twig\" %}

            <main class=\"col-9 container border border-light bg-white p-2\">
                {% if doublonTrouve %}
                    <h4>Ces fiches sont dupliquées :</h4>
                    {% for fiche in fichesEnDouble %}
                        {% if loop.index0 is even %}
                            <table class=\"table table-bordered\">
                                <thead>
                                <tr style=\"background-color: rgba(0, 0, 0, 0.4); \">
                                    <th scope=\"col\">ID</th>
                                    <th scope=\"col\">Reference</th>
                                    <th scope=\"col\">Livre</th>
                                    <th scope=\"col\">Dénomination</th>
                                    <th scope=\"col\">Statut</th>
                                    <th scope=\"col\">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    {# Afficher la fiche courante seulement pour les indices impairs #}
                                    <td>{{ fiche.getIdFiche() }}</td>
                                    <td>{{ fiche.getRefer() }}</td>
                                    <td>{{ fiche.livre.getNom() }}</td>
                                    <td>{{ fiche.denomination }}</td>
                                    <td>{{ fiche.statut.getDenomination() }}</td>
                                    <td>
                                        <a href=\"{{ path(\x27detail_fiche_total\x27, {id: fiche.getIdFiche()}) }}\"
                                           class=\"btn btn-primary btn-sm me-2 tooltip-link\" data-tooltip=\"Afficher la fiche\"><i class=\"fas fa-eye me-1\"></i></a>
                                        {% if is_granted(\x27ROLE_ADMIN\x27)  or app.user.getId() in fiche.getLivre().getIdLivreAuto() %}
                                            <a href=\"{{ path(\x27app_fiche_edit\x27, {id: fiche.getIdFiche()}) }}\"
                                               class=\"btn btn-outline-primary btn-sm me-2 tooltip-link\" data-tooltip=\"Modifier la fiche\"><i class=\"fas fa-edit me-1\"></i></a>
                                            <a href=\"#\"
                                               onclick=\"return confirmDeleteFiche(\x27{{ path(\x27delete_fiche\x27, {id: fiche.getIdFiche()}) }}\x27);\"
                                               class=\"btn btn-outline-danger btn-sm delete-link tooltip-link\" data-tooltip=\"Supprimer la fiche\"><i class=\"fas fa-trash me-1\"></i></a>
                                        {% endif %}
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ fichesEnDouble[loop.index0+1].getIdFiche() }}</td>
                                    <td>{{ fichesEnDouble[loop.index0+1].getRefer() }}</td>
                                    <td>{{ fichesEnDouble[loop.index0+1].livre.getNom() }}</td>
                                    <td>{{ fichesEnDouble[loop.index0+1].denomination }}</td>
                                    <td>{{ fichesEnDouble[loop.index0+1].statut.getDenomination() }}</td>
                                    <td>
                                        <a href=\"{{ path(\x27detail_fiche_total\x27, {id: fichesEnDouble[loop.index0+1].getIdFiche()}) }}\"
                                           class=\"btn btn-primary btn-sm me-2 tooltip-link\" data-tooltip=\"Afficher la fiche\"><i class=\"fas fa-eye me-1\"></i></a>
                                        {% if is_granted(\x27ROLE_ADMIN\x27)  or app.user.getId() in fichesEnDouble[loop.index0+1].getLivre().getIdLivreAuto() %}
                                            <a href=\"{{ path(\x27app_fiche_edit\x27, {id: fichesEnDouble[loop.index0+1].getIdFiche()}) }}\"
                                               class=\"btn btn-outline-primary btn-sm me-2 tooltip-link\" data-tooltip=\"Modifier la fiche\"><i class=\"fas fa-edit me-1\"></i></a>
                                            <a href=\"#\"
                                               onclick=\"return confirmDeleteFiche(\x27{{ path(\x27delete_fiche\x27, {\x27id\x27: fichesEnDouble[loop.index0 + 1].getIdFiche()}) }}\x27);\"
                                               class=\"btn btn-outline-danger btn-sm delete-link tooltip-link\" data-tooltip=\"Supprimer la fiche\"><i class=\"fas fa-trash me-1\"></i></a>
                                        {% endif %}
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        {% endif %}
                    {% endfor %}

                {% else %}
                    <h4 style=\"text-align: center\">Aucune fiche n\x27est dupliquée !</h4>
                {% endif %}
                {% endif %}
            </main>
        </div>
    </div>

    <script>
        function confirmDeleteFiche(url) {
            if (confirm(\"Êtes-vous sûr de vouloir supprimer cette fiche ?\")) {
                window.location.href = url;
            }
            return false;
        }
    </script>

    <style>
        .tooltip-link {
            position: relative;
            display: inline-block;
            text-decoration: none;
            cursor: pointer;
        }


        .tooltip-link::after {
            content: attr(data-tooltip);
            position: absolute;
            bottom: 120%;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 5px 10px;
            font-size: 12px;
            white-space: nowrap;
            border-radius: 5px;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s, visibility 0.3s;
        }

        /* Show tooltip on hover */
        .tooltip-link:hover::after {
            opacity: 1;
            visibility: visible;
        }
    </style>

{% endblock %}", "fiche/Fiche_doublons.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\fiche\\Fiche_doublons.html.twig");
    }
}
