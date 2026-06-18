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

/* home/index.html.twig */
class __TwigTemplate_c05ab530fc0f6983c5bd99e54b438748 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

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

        yield "ista.univ-fcomte.fr/";
        
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
        yield "
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/index.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fichier.php"), "html", null, true);
        yield "\">

</head>

<body>


<section class=\"banner d-flex justify-content-center align-items-center pt-5\">
    <div class=\"container my-5 py-5\">
        <div class=\"row\">
            <div class=\"col-md-6 banner-desc lh-lg\">

               <h1 class=\"text-capitalize py-3  redressed\">
                  Un outil pour analyser les textes Antiques
              </h1>
              <a href=\"https://ista.univ-fcomte.fr/index.php/bdd/esclaves-dependants\" class=\"btn btn-order  btn-lg me-5 rounded-0 merriweather\">Pour plus d\x27informations</a>

              </div>
            <div class=\"col-md-6 banner-desc lh-lg\">
                <h1 class=\"text-capitalize py-3 redressed\">
                    Institut des Sciences et  <br />
                    Techniques de l\x27Antiquité <br /> Besançon

                <p>
                <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_recherche");
        yield "\" class=\"btn btn-outline-info btn-lg rounded-0 merriweather\">Rechercher une fiche</a>
                </p>
            </div>
        </div>
    </div>
</section>
<section class=\"available merriweather py-5\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"card mb-3 border-0 rounded-0\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img1.png"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"...\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"card-body px-0\">
\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Une époque</h3>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus nihil error, expedita quasi
\t\t\t\t\t\t\t\t\t\tdeserunt, maxime ducimus, nostrum quos nisi tenetur temporibus harum debitis odio magni aliquid
\t\t\t\t\t\t\t\t\t\tvoluptas cum doloremque ab?
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\"><a href=\"#\" class=\"btn text-muted\">Découvrir le met</a></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"card my-5 border-0 rounded-0\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"card-body px-0\">
\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Des découvertes</h3>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t\tLorem ipsum, dolor sit amet consectetur adipisicing elit. Vel aliquid maiores asperiores sint
\t\t\t\t\t\t\t\t\t\tdoloribus eligendi odio nostrum quod, aperiam placeat eaque dolor libero provident beatae neque
\t\t\t\t\t\t\t\t\t\tobcaecati quidem tempore debitis.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\"><a href=\"#\" class=\"btn text-muted\">Découvrir le met</a></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div id=\"carouselExampleControls\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t\t\t\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Carousel/img2.png"), "html", null, true);
        yield "\" class=\"d-block w-100\" alt=\"...\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Carousel/img3.png"), "html", null, true);
        yield "\" class=\"d-block w-100\" alt=\"...\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Carousel/img2.png"), "html", null, true);
        yield "\" class=\"d-block w-100\" alt=\"...\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button
\t\t\t\t\t\t\t\t\t\tclass=\"carousel-control-prev\"
\t\t\t\t\t\t\t\t\t\ttype=\"button\"
\t\t\t\t\t\t\t\t\t\tdata-bs-target=\"#carouselExampleControls\"
\t\t\t\t\t\t\t\t\t\tdata-bs-slide=\"prev\">

\t\t\t\t\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button
\t\t\t\t\t\t\t\t\t\tclass=\"carousel-control-next\"
\t\t\t\t\t\t\t\t\t\ttype=\"button\"
\t\t\t\t\t\t\t\t\t\tdata-bs-target=\"#carouselExampleControls\"
\t\t\t\t\t\t\t\t\t\tdata-bs-slide=\"next\"
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"card mb-3 border-0 rounded-0\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img4.png"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"...\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"card-body px-0\">
\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Une histoire</h3>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t\tLorem ipsum, dolor sit amet consectetur adipisicing elit. Vel aliquid maiores asperiores sint
\t\t\t\t\t\t\t\t\t\tdoloribus eligendi odio nostrum quod, aperiam placeat eaque dolor libero provident beatae neque
\t\t\t\t\t\t\t\t\t\tobcaecati quidem tempore debitis.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\"><a href=\"#\" class=\"btn text-muted\">Découvrir le met</a></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>


<section class=\"order-form py-5\">
\t\t\t<div class=\"container\">
\t\t\t\t<h2 class=\"merriweather text-center text-light mb-4\">Contactez-nous</h2>
 \t\t\t\t<form>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 col-sm\">
\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Votre nom complet\" />
\t\t\t\t\t\t\t</div>
\t                            <div class=\"input-group mb-3\">
\t                            <span class=\"input-group-text\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Adresse zone Ex:. Ekounou, Avenu 52\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-sm\">
\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Votre adresse email\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"fas fa-at\"></i></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" placeholder=\"Numéro de téléphone\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"fas fa-phone\"></i></span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-text\">Ecrire votre demande</span>
\t\t\t\t\t\t\t<textarea class=\"form-control\" aria-label=\"With textarea\"></textarea>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"input-group-text\">Envoyer</button>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</form>
\t\t\t</div>
\t\t</section>


\t\t<script src=\"assets/js/bootstrap.bundle.min.js\"></script>
\t</body>
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
        return "home/index.html.twig";
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
        return array (  241 => 121,  208 => 91,  202 => 88,  196 => 85,  159 => 51,  144 => 39,  117 => 15,  113 => 14,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}ista.univ-fcomte.fr/{% endblock %}

{% block body %}

<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/bootstrap.min.css\x27) }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/index.css\x27) }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27fichier.php\x27) }}\">

</head>

<body>


<section class=\"banner d-flex justify-content-center align-items-center pt-5\">
    <div class=\"container my-5 py-5\">
        <div class=\"row\">
            <div class=\"col-md-6 banner-desc lh-lg\">

               <h1 class=\"text-capitalize py-3  redressed\">
                  Un outil pour analyser les textes Antiques
              </h1>
              <a href=\"https://ista.univ-fcomte.fr/index.php/bdd/esclaves-dependants\" class=\"btn btn-order  btn-lg me-5 rounded-0 merriweather\">Pour plus d\x27informations</a>

              </div>
            <div class=\"col-md-6 banner-desc lh-lg\">
                <h1 class=\"text-capitalize py-3 redressed\">
                    Institut des Sciences et  <br />
                    Techniques de l\x27Antiquité <br /> Besançon

                <p>
                <a href=\"{{ path(\x27fiche_recherche\x27) }}\" class=\"btn btn-outline-info btn-lg rounded-0 merriweather\">Rechercher une fiche</a>
                </p>
            </div>
        </div>
    </div>
</section>
<section class=\"available merriweather py-5\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"card mb-3 border-0 rounded-0\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset(\x27images/img1.png\x27) }}\" class=\"img-fluid\" alt=\"...\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"card-body px-0\">
\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Une époque</h3>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus nihil error, expedita quasi
\t\t\t\t\t\t\t\t\t\tdeserunt, maxime ducimus, nostrum quos nisi tenetur temporibus harum debitis odio magni aliquid
\t\t\t\t\t\t\t\t\t\tvoluptas cum doloremque ab?
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\"><a href=\"#\" class=\"btn text-muted\">Découvrir le met</a></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"card my-5 border-0 rounded-0\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"card-body px-0\">
\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Des découvertes</h3>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t\tLorem ipsum, dolor sit amet consectetur adipisicing elit. Vel aliquid maiores asperiores sint
\t\t\t\t\t\t\t\t\t\tdoloribus eligendi odio nostrum quod, aperiam placeat eaque dolor libero provident beatae neque
\t\t\t\t\t\t\t\t\t\tobcaecati quidem tempore debitis.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\"><a href=\"#\" class=\"btn text-muted\">Découvrir le met</a></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div id=\"carouselExampleControls\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t\t\t\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset(\x27images/Carousel/img2.png\x27) }}\" class=\"d-block w-100\" alt=\"...\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset(\x27images/Carousel/img3.png\x27) }}\" class=\"d-block w-100\" alt=\"...\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset(\x27images/Carousel/img2.png\x27) }}\" class=\"d-block w-100\" alt=\"...\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button
\t\t\t\t\t\t\t\t\t\tclass=\"carousel-control-prev\"
\t\t\t\t\t\t\t\t\t\ttype=\"button\"
\t\t\t\t\t\t\t\t\t\tdata-bs-target=\"#carouselExampleControls\"
\t\t\t\t\t\t\t\t\t\tdata-bs-slide=\"prev\">

\t\t\t\t\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button
\t\t\t\t\t\t\t\t\t\tclass=\"carousel-control-next\"
\t\t\t\t\t\t\t\t\t\ttype=\"button\"
\t\t\t\t\t\t\t\t\t\tdata-bs-target=\"#carouselExampleControls\"
\t\t\t\t\t\t\t\t\t\tdata-bs-slide=\"next\"
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"card mb-3 border-0 rounded-0\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset(\x27images/img4.png\x27) }}\" class=\"img-fluid\" alt=\"...\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"card-body px-0\">
\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Une histoire</h3>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t\tLorem ipsum, dolor sit amet consectetur adipisicing elit. Vel aliquid maiores asperiores sint
\t\t\t\t\t\t\t\t\t\tdoloribus eligendi odio nostrum quod, aperiam placeat eaque dolor libero provident beatae neque
\t\t\t\t\t\t\t\t\t\tobcaecati quidem tempore debitis.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\"><a href=\"#\" class=\"btn text-muted\">Découvrir le met</a></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>


<section class=\"order-form py-5\">
\t\t\t<div class=\"container\">
\t\t\t\t<h2 class=\"merriweather text-center text-light mb-4\">Contactez-nous</h2>
 \t\t\t\t<form>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 col-sm\">
\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Votre nom complet\" />
\t\t\t\t\t\t\t</div>
\t                            <div class=\"input-group mb-3\">
\t                            <span class=\"input-group-text\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Adresse zone Ex:. Ekounou, Avenu 52\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-sm\">
\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Votre adresse email\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"fas fa-at\"></i></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" placeholder=\"Numéro de téléphone\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"fas fa-phone\"></i></span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-text\">Ecrire votre demande</span>
\t\t\t\t\t\t\t<textarea class=\"form-control\" aria-label=\"With textarea\"></textarea>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"input-group-text\">Envoyer</button>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</form>
\t\t\t</div>
\t\t</section>


\t\t<script src=\"assets/js/bootstrap.bundle.min.js\"></script>
\t</body>
</html>


{% endblock %}





", "home/index.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\home\\index.html.twig");
    }
}
