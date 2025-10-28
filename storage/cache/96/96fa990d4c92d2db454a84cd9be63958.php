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

/* tickets/edit.twig */
class __TwigTemplate_ae26126ad9c127860a699065ac73eb89 extends Template
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
        yield "Edit Ticket - TicketFlow";
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
        yield "<main id=\"main\" class=\"flex-1 bg-gray-50 py-12\">
    <div class=\"max-w-3xl mx-auto px-4 sm:px-6 lg:px-8\">
        <div class=\"bg-white rounded-xl shadow-lg p-8\">
            <h1 class=\"text-2xl font-bold text-gray-900 mb-6\">Edit Ticket</h1>

            <form id=\"edit-form\" class=\"space-y-6\">
                <input type=\"hidden\" id=\"ticket-id\">

                <div>
                    <label for=\"title\" class=\"block text-sm font-medium text-gray-700\">Title <span class=\"text-red-600\">*</span></label>
                    <input 
                        type=\"text\" 
                        id=\"title\" 
                        required 
                        class=\"mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500\"
                    >
                    <p class=\"mt-1 text-xs text-red-600 hidden\" id=\"title-error\">Title is required.</p>
                </div>

                <div>
                    <label for=\"status\" class=\"block text-sm font-medium text-gray-700\">Status <span class=\"text-red-600\">*</span></label>
                    <select 
                        id=\"status\" 
                        required 
                        class=\"mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500\"
                    >
                        <option value=\"open\">Open</option>
                        <option value=\"in_progress\">In Progress</option>
                        <option value=\"closed\">Closed</option>
                    </select>
                    <p class=\"mt-1 text-xs text-red-600 hidden\" id=\"status-error\">Please select a status.</p>
                </div>

                <div>
                    <label for=\"description\" class=\"block text-sm font-medium text-gray-700\">Description</label>
                    <textarea 
                        id=\"description\" 
                        rows=\"4\"
                        class=\"mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500\"
                    ></textarea>
                </div>

                <div class=\"flex space-x-3\">
                    <button 
                        type=\"submit\"
                        class=\"flex-1 py-2 px-4 bg-green-600 text-white font-medium rounded-lg hover:bg-green-700 transition-colors\"
                    >
                        Update Ticket
                    </button>
                    <a href=\"/tickets\" class=\"flex-1 text-center py-2 px-4 bg-gray-200 text-gray-700 font-medium rounded-lg hover:bg-gray-300 transition-colors\">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</main>
";
        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 67
        yield "<script>
document.addEventListener('DOMContentLoaded', () => {
    const urlParts = window.location.pathname.split('/');
    const ticketId = parseInt(urlParts[urlParts.length - 1]);
    const tickets = JSON.parse(localStorage.getItem('tickets') || '[]');
    const ticket = tickets.find(t => t.id === ticketId);

    if (!ticket) {
        showToast('Ticket not found.', 'error');
        setTimeout(() => window.location.href = '/tickets', 1000);
        return;
    }

    document.getElementById('ticket-id').value = ticket.id;
    document.getElementById('title').value = ticket.title;
    document.getElementById('status').value = ticket.status;
    document.getElementById('description').value = ticket.description || '';
});

document.getElementById('edit-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const id = parseInt(document.getElementById('ticket-id').value);
    const title = document.getElementById('title').value.trim();
    const status = document.getElementById('status').value;
    const description = document.getElementById('description').value.trim();

    let valid = true;
    document.querySelectorAll('#edit-form .text-red-600').forEach(el => el.classList.add('hidden'));

    if (!title) {
        document.getElementById('title-error').classList.remove('hidden');
        valid = false;
    }
    if (!['open', 'in_progress', 'closed'].includes(status)) {
        document.getElementById('status-error').classList.remove('hidden');
        valid = false;
    }

    if (!valid) {
        showToast('Please fix the errors.', 'error');
        return;
    }

    let tickets = JSON.parse(localStorage.getItem('tickets') || '[]');
    const index = tickets.findIndex(t => t.id === id);
    if (index !== -1) {
        tickets[index] = { ...tickets[index], title, status, description };
        localStorage.setItem('tickets', JSON.stringify(tickets));
        showToast('Ticket updated!', 'success');
        setTimeout(() => window.location.href = '/tickets', 1000);
    }
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
        return "tickets/edit.twig";
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
        return array (  140 => 67,  133 => 66,  71 => 7,  64 => 6,  53 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/tickets/edit.twig #}
{% extends \"base.twig\" %}

{% block title %}Edit Ticket - TicketFlow{% endblock %}

{% block body %}
<main id=\"main\" class=\"flex-1 bg-gray-50 py-12\">
    <div class=\"max-w-3xl mx-auto px-4 sm:px-6 lg:px-8\">
        <div class=\"bg-white rounded-xl shadow-lg p-8\">
            <h1 class=\"text-2xl font-bold text-gray-900 mb-6\">Edit Ticket</h1>

            <form id=\"edit-form\" class=\"space-y-6\">
                <input type=\"hidden\" id=\"ticket-id\">

                <div>
                    <label for=\"title\" class=\"block text-sm font-medium text-gray-700\">Title <span class=\"text-red-600\">*</span></label>
                    <input 
                        type=\"text\" 
                        id=\"title\" 
                        required 
                        class=\"mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500\"
                    >
                    <p class=\"mt-1 text-xs text-red-600 hidden\" id=\"title-error\">Title is required.</p>
                </div>

                <div>
                    <label for=\"status\" class=\"block text-sm font-medium text-gray-700\">Status <span class=\"text-red-600\">*</span></label>
                    <select 
                        id=\"status\" 
                        required 
                        class=\"mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500\"
                    >
                        <option value=\"open\">Open</option>
                        <option value=\"in_progress\">In Progress</option>
                        <option value=\"closed\">Closed</option>
                    </select>
                    <p class=\"mt-1 text-xs text-red-600 hidden\" id=\"status-error\">Please select a status.</p>
                </div>

                <div>
                    <label for=\"description\" class=\"block text-sm font-medium text-gray-700\">Description</label>
                    <textarea 
                        id=\"description\" 
                        rows=\"4\"
                        class=\"mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500\"
                    ></textarea>
                </div>

                <div class=\"flex space-x-3\">
                    <button 
                        type=\"submit\"
                        class=\"flex-1 py-2 px-4 bg-green-600 text-white font-medium rounded-lg hover:bg-green-700 transition-colors\"
                    >
                        Update Ticket
                    </button>
                    <a href=\"/tickets\" class=\"flex-1 text-center py-2 px-4 bg-gray-200 text-gray-700 font-medium rounded-lg hover:bg-gray-300 transition-colors\">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</main>
{% endblock %}

{% block scripts %}
<script>
document.addEventListener('DOMContentLoaded', () => {
    const urlParts = window.location.pathname.split('/');
    const ticketId = parseInt(urlParts[urlParts.length - 1]);
    const tickets = JSON.parse(localStorage.getItem('tickets') || '[]');
    const ticket = tickets.find(t => t.id === ticketId);

    if (!ticket) {
        showToast('Ticket not found.', 'error');
        setTimeout(() => window.location.href = '/tickets', 1000);
        return;
    }

    document.getElementById('ticket-id').value = ticket.id;
    document.getElementById('title').value = ticket.title;
    document.getElementById('status').value = ticket.status;
    document.getElementById('description').value = ticket.description || '';
});

document.getElementById('edit-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const id = parseInt(document.getElementById('ticket-id').value);
    const title = document.getElementById('title').value.trim();
    const status = document.getElementById('status').value;
    const description = document.getElementById('description').value.trim();

    let valid = true;
    document.querySelectorAll('#edit-form .text-red-600').forEach(el => el.classList.add('hidden'));

    if (!title) {
        document.getElementById('title-error').classList.remove('hidden');
        valid = false;
    }
    if (!['open', 'in_progress', 'closed'].includes(status)) {
        document.getElementById('status-error').classList.remove('hidden');
        valid = false;
    }

    if (!valid) {
        showToast('Please fix the errors.', 'error');
        return;
    }

    let tickets = JSON.parse(localStorage.getItem('tickets') || '[]');
    const index = tickets.findIndex(t => t.id === id);
    if (index !== -1) {
        tickets[index] = { ...tickets[index], title, status, description };
        localStorage.setItem('tickets', JSON.stringify(tickets));
        showToast('Ticket updated!', 'success');
        setTimeout(() => window.location.href = '/tickets', 1000);
    }
});
</script>
{% endblock %}", "tickets/edit.twig", "C:\\HNG\\task2\\twig-ticket-app\\templates\\tickets\\edit.twig");
    }
}
