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

/* fiche/fiche_modal.html.twig */
class __TwigTemplate_33ed65d572652255f7a1290d73d7ba5d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/fiche_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/fiche_modal.html.twig"));

        // line 1
        yield "<script>
\$(document).on(\x27click\x27, \x27[data-target=\"#exportModal\"]\x27, function () {
    const ficheId = \$(this).data(\x27ficheid\x27);
    const baseUrl = \"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_export", ["id" => 0]);
        yield "\".replace(\x27/0\x27, \x27\x27);
    const formAction = `\${baseUrl}/\${ficheId}`;
    \$(\x27#exportModal form\x27).attr(\x27action\x27, formAction);

});

</script>
<!-- Bootstrap CSS -->
<link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">

<!-- jQuery -->
";
        // line 16
        yield "
<!-- Bootstrap JS -->
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js\"></script>

<div class=\"modal fade\" id=\"exportModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exportModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exportModalLabel\">Exporter la fiche</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <form method=\"post\" action=\"\">
                <div class=\"modal-body\">
                    <div class=\"form-group\">
                        <label for=\"exportFormat\">Choisir le format d\x27export</label>
                        <select id=\"exportFormat\" name=\"exportFormat\" class=\"form-control\">
                            <option value=\"pdf\">PDF</option>
                            <option value=\"word\">Word</option>
                        </select>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-primary\">Exporter</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Button to trigger the modal -->
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
        return "fiche/fiche_modal.html.twig";
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
        return array (  67 => 16,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<script>
\$(document).on(\x27click\x27, \x27[data-target=\"#exportModal\"]\x27, function () {
    const ficheId = \$(this).data(\x27ficheid\x27);
    const baseUrl = \"{{ path(\x27fiche_export\x27, {\x27id\x27: 0}) }}\".replace(\x27/0\x27, \x27\x27);
    const formAction = `\${baseUrl}/\${ficheId}`;
    \$(\x27#exportModal form\x27).attr(\x27action\x27, formAction);

});

</script>
<!-- Bootstrap CSS -->
<link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">

<!-- jQuery -->
{# <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script> #}

<!-- Bootstrap JS -->
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js\"></script>

<div class=\"modal fade\" id=\"exportModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exportModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exportModalLabel\">Exporter la fiche</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <form method=\"post\" action=\"\">
                <div class=\"modal-body\">
                    <div class=\"form-group\">
                        <label for=\"exportFormat\">Choisir le format d\x27export</label>
                        <select id=\"exportFormat\" name=\"exportFormat\" class=\"form-control\">
                            <option value=\"pdf\">PDF</option>
                            <option value=\"word\">Word</option>
                        </select>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-primary\">Exporter</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Button to trigger the modal -->
{# <a href=\"#\" class=\"card-link\" data-toggle=\"modal\" data-target=\"#exportModal\">Exporter</a> #}
", "fiche/fiche_modal.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\fiche\\fiche_modal.html.twig");
    }
}
