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

/* auth/login.twig */
class __TwigTemplate_9e5ba81d6729aea430b8a923f0fdd90b extends Template
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
        yield "Login - TicketFlow";
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
            <h2 class=\"text-3xl font-extrabold text-gray-900\">Sign in to your account</h2>
            <p class=\"mt-2 text-sm text-gray-600\">
                Or <a href=\"/auth/signup\" class=\"font-medium text-blue-600 hover:text-blue-500\">create a new account</a>
            </p>
        </div>

        <form id=\"login-form\" class=\"mt-8 space-y-6\">
            <div class=\"space-y-4\">
                <div>
                    <label for=\"email\" class=\"block text-sm font-medium text-gray-700\">Email address</label>
                    <input 
                        type=\"email\" 
                        id=\"email\" 
                        name=\"email\" 
                        required 
                        class=\"mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm\"
                        placeholder=\"test@example.com\"
                    >
                    <p class=\"mt-1 text-xs text-red-600 hidden\" id=\"email-error\">Please enter a valid email.</p>
                </div>

                <div>
                    <label for=\"password\" class=\"block text-sm font-medium text-gray-700\">Password</label>
                    <input 
                        type=\"password\" 
                        id=\"password\" 
                        name=\"password\" 
                        required 
                        minlength=\"6\"
                        class=\"mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm\"
                        placeholder=\"••••••••\"
                    >
                    <p class=\"mt-1 text-xs text-red-600 hidden\" id=\"password-error\">Password must be at least 6 characters.</p>
                </div>
            </div>

            <button 
                type=\"submit\"
                class=\"w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors\"
            >
                Sign in
            </button>

            <div class=\"text-center text-xs text-gray-500\">
                <p>Test: <strong>test@example.com</strong> / <strong>password123</strong></p>
            </div>
        </form>
    </div>
</main>
";
        yield from [];
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 62
        yield "<script>
document.getElementById('login-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value;
    let valid = true;

    // Reset errors
    document.querySelectorAll('.text-red-600').forEach(el => el.classList.add('hidden'));

    // Validate email
    if (!email || !email.includes('@') || !email.includes('.')) {
        document.getElementById('email-error').classList.remove('hidden');
        valid = false;
    }

    // Validate password
    if (!password || password.length < 6) {
        document.getElementById('password-error').classList.remove('hidden');
        valid = false;
    }

    if (!valid) {
        showToast('Please fix the errors above.', 'error');
        return;
    }

    // Simulate login
    if (email === 'test@example.com' && password === 'password123') {
        localStorage.setItem('ticketapp_session', JSON.stringify({
            email: email,
            loggedIn: true,
            loginTime: Date.now()
        }));
        showToast('Login successful! Redirecting...', 'success');
        setTimeout(() => window.location.href = '/dashboard', 1000);
    } else {
        showToast('Invalid email or password. make use of the test mail', 'error');
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
        return "auth/login.twig";
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
        return array (  135 => 62,  128 => 61,  71 => 7,  64 => 6,  53 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/auth/login.twig #}
{% extends \"base.twig\" %}

{% block title %}Login - TicketFlow{% endblock %}

{% block body %}
<main id=\"main\" class=\"flex-1 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 bg-gray-50\">
    <div class=\"max-w-md w-full space-y-8\">
        <div class=\"text-center\">
            <h2 class=\"text-3xl font-extrabold text-gray-900\">Sign in to your account</h2>
            <p class=\"mt-2 text-sm text-gray-600\">
                Or <a href=\"/auth/signup\" class=\"font-medium text-blue-600 hover:text-blue-500\">create a new account</a>
            </p>
        </div>

        <form id=\"login-form\" class=\"mt-8 space-y-6\">
            <div class=\"space-y-4\">
                <div>
                    <label for=\"email\" class=\"block text-sm font-medium text-gray-700\">Email address</label>
                    <input 
                        type=\"email\" 
                        id=\"email\" 
                        name=\"email\" 
                        required 
                        class=\"mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm\"
                        placeholder=\"test@example.com\"
                    >
                    <p class=\"mt-1 text-xs text-red-600 hidden\" id=\"email-error\">Please enter a valid email.</p>
                </div>

                <div>
                    <label for=\"password\" class=\"block text-sm font-medium text-gray-700\">Password</label>
                    <input 
                        type=\"password\" 
                        id=\"password\" 
                        name=\"password\" 
                        required 
                        minlength=\"6\"
                        class=\"mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm\"
                        placeholder=\"••••••••\"
                    >
                    <p class=\"mt-1 text-xs text-red-600 hidden\" id=\"password-error\">Password must be at least 6 characters.</p>
                </div>
            </div>

            <button 
                type=\"submit\"
                class=\"w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors\"
            >
                Sign in
            </button>

            <div class=\"text-center text-xs text-gray-500\">
                <p>Test: <strong>test@example.com</strong> / <strong>password123</strong></p>
            </div>
        </form>
    </div>
</main>
{% endblock %}

{% block scripts %}
<script>
document.getElementById('login-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value;
    let valid = true;

    // Reset errors
    document.querySelectorAll('.text-red-600').forEach(el => el.classList.add('hidden'));

    // Validate email
    if (!email || !email.includes('@') || !email.includes('.')) {
        document.getElementById('email-error').classList.remove('hidden');
        valid = false;
    }

    // Validate password
    if (!password || password.length < 6) {
        document.getElementById('password-error').classList.remove('hidden');
        valid = false;
    }

    if (!valid) {
        showToast('Please fix the errors above.', 'error');
        return;
    }

    // Simulate login
    if (email === 'test@example.com' && password === 'password123') {
        localStorage.setItem('ticketapp_session', JSON.stringify({
            email: email,
            loggedIn: true,
            loginTime: Date.now()
        }));
        showToast('Login successful! Redirecting...', 'success');
        setTimeout(() => window.location.href = '/dashboard', 1000);
    } else {
        showToast('Invalid email or password. make use of the test mail', 'error');
    }
});
</script>
{% endblock %}", "auth/login.twig", "C:\\HNG\\task2\\twig-ticket-app\\templates\\auth\\login.twig");
    }
}
