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

/* fiche/chart/circular_chart.html.twig */
class __TwigTemplate_53d7320976a08273e6bcc7e1f61eab9c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/chart/circular_chart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/chart/circular_chart.html.twig"));

        // line 1
        yield "
<div class=\"col-8 d-flex col-xl-2 col-lg-3 col-md-5 col-sm-6 flex-column\">
            
                <canvas id=\"fichesChart\"></canvas>
                <h5 style=\"margin-right: 0px; clear: both;\">
                    Nombre de fiches: ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nbrFiches"]) || array_key_exists("nbrFiches", $context) ? $context["nbrFiches"] : (function () { throw new RuntimeError('Variable "nbrFiches" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nbrFicheTotal"]) || array_key_exists("nbrFicheTotal", $context) ? $context["nbrFicheTotal"] : (function () { throw new RuntimeError('Variable "nbrFicheTotal" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "
                </h5>
           
        </div>
    <script>
        document.addEventListener(\"DOMContentLoaded\", function () {
            const ctx = document.getElementById(\x27fichesChart\x27).getContext(\x272d\x27);
            const nbrFiches = ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("nbrFiches", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["nbrFiches"]) || array_key_exists("nbrFiches", $context) ? $context["nbrFiches"] : (function () { throw new RuntimeError('Variable "nbrFiches" does not exist.', 13, $this->source); })()), 0)) : (0)), "html", null, true);
        yield ";
            const nbrFicheTotal = ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("nbrFicheTotal", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["nbrFicheTotal"]) || array_key_exists("nbrFicheTotal", $context) ? $context["nbrFicheTotal"] : (function () { throw new RuntimeError('Variable "nbrFicheTotal" does not exist.', 14, $this->source); })()), 0)) : (0)), "html", null, true);
        yield ";
            const remainingFiches = nbrFicheTotal - nbrFiches;

            const data = {
                labels: [\x27Fiches trouvées\x27, \x27Fiches restantes\x27],
                datasets: [{
                    data: [nbrFiches, remainingFiches],
                    backgroundColor: [\x27#0088CC\x27, \x27#f4f4f4\x27],
                    hoverBackgroundColor: [\x27#005f99\x27, \x27#e2e2e2\x27],
                }]
            };

            const options = {
                responsive: true,
                cutout: \x2775%\x27, // Adjust the size of the doughnut hole
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function (tooltipItem) {
                                const label = data.labels[tooltipItem.dataIndex];
                                const value = data.datasets[0].data[tooltipItem.dataIndex];
                                return `\${label}: \${value}`;
                            }
                        }
                    }
                }
            };

            new Chart(ctx, {
                type: \x27doughnut\x27,
                data: data,
                options: options
            });
        });
    </script>
</div>
<style>
canvas {
        width: 90% !important;
        height: auto !important;
    }
    </style>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "fiche/chart/circular_chart.html.twig";
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
        return array (  71 => 14,  67 => 13,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
<div class=\"col-8 d-flex col-xl-2 col-lg-3 col-md-5 col-sm-6 flex-column\">
            
                <canvas id=\"fichesChart\"></canvas>
                <h5 style=\"margin-right: 0px; clear: both;\">
                    Nombre de fiches: {{ nbrFiches }}/{{ nbrFicheTotal }}
                </h5>
           
        </div>
    <script>
        document.addEventListener(\"DOMContentLoaded\", function () {
            const ctx = document.getElementById(\x27fichesChart\x27).getContext(\x272d\x27);
            const nbrFiches = {{ nbrFiches|default(0) }};
            const nbrFicheTotal = {{ nbrFicheTotal|default(0) }};
            const remainingFiches = nbrFicheTotal - nbrFiches;

            const data = {
                labels: [\x27Fiches trouvées\x27, \x27Fiches restantes\x27],
                datasets: [{
                    data: [nbrFiches, remainingFiches],
                    backgroundColor: [\x27#0088CC\x27, \x27#f4f4f4\x27],
                    hoverBackgroundColor: [\x27#005f99\x27, \x27#e2e2e2\x27],
                }]
            };

            const options = {
                responsive: true,
                cutout: \x2775%\x27, // Adjust the size of the doughnut hole
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function (tooltipItem) {
                                const label = data.labels[tooltipItem.dataIndex];
                                const value = data.datasets[0].data[tooltipItem.dataIndex];
                                return `\${label}: \${value}`;
                            }
                        }
                    }
                }
            };

            new Chart(ctx, {
                type: \x27doughnut\x27,
                data: data,
                options: options
            });
        });
    </script>
</div>
<style>
canvas {
        width: 90% !important;
        height: auto !important;
    }
    </style>", "fiche/chart/circular_chart.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\fiche\\chart\\circular_chart.html.twig");
    }
}
