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

/* mot_cle/_delete_form.html.twig */
class __TwigTemplate_7aec12ecb03d4961711f76e3319903f0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mot_cle/_delete_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mot_cle/_delete_form.html.twig"));

        // line 1
        yield "<form method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mot_cle_app_mot_cle_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["mot_cle"]) || array_key_exists("mot_cle", $context) ? $context["mot_cle"] : (function () { throw new RuntimeError('Variable "mot_cle" does not exist.', 1, $this->source); })()), "idMotCle", [], "any", false, false, false, 1)]), "html", null, true);
        yield "\" onsubmit=\"return confirm(\x27Êtes-vous sûr de vouloir supprimer ce mot clé ?\x27);\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["mot_cle"]) || array_key_exists("mot_cle", $context) ? $context["mot_cle"] : (function () { throw new RuntimeError('Variable "mot_cle" does not exist.', 2, $this->source); })()), "idMotCle", [], "any", false, false, false, 2))), "html", null, true);
        yield "\">
    <button class=\"btn btn-danger\">Supprimer</button>
</form>
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
        return "mot_cle/_delete_form.html.twig";
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
        return array (  53 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form method=\"post\" action=\"{{ path(\x27mot_cle_app_mot_cle_delete\x27, {\x27id\x27: mot_cle.idMotCle}) }}\" onsubmit=\"return confirm(\x27Êtes-vous sûr de vouloir supprimer ce mot clé ?\x27);\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token(\x27delete\x27 ~ mot_cle.idMotCle) }}\">
    <button class=\"btn btn-danger\">Supprimer</button>
</form>
", "mot_cle/_delete_form.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\mot_cle\\_delete_form.html.twig");
    }
}
