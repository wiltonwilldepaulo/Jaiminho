<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>404 — Página não encontrada</title>

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="" crossorigin="anonymous">

    <style>
        /* --------- Design Tokens --------- */
        :root {
            --bg-0: #0f1724;
            /* deep */
            --bg-1: #0b1220;
            /* darker */
            --card-bg: rgba(255, 255, 255, 0.03);
            --glass: rgba(255, 255, 255, 0.04);
            --accent: #7c9cff;
            /* primary accent */
            --accent-2: #6ee7b7;
            --muted: #94a3b8;
            --glass-border: rgba(255, 255, 255, 0.06);
            --radius: 14px;
            --max-width: 1100px;
            --transition: 250ms cubic-bezier(.2, .9, .3, 1);
            color-scheme: light dark;
        }

        /* Reset & base */
        html,
        body {
            height: 100%;
        }

        body {
            margin: 0;
            min-height: 100%;
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
            background: radial-gradient(1200px 600px at 10% 10%, rgba(124, 156, 255, 0.08), transparent 6%),
                radial-gradient(1000px 500px at 90% 90%, rgba(110, 231, 183, 0.04), transparent 8%),
                linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 3rem 1rem;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* Container */
        .error-wrap {
            width: 100%;
            max-width: var(--max-width);
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(15, 23, 42, 0.12);
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.85));
            display: flex;
            align-items: stretch;
        }

        /* Left column: content */
        .error-left {
            flex: 1 1 520px;
            padding: 2.25rem 2rem;
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }

        .brand-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
        }

        .brand-logo {
            height: 36px;
            display: inline-block
        }

        .code-badge {
            display: inline-grid;
            place-items: center;
            min-width: 84px;
            padding: 0.5rem 0.75rem;
            border-radius: 12px;
            background: linear-gradient(90deg, rgba(124, 156, 255, 0.12), rgba(110, 231, 183, 0.06));
            color: var(--accent);
            font-weight: 700;
            font-size: 1.4rem;
            box-shadow: 0 6px 18px rgba(99, 102, 241, 0.08);
        }

        h1.h1-404 {
            font-size: 2.15rem;
            margin: 0 0 .25rem 0;
            letter-spacing: -0.02em
        }

        p.lead-muted {
            margin: 0;
            color: var(--muted)
        }

        .actions {
            display: flex;
            gap: 0.75rem;
            flex-wrap: wrap
        }

        .search-box {
            max-width: 520px;
            width: 100%
        }

        .suggestions {
            color: var(--muted);
            font-size: 0.95rem
        }

        /* Right column: illustration */
        .error-right {
            width: 420px;
            flex: 0 0 420px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            background: linear-gradient(180deg, rgba(124, 156, 255, 0.03), rgba(110, 231, 183, 0.02));
        }

        .illustration {
            width: 100%;
            height: 100%;
            max-width: 360px;
            max-height: 360px;
            display: block;
        }

        /* subtle floating animation */
        @media (prefers-reduced-motion: no-preference) {
            .float-slow {
                animation: float 6s ease-in-out infinite
            }

            @keyframes float {
                0% {
                    transform: translateY(0)
                }

                50% {
                    transform: translateY(-8px)
                }

                100% {
                    transform: translateY(0)
                }
            }
        }

        /* responsive */
        @media (max-width:991px) {
            .error-wrap {
                flex-direction: column
            }

            .error-right {
                order: 2;
                width: 100%;
                flex: 0 0 auto;
                padding: 1.25rem
            }

            .error-left {
                padding: 1.25rem
            }
        }

        @media (max-width:576px) {
            .code-badge {
                min-width: 68px;
                font-size: 1.15rem
            }

            h1.h1-404 {
                font-size: 1.6rem
            }
        }

        /* buttons */
        .btn-primary {
            background: linear-gradient(90deg, var(--accent), #566bff);
            border: 0;
            padding: 0.8rem 1.25rem;
            border-radius: 10px;
            font-weight: 600;
            transition: var(--transition)
        }

        .btn-ghost {
            background: transparent;
            border: 1px solid rgba(15, 23, 42, 0.06);
            padding: 0.7rem 1rem;
            border-radius: 10px
        }

        .meta {
            font-size: 0.9rem;
            color: var(--muted)
        }

        /* small focus improvements */
        .form-control:focus {
            box-shadow: 0 6px 20px rgba(99, 102, 241, 0.08);
            border-color: rgba(124, 156, 255, 0.6)
        }
    </style>
</head>

<body>
    <main class="container">
        <section class="error-wrap">

            <div class="error-left">
                <div class="brand-row">
                    <div class="d-flex align-items-center gap-2">
                        <a href="/" class="btn btn-sm btn-ghost">Home</a>
                    </div>
                </div>

                <div aria-hidden="false">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="code-badge" aria-hidden="true">404</div>
                        <div>
                            <h1 class="h1-404">Ops — Página não encontrada</h1>
                            <p class="lead-muted">A página que você tentou acessar não existe, foi removida ou o link está incorreto.</p>
                        </div>
                    </div>

                    <p class="suggestions">Tente as opções abaixo ou pesquise no site — pode encontrar o que procura em poucos segundos.</p>

                    <div class="mt-3 actions">
                        <a href="/" class="btn btn-primary">Ir para a Home</a>
                    </div>

                    <hr>

                    <div class="d-flex flex-column flex-sm-row gap-3">
                        <div>
                            <div class="meta">Contato rápido</div>
                            <div class="fw-medium">suporte@exemplo.com</div>
                        </div>
                    </div>
                </div>
                <div class="mt-auto meta small">© <span id="currentYear"></span> Sua Empresa — se isso for um erro, por favor nos avise.</div>
            </div>

            <div class="error-right d-none d-lg-flex">
                <!-- Optimized inline SVG illustration + subtle motion -->
                <svg class="illustration float-slow" viewBox="0 0 480 420" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Ilustração: página não encontrada">
                    <defs>
                        <linearGradient id="g1" x1="0" x2="1">
                            <stop offset="0" stop-color="#7c9cff" stop-opacity="0.18" />
                            <stop offset="1" stop-color="#6ee7b7" stop-opacity="0.08" />
                        </linearGradient>
                    </defs>

                    <rect x="18" y="38" width="444" height="320" rx="20" fill="url(#g1)" opacity="0.9" />

                    <g transform="translate(70,90)">
                        <rect x="0" y="0" width="140" height="110" rx="12" fill="#fff" opacity="0.95" stroke="#eef2ff" />
                        <rect x="160" y="12" width="230" height="84" rx="10" fill="#fff" opacity="0.95" stroke="#e6f3ea" />
                        <circle cx="50" cy="178" r="34" fill="#f0f8ff" stroke="#e6efff" />
                        <path d="M0 230 L320 230" stroke="#f1f5ff" stroke-width="18" stroke-linecap="round" />
                        <text x="10" y="60" fill="#6b7280" font-size="22" font-family="sans-serif">Nada por aqui</text>
                    </g>

                </svg>
            </div>

        </section>
    </main>

    <script>
        // Accessible focus management & minor JS
        document.getElementById('currentYear').textContent = new Date().getFullYear();

        // If user navigates to 404 from another site, focus the search input for quick action
        (function() {
            try {
                var q = document.querySelector('input[name=q]');
                if (q) q.setAttribute('autocomplete', 'off');
                if (q && document.referrer && new URL(document.referrer).hostname !== location.hostname) {
                    q.focus();
                }
            } catch (e) {
                /* ignore in older browsers */
            }
        })();
    </script>

    <!-- Bootstrap JS bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="" crossorigin="anonymous"></script>
</body>

</html>