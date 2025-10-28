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

/* auth/signup.twig */
class __TwigTemplate_0cb884bb4cb114dd81c5ad5231c6fba2 extends Template
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
        yield "Sign Up - TicketFlow";
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
        yield "<main id=\"main\" class=\"flex-1 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 bg-gray-50\">
    <div class=\"max-w-md w-full space-y-8\">
        <div class=\"text-center\">
            <h2 class=\"text-3xl font-bold text-gray-900\">Create your account</h2>
            <p class=\"mt-2 text-sm text-gray-600\">
                Already have an account? <a href=\"/auth/login\" class=\"font-medium text-blue-600 hover:text-blue-500\">Sign in</a>
            </p>
        </div>

        <form id=\"signup-form\" class=\"mt-8 space-y-6\">
            <div class=\"space-y-4\">
                <div>
                    <label for=\"signup-email\" class=\"block text-sm font-medium text-gray-700\">Email address</label>
                    <input 
                        type=\"email\" 
                        id=\"signup-email\" 
                        required 
                        class=\"mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm\"
                        placeholder=\"you@example.com\"
                    >
                    <p class=\"mt-1 text-xs text-red-600 hidden\" id=\"signup-email-error\">Please enter a valid email.</p>
                </div>

                <div>
                    <label for=\"signup-password\" class=\"block text-sm font-medium text-gray-700\">Password</label>
                    <input 
                        type=\"password\" 
                        id=\"signup-password\" 
                        required 
                        minlength=\"6\"
                        class=\"mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm\"
                    >
                    <p class=\"mt-1 text-xs text-red-600 hidden\" id=\"signup-password-error\">Password must be at least 6 characters.</p>
                </div>

                <div>
                    <label for=\"confirm-password\" class=\"block text-sm font-medium text-gray-700\">Confirm Password</label>
                    <input 
                        type=\"password\" 
                        id=\"confirm-password\" 
                        required 
                        class=\"mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm\"
                    >
                    <p class=\"mt-1 text-xs text-red-600 hidden\" id=\"confirm-error\">Passwords do not match.</p>
                </div>
            </div>

            <button 
                type=\"submit\"
                class=\"w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-colors\"
            >
                Create Account
            </button>
        </form>
    </div>
</main>
";
        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 66
        yield "<script>
document.getElementById('signup-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const email = document.getElementById('signup-email').value.trim();
    const password = document.getElementById('signup-password').value;
    const confirm = document.getElementById('confirm-password').value;
    let valid = true;

    document.querySelectorAll('#signup-form .text-red-600').forEach(el => el.classList.add('hidden'));

    if (!email || !email.includes('@') || !email.includes('.')) {
        document.getElementById('signup-email-error').classList.remove('hidden');
        valid = false;
    }
    if (!password || password.length < 6) {
        document.getElementById('signup-password-error').classList.remove('hidden');
        valid = false;
    }
    if (password !== confirm) {
        document.getElementById('confirm-error').classList.remove('hidden');
        valid = false;
    }

    if (!valid) {
        showToast('Please fix the errors.', 'error');
        return;
    }

    // Simulate signup
    localStorage.setItem('ticketapp_session', JSON.stringify({
        email: email,
        loggedIn: true,
        loginTime: Date.now()
    }));
    showToast('Account created! Redirecting...', 'success');
    setTimeout(() => window.location.href = '/dashboard', 1000);
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
        return "auth/signup.twig";
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
        return array (  139 => 66,  132 => 65,  71 => 7,  64 => 6,  53 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/auth/signup.twig #}
{% extends \"base.twig\" %}

{% block title %}Sign Up - TicketFlow{% endblock %}

{% block body %}
<main id=\"main\" class=\"flex-1 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 bg-gray-50\">
    <div class=\"max-w-md w-full space-y-8\">
        <div class=\"text-center\">
            <h2 class=\"text-3xl font-bold text-gray-900\">Create your account</h2>
            <p class=\"mt-2 text-sm text-gray-600\">
                Already have an account? <a href=\"/auth/login\" class=\"font-medium text-blue-600 hover:text-blue-500\">Sign in</a>
            </p>
        </div>

        <form id=\"signup-form\" class=\"mt-8 space-y-6\">
            <div class=\"space-y-4\">
                <div>
                    <label for=\"signup-email\" class=\"block text-sm font-medium text-gray-700\">Email address</label>
                    <input 
                        type=\"email\" 
                        id=\"signup-email\" 
                        required 
                        class=\"mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm\"
                        placeholder=\"you@example.com\"
                    >
                    <p class=\"mt-1 text-xs text-red-600 hidden\" id=\"signup-email-error\">Please enter a valid email.</p>
                </div>

                <div>
                    <label for=\"signup-password\" class=\"block text-sm font-medium text-gray-700\">Password</label>
                    <input 
                        type=\"password\" 
                        id=\"signup-password\" 
                        required 
                        minlength=\"6\"
                        class=\"mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm\"
                    >
                    <p class=\"mt-1 text-xs text-red-600 hidden\" id=\"signup-password-error\">Password must be at least 6 characters.</p>
                </div>

                <div>
                    <label for=\"confirm-password\" class=\"block text-sm font-medium text-gray-700\">Confirm Password</label>
                    <input 
                        type=\"password\" 
                        id=\"confirm-password\" 
                        required 
                        class=\"mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm\"
                    >
                    <p class=\"mt-1 text-xs text-red-600 hidden\" id=\"confirm-error\">Passwords do not match.</p>
                </div>
            </div>

            <button 
                type=\"submit\"
                class=\"w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-colors\"
            >
                Create Account
            </button>
        </form>
    </div>
</main>
{% endblock %}

{% block scripts %}
<script>
document.getElementById('signup-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const email = document.getElementById('signup-email').value.trim();
    const password = document.getElementById('signup-password').value;
    const confirm = document.getElementById('confirm-password').value;
    let valid = true;

    document.querySelectorAll('#signup-form .text-red-600').forEach(el => el.classList.add('hidden'));

    if (!email || !email.includes('@') || !email.includes('.')) {
        document.getElementById('signup-email-error').classList.remove('hidden');
        valid = false;
    }
    if (!password || password.length < 6) {
        document.getElementById('signup-password-error').classList.remove('hidden');
        valid = false;
    }
    if (password !== confirm) {
        document.getElementById('confirm-error').classList.remove('hidden');
        valid = false;
    }

    if (!valid) {
        showToast('Please fix the errors.', 'error');
        return;
    }

    // Simulate signup
    localStorage.setItem('ticketapp_session', JSON.stringify({
        email: email,
        loggedIn: true,
        loginTime: Date.now()
    }));
    showToast('Account created! Redirecting...', 'success');
    setTimeout(() => window.location.href = '/dashboard', 1000);
});
</script>
{% endblock %}", "auth/signup.twig", "C:\\HNG\\task2\\twig-ticket-app\\templates\\auth\\signup.twig");
    }
}
