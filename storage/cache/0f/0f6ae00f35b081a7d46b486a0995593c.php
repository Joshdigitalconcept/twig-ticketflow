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

/* landing.twig */
class __TwigTemplate_d2c11dec584ab3ec295f9ec79f2f1981 extends Template
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
            'styles' => [$this, 'block_styles'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "TicketFlow - Manage Tickets with Ease";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<style>

.wavy-hero {
    position: relative;
    background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
    color: white;
    padding: 6rem 0 8rem;
    overflow: hidden;
}

.wavy-hero::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 120px;
    background: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23f9fafb' fill-opacity='1' d='M0,160L48,176C96,192,192,224,288,224C384,224,480,192,576,160C672,128,768,96,864,112C960,128,1056,192,1152,208C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E\") no-repeat center bottom;
    background-size: cover;
    z-index: 1;
}

.circle-deco-1 {
    position: absolute;
    width: 380px;
    height: 380px;
    background: rgba(34, 197, 94, 0.15);
    border-radius: 50%;
    top: -150px;
    right: -80px;
    z-index: 0;
    pointer-events: none;
}
.circle-deco-2 {
    position: absolute;
    width: 280px;
    height: 280px;
    background: rgba(251, 191, 36, 0.2);
    border-radius: 50%;
    bottom: 10%;
    left: -100px;
    z-index: 0;
    pointer-events: none;
}
.circle-deco-3 {
    position: absolute;
    width: 180px;
    height: 180px;
    background: rgba(139, 92, 246, 0.1);
    border-radius: 50%;
    top: 40%;
    right: 15%;
    z-index: 0;
    pointer-events: none;
}

@media (max-width: 768px) {
    .circle-deco-1 { width: 200px; height: 200px; top: -80px; right: -40px; }
    .circle-deco-2 { width: 150px; height: 150px; left: -60px; }
    .circle-deco-3 { display: none; }
}

/* Status colour helpers (used in feature icons) */
.text-status-open      { color: #22c55e; }   /* green */
.text-status-progress { color: #f59e0b; }   /* amber */
</style>
";
        yield from [];
    }

    // line 74
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 75
        yield "<main id=\"main\" class=\"flex-1\">

    <!-- HERO SECTION -->
    <section class=\"wavy-hero relative\">
        <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10\">
            <div class=\"text-center\">
                <h1 class=\"text-4xl sm:text-5xl md:text-6xl font-extrabold tracking-tight mb-4\">
                    Welcome to <span class=\"text-yellow-300\">TicketFlow</span>
                </h1>
                <p class=\"mt-3 text-lg sm:text-xl md:text-2xl max-w-3xl mx-auto opacity-90\">
                    A modern, secure, and lightning‑fast ticket management system built for teams.
                </p>

                <!-- Built‑with Twig badge -->
                <p class=\"mt-4 text-sm opacity-80\">
                    <span class=\"inline-flex items-center gap-1 bg-white/20 rounded-full px-3 py-1\">
                        <svg class=\"w-4 h-4\" viewBox=\"0 0 24 24\" fill=\"currentColor\"><path d=\"M12 2L2 12h3v8h14v-8h3L12 2z\"/></svg>
                        Built with <strong>Twig</strong> Framework
                    </span>
                </p>

                <div class=\"mt-10 flex flex-col sm:flex-row gap-4 justify-center\">
                    <a href=\"/auth/login\"
                       class=\"inline-flex items-center justify-center px-8 py-4 border border-transparent text-base font-semibold rounded-lg text-blue-600 bg-white hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all\">
                        Login
                    </a>
                    <a href=\"/auth/signup\"
                       class=\"inline-flex items-center justify-center px-8 py-4 border-2 border-white text-base font-semibold rounded-lg text-white hover:bg-white hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white transition-all\">
                        Get Started
                    </a>
                </div>
            </div>
        </div>

        <!-- Decorative Circles -->
        <div class=\"circle-deco-1\"></div>
        <div class=\"circle-deco-2\"></div>
        <div class=\"circle-deco-3\"></div>
    </section>

    <!-- FEATURES SECTION -->
    <section class=\"py-16 bg-gray-50\">
        <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
            <div class=\"text-center mb-12\">
                <h2 class=\"text-3xl sm:text-4xl font-bold text-gray-900\">Why Teams Love TicketFlow</h2>
                <p class=\"mt-4 text-lg text-gray-600\">Everything you need to manage tickets — in one place.</p>
            </div>

            <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8\">
                <!-- Feature 1 -->
                <div class=\"bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300\">
                    <div class=\"w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-4\">
                        <svg class=\"w-6 h-6 text-status-open\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 10V3L4 14h7v7l9-11h-7z\"></path>
                        </svg>
                    </div>
                    <h3 class=\"text-xl font-semibold text-gray-900 mb-2\">Blazing Fast</h3>
                    <p class=\"text-gray-600\">Create, update, and resolve tickets in milliseconds.</p>
                </div>

                <!-- Feature 2 -->
                <div class=\"bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300\">
                    <div class=\"w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center mb-4\">
                        <svg class=\"w-6 h-6 text-status-progress\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z\"></path>
                        </svg>
                    </div>
                    <h3 class=\"text-xl font-semibold text-gray-900 mb-2\">Secure by Default</h3>
                    <p class=\"text-gray-600\">Session‑based auth with protected routes and validation.</p>
                </div>

                <!-- Feature 3 -->
                <div class=\"bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300\">
                    <div class=\"w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mb-4\">
                        <svg class=\"w-6 h-6 text-purple-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z\"></path>
                        </svg>
                    </div>
                    <h3 class=\"text-xl font-semibold text-gray-900 mb-2\">Beautiful Design</h3>
                    <p class=\"text-gray-600\">Consistent, responsive, and accessible across all devices.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class=\"bg-gray-900 text-white py-10\">
        <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center\">
            <p class=\"text-sm\">&copy; 2025 <span class=\"font-semibold\">TicketFlow</span>. All rights reserved.</p>
            <p class=\"mt-2 text-xs text-gray-400\">Built with love for HNG, by Joshua.</p>
        </div>
    </footer>
</main>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "landing.twig";
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
        return array (  149 => 75,  142 => 74,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.twig\" %}

{% block title %}TicketFlow - Manage Tickets with Ease{% endblock %}

{% block styles %}
<style>

.wavy-hero {
    position: relative;
    background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
    color: white;
    padding: 6rem 0 8rem;
    overflow: hidden;
}

.wavy-hero::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 120px;
    background: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23f9fafb' fill-opacity='1' d='M0,160L48,176C96,192,192,224,288,224C384,224,480,192,576,160C672,128,768,96,864,112C960,128,1056,192,1152,208C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E\") no-repeat center bottom;
    background-size: cover;
    z-index: 1;
}

.circle-deco-1 {
    position: absolute;
    width: 380px;
    height: 380px;
    background: rgba(34, 197, 94, 0.15);
    border-radius: 50%;
    top: -150px;
    right: -80px;
    z-index: 0;
    pointer-events: none;
}
.circle-deco-2 {
    position: absolute;
    width: 280px;
    height: 280px;
    background: rgba(251, 191, 36, 0.2);
    border-radius: 50%;
    bottom: 10%;
    left: -100px;
    z-index: 0;
    pointer-events: none;
}
.circle-deco-3 {
    position: absolute;
    width: 180px;
    height: 180px;
    background: rgba(139, 92, 246, 0.1);
    border-radius: 50%;
    top: 40%;
    right: 15%;
    z-index: 0;
    pointer-events: none;
}

@media (max-width: 768px) {
    .circle-deco-1 { width: 200px; height: 200px; top: -80px; right: -40px; }
    .circle-deco-2 { width: 150px; height: 150px; left: -60px; }
    .circle-deco-3 { display: none; }
}

/* Status colour helpers (used in feature icons) */
.text-status-open      { color: #22c55e; }   /* green */
.text-status-progress { color: #f59e0b; }   /* amber */
</style>
{% endblock %}

{% block body %}
<main id=\"main\" class=\"flex-1\">

    <!-- HERO SECTION -->
    <section class=\"wavy-hero relative\">
        <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10\">
            <div class=\"text-center\">
                <h1 class=\"text-4xl sm:text-5xl md:text-6xl font-extrabold tracking-tight mb-4\">
                    Welcome to <span class=\"text-yellow-300\">TicketFlow</span>
                </h1>
                <p class=\"mt-3 text-lg sm:text-xl md:text-2xl max-w-3xl mx-auto opacity-90\">
                    A modern, secure, and lightning‑fast ticket management system built for teams.
                </p>

                <!-- Built‑with Twig badge -->
                <p class=\"mt-4 text-sm opacity-80\">
                    <span class=\"inline-flex items-center gap-1 bg-white/20 rounded-full px-3 py-1\">
                        <svg class=\"w-4 h-4\" viewBox=\"0 0 24 24\" fill=\"currentColor\"><path d=\"M12 2L2 12h3v8h14v-8h3L12 2z\"/></svg>
                        Built with <strong>Twig</strong> Framework
                    </span>
                </p>

                <div class=\"mt-10 flex flex-col sm:flex-row gap-4 justify-center\">
                    <a href=\"/auth/login\"
                       class=\"inline-flex items-center justify-center px-8 py-4 border border-transparent text-base font-semibold rounded-lg text-blue-600 bg-white hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all\">
                        Login
                    </a>
                    <a href=\"/auth/signup\"
                       class=\"inline-flex items-center justify-center px-8 py-4 border-2 border-white text-base font-semibold rounded-lg text-white hover:bg-white hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white transition-all\">
                        Get Started
                    </a>
                </div>
            </div>
        </div>

        <!-- Decorative Circles -->
        <div class=\"circle-deco-1\"></div>
        <div class=\"circle-deco-2\"></div>
        <div class=\"circle-deco-3\"></div>
    </section>

    <!-- FEATURES SECTION -->
    <section class=\"py-16 bg-gray-50\">
        <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
            <div class=\"text-center mb-12\">
                <h2 class=\"text-3xl sm:text-4xl font-bold text-gray-900\">Why Teams Love TicketFlow</h2>
                <p class=\"mt-4 text-lg text-gray-600\">Everything you need to manage tickets — in one place.</p>
            </div>

            <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8\">
                <!-- Feature 1 -->
                <div class=\"bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300\">
                    <div class=\"w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-4\">
                        <svg class=\"w-6 h-6 text-status-open\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 10V3L4 14h7v7l9-11h-7z\"></path>
                        </svg>
                    </div>
                    <h3 class=\"text-xl font-semibold text-gray-900 mb-2\">Blazing Fast</h3>
                    <p class=\"text-gray-600\">Create, update, and resolve tickets in milliseconds.</p>
                </div>

                <!-- Feature 2 -->
                <div class=\"bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300\">
                    <div class=\"w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center mb-4\">
                        <svg class=\"w-6 h-6 text-status-progress\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z\"></path>
                        </svg>
                    </div>
                    <h3 class=\"text-xl font-semibold text-gray-900 mb-2\">Secure by Default</h3>
                    <p class=\"text-gray-600\">Session‑based auth with protected routes and validation.</p>
                </div>

                <!-- Feature 3 -->
                <div class=\"bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300\">
                    <div class=\"w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mb-4\">
                        <svg class=\"w-6 h-6 text-purple-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z\"></path>
                        </svg>
                    </div>
                    <h3 class=\"text-xl font-semibold text-gray-900 mb-2\">Beautiful Design</h3>
                    <p class=\"text-gray-600\">Consistent, responsive, and accessible across all devices.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class=\"bg-gray-900 text-white py-10\">
        <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center\">
            <p class=\"text-sm\">&copy; 2025 <span class=\"font-semibold\">TicketFlow</span>. All rights reserved.</p>
            <p class=\"mt-2 text-xs text-gray-400\">Built with love for HNG, by Joshua.</p>
        </div>
    </footer>
</main>
{% endblock %}", "landing.twig", "C:\\HNG\\task2\\twig-ticket-app\\templates\\landing.twig");
    }
}
