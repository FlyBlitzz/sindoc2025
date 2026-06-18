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

/* fiche/editTotal.html.twig */
class __TwigTemplate_febbe7837d002196a292d9fd45e2485f extends Template
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
            'head' => [$this, 'block_head'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/editTotal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/editTotal.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        yield "   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
   <link rel=\"stylesheet\" href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\">
   <link rel=\"stylesheet\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/ajoutFiche.css"), "html", null, true);
        yield "\">
   <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css\" rel=\"stylesheet\" />
   <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
   <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
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

        // line 13
        yield "<body>
   <div class=\"card-body classs\">
       <h1>Modifier la fiche</h1>

       ";
        // line 17
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
       ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "refer", [], "any", false, false, false, 18), 'row');
        yield "
       ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "edition", [], "any", false, false, false, 19), 'row');
        yield "
       ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "denomination", [], "any", false, false, false, 20), 'row');
        yield "
       ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "statut", [], "any", false, false, false, 21), 'row');
        yield "
       ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "texte", [], "any", false, false, false, 22), 'row');
        yield "
       ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "traduction", [], "any", false, false, false, 23), 'row');
        yield "
       ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "notes", [], "any", false, false, false, 24), 'row');
        yield "
       ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "commentaire", [], "any", false, false, false, 25), 'row');
        yield "
       ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), 'row');
        yield "
       ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "visible", [], "any", false, false, false, 27), 'row');
        yield "

      ";
        // line 44
        yield "        <div class=\"ficheMotCles\" 
        data-index=\"";
        // line 45
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "ficheMotCles", [], "any", false, false, false, 45)) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "ficheMotCles", [], "any", false, false, false, 45)), "vars", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45) + 1), "html", null, true)) : (0));
        yield "\"
        data-prototype=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "ficheMotCles", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "prototype", [], "any", false, false, false, 46), 'widget'), "html_attr");
        yield "\">
          ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "ficheMotCles", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["ficheMotCle"]) {
            // line 48
            yield "        <div class=\"motClesGroup\" >
            ";
            // line 49
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["ficheMotCle"], 'widget');
            yield "
            
            <button type=\"button\" class=\"btn btn-danger remove-mot-cle\" style=\"margin-bottom:1em;float:right;\"><i class=\"fas fa-minus\"></i></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ficheMotCle'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "    </div>

          ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "plus", [], "any", false, false, false, 56), 'row', ["attr" => ["class" => "plus btn-primary"]]);
        yield "
          ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "Enregistrer", [], "any", false, false, false, 57), 'row');
        yield "
       ";
        // line 58
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_end');
        yield "
         <a href=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fiche_duplicate", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 59, $this->source); })()), "getIdFiche", [], "method", false, false, false, 59)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">Dupliquer la fiche</a>
         ";
        // line 61
        yield "         <p></p>
       <div>
       ";
        // line 63
        if ((($tmp =  !(null === (isset($context["previous_fiche"]) || array_key_exists("previous_fiche", $context) ? $context["previous_fiche"] : (function () { throw new RuntimeError('Variable "previous_fiche" does not exist.', 63, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 64
            yield "              <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fiche_edit_total", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["previous_fiche"]) || array_key_exists("previous_fiche", $context) ? $context["previous_fiche"] : (function () { throw new RuntimeError('Variable "previous_fiche" does not exist.', 64, $this->source); })()), "getIdFiche", [], "method", false, false, false, 64), "liste" => "resultats"]), "html", null, true);
            yield "\" class=\"btn btn-outline-secondary\" style=\"margin-right: 20px\"> <strong> <<</strong></a>
       ";
        }
        // line 66
        yield "       ";
        if ((($tmp =  !(null === (isset($context["next_fiche"]) || array_key_exists("next_fiche", $context) ? $context["next_fiche"] : (function () { throw new RuntimeError('Variable "next_fiche" does not exist.', 66, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "              <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fiche_edit_total", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["next_fiche"]) || array_key_exists("next_fiche", $context) ? $context["next_fiche"] : (function () { throw new RuntimeError('Variable "next_fiche" does not exist.', 67, $this->source); })()), "getIdFiche", [], "method", false, false, false, 67), "liste" => "resultats"]), "html", null, true);
            yield "\" class=\"btn btn-outline-secondary\" > <strong> >></strong> </a>
       ";
        }
        // line 69
        yield "       </div>
   </div>
   <script src=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
      <script>
  \$(document).ready(function() {
    \$(\x27.select2\x27).select2();

    \$(\x27.plus\x27).click(function(e) {
        e.preventDefault();
        var \$motClesContainer = \$(\x27#motClesContainer\x27);
        var \$motClesGroupClone = \$motClesContainer.children(\x27.motClesGroup:first\x27).clone(true);
        \$motClesGroupClone.find(\x27.motCles\x27).val(\x27\x27);
        \$motClesGroupClone.find(\x27.precision\x27).val(\x27\x27);
        \$motClesGroupClone.appendTo(\$motClesContainer);
        \$(\x27.select2\x27).select2();
    });
  \$(document).on(\x27click\x27, \x27.minus\x27, function(e) {
      e.preventDefault();

      var \$motCleGroup = \$(this).closest(\x27.motClesGroup\x27);
      var ficheMotCleId = \$(this).data(\x27id\x27); // Récupération de l\x27ID de l\x27entité à supprimer

      \$.ajax({
          url: \x27/fiche-mot-cle/delete/\x27 + ficheMotCleId, // Utilisation de l\x27ID dans l\x27URL
          type: \x27DELETE\x27,
          success: function(result) {
              \$motCleGroup.remove();
          }
      });
  });




    \$(\x27form\x27).submit(function() {
        var precisionValues = [];
        \$(\x27.precision\x27).each(function() {
            precisionValues.push(\$(this).val());
        });
        var precisionValuesJSON = JSON.stringify(precisionValues);
        \$(\x27<input>\x27).attr({
            type: \x27hidden\x27,
            name: \x27precisionValues\x27,
            value: precisionValuesJSON
        }).appendTo(\x27form\x27);
    });
});
            </script>

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
        return "fiche/editTotal.html.twig";
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
        return array (  238 => 71,  234 => 69,  228 => 67,  225 => 66,  219 => 64,  217 => 63,  213 => 61,  209 => 59,  205 => 58,  201 => 57,  197 => 56,  193 => 54,  182 => 49,  179 => 48,  175 => 47,  171 => 46,  167 => 45,  164 => 44,  159 => 27,  155 => 26,  151 => 25,  147 => 24,  143 => 23,  139 => 22,  135 => 21,  131 => 20,  127 => 19,  123 => 18,  119 => 17,  113 => 13,  100 => 12,  84 => 6,  80 => 5,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block head %}
   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
   <link rel=\"stylesheet\" href=\"{{ asset(\x27css/bootstrap.min.css\x27) }}\">
   <link rel=\"stylesheet\" href=\"{{ asset(\x27css/ajoutFiche.css\x27) }}\">
   <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css\" rel=\"stylesheet\" />
   <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
   <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js\"></script>
{% endblock %}

{% block body %}
<body>
   <div class=\"card-body classs\">
       <h1>Modifier la fiche</h1>

       {{ form_start(form, {\x27attr\x27: {\x27novalidate\x27: \x27novalidate\x27}}) }}
       {{ form_row(form.refer) }}
       {{ form_row(form.edition) }}
       {{ form_row(form.denomination) }}
       {{ form_row(form.statut) }}
       {{ form_row(form.texte) }}
       {{ form_row(form.traduction) }}
       {{ form_row(form.notes) }}
       {{ form_row(form.commentaire) }}
       {{ form_row(form.user) }}
       {{ form_row(form.visible) }}

      {# {% if form.ficheMotCles is not empty %}
          {% for ficheMotCle in form.ficheMotCles %}
                  {{ form_row(ficheMotCle.motCle, {\x27attr\x27: {\x27class\x27: \x27motCles\x27}}) }}
                  {{ form_row(ficheMotCle.precision, {\x27attr\x27: {\x27class\x27: \x27precision\x27}}) }}
<a href=\"{{ path(\x27fiche_mot_cle_delete\x27, {\x27motCle\x27: ficheMotCle.motCle.vars.data, \x27fiche\x27: fiche.getIdFiche()}) }}\" class=\"btn btn-danger\" onclick=\"return confirm(\x27Êtes-vous sûr de vouloir supprimer ce mot-clé ?\x27)\">Supprimer</a>

          {% endfor %}
            {% endif %}
        <div id=\"motClesContainer\">
         <div class=\"motClesGroup\">
             {{ form_row(form.ficheMotCles.vars.prototype.motCle, {\x27attr\x27: {\x27class\x27: \x27motCles\x27}}) }}
             {{ form_row(form.ficheMotCles.vars.prototype.precision, {\x27attr\x27: {\x27class\x27: \x27precision\x27}}) }}

     </div>
       </div> #}
        <div class=\"ficheMotCles\" 
        data-index=\"{{ form.ficheMotCles|length > 0 ? form.ficheMotCles|last.vars.name + 1 : 0 }}\"
        data-prototype=\"{{ form_widget(form.ficheMotCles.vars.prototype)|e(\x27html_attr\x27) }}\">
          {% for ficheMotCle in form.ficheMotCles %}
        <div class=\"motClesGroup\" >
            {{ form_widget(ficheMotCle) }}
            
            <button type=\"button\" class=\"btn btn-danger remove-mot-cle\" style=\"margin-bottom:1em;float:right;\"><i class=\"fas fa-minus\"></i></button>
        </div>
    {% endfor %}
    </div>

          {{ form_row(form.plus, {\x27attr\x27: {\x27class\x27: \x27plus btn-primary\x27 }}) }}
          {{ form_row(form.Enregistrer) }}
       {{ form_end(form) }}
         <a href=\"{{ path(\x27app_fiche_duplicate\x27, {\x27id\x27: fiche.getIdFiche()}) }}\" class=\"btn btn-primary\">Dupliquer la fiche</a>
         {# <a href=\"{{ path(\x27fiche_list\x27) }}\" class=\"btn btn-primary\">retourner à la liste</a> #}
         <p></p>
       <div>
       {% if previous_fiche is not null %}
              <a href=\"{{ path(\x27app_fiche_edit_total\x27, {id: previous_fiche.getIdFiche(), liste: \x27resultats\x27}) }}\" class=\"btn btn-outline-secondary\" style=\"margin-right: 20px\"> <strong> <<</strong></a>
       {% endif %}
       {% if next_fiche is not null %}
              <a href=\"{{ path(\x27app_fiche_edit_total\x27, {id: next_fiche.getIdFiche(), liste: \x27resultats\x27}) }}\" class=\"btn btn-outline-secondary\" > <strong> >></strong> </a>
       {% endif %}
       </div>
   </div>
   <script src=\"{{ asset(\x27js/bootstrap.bundle.min.js\x27) }}\"></script>
      <script>
  \$(document).ready(function() {
    \$(\x27.select2\x27).select2();

    \$(\x27.plus\x27).click(function(e) {
        e.preventDefault();
        var \$motClesContainer = \$(\x27#motClesContainer\x27);
        var \$motClesGroupClone = \$motClesContainer.children(\x27.motClesGroup:first\x27).clone(true);
        \$motClesGroupClone.find(\x27.motCles\x27).val(\x27\x27);
        \$motClesGroupClone.find(\x27.precision\x27).val(\x27\x27);
        \$motClesGroupClone.appendTo(\$motClesContainer);
        \$(\x27.select2\x27).select2();
    });
  \$(document).on(\x27click\x27, \x27.minus\x27, function(e) {
      e.preventDefault();

      var \$motCleGroup = \$(this).closest(\x27.motClesGroup\x27);
      var ficheMotCleId = \$(this).data(\x27id\x27); // Récupération de l\x27ID de l\x27entité à supprimer

      \$.ajax({
          url: \x27/fiche-mot-cle/delete/\x27 + ficheMotCleId, // Utilisation de l\x27ID dans l\x27URL
          type: \x27DELETE\x27,
          success: function(result) {
              \$motCleGroup.remove();
          }
      });
  });




    \$(\x27form\x27).submit(function() {
        var precisionValues = [];
        \$(\x27.precision\x27).each(function() {
            precisionValues.push(\$(this).val());
        });
        var precisionValuesJSON = JSON.stringify(precisionValues);
        \$(\x27<input>\x27).attr({
            type: \x27hidden\x27,
            name: \x27precisionValues\x27,
            value: precisionValuesJSON
        }).appendTo(\x27form\x27);
    });
});
            </script>

{% endblock %}", "fiche/editTotal.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\fiche\\editTotal.html.twig");
    }
}
