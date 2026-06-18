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
        yield "          <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/dt/jq-3.2.1/dt-1.10.16/datatables.min.css\"/>
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
            yield "            .mainContainer {
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
        // line 93
        yield "            table td {
            white-space: normal !important; /* Allows text to wrap */
            word-wrap: break-word; /* Ensures long words break */
            max-width: 200px; /* Adjust to control column width */
            overflow-wrap: break-word;
        }
          </style>
    </head>
    <body>
    ";
        // line 102
        $context["margin_top"] = 10;
        // line 103
        yield "    ";
        $context["canEdit"] = (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "session", [], "any", false, false, false, 103), "get", ["canEdit"], "method", false, false, false, 103))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "session", [], "any", false, false, false, 103), "get", ["canEdit"], "method", false, false, false, 103)) : (false));
        // line 104
        yield "
        ";
        // line 106
        yield "            ";
        yield from $this->load("header.html.twig", 106)->unwrap()->yield(CoreExtension::merge($context, ["canEdit" => (isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 106, $this->source); })())]));
        // line 107
        yield "        ";
        // line 108
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "request", [], "any", false, false, false, 108), "attributes", [], "any", false, false, false, 108), "get", ["_route"], "method", false, false, false, 108) != "app_home")) {
            // line 109
            yield "        <div class=\"sub-header\">
        ";
            // line 110
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "user", [], "any", false, false, false, 110)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 111
                yield "        
            <div class=\"ps-3 mt-3\" style=\"float:left;\">
\t\t";
                // line 113
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "session", [], "any", false, false, false, 113), "get", ["livreName"], "method", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 114
                    yield "\t\t\t<span class=\"navbar-text\">
\t\t\t\t<span class=\" text-white p-2 rounded\" style=\"background-color:#3667f8\">
\t\t\t\t\tVous travailler sur le livre:
\t\t\t\t\t<strong><i>";
                    // line 117
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "session", [], "any", false, false, false, 117), "get", ["livreName"], "method", false, false, false, 117), "html", null, true);
                    yield "</i></strong>
\t\t\t\t</span>
\t\t\t</span>
\t\t";
                } else {
                    // line 121
                    yield "\t\t\t<span class=\"navbar-text\">
\t\t\t\t<span class=\" text-white p-2 rounded\" style=\"background-color:#3667f8\">
\t\t\t\t\tAucun livre est sélectionné
\t\t\t\t</span>
\t\t\t</span>
\t\t";
                }
                // line 127
                yield "        ";
            }
            // line 128
            yield "\t</div>
    
        ";
        }
        // line 131
        yield "        
             ";
        // line 132
        if ((((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "request", [], "any", false, false, false, 132), "attributes", [], "any", false, false, false, 132), "get", ["_route"], "method", false, false, false, 132) != "app_home") && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 133
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "request", [], "any", false, false, false, 133), "attributes", [], "any", false, false, false, 133), "get", ["_route"], "method", false, false, false, 133) != "get_base_html")) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 134
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "request", [], "any", false, false, false, 134), "attributes", [], "any", false, false, false, 134), "get", ["_route"], "method", false, false, false, 134) != "admin_get_base_html")) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 135
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "request", [], "any", false, false, false, 135), "attributes", [], "any", false, false, false, 135), "get", ["_route"], "method", false, false, false, 135) != "app_login")) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 136
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "request", [], "any", false, false, false, 136), "attributes", [], "any", false, false, false, 136), "get", ["_route"], "method", false, false, false, 136) != "app_register"))) {
            // line 137
            yield "          
          <div class=\"card-body\" style=\"display:flex;justify-content:flex-end;\">
          <div>
              <button onclick=\"goBack()\" class=\"btn btn-outline-secondary\" > < </button>
              <button onclick=\"goForward()\" class=\"btn btn-outline-secondary\" >></button>
              </div>
          </div>

        ";
        }
        // line 146
        yield "        </div>

           
          <div class=\"mainContainer\">
          
          ";
        // line 152
        yield "          ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 152, $this->source); })()), "session", [], "any", false, false, false, 152), "flashBag", [], "any", false, false, false, 152), "get", ["info"], "method", false, false, false, 152));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 153
            yield "              ";
            $context["margin_top"] = 8;
            // line 154
            yield "              <div class=\"alert alert-info\" style=\"margin-top: 130px; margin-bottom: 10px;\">
                  ";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
              </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        yield "          ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "session", [], "any", false, false, false, 158), "flashBag", [], "any", false, false, false, 158), "get", ["success"], "method", false, false, false, 158));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 159
            yield "              ";
            $context["margin_top"] = 8;
            // line 160
            yield "              <div class=\"alert alert-success\" style=\"margin-top: 130px; margin-bottom: 10px;\">
                  ";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
              </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        yield "          ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 164, $this->source); })()), "session", [], "any", false, false, false, 164), "flashBag", [], "any", false, false, false, 164), "get", ["error"], "method", false, false, false, 164));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 165
            yield "              ";
            $context["margin_top"] = 8;
            // line 166
            yield "              <div class=\"alert alert-danger\" style=\"margin-top: 130px;margin-bottom: 10px;\">
                  ";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
              </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        yield " 

            
            ";
        // line 173
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 174
        yield "            ";
        $context["margin_bottom"] = 250;
        // line 175
        yield "            </div>
            <div class=\"push\"></div>
            ";
        // line 177
        yield from $this->load("footer.html.twig", 177)->unwrap()->yield($context);
        // line 178
        yield "            
            
            ";
        // line 183
        yield "           \t<script src=\"";
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
        // line 233
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
</html>
";
        
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
        yield "                <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
                
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

    // line 173
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
        return array (  537 => 173,  524 => 32,  520 => 31,  514 => 29,  501 => 28,  482 => 19,  478 => 17,  465 => 16,  443 => 15,  420 => 5,  356 => 233,  334 => 183,  330 => 178,  328 => 177,  324 => 175,  321 => 174,  319 => 173,  314 => 170,  305 => 167,  302 => 166,  299 => 165,  294 => 164,  285 => 161,  282 => 160,  279 => 159,  274 => 158,  265 => 155,  262 => 154,  259 => 153,  254 => 152,  247 => 146,  236 => 137,  234 => 136,  233 => 135,  232 => 134,  231 => 133,  230 => 132,  227 => 131,  222 => 128,  219 => 127,  211 => 121,  204 => 117,  199 => 114,  197 => 113,  193 => 111,  191 => 110,  188 => 109,  185 => 108,  183 => 107,  180 => 106,  177 => 104,  174 => 103,  172 => 102,  161 => 93,  116 => 50,  114 => 49,  97 => 34,  95 => 28,  92 => 27,  89 => 16,  87 => 15,  81 => 12,  75 => 9,  71 => 8,  67 => 7,  63 => 6,  59 => 5,  53 => 1,);
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
    {% set canEdit = app.session.get(\x27canEdit\x27) is  not null ? app.session.get(\x27canEdit\x27) : false %}

        {# {% if app.request.attributes.get(\x27_route\x27) != \x27app_login\x27%} #}
            {% include \x27header.html.twig\x27 with { canEdit: canEdit } %}
        {# {% endif %} #}
        {% if app.request.attributes.get(\x27_route\x27) != \x27app_home\x27%}
        <div class=\"sub-header\">
        {% if app.user %}
        
            <div class=\"ps-3 mt-3\" style=\"float:left;\">
\t\t{% if app.session.get(\x27livreName\x27) %}
\t\t\t<span class=\"navbar-text\">
\t\t\t\t<span class=\" text-white p-2 rounded\" style=\"background-color:#3667f8\">
\t\t\t\t\tVous travailler sur le livre:
\t\t\t\t\t<strong><i>{{ app.session.get(\x27livreName\x27) }}</i></strong>
\t\t\t\t</span>
\t\t\t</span>
\t\t{% else %}
\t\t\t<span class=\"navbar-text\">
\t\t\t\t<span class=\" text-white p-2 rounded\" style=\"background-color:#3667f8\">
\t\t\t\t\tAucun livre est sélectionné
\t\t\t\t</span>
\t\t\t</span>
\t\t{% endif %}
        {% endif %}
\t</div>
    
        {% endif %}
        
             {% if app.request.attributes.get(\x27_route\x27) != \x27app_home\x27
                    and app.request.attributes.get(\x27_route\x27) != \x27get_base_html\x27
                        and app.request.attributes.get(\x27_route\x27) !=\x27admin_get_base_html\x27
                            and app.request.attributes.get(\x27_route\x27) !=\x27app_login\x27
                                and app.request.attributes.get(\x27_route\x27) !=\x27app_register\x27%}
          
          <div class=\"card-body\" style=\"display:flex;justify-content:flex-end;\">
          <div>
              <button onclick=\"goBack()\" class=\"btn btn-outline-secondary\" > < </button>
              <button onclick=\"goForward()\" class=\"btn btn-outline-secondary\" >></button>
              </div>
          </div>

        {% endif %}
        </div>

           
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
           \t<script src=\"{{ asset(\x27js/bootstrap.bundle.min.js\x27) }}\"></script>
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

{# 
        <script>
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
</html>
", "base.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\base.html.twig");
    }
}
