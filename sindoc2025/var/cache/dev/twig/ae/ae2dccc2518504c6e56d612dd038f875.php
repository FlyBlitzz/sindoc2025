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

/* security/login.html.twig */
class __TwigTemplate_6d8a6a6217b4cc7a82d520e5a128db7c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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

        yield "Connexion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/register.css"), "html", null, true);
        yield "\">

<style>
.eye-icon {
    width: 20px;
    height: 20px;
    cursor: pointer;
    margin-left: 410px;
}

</style>

</head>

<body>
    <div class=\"classs w-25\">
        <form method=\"post\" name=login>
            ";
        // line 29
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 29, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "                <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 30, $this->source); })()), "messageKey", [], "any", false, false, false, 30), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 30, $this->source); })()), "messageData", [], "any", false, false, false, 30), "security"), "html", null, true);
            yield "</div>
            ";
        }
        // line 32
        yield "
            ";
        // line 33
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "                <div class=\"mb-3\">
                    You are logged in as ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "userIdentifier", [], "any", false, false, false, 35), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
                </div>
            ";
        }
        // line 38
        yield "
            <h1 class=\"h3 mb-4 font-weight-normal\">Connexion</h1>

            <strong><label for=\"inputUsername\">Identifiant:</label></strong>
            <div class=\"input-group mb-4\">
                <span class=\"input-group-text\" style=\"min-width: 40px;\"><i class=\"fas fa-user\"></i></span>
                <input type=\"text\" value=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 44, $this->source); })()), "html", null, true);
        yield "\" name=\"username\" id=\"inputUsername\" class=\"form-control\" autocomplete=\"username\" required autofocus>
            </div>

         <strong><label for=\"inputPassword\">Mot de passe:</label></strong>
         <img src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/eyesOpen.png"), "html", null, true);
        yield "\" alt=\"eye-open\" id=\"eyeOpen\" class=\"eye-icon mx-lg-3\">
         <img src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/eyesClose.png"), "html", null, true);
        yield "\" alt=\"eye-closed\" id=\"eyeClosed\" class=\"eye-icon\" style=\"display: none;\">
         <div class=\"input-group mb-4\">
             <span class=\"input-group-text\" style=\"min-width: 40px;\"><i class=\"fa-solid fa-lock\"></i></span>
             <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

         </div>


            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
      <div class=\"d-flex justify-content-end\" style=\"margin-right: 0px\">
          <button class=\"btn btn-primary mb-2 h-100\" type=\"submit\">SE CONNECTER</button>
      </div>


        </form>
    </div>

    <script src=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>


<script>
const pwInput = document.getElementById(\x27inputPassword\x27);
const eyeOpen = document.getElementById(\x27eyeOpen\x27);
const eyeClosed = document.getElementById(\x27eyeClosed\x27);

eyeOpen.addEventListener(\x27click\x27, () => {
    pwInput.type = \x27text\x27;
    eyeOpen.style.display = \x27none\x27;
    eyeClosed.style.display = \x27inline-block\x27;
});

eyeClosed.addEventListener(\x27click\x27, () => {
    pwInput.type = \x27password\x27;
    eyeOpen.style.display = \x27inline-block\x27;
    eyeClosed.style.display = \x27none\x27;
});
</script>

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
        return "security/login.html.twig";
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
        return array (  197 => 66,  185 => 57,  174 => 49,  170 => 48,  163 => 44,  155 => 38,  147 => 35,  144 => 34,  142 => 33,  139 => 32,  133 => 30,  131 => 29,  111 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Connexion{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/bootstrap.min.css\x27) }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/register.css\x27) }}\">

<style>
.eye-icon {
    width: 20px;
    height: 20px;
    cursor: pointer;
    margin-left: 410px;
}

</style>

</head>

<body>
    <div class=\"classs w-25\">
        <form method=\"post\" name=login>
            {% if error %}
                <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, \x27security\x27) }}</div>
            {% endif %}

            {% if app.user %}
                <div class=\"mb-3\">
                    You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path(\x27app_logout\x27) }}\">Logout</a>
                </div>
            {% endif %}

            <h1 class=\"h3 mb-4 font-weight-normal\">Connexion</h1>

            <strong><label for=\"inputUsername\">Identifiant:</label></strong>
            <div class=\"input-group mb-4\">
                <span class=\"input-group-text\" style=\"min-width: 40px;\"><i class=\"fas fa-user\"></i></span>
                <input type=\"text\" value=\"{{ last_username }}\" name=\"username\" id=\"inputUsername\" class=\"form-control\" autocomplete=\"username\" required autofocus>
            </div>

         <strong><label for=\"inputPassword\">Mot de passe:</label></strong>
         <img src=\"{{ asset(\x27images/eyesOpen.png\x27) }}\" alt=\"eye-open\" id=\"eyeOpen\" class=\"eye-icon mx-lg-3\">
         <img src=\"{{ asset(\x27images/eyesClose.png\x27) }}\" alt=\"eye-closed\" id=\"eyeClosed\" class=\"eye-icon\" style=\"display: none;\">
         <div class=\"input-group mb-4\">
             <span class=\"input-group-text\" style=\"min-width: 40px;\"><i class=\"fa-solid fa-lock\"></i></span>
             <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

         </div>


            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(\x27authenticate\x27) }}\">
      <div class=\"d-flex justify-content-end\" style=\"margin-right: 0px\">
          <button class=\"btn btn-primary mb-2 h-100\" type=\"submit\">SE CONNECTER</button>
      </div>


        </form>
    </div>

    <script src=\"{{ asset(\x27js/bootstrap.bundle.min.js\x27) }}\"></script>


<script>
const pwInput = document.getElementById(\x27inputPassword\x27);
const eyeOpen = document.getElementById(\x27eyeOpen\x27);
const eyeClosed = document.getElementById(\x27eyeClosed\x27);

eyeOpen.addEventListener(\x27click\x27, () => {
    pwInput.type = \x27text\x27;
    eyeOpen.style.display = \x27none\x27;
    eyeClosed.style.display = \x27inline-block\x27;
});

eyeClosed.addEventListener(\x27click\x27, () => {
    pwInput.type = \x27password\x27;
    eyeOpen.style.display = \x27inline-block\x27;
    eyeClosed.style.display = \x27none\x27;
});
</script>

</body>
</html>
{% endblock %}", "security/login.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\security\\login.html.twig");
    }
}
