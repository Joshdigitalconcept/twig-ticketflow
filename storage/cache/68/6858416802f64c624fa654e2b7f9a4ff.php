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

/* dashboard.twig */
class __TwigTemplate_8478cd6c20f3db54b1a57ab298e8409e extends Template
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
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Dashboard - TicketFlow";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "<main id=\"main\" class=\"flex-1 bg-gray-50\">
    <!-- Header / Nav -->
    <header class=\"bg-white shadow-sm border-b border-gray-200\">
        <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center\">
            <div class=\"flex items-center space-x-6\">
                <h1 class=\"text-2xl font-bold text-gray-900\">Dashboard</h1>
                <nav class=\"hidden md:flex space-x-4\">
                    <a href=\"/dashboard\" class=\"text-blue-600 font-medium\">Overview</a>
                    <a href=\"/tickets\" class=\"text-gray-600 hover:text-blue-600\">Tickets</a>
                </nav>
            </div>
            <button 
                id=\"logout-btn\"
                class=\"px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 transition-colors\"
            >
                Logout
            </button>
        </div>
    </header>

    <!-- Stats Section -->
    <section class=\"py-12\">
        <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
            <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6\">
                <!-- Total Tickets -->
                <div class=\"bg-white rounded-xl shadow-lg p-6 flex items-center space-x-4\">
                    <div class=\"w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center\">
                        <svg class=\"w-6 h-6 text-blue-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\"></path>
                        </svg>
                    </div>
                    <div>
                        <p class=\"text-sm font-medium text-gray-600\">Total Tickets</p>
                        <p id=\"total-tickets\" class=\"text-2xl font-bold text-gray-900\">0</p>
                    </div>
                </div>

                <!-- Open -->
                <div class=\"bg-white rounded-xl shadow-lg p-6 flex items-center space-x-4\">
                    <div class=\"w-12 h-12 bg-green-100 rounded-full flex items-center justify-center\">
                        <svg class=\"w-6 h-6 text-status-open\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\"></path>
                        </svg>
                    </div>
                    <div>
                        <p class=\"text-sm font-medium text-gray-600\">Open</p>
                        <p id=\"open-tickets\" class=\"text-2xl font-bold text-status-open\">0</p>
                    </div>
                </div>

                <!-- In Progress -->
                <div class=\"bg-white rounded-xl shadow-lg p-6 flex items-center space-x-4\">
                    <div class=\"w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center\">
                        <svg class=\"w-6 h-6 text-status-progress\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 10V3L4 14h7v7l9-11h-7z\"></path>
                        </svg>
                    </div>
                    <div>
                        <p class=\"text-sm font-medium text-gray-600\">In Progress</p>
                        <p id=\"progress-tickets\" class=\"text-2xl font-bold text-status-progress\">0</p>
                    </div>
                </div>

                <!-- Closed -->
                <div class=\"bg-white rounded-xl shadow-lg p-6 flex items-center space-x-4\">
                    <div class=\"w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center\">
                        <svg class=\"w-6 h-6 text-status-closed\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\"></path>
                        </svg>
                    </div>
                    <div>
                        <p class=\"text-sm font-medium text-gray-600\">Closed</p>
                        <p id=\"closed-tickets\" class=\"text-2xl font-bold text-status-closed\">0</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Actions -->
    <section class=\"py-8 bg-white border-t border-gray-200\">
        <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center\">
            <a href=\"/tickets/create\" class=\"inline-flex items-center px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors\">
                <svg class=\"w-5 h-5 mr-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\"></path>
                </svg>
                Create New Ticket
            </a>
        </div>
    </section>
</main>
";
        yield from [];
    }

    // line 100
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 101
        yield "<script>
// Load and display ticket stats
function updateDashboardStats() {
    const tickets = JSON.parse(localStorage.getItem('tickets') || '[]');
    
    const total = tickets.length;
    const open = tickets.filter(t => t.status === 'open').length;
    const progress = tickets.filter(t => t.status === 'in_progress').length;
    const closed = tickets.filter(t => t.status === 'closed').length;

    document.getElementById('total-tickets').textContent = total;
    document.getElementById('open-tickets').textContent = open;
    document.getElementById('progress-tickets').textContent = progress;
    document.getElementById('closed-tickets').textContent = closed;
}

// Run on load
document.addEventListener('DOMContentLoaded', () => {
    updateDashboardStats();
});
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard.twig";
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
        return array (  174 => 101,  167 => 100,  71 => 7,  64 => 6,  53 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/dashboard.twig #}
{% extends \"base.twig\" %}

{% block title %}Dashboard - TicketFlow{% endblock %}

{% block body %}
<main id=\"main\" class=\"flex-1 bg-gray-50\">
    <!-- Header / Nav -->
    <header class=\"bg-white shadow-sm border-b border-gray-200\">
        <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center\">
            <div class=\"flex items-center space-x-6\">
                <h1 class=\"text-2xl font-bold text-gray-900\">Dashboard</h1>
                <nav class=\"hidden md:flex space-x-4\">
                    <a href=\"/dashboard\" class=\"text-blue-600 font-medium\">Overview</a>
                    <a href=\"/tickets\" class=\"text-gray-600 hover:text-blue-600\">Tickets</a>
                </nav>
            </div>
            <button 
                id=\"logout-btn\"
                class=\"px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 transition-colors\"
            >
                Logout
            </button>
        </div>
    </header>

    <!-- Stats Section -->
    <section class=\"py-12\">
        <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
            <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6\">
                <!-- Total Tickets -->
                <div class=\"bg-white rounded-xl shadow-lg p-6 flex items-center space-x-4\">
                    <div class=\"w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center\">
                        <svg class=\"w-6 h-6 text-blue-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\"></path>
                        </svg>
                    </div>
                    <div>
                        <p class=\"text-sm font-medium text-gray-600\">Total Tickets</p>
                        <p id=\"total-tickets\" class=\"text-2xl font-bold text-gray-900\">0</p>
                    </div>
                </div>

                <!-- Open -->
                <div class=\"bg-white rounded-xl shadow-lg p-6 flex items-center space-x-4\">
                    <div class=\"w-12 h-12 bg-green-100 rounded-full flex items-center justify-center\">
                        <svg class=\"w-6 h-6 text-status-open\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\"></path>
                        </svg>
                    </div>
                    <div>
                        <p class=\"text-sm font-medium text-gray-600\">Open</p>
                        <p id=\"open-tickets\" class=\"text-2xl font-bold text-status-open\">0</p>
                    </div>
                </div>

                <!-- In Progress -->
                <div class=\"bg-white rounded-xl shadow-lg p-6 flex items-center space-x-4\">
                    <div class=\"w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center\">
                        <svg class=\"w-6 h-6 text-status-progress\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 10V3L4 14h7v7l9-11h-7z\"></path>
                        </svg>
                    </div>
                    <div>
                        <p class=\"text-sm font-medium text-gray-600\">In Progress</p>
                        <p id=\"progress-tickets\" class=\"text-2xl font-bold text-status-progress\">0</p>
                    </div>
                </div>

                <!-- Closed -->
                <div class=\"bg-white rounded-xl shadow-lg p-6 flex items-center space-x-4\">
                    <div class=\"w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center\">
                        <svg class=\"w-6 h-6 text-status-closed\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\"></path>
                        </svg>
                    </div>
                    <div>
                        <p class=\"text-sm font-medium text-gray-600\">Closed</p>
                        <p id=\"closed-tickets\" class=\"text-2xl font-bold text-status-closed\">0</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Actions -->
    <section class=\"py-8 bg-white border-t border-gray-200\">
        <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center\">
            <a href=\"/tickets/create\" class=\"inline-flex items-center px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors\">
                <svg class=\"w-5 h-5 mr-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\"></path>
                </svg>
                Create New Ticket
            </a>
        </div>
    </section>
</main>
{% endblock %}

{% block scripts %}
<script>
// Load and display ticket stats
function updateDashboardStats() {
    const tickets = JSON.parse(localStorage.getItem('tickets') || '[]');
    
    const total = tickets.length;
    const open = tickets.filter(t => t.status === 'open').length;
    const progress = tickets.filter(t => t.status === 'in_progress').length;
    const closed = tickets.filter(t => t.status === 'closed').length;

    document.getElementById('total-tickets').textContent = total;
    document.getElementById('open-tickets').textContent = open;
    document.getElementById('progress-tickets').textContent = progress;
    document.getElementById('closed-tickets').textContent = closed;
}

// Run on load
document.addEventListener('DOMContentLoaded', () => {
    updateDashboardStats();
});
</script>
{% endblock %}", "dashboard.twig", "C:\\HNG\\task2\\twig-ticket-app\\templates\\dashboard.twig");
    }
}
