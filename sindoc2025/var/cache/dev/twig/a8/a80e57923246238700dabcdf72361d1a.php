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

/* registration/register.html.twig */
class __TwigTemplate_25a7aad060f20ff334932c3535eaf7c0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

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

        yield "Register";
        
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
    <!-- Ajout de la bibliothèque d\x27icônes Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">

    <style>
.eye-icon {
    width: 20px;
    height: 20px;
    cursor: pointer;
    margin-left: 450px;
     margin-bottom: -50px;
}
</style>
</head>

<body>
    <div class=\"classs\" style=\"width: 540px;\">
        <h1 class=\"mb-4\">Inscription</h1>

        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), 'errors');
        yield "

        ";
        // line 33
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), 'form_start');
        yield "
            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "username", [], "any", false, false, false, 34), 'row', ["label" => "Identifiant"]);
        // line 36
        yield "

             <img src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/eyesOpen.png"), "html", null, true);
        yield "\" alt=\"eye-open\" id=\"eyeOpen\" class=\"eye-icon\">
         <img src=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/eyesClose.png"), "html", null, true);
        yield "\" alt=\"eye-closed\" id=\"eyeClosed\" class=\"eye-icon\" style=\"display: none;\">
            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "plainPassword", [], "any", false, false, false, 40), 'row', ["label" => "Mot de passe"]);
        // line 42
        yield "

            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "agreeTerms", [], "any", false, false, false, 44), 'row');
        yield "
            <div class=\"d-flex justify-content-end\" style=\"margin-right: 0px\">
                <button type=\"submit\" class=\"btn btn-primary mx-2\">S\x27inscrire</button>
            </div>
        ";
        // line 48
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), 'form_end');
        yield "
    </div>



    <script>
const pwInput1 = document.getElementById(\x27registration_form_plainPassword_first\x27);
const pwInput2 = document.getElementById(\x27registration_form_plainPassword_second\x27);
const eyeOpen = document.getElementById(\x27eyeOpen\x27);
const eyeClosed = document.getElementById(\x27eyeClosed\x27);

eyeOpen.addEventListener(\x27click\x27, () => {
    pwInput1.type = \x27text\x27;
    pwInput2.type = \x27text\x27;
    eyeOpen.style.display = \x27none\x27;
    eyeClosed.style.display = \x27inline-block\x27;
});

eyeClosed.addEventListener(\x27click\x27, () => {
    pwInput1.type = \x27password\x27;
    pwInput2.type = \x27password\x27;
    eyeOpen.style.display = \x27inline-block\x27;
    eyeClosed.style.display = \x27none\x27;
});
</script>

    <script src=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
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
        return "registration/register.html.twig";
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
        return array (  198 => 74,  169 => 48,  162 => 44,  158 => 42,  156 => 40,  152 => 39,  148 => 38,  144 => 36,  142 => 34,  138 => 33,  133 => 31,  111 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Register{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/bootstrap.min.css\x27) }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/register.css\x27) }}\">
    <!-- Ajout de la bibliothèque d\x27icônes Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">

    <style>
.eye-icon {
    width: 20px;
    height: 20px;
    cursor: pointer;
    margin-left: 450px;
     margin-bottom: -50px;
}
</style>
</head>

<body>
    <div class=\"classs\" style=\"width: 540px;\">
        <h1 class=\"mb-4\">Inscription</h1>

        {{ form_errors(registrationForm) }}

        {{ form_start(registrationForm) }}
            {{ form_row(registrationForm.username, {
                 label: \x27Identifiant\x27
             }) }}

             <img src=\"{{ asset(\x27images/eyesOpen.png\x27) }}\" alt=\"eye-open\" id=\"eyeOpen\" class=\"eye-icon\">
         <img src=\"{{ asset(\x27images/eyesClose.png\x27) }}\" alt=\"eye-closed\" id=\"eyeClosed\" class=\"eye-icon\" style=\"display: none;\">
            {{ form_row(registrationForm.plainPassword, {
                label: \x27Mot de passe\x27,
            }) }}

            {{ form_row(registrationForm.agreeTerms) }}
            <div class=\"d-flex justify-content-end\" style=\"margin-right: 0px\">
                <button type=\"submit\" class=\"btn btn-primary mx-2\">S\x27inscrire</button>
            </div>
        {{ form_end(registrationForm) }}
    </div>



    <script>
const pwInput1 = document.getElementById(\x27registration_form_plainPassword_first\x27);
const pwInput2 = document.getElementById(\x27registration_form_plainPassword_second\x27);
const eyeOpen = document.getElementById(\x27eyeOpen\x27);
const eyeClosed = document.getElementById(\x27eyeClosed\x27);

eyeOpen.addEventListener(\x27click\x27, () => {
    pwInput1.type = \x27text\x27;
    pwInput2.type = \x27text\x27;
    eyeOpen.style.display = \x27none\x27;
    eyeClosed.style.display = \x27inline-block\x27;
});

eyeClosed.addEventListener(\x27click\x27, () => {
    pwInput1.type = \x27password\x27;
    pwInput2.type = \x27password\x27;
    eyeOpen.style.display = \x27inline-block\x27;
    eyeClosed.style.display = \x27none\x27;
});
</script>

    <script src=\"{{ asset(\x27js/bootstrap.bundle.min.js\x27) }}\"></script>
</body>
</html>
{% endblock %}", "registration/register.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\registration\\register.html.twig");
    }
}
