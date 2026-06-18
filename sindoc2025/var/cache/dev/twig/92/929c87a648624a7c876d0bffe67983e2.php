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

/* admin/users/index.html.twig */
class __TwigTemplate_5c104bfd65271d14b8a82d7424463961 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/index.html.twig"));

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

        yield " Administration ";
        
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
        yield "<style>
.classs{
margin-top: 200px;
}
.classs1{
margin-bottom: 1000px;
}

</style>
    <h1 class=\"classs\" >Administration des utilisateurs </h1>
    <div class=\"classs1\" style=\"margin-top: 0px;\">
    <div class=\"container mt-4\">
    ";
        // line 18
        if ((($tmp =  !(CoreExtension::getAttribute($this->env, $this->source, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 18, $this->source); })()), "items", [], "any", false, false, false, 18) === [])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "        <h1>Liste des utilisateurs </h1>
        ";
            // line 21
            yield "        <div class=\"count mt-4\">
          <h4>
          <small> Il y\x27a ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 23, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 23), "html", null, true);
            yield " utilistauers au total</small>
          </h4>
        </div>
        <table class=\"table table-hover mt-4\">
          <thead>
            <tr>
              <th scope=\"col\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Numéro</font></font></th>
              <th scope=\"col\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Nom</font></font></th>
              <th scope=\"col\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Suppression</font></font></th>
              <th scope=\"col\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Détails Fiche</font></font></th>

            </tr>
          </thead>
          <tbody>
          ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 38
                yield "            <tr class=\"table-primary\">
                 <th scope=\"row\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "getId", [], "any", false, false, false, 39), "html", null, true);
                yield "</font></font></th>
                 <td><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "getUsername", [], "any", false, false, false, 40), "html", null, true);
                yield "</font></font></td>
                 <td><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><form method=\"post\" action=\"";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                yield "\" onsubmit=\"return confirm(\x27Are you sure you want to delete this item?\x27);\">
                     <input type=\"hidden\" name=\"_token\" value=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 42))), "html", null, true);
                yield "\">
                     <button class=\"btn\">Delete
                 </form></button></font></font>
                 </td>

<td>
    <button onclick=\"afficherDetails()\">Voir détails</button>
    <ul id=\"listeDetails\" style=\"display: none;\">
        ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "getFiche", [], "any", false, false, false, 50));
                foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
                    // line 51
                    yield "            <li>

                <strong>Numéro:</strong> ";
                    // line 53
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getIdFiche", [], "any", false, false, false, 53), "html", null, true);
                    yield "<br>
                <strong>Statut:</strong> ";
                    // line 54
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getStatut", [], "any", false, false, false, 54), "getDenomination", [], "any", false, false, false, 54), "html", null, true);
                    yield "<br>
                <strong>Livre:</strong> ";
                    // line 55
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getLivre", [], "any", false, false, false, 55), "getNom", [], "any", false, false, false, 55), "html", null, true);
                    yield "<br>
                <strong>Utilisateur:</strong> ";
                    // line 56
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getUser", [], "any", false, false, false, 56), "getUsername", [], "any", false, false, false, 56), "html", null, true);
                    yield "<br>
                <strong>Référence:</strong> ";
                    // line 57
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getRefer", [], "any", false, false, false, 57), "html", null, true);
                    yield "<br>
                <strong>Référence_Bis:</strong> ";
                    // line 58
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getReferBis", [], "any", false, false, false, 58), "html", null, true);
                    yield "<br>
                <strong>Dénomination:</strong> ";
                    // line 59
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getDenomination", [], "any", false, false, false, 59), "html", null, true);
                    yield "<br>
                <strong>Text:</strong> ";
                    // line 60
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getTexte", [], "any", false, false, false, 60), "html", null, true);
                    yield "<br>
                <strong>Traduction:</strong> ";
                    // line 61
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getTraduction", [], "any", false, false, false, 61), "html", null, true);
                    yield "<br>
                <strong>Notes:</strong> ";
                    // line 62
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getNotes", [], "any", false, false, false, 62), "html", null, true);
                    yield "<br>
                <strong>Edition:</strong> ";
                    // line 63
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getEdition", [], "any", false, false, false, 63), "html", null, true);
                    yield "<br>
                <strong>Commentaire:</strong> ";
                    // line 64
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getCommentaire", [], "any", false, false, false, 64), "html", null, true);
                    yield "<br>
                <strong>Numéro:</strong> ";
                    // line 65
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getNumFiche", [], "any", false, false, false, 65), "html", null, true);
                    yield "<br>
                <strong>Visible:</strong> ";
                    // line 66
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "isVisible", [], "any", false, false, false, 66), "html", null, true);
                    yield "<br>
            </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['fiche'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                yield "    </ul>
</td>


          <!-- JavaScript -->
  <script>
      function afficherDetails() {
          var listeDetails = document.getElementById(\"listeDetails\");
          if (listeDetails.style.display === \"none\") {
              var details = \"\";
              var fiches = document.querySelectorAll(\"#listeDetails li\");

             fiches.forEach(function(fiche) {
                 details += \"<div class=\x27fiche\x27 style=\x27border: 4px solid darkblue; height: 360px; width: 210px;\x27>\" +
                     fiche.innerHTML +
                     \"<button style=\x27margin: 10px; vertical-align: inherit;\x27 class=\x27btn btn-light\x27>Supprimer</button>\" +
                     \"<button style=\x27margin: 10px;\x27 >Modifier</button>\" +

                     \"</div>\";
             });


              ouvrirNouvelleFenetre(details);
          } else {
              listeDetails.style.display = \"none\";
          }
      }

      function ouvrirNouvelleFenetre(details) {
          var nouvelleFenetre = window.open(\"\", \"_blank\");
          nouvelleFenetre.document.write(\"<div style=\x27display: flex; justify-content: space-evenly; \x27>\" + details + \"</div>\");
      }
  </script>



            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            yield "


          </tbody>
        </table>
";
            // line 113
            yield "<div class=\"navigation d-flex justify-content-center mt-4\">
    ";
            // line 114
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 114, $this->source); })()));
            yield "
</div>
";
        } else {
            // line 117
            yield "<h4> Il n\x27y pas d\x27utilisateurs</h4>S
";
        }
        // line 119
        yield "
 </div>
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
        return "admin/users/index.html.twig";
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
        return array (  302 => 119,  298 => 117,  292 => 114,  289 => 113,  282 => 107,  239 => 69,  230 => 66,  226 => 65,  222 => 64,  218 => 63,  214 => 62,  210 => 61,  206 => 60,  202 => 59,  198 => 58,  194 => 57,  190 => 56,  186 => 55,  182 => 54,  178 => 53,  174 => 51,  170 => 50,  159 => 42,  155 => 41,  151 => 40,  147 => 39,  144 => 38,  140 => 37,  123 => 23,  119 => 21,  116 => 19,  114 => 18,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} Administration {% endblock %}

{% block body %}
<style>
.classs{
margin-top: 200px;
}
.classs1{
margin-bottom: 1000px;
}

</style>
    <h1 class=\"classs\" >Administration des utilisateurs </h1>
    <div class=\"classs1\" style=\"margin-top: 0px;\">
    <div class=\"container mt-4\">
    {% if not users.items is same as([])%}
        <h1>Liste des utilisateurs </h1>
        {# total items count #}
        <div class=\"count mt-4\">
          <h4>
          <small> Il y\x27a {{ users.getTotalItemCount}} utilistauers au total</small>
          </h4>
        </div>
        <table class=\"table table-hover mt-4\">
          <thead>
            <tr>
              <th scope=\"col\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Numéro</font></font></th>
              <th scope=\"col\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Nom</font></font></th>
              <th scope=\"col\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Suppression</font></font></th>
              <th scope=\"col\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Détails Fiche</font></font></th>

            </tr>
          </thead>
          <tbody>
          {% for user in users %}
            <tr class=\"table-primary\">
                 <th scope=\"row\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">{{user.getId}}</font></font></th>
                 <td><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">{{user.getUsername}}</font></font></td>
                 <td><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><form method=\"post\" action=\"{{ path(\x27app_users_delete\x27, {\x27id\x27: user.id}) }}\" onsubmit=\"return confirm(\x27Are you sure you want to delete this item?\x27);\">
                     <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token(\x27delete\x27 ~ user.id) }}\">
                     <button class=\"btn\">Delete
                 </form></button></font></font>
                 </td>

<td>
    <button onclick=\"afficherDetails()\">Voir détails</button>
    <ul id=\"listeDetails\" style=\"display: none;\">
        {% for fiche in user.getFiche %}
            <li>

                <strong>Numéro:</strong> {{ fiche.getIdFiche }}<br>
                <strong>Statut:</strong> {{ fiche.getStatut.getDenomination}}<br>
                <strong>Livre:</strong> {{ fiche.getLivre.getNom}}<br>
                <strong>Utilisateur:</strong> {{ fiche.getUser.getUsername}}<br>
                <strong>Référence:</strong> {{ fiche.getRefer }}<br>
                <strong>Référence_Bis:</strong> {{ fiche.getReferBis}}<br>
                <strong>Dénomination:</strong> {{ fiche.getDenomination }}<br>
                <strong>Text:</strong> {{ fiche.getTexte}}<br>
                <strong>Traduction:</strong> {{ fiche.getTraduction }}<br>
                <strong>Notes:</strong> {{ fiche.getNotes }}<br>
                <strong>Edition:</strong> {{ fiche.getEdition}}<br>
                <strong>Commentaire:</strong> {{ fiche.getCommentaire }}<br>
                <strong>Numéro:</strong> {{ fiche.getNumFiche}}<br>
                <strong>Visible:</strong> {{ fiche.isVisible}}<br>
            </li>
        {% endfor %}
    </ul>
</td>


          <!-- JavaScript -->
  <script>
      function afficherDetails() {
          var listeDetails = document.getElementById(\"listeDetails\");
          if (listeDetails.style.display === \"none\") {
              var details = \"\";
              var fiches = document.querySelectorAll(\"#listeDetails li\");

             fiches.forEach(function(fiche) {
                 details += \"<div class=\x27fiche\x27 style=\x27border: 4px solid darkblue; height: 360px; width: 210px;\x27>\" +
                     fiche.innerHTML +
                     \"<button style=\x27margin: 10px; vertical-align: inherit;\x27 class=\x27btn btn-light\x27>Supprimer</button>\" +
                     \"<button style=\x27margin: 10px;\x27 >Modifier</button>\" +

                     \"</div>\";
             });


              ouvrirNouvelleFenetre(details);
          } else {
              listeDetails.style.display = \"none\";
          }
      }

      function ouvrirNouvelleFenetre(details) {
          var nouvelleFenetre = window.open(\"\", \"_blank\");
          nouvelleFenetre.document.write(\"<div style=\x27display: flex; justify-content: space-evenly; \x27>\" + details + \"</div>\");
      }
  </script>



            </tr>
          {% endfor%}



          </tbody>
        </table>
{# display navigation #}
<div class=\"navigation d-flex justify-content-center mt-4\">
    {{ knp_pagination_render(users) }}
</div>
{% else %}
<h4> Il n\x27y pas d\x27utilisateurs</h4>S
{% endif %}

 </div>
 </div>

{% endblock %}

", "admin/users/index.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\admin\\users\\index.html.twig");
    }
}
