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

/* annuaire.html.twig */
class __TwigTemplate_093847cdf399a770c9d07e384389331c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annuaire.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annuaire.html.twig"));

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

        yield " Annuaire ";
        
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
        yield "    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/listeUsers.css"), "html", null, true);
        yield "\">

    </head>

    <style>
        h2 {
            font-weight: bold;
        }
    </style>

    <div style=\"width: 20%; margin: 0 auto 150px;\">
        <main class=\"col-9 container border border-light bg-white p-2\" style=\"text-align: center;\">
            <h1 style=\"text-decoration: underline;\"> Toute l\x27équipe de l\x27ISTA</h1>
            <br>
            <p>ISTA a 48 membres enregistrés</p>
            <p style=\"font-weight: bold\">Prénom NOM</p>
            <p>Bassir AMIRI<br>
            Maître de conférences (HDR)<br>
                <a  href=\"mailto:bassir.amiri@univ-fcomte.fr\">bassir.amiri@univ-fcomte.fr</a></p>
            <hr>
            <p>Vincent ANDREANI<br>
                Doctorant</p>
            <hr>
            <p>Guillaume BAVANT<br>
                Doctorant</p>
            <hr>
            <p>Audrey BECKER<br>
            Professeur des universités<br>
                <a href=\"mailto:audrey.becker@univ-fcomte.fr\">audrey.becker@univ-fcomte.fr</a></p>
            <hr>
            <p>Nicolas BEN MUSTAPHA<br>
            Doctorant<br>
            <a href=\"mailto:nicolas.ben_mustapha@edu.univ-fcomte.fr\">nicolas.ben_mustapha@edu.univ-fcomte.fr</a></p>
            <hr>
            <p>Rodrigue BIBALOU-BIBALOU<br>
                Doctorant</p>
            <hr>
            <p>Julián BOHÓRQUEZ OLAYA<br>
                Doctorant</p>
            <hr>
            <p>William BONACINA<br>
                Doctorant</p>
            <hr>
            <p>Emeline BOURCERIE<br>
                Doctorant</p>
            <hr>
            <p>Hadrien BRU<br>
            Maître de conférences (HDR)<br>
                <a href=\"mailto:hadrien.bru@univ-fcomte.fr\">hadrien.bru@univ-fcomte.fr</a></p>
            <hr>
            <p>Claude BRUNET<br>
            Maître de conférences<br>
                <a href=\"mailto:claude.brunet@univ-fcomte.fr\">claude.brunet@univ-fcomte.fr</a></p>
            <hr>
            <p>Rudy CHAULET<br>
            Maître de conférences (HDR) émérite<br>
                <a href=\"mailto:rudy.chaulet@univ-fcomte.fr\">rudy.chaulet@univ-fcomte.fr</a></p>
            <hr>
            <p>Clément COUDERT<br>
                Doctorant</p>
            <hr>
            <p>Sylvie DAVID-GUIGNARD<br>
            Maître de conférences honoraire<br>
                <a href=\"mailto:sylvie.david-guignard@univ-fcomte.fr\">sylvie.david-guignard@univ-fcomte.fr</a></p>
            <hr>
            <p>Loïc DECREUSE<br>
            BIATSS (contractuel)<br>
                <a href=\"mailto:loic.decreuse@univ-fcomte.fr\">loic.decreuse@univ-fcomte.fr</a></p>
            <hr>
            <p>Marie EBERWEIN<br>
                Doctorant</p>
            <hr>
            <p>Anna ELEANOR SIGNORINI<br>
                Maître de conférences</p>
            <hr>
            <p>Emy FAIVRE<br>
                Doctorant</p>
            <hr>
            <p>Michel FARTZOFF<br>
            Professeur des universités émérite<br>
                <a href=\"mailto:michel.fartzoff@univ-fcomte.fr\">michel.fartzoff@univ-fcomte.fr</a></p>
            <hr>
            <p>Arianna FECIT<br>
                Doctorant</p>
            <hr>
            <p>Geoffroy FEUGIER<br>
                Doctorant</p>
            <hr>
            <p>Benjamin GOLDLUST<br>
            Professeur des universités<br>
                <a href=\"mailto:benjamin.goldlust@univ-fcomte.fr\">benjamin.goldlust@univ-fcomte.fr</a></p>
            <hr>
            <p>Antonio GONZALES<br>
            Professeur des universités<br>
                <a href=\"mailto:antonio.gonzales@univ-fcomte.fr\">antonio.gonzales@univ-fcomte.fr</a></p>
            <hr>
            <p>Thomas GUARD<br>
            Maître de conférences<br>
                <a href=\"mailto:thomas.guard@univ-fcomte.fr\">thomas.guard@univ-fcomte.fr</a></p>
            <hr>
            <p>Jean-Yves GUILLAUMIN<br>
            Professeur des universités émérite<br>
                <a href=\"mailto:jean-yves.guillaumin@univ-fcomte.fr\">jean-yves.guillaumin@univ-fcomte.fr</a></p>
            <hr>
            <p>Clotilde HEINRICH<br>
                Doctorant</p>
            <hr>
            <p>Pierre JAMET<br>
            Professeur des universités<br>
                <a href=\"mailto:pierre.jamet@univ-fcomte.fr\">pierre.jamet@univ-fcomte.fr</a></p>
            <hr>
            <p>Olivier JOUFFROY<br>
            Maître de conférences<br>
                <a href=\"mailto:olivier.jouffroy@univ-fcomte.fr\">olivier.jouffroy@univ-fcomte.fr</a></p>
            <hr>
            <p>Ana-Marija KRNIC<br>
                Doctorant</p>
            <hr>
            <p>Guy LABARRE<br>
            Professeur des universités<br>
                <a href=\"mailto:guy.labarre@univ-fcomte.fr\">guy.labarre@univ-fcomte.fr</a></p>
            <hr>
            <p>Laurène LECLERCQ<br>
            Ingénieur d\x27études<br>
                <a href=\"mailto:laurene.leclercq@univ-fcomte.fr\">laurene.leclercq@univ-fcomte.fr</a></p>
            <hr>
            <p>Florian LITOT<br>
            Ingénieur d\x27études<br>
                <a href=\"mailto:florian.litot@univ-fcomte.fr\">florian.litot@univ-fcomte.fr</a></p>
            <hr>
            <p>Karin MACKOWIAK<br>
            Maître de conférences (HDR)<br>
                <a href=\"mailto:karin.mackowiak@univ-fcomte.fr\">karin.mackowiak@univ-fcomte.fr</a></p>
            <hr>
            <p>Stéphanie MAHOU<br>
                Doctorant</p>
            <hr>
            <p>Claire MERCIER<br>
                Doctorant</p>
            <hr>
            <p>Sophie MONTEL<br>
            Maître de conférences<br>
                <a href=\"mailto:sophie.montel@univ-fcomte.fr\">sophie.montel@univ-fcomte.fr</a></p>
            <hr>
            <p>Dulce MORENO HERNANDEZ<br>
                Doctorant</p>
            <hr>
            <p>Chancia NGUI ENAME<br>
                Doctorant</p>
            <hr>
            <p>Antoine PIETROBELLI<br>
            Professeur des universités<br>
                <a href=\"mailto:antoine.pietrobelli@univ-fcomte.fr\">antoine.pietrobelli@univ-fcomte.fr</a></p>
            <hr>
            <p>Bruno POULLE<br>
            Professeur des universités<br>
                <a href=\"mailto:bruno.poulle@univ-fcomte.fr\">bruno.poulle@univ-fcomte.fr</a></p>
            <hr>
            <p>Claire POULLE-MUCKENSTURM<br>
            Maître de conférences<br>
                <a href=\"mailto:claire.poulle@univ-fcomte.fr\">claire.poulle@univ-fcomte.fr</a></p>
            <hr>
            <p>Raul-Darius POVÎRNARU<br>
                Doctorant</p>
            <hr>
            <p>Michel PRETALLI<br>
            Professeur des universités<br>
                <a href=\"mailto:michel.pretalli@univ-fcomte.fr\">michel.pretalli@univ-fcomte.fr</a></p>
            <hr>
            <p>Stéphane RATTI<br>
            Professeur des universités émérite<br>
                <a href=\"mailto:stephane.ratti@univ-fcomte.fr\">stephane.ratti@univ-fcomte.fr</a></p>
            <hr>
            <p>Catherine SENSAL<br>
            Maître de conférences<br>
                <a href=\"mailto:catherine.sensal@univ-fcomte.fr\">catherine.sensal@univ-fcomte.fr</a></p>
            <hr>
            <p>Frédéric SPAGNOLI<br>
            Maître de conférences<br>
                <a href=\"mailto:frederic.spagnoli@univ-fcomte.fr\">frederic.spagnoli@univ-fcomte.fr</a></p>
            <hr>
            <p>Georges TIROLOGOS<br>
            Ingénieur d\x27études<br>
                <a href=\"mailto:georges.tirologos@univ-fcomte.fr\">georges.tirologos@univ-fcomte.fr</a></p>
            <hr>
            <p>Anthi XANTHOPOULO<br>
                Doctorant</p>
        </main>
    </div>
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
        return "annuaire.html.twig";
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
        return array (  109 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} Annuaire {% endblock %}

{% block body %}
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"stylesheet\" href=\"{{ asset(\x27css/bootstrap.min.css\x27) }}\">
        <link rel=\"stylesheet\" href=\"{{ asset(\x27css/listeUsers.css\x27) }}\">

    </head>

    <style>
        h2 {
            font-weight: bold;
        }
    </style>

    <div style=\"width: 20%; margin: 0 auto 150px;\">
        <main class=\"col-9 container border border-light bg-white p-2\" style=\"text-align: center;\">
            <h1 style=\"text-decoration: underline;\"> Toute l\x27équipe de l\x27ISTA</h1>
            <br>
            <p>ISTA a 48 membres enregistrés</p>
            <p style=\"font-weight: bold\">Prénom NOM</p>
            <p>Bassir AMIRI<br>
            Maître de conférences (HDR)<br>
                <a  href=\"mailto:bassir.amiri@univ-fcomte.fr\">bassir.amiri@univ-fcomte.fr</a></p>
            <hr>
            <p>Vincent ANDREANI<br>
                Doctorant</p>
            <hr>
            <p>Guillaume BAVANT<br>
                Doctorant</p>
            <hr>
            <p>Audrey BECKER<br>
            Professeur des universités<br>
                <a href=\"mailto:audrey.becker@univ-fcomte.fr\">audrey.becker@univ-fcomte.fr</a></p>
            <hr>
            <p>Nicolas BEN MUSTAPHA<br>
            Doctorant<br>
            <a href=\"mailto:nicolas.ben_mustapha@edu.univ-fcomte.fr\">nicolas.ben_mustapha@edu.univ-fcomte.fr</a></p>
            <hr>
            <p>Rodrigue BIBALOU-BIBALOU<br>
                Doctorant</p>
            <hr>
            <p>Julián BOHÓRQUEZ OLAYA<br>
                Doctorant</p>
            <hr>
            <p>William BONACINA<br>
                Doctorant</p>
            <hr>
            <p>Emeline BOURCERIE<br>
                Doctorant</p>
            <hr>
            <p>Hadrien BRU<br>
            Maître de conférences (HDR)<br>
                <a href=\"mailto:hadrien.bru@univ-fcomte.fr\">hadrien.bru@univ-fcomte.fr</a></p>
            <hr>
            <p>Claude BRUNET<br>
            Maître de conférences<br>
                <a href=\"mailto:claude.brunet@univ-fcomte.fr\">claude.brunet@univ-fcomte.fr</a></p>
            <hr>
            <p>Rudy CHAULET<br>
            Maître de conférences (HDR) émérite<br>
                <a href=\"mailto:rudy.chaulet@univ-fcomte.fr\">rudy.chaulet@univ-fcomte.fr</a></p>
            <hr>
            <p>Clément COUDERT<br>
                Doctorant</p>
            <hr>
            <p>Sylvie DAVID-GUIGNARD<br>
            Maître de conférences honoraire<br>
                <a href=\"mailto:sylvie.david-guignard@univ-fcomte.fr\">sylvie.david-guignard@univ-fcomte.fr</a></p>
            <hr>
            <p>Loïc DECREUSE<br>
            BIATSS (contractuel)<br>
                <a href=\"mailto:loic.decreuse@univ-fcomte.fr\">loic.decreuse@univ-fcomte.fr</a></p>
            <hr>
            <p>Marie EBERWEIN<br>
                Doctorant</p>
            <hr>
            <p>Anna ELEANOR SIGNORINI<br>
                Maître de conférences</p>
            <hr>
            <p>Emy FAIVRE<br>
                Doctorant</p>
            <hr>
            <p>Michel FARTZOFF<br>
            Professeur des universités émérite<br>
                <a href=\"mailto:michel.fartzoff@univ-fcomte.fr\">michel.fartzoff@univ-fcomte.fr</a></p>
            <hr>
            <p>Arianna FECIT<br>
                Doctorant</p>
            <hr>
            <p>Geoffroy FEUGIER<br>
                Doctorant</p>
            <hr>
            <p>Benjamin GOLDLUST<br>
            Professeur des universités<br>
                <a href=\"mailto:benjamin.goldlust@univ-fcomte.fr\">benjamin.goldlust@univ-fcomte.fr</a></p>
            <hr>
            <p>Antonio GONZALES<br>
            Professeur des universités<br>
                <a href=\"mailto:antonio.gonzales@univ-fcomte.fr\">antonio.gonzales@univ-fcomte.fr</a></p>
            <hr>
            <p>Thomas GUARD<br>
            Maître de conférences<br>
                <a href=\"mailto:thomas.guard@univ-fcomte.fr\">thomas.guard@univ-fcomte.fr</a></p>
            <hr>
            <p>Jean-Yves GUILLAUMIN<br>
            Professeur des universités émérite<br>
                <a href=\"mailto:jean-yves.guillaumin@univ-fcomte.fr\">jean-yves.guillaumin@univ-fcomte.fr</a></p>
            <hr>
            <p>Clotilde HEINRICH<br>
                Doctorant</p>
            <hr>
            <p>Pierre JAMET<br>
            Professeur des universités<br>
                <a href=\"mailto:pierre.jamet@univ-fcomte.fr\">pierre.jamet@univ-fcomte.fr</a></p>
            <hr>
            <p>Olivier JOUFFROY<br>
            Maître de conférences<br>
                <a href=\"mailto:olivier.jouffroy@univ-fcomte.fr\">olivier.jouffroy@univ-fcomte.fr</a></p>
            <hr>
            <p>Ana-Marija KRNIC<br>
                Doctorant</p>
            <hr>
            <p>Guy LABARRE<br>
            Professeur des universités<br>
                <a href=\"mailto:guy.labarre@univ-fcomte.fr\">guy.labarre@univ-fcomte.fr</a></p>
            <hr>
            <p>Laurène LECLERCQ<br>
            Ingénieur d\x27études<br>
                <a href=\"mailto:laurene.leclercq@univ-fcomte.fr\">laurene.leclercq@univ-fcomte.fr</a></p>
            <hr>
            <p>Florian LITOT<br>
            Ingénieur d\x27études<br>
                <a href=\"mailto:florian.litot@univ-fcomte.fr\">florian.litot@univ-fcomte.fr</a></p>
            <hr>
            <p>Karin MACKOWIAK<br>
            Maître de conférences (HDR)<br>
                <a href=\"mailto:karin.mackowiak@univ-fcomte.fr\">karin.mackowiak@univ-fcomte.fr</a></p>
            <hr>
            <p>Stéphanie MAHOU<br>
                Doctorant</p>
            <hr>
            <p>Claire MERCIER<br>
                Doctorant</p>
            <hr>
            <p>Sophie MONTEL<br>
            Maître de conférences<br>
                <a href=\"mailto:sophie.montel@univ-fcomte.fr\">sophie.montel@univ-fcomte.fr</a></p>
            <hr>
            <p>Dulce MORENO HERNANDEZ<br>
                Doctorant</p>
            <hr>
            <p>Chancia NGUI ENAME<br>
                Doctorant</p>
            <hr>
            <p>Antoine PIETROBELLI<br>
            Professeur des universités<br>
                <a href=\"mailto:antoine.pietrobelli@univ-fcomte.fr\">antoine.pietrobelli@univ-fcomte.fr</a></p>
            <hr>
            <p>Bruno POULLE<br>
            Professeur des universités<br>
                <a href=\"mailto:bruno.poulle@univ-fcomte.fr\">bruno.poulle@univ-fcomte.fr</a></p>
            <hr>
            <p>Claire POULLE-MUCKENSTURM<br>
            Maître de conférences<br>
                <a href=\"mailto:claire.poulle@univ-fcomte.fr\">claire.poulle@univ-fcomte.fr</a></p>
            <hr>
            <p>Raul-Darius POVÎRNARU<br>
                Doctorant</p>
            <hr>
            <p>Michel PRETALLI<br>
            Professeur des universités<br>
                <a href=\"mailto:michel.pretalli@univ-fcomte.fr\">michel.pretalli@univ-fcomte.fr</a></p>
            <hr>
            <p>Stéphane RATTI<br>
            Professeur des universités émérite<br>
                <a href=\"mailto:stephane.ratti@univ-fcomte.fr\">stephane.ratti@univ-fcomte.fr</a></p>
            <hr>
            <p>Catherine SENSAL<br>
            Maître de conférences<br>
                <a href=\"mailto:catherine.sensal@univ-fcomte.fr\">catherine.sensal@univ-fcomte.fr</a></p>
            <hr>
            <p>Frédéric SPAGNOLI<br>
            Maître de conférences<br>
                <a href=\"mailto:frederic.spagnoli@univ-fcomte.fr\">frederic.spagnoli@univ-fcomte.fr</a></p>
            <hr>
            <p>Georges TIROLOGOS<br>
            Ingénieur d\x27études<br>
                <a href=\"mailto:georges.tirologos@univ-fcomte.fr\">georges.tirologos@univ-fcomte.fr</a></p>
            <hr>
            <p>Anthi XANTHOPOULO<br>
                Doctorant</p>
        </main>
    </div>
{% endblock %}

", "annuaire.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\annuaire.html.twig");
    }
}
