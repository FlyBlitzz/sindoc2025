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

/* footer.html.twig */
class __TwigTemplate_7bcbe12ad7afd4e80b1741a5d2cb0747 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        yield "

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/index.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@docsearch/css@3\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/footer.css"), "html", null, true);
        yield "\">

    <!-- Favicons -->
    <link rel=\"apple-touch-icon\" href=\"/docs/5.3/assets/img/favicons/apple-touch-icon.png\" sizes=\"180x180\">
    <link rel=\"icon\" href=\"/docs/5.3/assets/img/favicons/favicon-32x32.png\" sizes=\"32x32\" type=\"image/png\">
    <link rel=\"icon\" href=\"/docs/5.3/assets/img/favicons/favicon-16x16.png\" sizes=\"16x16\" type=\"image/png\">
    <link rel=\"manifest\" href=\"/docs/5.3/assets/img/favicons/manifest.json\">
    <link rel=\"mask-icon\" href=\"/docs/5.3/assets/img/favicons/safari-pinned-tab.svg\" color=\"#712cf9\">
    <link rel=\"icon\" href=\"/docs/5.3/assets/img/favicons/favicon.ico\">
    <meta name=\"theme-color\" content=\"#712cf9\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/footer.css"), "html", null, true);
        yield "\">

</head>

    <footer class=\"cc-footer py-5 d-flex\">
        <div class=\"container\">
        
            <div class=\"row justify-content-center\">
                
                <div class=\"col-lg-3 col-md-3 mb-4 col-sm col-12\">
                    <img src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Logo_footer.png"), "html", null, true);
        yield "\" alt=\"Logo\" class=\"img-fluid\">
                </div>
                <div class=\"col-lg-3 col-md-3 mb-4 col-sm col-12\">
                    <h6 class=\"redressed ps-3 fs-3\">Liens utiles</h6>
                    <nav class=\"nav flex-column\">
                        <a class=\"nav-link text-white py-1 merriweather fs-6 text-secondary active\" aria-current=\"page\"
                           href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions_legales");
        yield "\">Mentions légales</a>
                        <a class=\"nav-link text-white py-1 merriweather fs-6 text-secondary\" href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annuaire");
        yield "\">Annuaire</a>
                    </nav>
                </div>

                <div class=\"col-lg-3 col-md-4 mb-4 col-sm col-12\">
                    <h6 class=\"redressed ps-3 fs-3\">Nos informations</h6>
                    <nav class=\"nav flex-column\">
                        <div class=\"d-flex align-items-center\">
                            <i class=\"fas fa-home\"></i>
                            <a class=\"nav-link text-white py-1 merriweather fs-6 text-secondary active\" aria-current=\"page\"
                                href=\"https://www.google.fr/maps/place/30+Rue+Megevand,+25000+Besan%C3%A7on/@47.2347992,6.0222566,17z/data=!3m1!4b1!4m6!3m5!1s0x478d633ee0bfed2d:0x711b32ecb8a58af!8m2!3d47.2347992!4d6.0248315!16s%2Fg%2F11bw4264sk?entry=ttu\">Adresse: 30-32 rue Mégevand, 25000 Besançon</a>
                        </div>
                        <div class=\"d-flex align-items-center\">
                            <i class=\"fas fa-phone\"></i>
                            <a class=\"nav-link text-white py-1 merriweather fs-6 text-secondary\" href=\"tel:+3300000000\">Téléphone: +33 (0)3
                                81 66 54 73</a>
                        </div>
                    </nav>
                </div>
                <div class=\"d-flex justify-content-center\">
                    <a style=\"color:white;\" href=\"https://www.facebook.com/InstitutdesSciencesetTechniquesdelAntiquiteISTA?ref=embed_page\"><i class=\"fab fa-facebook-f fa-lg me-3\"></i></a>
                    <a style=\"color:white;\" href=\"https://twitter.com/ISTA_labo\"><i class=\"fab fa-twitter fa-lg me-3\"></i></a>
                    <a style=\"color:white;\" href=\"https://www.instagram.com/\"><i class=\"fab fa-instagram fa-lg me-3\"></i></a>
                    <a style=\"color:white;\" href=\"https://www.youtube.com/channel/UCra_QiMJMQcGrLho4DuQgaw/videos\"><i class=\"fab fa-youtube fa-lg\"></i></a>
                </div>
            </div>

            <div class=\"row justify-content-center\">
                <div class=\"col-12 text-center py-4 text-muted\">
                    &copy; Institut Des Sciences Et Techniques De L\x27Antiquité
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    Copyright
                </div>
            </div>

        </div>
    </footer>

    <script src=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>

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
        return "footer.html.twig";
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
        return array (  147 => 77,  104 => 37,  100 => 36,  91 => 30,  78 => 20,  65 => 10,  60 => 8,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/bootstrap.min.css\x27) }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/index.css\x27) }}\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@docsearch/css@3\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/footer.css\x27) }}\">

    <!-- Favicons -->
    <link rel=\"apple-touch-icon\" href=\"/docs/5.3/assets/img/favicons/apple-touch-icon.png\" sizes=\"180x180\">
    <link rel=\"icon\" href=\"/docs/5.3/assets/img/favicons/favicon-32x32.png\" sizes=\"32x32\" type=\"image/png\">
    <link rel=\"icon\" href=\"/docs/5.3/assets/img/favicons/favicon-16x16.png\" sizes=\"16x16\" type=\"image/png\">
    <link rel=\"manifest\" href=\"/docs/5.3/assets/img/favicons/manifest.json\">
    <link rel=\"mask-icon\" href=\"/docs/5.3/assets/img/favicons/safari-pinned-tab.svg\" color=\"#712cf9\">
    <link rel=\"icon\" href=\"/docs/5.3/assets/img/favicons/favicon.ico\">
    <meta name=\"theme-color\" content=\"#712cf9\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/footer.css\x27) }}\">

</head>

    <footer class=\"cc-footer py-5 d-flex\">
        <div class=\"container\">
        
            <div class=\"row justify-content-center\">
                
                <div class=\"col-lg-3 col-md-3 mb-4 col-sm col-12\">
                    <img src=\"{{ asset(\x27images/Logo_footer.png\x27) }}\" alt=\"Logo\" class=\"img-fluid\">
                </div>
                <div class=\"col-lg-3 col-md-3 mb-4 col-sm col-12\">
                    <h6 class=\"redressed ps-3 fs-3\">Liens utiles</h6>
                    <nav class=\"nav flex-column\">
                        <a class=\"nav-link text-white py-1 merriweather fs-6 text-secondary active\" aria-current=\"page\"
                           href=\"{{ path(\x27mentions_legales\x27)}}\">Mentions légales</a>
                        <a class=\"nav-link text-white py-1 merriweather fs-6 text-secondary\" href=\"{{ path(\x27app_annuaire\x27)}}\">Annuaire</a>
                    </nav>
                </div>

                <div class=\"col-lg-3 col-md-4 mb-4 col-sm col-12\">
                    <h6 class=\"redressed ps-3 fs-3\">Nos informations</h6>
                    <nav class=\"nav flex-column\">
                        <div class=\"d-flex align-items-center\">
                            <i class=\"fas fa-home\"></i>
                            <a class=\"nav-link text-white py-1 merriweather fs-6 text-secondary active\" aria-current=\"page\"
                                href=\"https://www.google.fr/maps/place/30+Rue+Megevand,+25000+Besan%C3%A7on/@47.2347992,6.0222566,17z/data=!3m1!4b1!4m6!3m5!1s0x478d633ee0bfed2d:0x711b32ecb8a58af!8m2!3d47.2347992!4d6.0248315!16s%2Fg%2F11bw4264sk?entry=ttu\">Adresse: 30-32 rue Mégevand, 25000 Besançon</a>
                        </div>
                        <div class=\"d-flex align-items-center\">
                            <i class=\"fas fa-phone\"></i>
                            <a class=\"nav-link text-white py-1 merriweather fs-6 text-secondary\" href=\"tel:+3300000000\">Téléphone: +33 (0)3
                                81 66 54 73</a>
                        </div>
                    </nav>
                </div>
                <div class=\"d-flex justify-content-center\">
                    <a style=\"color:white;\" href=\"https://www.facebook.com/InstitutdesSciencesetTechniquesdelAntiquiteISTA?ref=embed_page\"><i class=\"fab fa-facebook-f fa-lg me-3\"></i></a>
                    <a style=\"color:white;\" href=\"https://twitter.com/ISTA_labo\"><i class=\"fab fa-twitter fa-lg me-3\"></i></a>
                    <a style=\"color:white;\" href=\"https://www.instagram.com/\"><i class=\"fab fa-instagram fa-lg me-3\"></i></a>
                    <a style=\"color:white;\" href=\"https://www.youtube.com/channel/UCra_QiMJMQcGrLho4DuQgaw/videos\"><i class=\"fab fa-youtube fa-lg\"></i></a>
                </div>
            </div>

            <div class=\"row justify-content-center\">
                <div class=\"col-12 text-center py-4 text-muted\">
                    &copy; Institut Des Sciences Et Techniques De L\x27Antiquité
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    Copyright
                </div>
            </div>

        </div>
    </footer>

    <script src=\"{{ asset(\x27js/bootstrap.bundle.min.js\x27) }}\"></script>

", "footer.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\footer.html.twig");
    }
}
