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

/* tickets/index.twig */
class __TwigTemplate_8cc3abef1ab8f02fe60c14ecbd22b0f2 extends Template
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
        yield "Tickets - TicketFlow";
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
    <!-- Header -->
    <header class=\"bg-white shadow-sm border-b border-gray-200\">
        <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center\">
            <div class=\"flex items-center space-x-6\">
                <h1 class=\"text-2xl font-bold text-gray-900\">All Tickets</h1>
                <nav class=\"hidden md:flex space-x-4\">
                        <a href=\"/dashboard\" class=\"text-gray-600 font-medium\">Overview</a>
                        <a href=\"/tickets\" class=\"text-blue-600 hover:text-blue-600\">Tickets</a>
                </nav>
            </div>
            <a href=\"/tickets/create\" class=\"px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition-colors\">
                + New Ticket
            </a>
        </div>
    </header>

    <!-- Tickets List -->
    <section class=\"py-8\">
        <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
            <div id=\"tickets-container\" class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\">
                <!-- Tickets loaded by JS -->
            </div>

            <div id=\"no-tickets\" class=\"text-center py-12 text-gray-500 hidden\">
                <p class=\"text-lg\">No tickets yet. <a href=\"/tickets/create\" class=\"text-blue-600 hover:underline\">Create one!</a></p>
            </div>
        </div>
    </section>
</main>
";
        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 40
        yield "<script>
function renderTickets() {
    const tickets = JSON.parse(localStorage.getItem('tickets') || '[]');
    const container = document.getElementById('tickets-container');
    const noTickets = document.getElementById('no-tickets');

    if (tickets.length === 0) {
        container.innerHTML = '';
        noTickets.classList.remove('hidden');
        return;
    }

    noTickets.classList.add('hidden');
    container.innerHTML = tickets.map(ticket => `
        <div class=\"bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow\">
            <div class=\"flex justify-between items-start mb-3\">
                <h3 class=\"text-lg font-semibold text-gray-900\">\${escapeHtml(ticket.title)}</h3>
                <span class=\"status-badge \${getStatusClass(ticket.status)}\">
                    \${formatStatus(ticket.status)}
                </span>
            </div>
            <p class=\"text-gray-600 text-sm mb-4 line-clamp-2\">\${escapeHtml(ticket.description || 'No description')}</p>
            <div class=\"flex space-x-2\">
                <a href=\"/tickets/edit/\${ticket.id}\" class=\"flex-1 text-center px-3 py-1.5 bg-blue-100 text-blue-700 text-xs font-medium rounded-lg hover:bg-blue-200 transition-colors\">
                    Edit
                </a>
                <button onclick=\"deleteTicket(\${ticket.id})\" class=\"flex-1 px-3 py-1.5 bg-red-100 text-red-700 text-xs font-medium rounded-lg hover:bg-red-200 transition-colors\">
                    Delete
                </button>
            </div>
        </div>
    `).join('');
}

function getStatusClass(status) {
    return {
        'open': 'status-open',
        'in_progress': 'status-in_progress',
        'closed': 'status-closed'
    }[status] || 'status-closed';
}

function formatStatus(status) {
    return status.replace('_', ' ').charAt(0).toUpperCase() + status.slice(1).replace('_', ' ');
}

function escapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
}

function deleteTicket(id) {
    if (!confirm('Are you sure you want to delete this ticket?')) return;

    let tickets = JSON.parse(localStorage.getItem('tickets') || '[]');
    tickets = tickets.filter(t => t.id !== id);
    localStorage.setItem('tickets', JSON.stringify(tickets));
    showToast('Ticket deleted.', 'success');
    renderTickets();
    // Update dashboard stats
    if (window.updateDashboardStats) updateDashboardStats();
}

// Load tickets
document.addEventListener('DOMContentLoaded', renderTickets);
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "tickets/index.twig";
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
        return array (  113 => 40,  106 => 39,  71 => 7,  64 => 6,  53 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/tickets/index.twig #}
{% extends \"base.twig\" %}

{% block title %}Tickets - TicketFlow{% endblock %}

{% block body %}
<main id=\"main\" class=\"flex-1 bg-gray-50\">
    <!-- Header -->
    <header class=\"bg-white shadow-sm border-b border-gray-200\">
        <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center\">
            <div class=\"flex items-center space-x-6\">
                <h1 class=\"text-2xl font-bold text-gray-900\">All Tickets</h1>
                <nav class=\"hidden md:flex space-x-4\">
                        <a href=\"/dashboard\" class=\"text-gray-600 font-medium\">Overview</a>
                        <a href=\"/tickets\" class=\"text-blue-600 hover:text-blue-600\">Tickets</a>
                </nav>
            </div>
            <a href=\"/tickets/create\" class=\"px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition-colors\">
                + New Ticket
            </a>
        </div>
    </header>

    <!-- Tickets List -->
    <section class=\"py-8\">
        <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
            <div id=\"tickets-container\" class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\">
                <!-- Tickets loaded by JS -->
            </div>

            <div id=\"no-tickets\" class=\"text-center py-12 text-gray-500 hidden\">
                <p class=\"text-lg\">No tickets yet. <a href=\"/tickets/create\" class=\"text-blue-600 hover:underline\">Create one!</a></p>
            </div>
        </div>
    </section>
</main>
{% endblock %}

{% block scripts %}
<script>
function renderTickets() {
    const tickets = JSON.parse(localStorage.getItem('tickets') || '[]');
    const container = document.getElementById('tickets-container');
    const noTickets = document.getElementById('no-tickets');

    if (tickets.length === 0) {
        container.innerHTML = '';
        noTickets.classList.remove('hidden');
        return;
    }

    noTickets.classList.add('hidden');
    container.innerHTML = tickets.map(ticket => `
        <div class=\"bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow\">
            <div class=\"flex justify-between items-start mb-3\">
                <h3 class=\"text-lg font-semibold text-gray-900\">\${escapeHtml(ticket.title)}</h3>
                <span class=\"status-badge \${getStatusClass(ticket.status)}\">
                    \${formatStatus(ticket.status)}
                </span>
            </div>
            <p class=\"text-gray-600 text-sm mb-4 line-clamp-2\">\${escapeHtml(ticket.description || 'No description')}</p>
            <div class=\"flex space-x-2\">
                <a href=\"/tickets/edit/\${ticket.id}\" class=\"flex-1 text-center px-3 py-1.5 bg-blue-100 text-blue-700 text-xs font-medium rounded-lg hover:bg-blue-200 transition-colors\">
                    Edit
                </a>
                <button onclick=\"deleteTicket(\${ticket.id})\" class=\"flex-1 px-3 py-1.5 bg-red-100 text-red-700 text-xs font-medium rounded-lg hover:bg-red-200 transition-colors\">
                    Delete
                </button>
            </div>
        </div>
    `).join('');
}

function getStatusClass(status) {
    return {
        'open': 'status-open',
        'in_progress': 'status-in_progress',
        'closed': 'status-closed'
    }[status] || 'status-closed';
}

function formatStatus(status) {
    return status.replace('_', ' ').charAt(0).toUpperCase() + status.slice(1).replace('_', ' ');
}

function escapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
}

function deleteTicket(id) {
    if (!confirm('Are you sure you want to delete this ticket?')) return;

    let tickets = JSON.parse(localStorage.getItem('tickets') || '[]');
    tickets = tickets.filter(t => t.id !== id);
    localStorage.setItem('tickets', JSON.stringify(tickets));
    showToast('Ticket deleted.', 'success');
    renderTickets();
    // Update dashboard stats
    if (window.updateDashboardStats) updateDashboardStats();
}

// Load tickets
document.addEventListener('DOMContentLoaded', renderTickets);
</script>
{% endblock %}", "tickets/index.twig", "C:\\HNG\\task2\\twig-ticket-app\\templates\\tickets\\index.twig");
    }
}
