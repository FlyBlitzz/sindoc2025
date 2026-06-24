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

/* base.html.twig */
class __TwigTemplate_3d464a3cd81dd7de69d50c7e9d33cc42 extends Template
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
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/header.css"), "html", null, true);
        yield "\">
        <link rel=\"icon\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo3.png"), "html", null, true);
        yield "\"  type=\"image/png\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/dataTables.css"), "html", null, true);
        yield "\">
        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/index.css"), "html", null, true);
        yield "\"> 
        <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
        <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
        ";
        // line 15
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 16
        yield "        ";
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 27
        yield "
        ";
        // line 28
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 34
        yield "        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/dt/jq-3.2.1/dt-1.10.16/datatables.min.css\"/>

        <style>
            @media(max-width:576px)
            {
                .logo-image{
                    margin-left:0px!important;
                }
            }

            .mainContainer{
                flex-grow:1;
                position:relative; 
            }

            ";
        // line 49
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "attributes", [], "any", false, false, false, 49), "get", ["_route"], "method", false, false, false, 49) != "app_home")) {
            // line 50
            yield "
                .mainContainer {
                    padding: 3rem; /* Default for large screens */
                }

                @media (min-width: 1700px) {
                    .mainContainer {
                        padding: 0;
                    }

                    .sub-header{
                        width:93%;
                        margin: 0 auto;
                    }
                    
                }
                @media (min-width: 1024px) {
                    .mainContainer {
                        padding: 0;
                    }

                    .sub-header{
                        width:89%;
                        margin: 0 auto;
                    }
                }

                /* Medium screens (Tablets) */
                @media (max-width: 1024px) {
                    .mainContainer {
                        padding: 0;
                    }

                    .sub-header{
                        width:85%;
                        margin: 0 auto;
                    }
                }

                /* Small screens (Phones) */
                @media (max-width: 768px) {
                    .mainContainer {
                        padding: 10px;
                    }

                    .sub-header{
                        width:80%;
                        margin:0 auto;
                    }
                }

                ";
        }
        // line 102
        yield "                    table td {
                    white-space: normal !important; /* Allows text to wrap */
                    word-wrap: break-word; /* Ensures long words break */
                    max-width: 200px; /* Adjust to control column width */
                    overflow-wrap: break-word;
                    }
        </style>
    </head>

    <body>

        ";
        // line 113
        $context["margin_top"] = 10;
        // line 114
        yield "        ";
        $context["canEdit"] = (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "session", [], "any", false, false, false, 114), "get", ["canEdit"], "method", false, false, false, 114))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "session", [], "any", false, false, false, 114), "get", ["canEdit"], "method", false, false, false, 114)) : (false));
        // line 115
        yield "
        ";
        // line 117
        yield "        ";
        yield from $this->load("header.html.twig", 117)->unwrap()->yield(CoreExtension::merge($context, ["canEdit" => (isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 117, $this->source); })())]));
        // line 118
        yield "            
            <div class=\"mainContainer\">

            ";
        // line 122
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "session", [], "any", false, false, false, 122), "flashBag", [], "any", false, false, false, 122), "get", ["info"], "method", false, false, false, 122));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 123
            yield "                ";
            $context["margin_top"] = 8;
            // line 124
            yield "                <div class=\"alert alert-info\" style=\"margin-top: 130px; margin-bottom: 10px;\">
                    ";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "session", [], "any", false, false, false, 128), "flashBag", [], "any", false, false, false, 128), "get", ["success"], "method", false, false, false, 128));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 129
            yield "                ";
            $context["margin_top"] = 8;
            // line 130
            yield "                <div class=\"alert alert-success\" style=\"margin-top: 130px; margin-bottom: 10px;\">
                    ";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "session", [], "any", false, false, false, 134), "flashBag", [], "any", false, false, false, 134), "get", ["error"], "method", false, false, false, 134));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 135
            yield "                ";
            $context["margin_top"] = 8;
            // line 136
            yield "                <div class=\"alert alert-danger\" style=\"margin-top: 130px;margin-bottom: 10px;\">
                    ";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        yield "    

                
                ";
        // line 143
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 144
        yield "                ";
        $context["margin_bottom"] = 250;
        // line 145
        yield "                </div>
                <div class=\"push\"></div>
                ";
        // line 147
        yield from $this->load("footer.html.twig", 147)->unwrap()->yield($context);
        // line 148
        yield "                
                
                ";
        // line 151
        yield "                ";
        // line 152
        yield "                ";
        // line 153
        yield "                <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
                <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
                <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
                <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
            

        <!-- before the closing <body> tag -->
        <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/dt/jq-3.2.1/dt-1.10.16/datatables.min.js\"></script>

                <script>
                    function goBack() {
                        window.history.back();
                    }
                    function goForward() {
                        window.history.forward();
                    }
                </script>

            ";
        // line 202
        yield "
    <!-- Scripts d\x27initialisation CKEditor 5 -->
            <script>
                document.addEventListener(\x27DOMContentLoaded\x27, function() {
                    // Délai pour laisser le temps à tous les formulaires de se charger
                    setTimeout(function() {
                        // Initialise CKEditor 5 sur tous les champs avec la classe .ckeditor-field
                        const ckeditorFields = document.querySelectorAll(\x27.ckeditor-field\x27);
                        
                        ckeditorFields.forEach(function(field) {
                            // Vérifie si CKEditor 5 est disponible et si le champ n\x27est pas déjà initialisé
                            if (typeof ClassicEditor !== \x27undefined\x27 && !field.classList.contains(\x27ck5-initialized\x27)) {
                                field.classList.add(\x27ck5-initialized\x27);
                                
                                ClassicEditor
                                    .create(field, {
                                        // Configuration pour seulement gras et italique
                                        toolbar: [\x27bold\x27, \x27italic\x27],
                                        language: \x27fr\x27,
                                        height: \x27150px\x27
                                    })
                                    .then(function(editor) {
                                        console.log(\x27CKEditor 5 initialisé pour:\x27, field.name || field.id);
                                    })
                                    .catch(function(error) {
                                        console.log(\x27CKEditor 5 non disponible pour ce champ, utilisation par défaut\x27);
                                    });
                            }
                        });
                    }, 1000); // 1 seconde de délai
                });
                
                // Réinitialise CKEditor si du contenu est chargé dynamiquement (AJAX)
                document.addEventListener(\x27ajaxComplete\x27, function() {
                    setTimeout(function() {
                        document.querySelectorAll(\x27.ckeditor-field:not(.ck5-initialized)\x27).forEach(function(field) {
                            if (typeof ClassicEditor !== \x27undefined\x27) {
                                field.classList.add(\x27ck5-initialized\x27);
                                ClassicEditor.create(field, {
                                    toolbar: [\x27bold\x27, \x27italic\x27],
                                    language: \x27fr\x27
                                });
                            }
                        });
                    }, 500);
                });
            </script>
    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
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

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        yield "            <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
                
            ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        yield "
            <script>
                document.addEventListener(\"DOMContentLoaded\", function() {
                    setTimeout(function() {window.scrollTo(0, 50);}, 0);
                });
            </script>
            <script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        yield "            ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        yield "
            <!--<script src=\"https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js\"></script>-->
            <script src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ckeditor5/ckeditor.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ckeditor5/translations/fr.js"), "html", null, true);
        yield "\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 143
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  481 => 143,  468 => 32,  464 => 31,  458 => 29,  445 => 28,  426 => 19,  422 => 17,  409 => 16,  387 => 15,  364 => 5,  305 => 202,  283 => 153,  281 => 152,  279 => 151,  275 => 148,  273 => 147,  269 => 145,  266 => 144,  264 => 143,  259 => 140,  250 => 137,  247 => 136,  244 => 135,  239 => 134,  230 => 131,  227 => 130,  224 => 129,  219 => 128,  210 => 125,  207 => 124,  204 => 123,  199 => 122,  194 => 118,  191 => 117,  188 => 115,  185 => 114,  183 => 113,  170 => 102,  116 => 50,  114 => 49,  97 => 34,  95 => 28,  92 => 27,  89 => 16,  87 => 15,  81 => 12,  75 => 9,  71 => 8,  67 => 7,  63 => 6,  59 => 5,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"{{ asset(\x27css/header.css\x27) }}\">
        <link rel=\"icon\" href=\"{{ asset(\x27images/logo3.png\x27) }}\"  type=\"image/png\">
        <link rel=\"stylesheet\" href=\"{{ asset(\x27css/bootstrap.min.css\x27) }}\">
        <link rel=\"stylesheet\" href=\"{{ asset(\x27css/dataTables.css\x27) }}\">
        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
        <link rel=\"stylesheet\" href=\"{{ asset(\x27css/index.css\x27) }}\"> 
        <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
        <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
        {% block head %}{% endblock %}
        {% block stylesheets %}
            <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
                
            {{ encore_entry_link_tags(\x27app\x27) }}
            <script>
                document.addEventListener(\"DOMContentLoaded\", function() {
                    setTimeout(function() {window.scrollTo(0, 50);}, 0);
                });
            </script>
            <script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\" crossorigin=\"anonymous\"></script>
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags(\x27app\x27) }}
            <!--<script src=\"https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js\"></script>-->
            <script src=\"{{ asset(\x27ckeditor5/ckeditor.js\x27) }}\"></script>
            <script src=\"{{ asset(\x27ckeditor5/translations/fr.js\x27) }}\"></script>
        {% endblock %}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/dt/jq-3.2.1/dt-1.10.16/datatables.min.css\"/>

        <style>
            @media(max-width:576px)
            {
                .logo-image{
                    margin-left:0px!important;
                }
            }

            .mainContainer{
                flex-grow:1;
                position:relative; 
            }

            {% if app.request.attributes.get(\x27_route\x27) != \x27app_home\x27%}

                .mainContainer {
                    padding: 3rem; /* Default for large screens */
                }

                @media (min-width: 1700px) {
                    .mainContainer {
                        padding: 0;
                    }

                    .sub-header{
                        width:93%;
                        margin: 0 auto;
                    }
                    
                }
                @media (min-width: 1024px) {
                    .mainContainer {
                        padding: 0;
                    }

                    .sub-header{
                        width:89%;
                        margin: 0 auto;
                    }
                }

                /* Medium screens (Tablets) */
                @media (max-width: 1024px) {
                    .mainContainer {
                        padding: 0;
                    }

                    .sub-header{
                        width:85%;
                        margin: 0 auto;
                    }
                }

                /* Small screens (Phones) */
                @media (max-width: 768px) {
                    .mainContainer {
                        padding: 10px;
                    }

                    .sub-header{
                        width:80%;
                        margin:0 auto;
                    }
                }

                {% endif %}
                    table td {
                    white-space: normal !important; /* Allows text to wrap */
                    word-wrap: break-word; /* Ensures long words break */
                    max-width: 200px; /* Adjust to control column width */
                    overflow-wrap: break-word;
                    }
        </style>
    </head>

    <body>

        {% set margin_top = 10 %}
        {% set canEdit = app.session.get(\x27canEdit\x27) is not null ? app.session.get(\x27canEdit\x27) : false %}

        {# Header #}
        {% include \x27header.html.twig\x27 with { canEdit: canEdit } %}
            
            <div class=\"mainContainer\">

            {# {% endif %} #}
            {% for message in app.session.flashBag.get(\x27info\x27) %}
                {% set margin_top = 8 %}
                <div class=\"alert alert-info\" style=\"margin-top: 130px; margin-bottom: 10px;\">
                    {{ message }}
                </div>
            {% endfor %}
            {% for message in app.session.flashBag.get(\x27success\x27) %}
                {% set margin_top = 8 %}
                <div class=\"alert alert-success\" style=\"margin-top: 130px; margin-bottom: 10px;\">
                    {{ message }}
                </div>
            {% endfor %}
            {% for message in app.session.flashBag.get(\x27error\x27) %}
                {% set margin_top = 8 %}
                <div class=\"alert alert-danger\" style=\"margin-top: 130px;margin-bottom: 10px;\">
                    {{ message }}
                </div>
            {% endfor %}
    

                
                {% block body %}{% endblock %}
                {% set margin_bottom = 250 %}
                </div>
                <div class=\"push\"></div>
                {% include \x27footer.html.twig\x27 %}
                
                
                {# <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\"> #}
                {# <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script> #}
                {# <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js\"></script> #}
                <script src=\"{{ asset(\x27js/bootstrap.bundle.min.js\x27) }}\"></script>
                <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
                <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
                <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
            

        <!-- before the closing <body> tag -->
        <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/dt/jq-3.2.1/dt-1.10.16/datatables.min.js\"></script>

                <script>
                    function goBack() {
                        window.history.back();
                    }
                    function goForward() {
                        window.history.forward();
                    }
                </script>

            {# <script>
                document.addEventListener(\"DOMContentLoaded\", function () {
                    const selectLivre = document.getElementById(\"livre\");

                    if (!selectLivre) return; // Sécurité si le select n\x27existe pas

                    // Récupérer le premier livre de la liste
                    const firstLivreId = selectLivre.options.length > 0 ? selectLivre.options[0].value : null;

                    // Vérifier si un livre est déjà sélectionné dans les cookies
                    let selectedLivre = document.cookie.split(\x27; \x27).find(row => row.startsWith(\x27selectedLivre=\x27));
                    selectedLivre = selectedLivre ? selectedLivre.split(\x27=\x27)[1] : null;

                    // Si aucun livre n\x27est sélectionné, utiliser le premier livre
                    if (selectedLivre === \"\" && firstLivreId) {
                        selectedLivre = firstLivreId;
                        document.cookie = \"selectedLivre=\" + selectedLivre + \"; path=/; max-age=31536000\"; // 1 an
                        selectLivre.value = selectedLivre;
                        location.reload(); // Recharger la page pour appliquer la sélection
                    } else {
                        // Appliquer la sélection existante
                        selectLivre.value = selectedLivre;
                    }

                    // Sauvegarder dans les cookies et recharger la page au changement
                    selectLivre.addEventListener(\"change\", function () {
                        document.cookie = \"selectedLivre=\" + selectLivre.value + \"; path=/; max-age=31536000\"; // 1 an
                        location.reload(); // Recharger la page
                    });
                });
            </script> #}

    <!-- Scripts d\x27initialisation CKEditor 5 -->
            <script>
                document.addEventListener(\x27DOMContentLoaded\x27, function() {
                    // Délai pour laisser le temps à tous les formulaires de se charger
                    setTimeout(function() {
                        // Initialise CKEditor 5 sur tous les champs avec la classe .ckeditor-field
                        const ckeditorFields = document.querySelectorAll(\x27.ckeditor-field\x27);
                        
                        ckeditorFields.forEach(function(field) {
                            // Vérifie si CKEditor 5 est disponible et si le champ n\x27est pas déjà initialisé
                            if (typeof ClassicEditor !== \x27undefined\x27 && !field.classList.contains(\x27ck5-initialized\x27)) {
                                field.classList.add(\x27ck5-initialized\x27);
                                
                                ClassicEditor
                                    .create(field, {
                                        // Configuration pour seulement gras et italique
                                        toolbar: [\x27bold\x27, \x27italic\x27],
                                        language: \x27fr\x27,
                                        height: \x27150px\x27
                                    })
                                    .then(function(editor) {
                                        console.log(\x27CKEditor 5 initialisé pour:\x27, field.name || field.id);
                                    })
                                    .catch(function(error) {
                                        console.log(\x27CKEditor 5 non disponible pour ce champ, utilisation par défaut\x27);
                                    });
                            }
                        });
                    }, 1000); // 1 seconde de délai
                });
                
                // Réinitialise CKEditor si du contenu est chargé dynamiquement (AJAX)
                document.addEventListener(\x27ajaxComplete\x27, function() {
                    setTimeout(function() {
                        document.querySelectorAll(\x27.ckeditor-field:not(.ck5-initialized)\x27).forEach(function(field) {
                            if (typeof ClassicEditor !== \x27undefined\x27) {
                                field.classList.add(\x27ck5-initialized\x27);
                                ClassicEditor.create(field, {
                                    toolbar: [\x27bold\x27, \x27italic\x27],
                                    language: \x27fr\x27
                                });
                            }
                        });
                    }, 500);
                });
            </script>
    </body>
</html>", "base.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\base.html.twig");
    }
}
