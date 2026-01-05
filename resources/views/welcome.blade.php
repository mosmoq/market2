<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>متجر النخبة | سوق المعدات الطبية</title>
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


        <title>متجر النخبة | سوق المعدات الطبية</title>

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
                gap: 4rem;
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

            .nav-links {
                display: flex;
                align-items: center;
                gap: 1rem;
                color: var(--muted);
                font-weight: 500;
            }

            .nav-links a {
                padding: 0.5rem 0.9rem;
                border-radius: 999px;
                transition: all 0.2s ease;
            }

            .nav-links a:hover {
                background: var(--glass);
                color: #fff;
            }

            .cta-primary {
                background: linear-gradient(135deg, var(--accent), var(--accent-2));
                color: #0b0f1a;
                padding: 0.85rem 1.6rem;
                border-radius: 999px;
                font-weight: 700;
                box-shadow: 0 15px 30px rgba(168, 85, 247, 0.25);
            }

            .hero {
                display: grid;
                gap: 2.5rem;
            }

            .hero-content {
                display: grid;
                gap: 1.5rem;
            }

            .hero-tag {
                display: inline-flex;
                align-items: center;
                gap: 0.5rem;
                background: rgba(34, 211, 238, 0.12);
                color: #7dd3fc;
                padding: 0.4rem 1rem;
                border-radius: 999px;
                font-weight: 600;
                font-size: 0.9rem;
                width: fit-content;
            }

            .hero-title {
                font-size: clamp(2.3rem, 5vw, 4rem);
                font-weight: 800;
                line-height: 1.25;
            }

            .hero-title span {
                color: var(--gold);
            }

            .hero-text {
                color: var(--muted);
                font-size: 1.1rem;
                line-height: 1.9;
            }

            .hero-actions {
                display: flex;
                flex-wrap: wrap;
                gap: 1rem;
                align-items: center;
            }

            .cta-secondary {
                border: 1px solid var(--border);
                padding: 0.85rem 1.6rem;
                border-radius: 999px;
                color: var(--text);
                font-weight: 600;
                background: rgba(15, 23, 42, 0.6);
            }

            .hero-cards {
                display: grid;
                gap: 1.5rem;
            }

            .card {
                padding: 1.6rem;
                background: linear-gradient(145deg, rgba(255, 255, 255, 0.06), rgba(15, 23, 42, 0.8));
                border-radius: 24px;
                border: 1px solid rgba(148, 163, 184, 0.2);
                backdrop-filter: blur(12px);
                display: grid;
                gap: 0.8rem;
                box-shadow: 0 15px 40px rgba(15, 23, 42, 0.4);
            }

            .card-title {
                font-weight: 700;
                font-size: 1.1rem;
            }

            .card-text {
                color: var(--muted);
                font-size: 0.95rem;
                line-height: 1.7;
            }

            .stats {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
                gap: 1.2rem;
            }

            .stat {
                padding: 1rem 1.2rem;
                background: rgba(15, 23, 42, 0.7);
                border-radius: 18px;
                border: 1px solid rgba(148, 163, 184, 0.2);
                text-align: center;
            }

            .stat strong {
                font-size: 1.5rem;
                display: block;
            }

            .showcase {
                display: grid;
                gap: 1.5rem;
                grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            }

            .showcase-item {
                padding: 1.3rem;
                border-radius: 20px;
                background: rgba(255, 255, 255, 0.05);
                border: 1px solid rgba(148, 163, 184, 0.15);
                display: grid;
                gap: 0.6rem;
            }

            .showcase-item h4 {
                font-weight: 700;
            }

            .footer {
                text-align: center;
                color: rgba(226, 232, 240, 0.6);
                font-size: 0.9rem;
            }

            @media (min-width: 900px) {
                .hero {
                    grid-template-columns: 1.1fr 0.9fr;
                    align-items: center;
                }

                .hero-cards {
                    grid-template-columns: 1fr;
                }
            }
        </style>
    </head>
    <body>
        <div class="page">
            <nav class="nav">
                <div class="brand">
                    <div class="logo">ن</div>
                    <div>
                        متجر النخبة
                        <div style="color: var(--muted); font-size: 0.85rem;">سوق المعدات الطبية</div>

                    </div>
                </div>
                <div class="nav-links">
                    <a href="#features">المزايا</a>

                    <a href="#collections">التخصصات</a>

                    <a href="#contact">تواصل معنا</a>
                    <a class="cta-primary" href="{{ url('/home') }}">ابدأ التسوق</a>
                </div>
           </nav>


            <section class="hero">
                <div class="hero-content">
                    <span class="hero-tag">تجربة شراء احترافية للمعدات الطبية</span>
                    <h1 class="hero-title">اكتشف أحدث <span>المعدات الطبية</span> والحلول الصحية للعيادات والمستشفيات.</h1>
                    <p class="hero-text">
                        نوفر أجهزة طبية معتمدة، مستلزمات عالية الجودة، وخدمات تجهيز متكاملة للقطاع الطبي. كل ذلك بتجربة
                        شراء ذكية، استشارات متخصصة، وتوصيل سريع ومضمون.
                    </p>
                    <div class="hero-actions">
                        <a class="cta-primary" href="{{ route('login') }}">سجّل الدخول الآن</a>
                        <a class="cta-secondary" href="{{ route('register') }}">إنشاء حساب جديد</a>
                    </div>
                    <div class="stats">
                        <div class="stat">
                            <strong>+850</strong>
                            جهاز ومستلزم
                        </div>
                        <div class="stat">
                            <strong>24/7</strong>
                            دعم فني
                        </div>
                        <div class="stat">
                            <strong>100%</strong>
                            ضمان الجودة

                        </div>
                    </div>
                </div>

                <div class="hero-cards">
                    <div class="card">

                        <div class="card-title">حلول تجهيز العيادات</div>
                        <p class="card-text">
                            باقات متكاملة تشمل الأجهزة التشخيصية، أجهزة قياس العلامات الحيوية، وكامل احتياجات العيادة.
                        </p>
                    </div>
                    <div class="card">
                        <div class="card-title">توريد للمستشفيات</div>
                        <p class="card-text">
                            معدات معتمدة للأقسام الحرجة، غرف العمليات، ووحدات العناية مع خطط توريد مرنة.
                        </p>
                    </div>
                    <div class="card">
                        <div class="card-title">مستلزمات يومية</div>
                        <p class="card-text">
                            مستهلكات طبية، أدوات تعقيم، وملحقات عالية الاعتمادية لتشغيل يومي دون توقف.
                        </p>
                    </div>
                </div>
            </section>

            <section id="features" class="showcase">
                <div class="showcase-item">
                    <h4>اعتماد وجودة</h4>
                    <p class="card-text">منتجات مطابقة للمعايير الطبية مع شهادات جودة موثوقة.</p>
                </div>
                <div class="showcase-item">
                    <h4>توريد سريع</h4>
                    <p class="card-text">شبكة توزيع مرنة لضمان وصول المعدات في الوقت المناسب.</p>
                </div>
                <div class="showcase-item">
                    <h4>خدمة ما بعد البيع</h4>
                    <p class="card-text">فريق صيانة وتدريب لضمان التشغيل السلس للمعدات.</p>
                </div>
            </section>

            <section id="collections" class="showcase">
                <div class="showcase-item">
                    <h4>الأجهزة التشخيصية</h4>
                    <p class="card-text">أجهزة أشعة، سونار، ومناظير بدقة عالية لتشخيص أسرع.</p>
                </div>
                <div class="showcase-item">
                    <h4>معدات العناية المركزة</h4>
                    <p class="card-text">أجهزة تنفس، مراقبة، ومحاليل جاهزة لأعلى مستويات الرعاية.</p>
                </div>
                <div class="showcase-item">
                    <h4>مستلزمات طبية</h4>
                    <p class="card-text">قفازات، كمامات، مستهلكات تعقيم، ومواد تشغيل يومية.</p>
                </div>
            </section>

            <section id="contact" class="card">
                <div class="card-title">تواصل معنا</div>
                <p class="card-text">تحتاج استشارة لتجهيز مركزك الطبي؟ فريقنا جاهز لخدمتك.</p>
            <section id="features" class="showcase">
                <div class="showcase-item">

                    <h4>اعتماد وجودة</h4>
                    <p class="card-text">منتجات مطابقة للمعايير الطبية مع شهادات جودة موثوقة.</p>
                </div>
                <div class="showcase-item">
                    <h4>توريد سريع</h4>
                    <p class="card-text">شبكة توزيع مرنة لضمان وصول المعدات في الوقت المناسب.</p>
                </div>
                <div class="showcase-item">
                    <h4>خدمة ما بعد البيع</h4>
                    <p class="card-text">فريق صيانة وتدريب لضمان التشغيل السلس للمعدات.</p>

                </div>
            </section>

            <section id="collections" class="showcase">
                <div class="showcase-item">

                    <h4>الأجهزة التشخيصية</h4>
                    <p class="card-text">أجهزة أشعة، سونار، ومناظير بدقة عالية لتشخيص أسرع.</p>
                </div>
                <div class="showcase-item">
                    <h4>معدات العناية المركزة</h4>
                    <p class="card-text">أجهزة تنفس، مراقبة، ومحاليل جاهزة لأعلى مستويات الرعاية.</p>
                </div>
                <div class="showcase-item">
                    <h4>مستلزمات طبية</h4>
                    <p class="card-text">قفازات، كمامات، مستهلكات تعقيم، ومواد تشغيل يومية.</p>

                </div>
            </section>

            <section id="contact" class="card">
                <div class="card-title">تواصل معنا</div>

                <p class="card-text">تحتاج استشارة لتجهيز مركزك الطبي؟ فريقنا جاهز لخدمتك.</p>

                <div class="hero-actions">
                    <a class="cta-primary" href="mailto:info@market.com">info@market.com</a>
                    <a class="cta-secondary" href="tel:+962700000000">+962 7 0000 0000</a>
                </div>
            </section>

            <footer class="footer">
                © 2024 متجر النخبة — سوق المعدات الطبية المعتمدة.
            </footer>
        </div>
    </body>
</html>
