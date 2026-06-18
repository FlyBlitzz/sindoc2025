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

/* export/pdf_template.html.twig */
class __TwigTemplate_c5735b7c6ac8f836fa1dac963a20ef2b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "export/pdf_template.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "export/pdf_template.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Index Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .index-info {
            margin-bottom: 30px;
        }
        .motsCles-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .motsCles-table th, .motsCles-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .motsCles-table th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1>Details for Index: ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 35, $this->source); })()), "nom", [], "any", false, false, false, 35), "html", null, true);
        yield "</h1>

    <div class=\"index-info\">
        <p><strong>ID:</strong> ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 38, $this->source); })()), "idindex", [], "any", false, false, false, 38), "html", null, true);
        yield "</p>
        
    </div>

    <h2>Keywords (Mots-clés)</h2>
    <table class=\"motsCles-table\">
        <thead>
            <tr>
                <th>Reference</th>
                <th>Denomination</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["motsCles"]) || array_key_exists("motsCles", $context) ? $context["motsCles"] : (function () { throw new RuntimeError('Variable "motsCles" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["motCle"]) {
            // line 52
            yield "                <tr>
                    <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["motCle"], "reference", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                    <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["motCle"], "Denomination", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['motCle'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "        </tbody>
    </table>

</body>
</html>
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
        return "export/pdf_template.html.twig";
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
        return array (  126 => 57,  117 => 54,  113 => 53,  110 => 52,  106 => 51,  90 => 38,  84 => 35,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Index Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .index-info {
            margin-bottom: 30px;
        }
        .motsCles-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .motsCles-table th, .motsCles-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .motsCles-table th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1>Details for Index: {{ index.nom }}</h1>

    <div class=\"index-info\">
        <p><strong>ID:</strong> {{ index.idindex }}</p>
        
    </div>

    <h2>Keywords (Mots-clés)</h2>
    <table class=\"motsCles-table\">
        <thead>
            <tr>
                <th>Reference</th>
                <th>Denomination</th>
            </tr>
        </thead>
        <tbody>
            {% for motCle in motsCles %}
                <tr>
                    <td>{{ motCle.reference }}</td>
                    <td>{{ motCle.Denomination }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

</body>
</html>
", "export/pdf_template.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\export\\pdf_template.html.twig");
    }
}
