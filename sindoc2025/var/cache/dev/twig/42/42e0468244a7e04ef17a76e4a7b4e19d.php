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

/* test_ckeditor/index.html.twig */
class __TwigTemplate_ef7057e0c07bf37af4902cdf69c7c489 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test_ckeditor/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test_ckeditor/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <title>Test CKEditor - Tes classes</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <style>
        /* TES styles existants */
        .ckeditor-field {
            width: 100%;
            min-height: 150px;
        }
        .form-control {
            margin-bottom: 15px;
        }
    </style>
</head>
<body class=\"container mt-5\">
    <h1>Test CKEditor avec TES classes</h1>
    <p class=\"text-muted\">Utilise les classes <code>.ckeditor-field</code> et <code>.form-control</code></p>
    
    ";
        // line 21
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
    
    <div class=\"mb-3\">
        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "titre", [], "any", false, false, false, 24), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "titre", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>
    
    <div class=\"mb-3\">
        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "commentaire", [], "any", false, false, false, 29), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "commentaire", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "ckeditor-field form-control"]]);
        yield "
        <div class=\"form-text\">Utilisez les boutons <strong>Gras</strong> et <em>Italique</em> ci-dessus.</div>
    </div>
    
    <button type=\"submit\" class=\"btn btn-primary\">Tester l\x27envoi</button>
    
    ";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_end');
        yield "
    
    <!-- Bootstrap JS -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
    
    <!-- CKEditor 5 -->
    <!--<script src=\"https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js\"></script>-->
            <script src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ckeditor5/ckeditor.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ckeditor5/translations/fr.js"), "html", null, true);
        yield "\"></script>
    
    <script>
        document.addEventListener(\x27DOMContentLoaded\x27, function() {
            console.log(\x27🔍 Recherche des champs avec classe .ckeditor-field...\x27);
            
            // Trouve tous les éléments avec TA classe .ckeditor-field
            const ckeditorFields = document.querySelectorAll(\x27.ckeditor-field\x27);
            console.log(\x27✅ Champs trouvés:\x27, ckeditorFields.length);
            
            ckeditorFields.forEach((field, index) => {
                console.log(`🚀 Initialisation du champ \${index + 1}:`, field.id || field.className);
                
                ClassicEditor
                    .create(field, {
                        // Configuration pour seulement gras et italique
                        toolbar: {
                            items: [\x27bold\x27, \x27italic\x27]
                        },
                        language: \x27fr\x27,
                        height: \x27200px\x27,
                        placeholder: \x27Écrivez votre commentaire ici...\x27
                    })
                    .then(editor => {
                        console.log(`✅ CKEditor \${index + 1} initialisé avec succès`);
                        
                        // Vérifie que la toolbar est bien là
                        const toolbar = editor.ui.view.toolbar;
                        console.log(\x27🛠️ Boutons disponibles:\x27, 
                            toolbar.items.map(item => item.label || item.buttonView?.label).filter(Boolean)
                        );
                        
                        // Affiche la toolbar en console
                        console.log(\x27🎨 Toolbar HTML:\x27, 
                            editor.ui.view.toolbar.element.innerHTML.substring(0, 200) + \x27...\x27
                        );
                    })
                    .catch(error => {
                        console.error(`❌ Erreur sur le champ \${index + 1}:`, error);
                        console.error(\x27Stack:\x27, error.stack);
                    });
            });
            
            // Si aucun champ trouvé, essaye par ID
            if (ckeditorFields.length === 0) {
                console.log(\x27⚠️ Aucun champ .ckeditor-field trouvé, essaye par ID...\x27);
                const byId = document.getElementById(\x27commentaire-field\x27);
                if (byId) {
                    console.log(\x27✅ Champ trouvé par ID:\x27, byId.id);
                    ClassicEditor.create(byId, {
                        toolbar: [\x27bold\x27, \x27italic\x27],
                        language: \x27fr\x27
                    });
                }
            }
        });
    </script>
    
    <!-- Debug visuel -->
    <div class=\"mt-4 p-3 bg-light border rounded\">
        <h5>Debug :</h5>
        <p>Classes utilisées : <code>.ckeditor-field</code> et <code>.form-control</code></p>
        <p>ID du champ commentaire : <code id=\"debug-id\">commentaire-field</code></p>
        <p>Nombre de champs .ckeditor-field : <span id=\"debug-count\">0</span></p>
        <button onclick=\"checkFields()\" class=\"btn btn-sm btn-info\">Vérifier les champs</button>
    </div>
    
    <script>
        function checkFields() {
            const fields = document.querySelectorAll(\x27.ckeditor-field\x27);
            document.getElementById(\x27debug-count\x27).textContent = fields.length;
            console.log(\x27Champs .ckeditor-field:\x27, fields);
            
            fields.forEach((field, i) => {
                console.log(`Champ \${i}:`, {
                    id: field.id,
                    className: field.className,
                    tagName: field.tagName,
                    value: field.value.substring(0, 50)
                });
            });
        }
        
        // Vérifie au chargement
        setTimeout(checkFields, 1000);
    </script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "test_ckeditor/index.html.twig";
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
        return array (  114 => 44,  110 => 43,  100 => 36,  91 => 30,  87 => 29,  80 => 25,  76 => 24,  70 => 21,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>Test CKEditor - Tes classes</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <style>
        /* TES styles existants */
        .ckeditor-field {
            width: 100%;
            min-height: 150px;
        }
        .form-control {
            margin-bottom: 15px;
        }
    </style>
</head>
<body class=\"container mt-5\">
    <h1>Test CKEditor avec TES classes</h1>
    <p class=\"text-muted\">Utilise les classes <code>.ckeditor-field</code> et <code>.form-control</code></p>
    
    {{ form_start(form, {\x27attr\x27: {\x27class\x27: \x27needs-validation\x27, \x27novalidate\x27: \x27novalidate\x27}}) }}
    
    <div class=\"mb-3\">
        {{ form_label(form.titre, null, {\x27label_attr\x27: {\x27class\x27: \x27form-label\x27}}) }}
        {{ form_widget(form.titre, {\x27attr\x27: {\x27class\x27: \x27form-control\x27}}) }}
    </div>
    
    <div class=\"mb-3\">
        {{ form_label(form.commentaire, null, {\x27label_attr\x27: {\x27class\x27: \x27form-label\x27}}) }}
        {{ form_widget(form.commentaire, {\x27attr\x27: {\x27class\x27: \x27ckeditor-field form-control\x27}}) }}
        <div class=\"form-text\">Utilisez les boutons <strong>Gras</strong> et <em>Italique</em> ci-dessus.</div>
    </div>
    
    <button type=\"submit\" class=\"btn btn-primary\">Tester l\x27envoi</button>
    
    {{ form_end(form) }}
    
    <!-- Bootstrap JS -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
    
    <!-- CKEditor 5 -->
    <!--<script src=\"https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js\"></script>-->
            <script src=\"{{ asset(\x27ckeditor5/ckeditor.js\x27) }}\"></script>
            <script src=\"{{ asset(\x27ckeditor5/translations/fr.js\x27) }}\"></script>
    
    <script>
        document.addEventListener(\x27DOMContentLoaded\x27, function() {
            console.log(\x27🔍 Recherche des champs avec classe .ckeditor-field...\x27);
            
            // Trouve tous les éléments avec TA classe .ckeditor-field
            const ckeditorFields = document.querySelectorAll(\x27.ckeditor-field\x27);
            console.log(\x27✅ Champs trouvés:\x27, ckeditorFields.length);
            
            ckeditorFields.forEach((field, index) => {
                console.log(`🚀 Initialisation du champ \${index + 1}:`, field.id || field.className);
                
                ClassicEditor
                    .create(field, {
                        // Configuration pour seulement gras et italique
                        toolbar: {
                            items: [\x27bold\x27, \x27italic\x27]
                        },
                        language: \x27fr\x27,
                        height: \x27200px\x27,
                        placeholder: \x27Écrivez votre commentaire ici...\x27
                    })
                    .then(editor => {
                        console.log(`✅ CKEditor \${index + 1} initialisé avec succès`);
                        
                        // Vérifie que la toolbar est bien là
                        const toolbar = editor.ui.view.toolbar;
                        console.log(\x27🛠️ Boutons disponibles:\x27, 
                            toolbar.items.map(item => item.label || item.buttonView?.label).filter(Boolean)
                        );
                        
                        // Affiche la toolbar en console
                        console.log(\x27🎨 Toolbar HTML:\x27, 
                            editor.ui.view.toolbar.element.innerHTML.substring(0, 200) + \x27...\x27
                        );
                    })
                    .catch(error => {
                        console.error(`❌ Erreur sur le champ \${index + 1}:`, error);
                        console.error(\x27Stack:\x27, error.stack);
                    });
            });
            
            // Si aucun champ trouvé, essaye par ID
            if (ckeditorFields.length === 0) {
                console.log(\x27⚠️ Aucun champ .ckeditor-field trouvé, essaye par ID...\x27);
                const byId = document.getElementById(\x27commentaire-field\x27);
                if (byId) {
                    console.log(\x27✅ Champ trouvé par ID:\x27, byId.id);
                    ClassicEditor.create(byId, {
                        toolbar: [\x27bold\x27, \x27italic\x27],
                        language: \x27fr\x27
                    });
                }
            }
        });
    </script>
    
    <!-- Debug visuel -->
    <div class=\"mt-4 p-3 bg-light border rounded\">
        <h5>Debug :</h5>
        <p>Classes utilisées : <code>.ckeditor-field</code> et <code>.form-control</code></p>
        <p>ID du champ commentaire : <code id=\"debug-id\">commentaire-field</code></p>
        <p>Nombre de champs .ckeditor-field : <span id=\"debug-count\">0</span></p>
        <button onclick=\"checkFields()\" class=\"btn btn-sm btn-info\">Vérifier les champs</button>
    </div>
    
    <script>
        function checkFields() {
            const fields = document.querySelectorAll(\x27.ckeditor-field\x27);
            document.getElementById(\x27debug-count\x27).textContent = fields.length;
            console.log(\x27Champs .ckeditor-field:\x27, fields);
            
            fields.forEach((field, i) => {
                console.log(`Champ \${i}:`, {
                    id: field.id,
                    className: field.className,
                    tagName: field.tagName,
                    value: field.value.substring(0, 50)
                });
            });
        }
        
        // Vérifie au chargement
        setTimeout(checkFields, 1000);
    </script>
</body>
</html>", "test_ckeditor/index.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\test_ckeditor\\index.html.twig");
    }
}
