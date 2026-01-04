<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'متجر النخبة')</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=alexandria:300,400,500,600,700,800&display=swap" rel="stylesheet" />
        <style>
            :root {
                --bg: #0b0f1a;
                --surface: #111827;
                --surface-2: #0f172a;
                --accent: #22d3ee;
                --accent-2: #a855f7;
                --gold: #f59e0b;
                --text: #f8fafc;
                --muted: #cbd5f5;
                --glass: rgba(255, 255, 255, 0.08);
                --border: rgba(148, 163, 184, 0.3);
                font-family: "Alexandria", system-ui, -apple-system, sans-serif;
            }

            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            body {
                min-height: 100vh;
                background: radial-gradient(circle at top right, rgba(168, 85, 247, 0.25), transparent 45%),
                    radial-gradient(circle at 20% 20%, rgba(34, 211, 238, 0.2), transparent 40%),
                    linear-gradient(135deg, #0b0f1a 0%, #111827 40%, #0b1220 100%);
                color: var(--text);
            }

            a {
                color: inherit;
                text-decoration: none;
            }

            .page {
                display: flex;
                flex-direction: column;
                gap: 2.5rem;
                padding: 2.5rem 1.5rem 4rem;
                max-width: 1200px;
                margin: 0 auto;
            }

            .nav {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 1.5rem;
            }

            .brand {
                display: flex;
                align-items: center;
                gap: 0.75rem;
                font-weight: 700;
                font-size: 1.25rem;
            }

            .brand .logo {
                width: 42px;
                height: 42px;
                border-radius: 14px;
                background: linear-gradient(135deg, var(--accent), var(--accent-2));
                display: grid;
                place-items: center;
                font-weight: 800;
                color: #0f172a;
                box-shadow: 0 15px 30px rgba(34, 211, 238, 0.2);
            }

            .card {
                padding: 2.2rem;
                background: linear-gradient(145deg, rgba(255, 255, 255, 0.06), rgba(15, 23, 42, 0.8));
                border-radius: 24px;
                border: 1px solid rgba(148, 163, 184, 0.2);
                backdrop-filter: blur(12px);
                display: grid;
                gap: 1.4rem;
                box-shadow: 0 15px 40px rgba(15, 23, 42, 0.4);
                max-width: 520px;
                margin: 0 auto;
                width: 100%;
            }

            .card-title {
                font-weight: 700;
                font-size: 1.6rem;
            }

            .card-text {
                color: var(--muted);
                line-height: 1.8;
            }

            .input-group {
                display: grid;
                gap: 0.6rem;
            }

            label {
                font-size: 0.95rem;
                color: var(--muted);
            }

            input {
                padding: 0.85rem 1rem;
                border-radius: 14px;
                border: 1px solid rgba(148, 163, 184, 0.35);
                background: rgba(15, 23, 42, 0.65);
                color: #fff;
                font-size: 1rem;
            }

            input:focus {
                outline: 2px solid rgba(34, 211, 238, 0.6);
            }

            .cta-primary {
                background: linear-gradient(135deg, var(--accent), var(--accent-2));
                color: #0b0f1a;
                padding: 0.85rem 1.6rem;
                border-radius: 999px;
                font-weight: 700;
                border: none;
                cursor: pointer;
                box-shadow: 0 15px 30px rgba(168, 85, 247, 0.25);
            }

            .cta-secondary {
                border: 1px solid var(--border);
                padding: 0.85rem 1.6rem;
                border-radius: 999px;
                color: var(--text);
                font-weight: 600;
                background: rgba(15, 23, 42, 0.6);
                display: inline-flex;
                align-items: center;
                justify-content: center;
                gap: 0.4rem;
            }

            .actions {
                display: flex;
                flex-wrap: wrap;
                gap: 1rem;
                align-items: center;
                justify-content: center;
            }

            .errors {
                padding: 1rem;
                border-radius: 16px;
                background: rgba(248, 113, 113, 0.1);
                border: 1px solid rgba(248, 113, 113, 0.4);
                color: #fecaca;
                font-size: 0.95rem;
            }

            .success {
                padding: 1rem;
                border-radius: 16px;
                background: rgba(34, 197, 94, 0.12);
                border: 1px solid rgba(34, 197, 94, 0.4);
                color: #bbf7d0;
                font-size: 0.95rem;
            }

            .footer-link {
                text-align: center;
                color: rgba(226, 232, 240, 0.7);
                font-size: 0.95rem;
            }

            .footer-link a {
                color: #fff;
                font-weight: 600;
            }
        </style>
    </head>
    <body>
        <div class="page">
            <nav class="nav">
                <a class="brand" href="{{ url('/') }}">
                    <div class="logo">ن</div>
                    <div>
                        متجر النخبة
                        <div style="color: var(--muted); font-size: 0.85rem;">سوق الكراسي والأسرّة والأدوات الصحية</div>
                    </div>
                </a>
                <div class="actions">
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="cta-secondary" type="submit">تسجيل الخروج</button>
                        </form>
                    @else
                        <a class="cta-secondary" href="{{ route('login') }}">تسجيل الدخول</a>
                        <a class="cta-primary" href="{{ route('register') }}">إنشاء حساب</a>
                    @endauth
                </div>
            </nav>

            @yield('content')
        </div>
    </body>
</html>
