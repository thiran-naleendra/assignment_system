<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Write Solutions - AI Writing Assistant</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background: #fff;
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: #6366f1;
        }

        .nav-buttons {
            display: flex;
            gap: 1rem;
        }

        .btn {
            padding: 0.7rem 1.5rem;
            border: none;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn-login {
            background: #10b981;
            color: white;
        }

        .btn-login:hover {
            background: #059669;
            transform: translateY(-2px);
        }

        .btn-register {
            background: #f59e0b;
            color: white;
        }

        .btn-register:hover {
            background: #d97706;
            transform: translateY(-2px);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 120px 0 80px;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            font-weight: bold;
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-large {
            padding: 1rem 2rem;
            font-size: 1.1rem;
            border-radius: 30px;
        }

        .btn-white {
            background: white;
            color: #6366f1;
        }

        .btn-white:hover {
            background: #f8fafc;
            transform: translateY(-3px);
        }

        .btn-outline {
            background: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn-outline:hover {
            background: white;
            color: #6366f1;
        }

        /* Features Section */
        .features {
            padding: 80px 0;
            background: #f8fafc;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #1e293b;
            font-weight: bold;
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.2rem;
            color: #64748b;
            margin-bottom: 3rem;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background: white;
            padding: 2rem;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
            color: white;
            font-weight: bold;
        }

        .feature-card:nth-child(1) .feature-icon {
            background: linear-gradient(135deg, #ff6b6b, #ee5a24);
        }

        .feature-card:nth-child(2) .feature-icon {
            background: linear-gradient(135deg, #4ecdc4, #44a08d);
        }

        .feature-card:nth-child(3) .feature-icon {
            background: linear-gradient(135deg, #45b7d1, #96c93d);
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #1e293b;
            font-weight: bold;
        }

        .feature-card p {
            color: #64748b;
            font-size: 1.1rem;
        }

        /* About Section */
        .about {
            padding: 80px 0;
            background: white;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: #1e293b;
            font-weight: bold;
        }

        .about-text p {
            font-size: 1.2rem;
            color: #64748b;
            margin-bottom: 2rem;
        }

        .about-image {
            text-align: center;
            font-size: 8rem;
            color: #e2e8f0;
        }

        /* Stats Section */
        .stats {
            padding: 60px 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            text-align: center;
        }

        .stat-item h3 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: #fbbf24;
        }

        .stat-item p {
            font-size: 1.2rem;
        }

        /* CTA Section */
        .cta {
            padding: 80px 0;
            background: #10b981;
            color: white;
            text-align: center;
        }

        .cta h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            font-weight: bold;
        }

        .cta p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        /* Footer */
        footer {
            background: #1e293b;
            color: white;
            padding: 40px 0;
            text-align: center;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            color: #fbbf24;
            margin-bottom: 1rem;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .footer-section a {
            color: #94a3b8;
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
        }

        .footer-section a:hover {
            color: #fbbf24;
        }

        .footer-bottom {
            border-top: 1px solid #334155;
            padding-top: 2rem;
            color: #64748b;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }

            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }

            .about-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .about-image {
                order: -1;
                font-size: 5rem;
            }

            .nav-buttons {
                flex-direction: column;
                gap: 0.5rem;
            }

            .section-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="container">
            <div class="logo">Smart Write Solutions</div>
            <div class="nav-buttons">
                <a href="{{ route('login')}}" class="btn btn-login">Login</a>
                <a href="{{ route('register')}}" class="btn btn-register">Register</a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Smart Write Solutions</h1>
            <p>Your AI-powered writing assistant designed for students</p>
            <div class="hero-buttons">
                <a href="#" class="btn btn-white btn-large">Get Started Free</a>
                <a href="#features" class="btn btn-outline btn-large">Learn More</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <h2 class="section-title">Amazing Features</h2>
            <p class="section-subtitle">Everything you need to improve your writing</p>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">AI</div>
                    <h3>AI Writing Help</h3>
                    <p>Get smart suggestions and improvements for your essays and assignments with our advanced AI technology.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">✓</div>
                    <h3>Grammar Check</h3>
                    <p>Fix grammar mistakes and improve your writing style with real-time corrections and suggestions.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">📚</div>
                    <h3>Research Helper</h3>
                    <p>Find reliable sources and create proper citations for your academic papers and research projects.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Perfect for Students</h2>
                    <p>Smart Write Solutions helps students write better essays, research papers, and assignments. Our AI understands what teachers want and helps you improve your grades.</p>
                    <p>Join thousands of students who have already improved their writing skills and academic performance with our easy-to-use platform.</p>
                    <a href="#" class="btn btn-register btn-large">Start Writing Better</a>
                </div>
                <div class="about-image">
                    🎓
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <h3>25,000+</h3>
                    <p>Happy Students</p>
                </div>
                <div class="stat-item">
                    <h3>500K+</h3>
                    <p>Essays Improved</p>
                </div>
                <div class="stat-item">
                    <h3>95%</h3>
                    <p>Better Grades</p>
                </div>
                <div class="stat-item">
                    <h3>24/7</h3>
                    <p>AI Support</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2>Ready to Improve Your Writing?</h2>
            <p>Join thousands of students and start writing better essays today!</p>
            <div class="hero-buttons">
                <a href="#" class="btn btn-white btn-large">Start Free Trial</a>
                <a href="#" class="btn btn-outline btn-large">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Smart Write Solutions</h3>
                    <p style="color: #94a3b8;">Your AI writing assistant for academic success.</p>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <a href="#">Home</a>
                    <a href="#features">Features</a>
                    <a href="#">Pricing</a>
                    <a href="#">About</a>
                </div>
                <div class="footer-section">
                    <h3>Support</h3>
                    <a href="#">Help Center</a>
                    <a href="#">Contact</a>
                    <a href="#">Privacy</a>
                    <a href="#">Terms</a>
                </div>
                <div class="footer-section">
                    <h3>Connect</h3>
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">Instagram</a>
                    <a href="#">LinkedIn</a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Smart Write Solutions. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>