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

/* fiche/fiche_export_pdf_modal.html.twig */
class __TwigTemplate_b101edcb8b5378c1a95c8abbaf2e8fc6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/fiche_export_pdf_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/fiche_export_pdf_modal.html.twig"));

        // line 1
        yield "<div class=\"modal fade\" id=\"exportModalPdf\" tabindex=\"-1\" aria-labelledby=\"exportModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exportModalLabel\">Exporter les mots clés des fiches avec:</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <form id=\"exportFormPDF\" action=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiches_pdf");
        yield "\" method=\"POST\">
                    <input type=\"hidden\" id=\"ficheDataPdf\" name=\"ficheDataPdf\" value=\"\">
                    <input type=\"hidden\" id=\"exportTypePdf\" name=\"exportType\" value=\"reference_only\">

                    <div class=\"mb-3\">
                        <label for=\"exportOption\" class=\"form-label\">Sélectionner:</label>
                        <select id=\"exportOptionPdf\" class=\"form-select\">
                            <option value=\"reference_only\" selected>Référence seulement</option>
                            <option value=\"reference_denomination\">Référence et Dénomination</option>
                        </select>
                    </div>
                    
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button type=\"submit\" class=\"btn btn-primary\">Exporter vers PDF</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById(\"exportOptionPdf\").addEventListener(\"change\", function() {
    document.getElementById(\"exportTypePdf\").value = this.value;
});
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "fiche/fiche_export_pdf_modal.html.twig";
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
        return array (  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"modal fade\" id=\"exportModalPdf\" tabindex=\"-1\" aria-labelledby=\"exportModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exportModalLabel\">Exporter les mots clés des fiches avec:</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <form id=\"exportFormPDF\" action=\"{{path(\"fiches_pdf\")}}\" method=\"POST\">
                    <input type=\"hidden\" id=\"ficheDataPdf\" name=\"ficheDataPdf\" value=\"\">
                    <input type=\"hidden\" id=\"exportTypePdf\" name=\"exportType\" value=\"reference_only\">

                    <div class=\"mb-3\">
                        <label for=\"exportOption\" class=\"form-label\">Sélectionner:</label>
                        <select id=\"exportOptionPdf\" class=\"form-select\">
                            <option value=\"reference_only\" selected>Référence seulement</option>
                            <option value=\"reference_denomination\">Référence et Dénomination</option>
                        </select>
                    </div>
                    
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button type=\"submit\" class=\"btn btn-primary\">Exporter vers PDF</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById(\"exportOptionPdf\").addEventListener(\"change\", function() {
    document.getElementById(\"exportTypePdf\").value = this.value;
});
</script>", "fiche/fiche_export_pdf_modal.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\fiche\\fiche_export_pdf_modal.html.twig");
    }
}
