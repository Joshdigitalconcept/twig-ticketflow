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

/* base.twig */
class __TwigTemplate_de6d622afc60584b845d73e3b37347da extends Template
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
            'title' => [$this, 'block_title'],
            'styles' => [$this, 'block_styles'],
            'body' => [$this, 'block_body'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<!DOCTYPE html>
<html lang=\"en\" class=\"scroll-smooth\">
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    <!-- Tailwind CSS CDN -->
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    maxWidth: {
                        '7xl': '1440px',
                    },
                    colors: {
                        'status-open': '#10b981',
                        'status-progress': '#f59e0b',
                        'status-closed': '#6b7280',
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"/assets/css/style.css\" />

    ";
        // line 31
        yield from $this->unwrap()->yieldBlock('styles', $context, $blocks);
        // line 32
        yield "</head>
<body class=\"bg-gray-50 text-gray-900 font-sans min-h-screen flex flex-col\">

    <!-- Skip to main content -->
    <a href=\"#main\" class=\"sr-only focus:not-sr-only\">Skip to content</a>

    ";
        // line 38
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 40
        yield "
    <!-- Toast Container -->
    <div id=\"toast-container\" class=\"fixed bottom-4 right-4 z-50 space-y-2\"></div>

    <!-- Scripts -->
    <script src=\"/assets/js/toast.js\"></script>
    <script src=\"/assets/js/app.js\"></script>
    ";
        // line 47
        yield from $this->unwrap()->yieldBlock('scripts', $context, $blocks);
        // line 48
        yield "</body>
</html>";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "TicketFlow";
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "    ";
        yield from [];
    }

    // line 47
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  142 => 47,  137 => 39,  130 => 38,  120 => 31,  109 => 7,  103 => 48,  101 => 47,  92 => 40,  90 => 38,  82 => 32,  80 => 31,  53 => 7,  46 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/base.twig #}
<!DOCTYPE html>
<html lang=\"en\" class=\"scroll-smooth\">
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <title>{% block title %}TicketFlow{% endblock %}</title>

    <!-- Tailwind CSS CDN -->
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    maxWidth: {
                        '7xl': '1440px',
                    },
                    colors: {
                        'status-open': '#10b981',
                        'status-progress': '#f59e0b',
                        'status-closed': '#6b7280',
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"/assets/css/style.css\" />

    {% block styles %}{% endblock %}
</head>
<body class=\"bg-gray-50 text-gray-900 font-sans min-h-screen flex flex-col\">

    <!-- Skip to main content -->
    <a href=\"#main\" class=\"sr-only focus:not-sr-only\">Skip to content</a>

    {% block body %}
    {% endblock %}

    <!-- Toast Container -->
    <div id=\"toast-container\" class=\"fixed bottom-4 right-4 z-50 space-y-2\"></div>

    <!-- Scripts -->
    <script src=\"/assets/js/toast.js\"></script>
    <script src=\"/assets/js/app.js\"></script>
    {% block scripts %}{% endblock %}
</body>
</html>", "base.twig", "C:\\HNG\\task2\\twig-ticket-app\\templates\\base.twig");
    }
}
