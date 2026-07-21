<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-0LY0HY7L01');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Savory Meal Journal - Discover honest, wholesome recipes, sourdough bread guides, plant-based meal prep, and seasonal farm-to-table cooking insights.">
    <title>Savory Meal Journal | Wholesome Recipes & Culinary Craftsmanship</title>
    
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header Navigation -->
    <header>
        <nav class="navbar">
            <a href="index.php" class="logo">Savory<span>Journal</span></a>
            <ul class="nav-links">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="#recipes">Recipes</a></li>
                <li><a href="blog/index.html">Blogs</a></li>
                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                <li><a href="terms.html">Terms & Conditions</a></li>
            </ul>
            <button class="menu-btn" aria-label="Toggle Navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        
        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-content reveal-item">
                <span class="hero-badge">Curated Kitchen Curation</span>
                <h1>Honest Recipes. Crafted for the Home Cook.</h1>
                <p class="hero-desc">Discover the art of slow cooking, wild sourdough fermentation, and plant-focused culinary guides. We celebrate wholesome, seasonal ingredients sourced with respect.</p>
                <div class="hero-btns">
                    <a href="#recipes" class="btn btn-primary">View Recipes</a>
                    <a href="blog/index.html" class="btn btn-secondary">Read Journal</a>
                </div>
            </div>
            <div class="hero-image-wrapper reveal-item">
                <div class="hero-image-container">
                    <img src="https://images.unsplash.com/photo-1544441893-675973e31985?auto=format&fit=crop&q=80&w=800" alt="Beautiful fresh ingredients laid out on kitchen table" loading="lazy">
                </div>
            </div>
        </section>

        <!-- Recipes / Collections Section -->
        <section id="recipes">
            <div class="section-title reveal-item">
                <h2>The Culinary Collections</h2>
                <p>Meticulously tested techniques designed to bring comfort and flavor to your table.</p>
            </div>
            
            <div class="recipes-grid">
                <!-- Recipe 1 -->
                <div class="recipe-card reveal-item">
                    <div class="recipe-img-wrapper">
                        <span class="recipe-badge">Baking</span>
                        <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&q=80&w=600" alt="Freshly baked sourdough bread loaf with golden crust" loading="lazy">
                    </div>
                    <div class="recipe-content">
                        <h3>Sourdough & Wild Yeast</h3>
                        <p>Unlock the secrets of slow wild-fermentation. Master the starter feed, structural shaping, and Dutch oven baking to achieve the perfect crispy golden crust.</p>
                    </div>
                </div>

                <!-- Recipe 2 -->
                <div class="recipe-card reveal-item">
                    <div class="recipe-img-wrapper">
                        <span class="recipe-badge">Healthy</span>
                        <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&q=80&w=600" alt="Vibrant plant based green salad bowl" loading="lazy">
                    </div>
                    <div class="recipe-content">
                        <h3>Plant-Focused Plates</h3>
                        <p>Colorful, nutrient-dense recipe bowls featuring roasted root vegetables, ancient whole grains, fresh herbs, and zesty seed dressings.</p>
                    </div>
                </div>

                <!-- Recipe 3 -->
                <div class="recipe-card reveal-item">
                    <div class="recipe-img-wrapper">
                        <span class="recipe-badge">Craft</span>
                        <img src="https://images.unsplash.com/photo-1520639888713-7851133b1ed0?auto=format&fit=crop&q=80&w=600" alt="Fermentation jars bubbling on shelf" loading="lazy">
                    </div>
                    <div class="recipe-content">
                        <h3>Kitchen Craft & Tools</h3>
                        <p>Guides on choosing essential knives, caring for seasoned cast-iron pans, and maintaining optimal setups for home culinary workspaces.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter Section -->
        <section class="newsletter-section reveal-item">
            <div class="organic-card newsletter-box">
                <h2>Join the Table</h2>
                <p>Subscribe to receive weekly recipe cards, seasonal meal guides, and fermentation notes directly in your inbox. No spam, ever.</p>
                <form class="newsletter-form" onsubmit="event.preventDefault(); alert('Thank you for subscribing!');">
                    <input type="email" class="newsletter-input" placeholder="Enter your email address" required aria-label="Email address">
                    <button type="submit" class="btn btn-accent">Subscribe</button>
                </form>
            </div>
        </section>

        <!-- Blog Highlights Section -->
        <section class="recent-blogs">
            <div class="section-title reveal-item">
                <h2>From the Culinary Journal</h2>
                <p>In-depth articles exploring food culture, seasonal agriculture, and technical kitchen skills.</p>
            </div>
            
            <div class="blog-grid">
                <!-- Blog 1 -->
                <div class="organic-card blog-card reveal-item">
                    <span class="blog-tag">Mediterranean diet</span>
                    <h3>The Mediterranean Diet: Mindful Eating & Wholesome Wellness</h3>
                    <p>Discover the holistic lifestyle principles of the Mediterranean basin—where fresh olive oils, whole grains, and family tables combine.</p>
                    <a href="blog/mediterranean-diet.html" class="blog-link">Read Article &rarr;</a>
                </div>

                <!-- Blog 2 -->
                <div class="organic-card blog-card reveal-item">
                    <span class="blog-tag">Baking secrets</span>
                    <h3>Sourdough Secrets: A Beginner's Guide to Baking Sourdough</h3>
                    <p>A step-by-step roadmap to cultivation of wild yeast starter, folding dough, scoring patterns, and baking crusty loaves.</p>
                    <a href="blog/sourdough-bread.html" class="blog-link">Read Article &rarr;</a>
                </div>

                <!-- Blog 3 -->
                <div class="organic-card blog-card reveal-item">
                    <span class="blog-tag">Meal prep</span>
                    <h3>Green Plates: Easy Plant-Based Meal Prep for Busy Weeks</h3>
                    <p>Master the art of batch cooking roasted veggies, prepping grains, and storing proteins to enjoy wholesome salads all week.</p>
                    <a href="blog/plant-based-prep.html" class="blog-link">Read Article &rarr;</a>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 4rem;" class="reveal-item">
                <a href="blog/index.html" class="btn btn-secondary">View All Journal Articles</a>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-col" style="flex: 1.5;">
                <a href="index.php" class="logo" style="margin-bottom: 1.5rem; display: inline-block;">Savory<span>Journal</span></a>
                <p>Savory Meal Journal celebrates sustainable agriculture, authentic culinary craft, and functional home cooking spaces. We guide you toward mindful kitchen practices.</p>
            </div>
            <div class="footer-col">
                <h4>Menu</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#recipes">Recipes</a></li>
                    <li><a href="blog/index.html">Blogs / Journal</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Compliance</h4>
                <ul>
                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                    <li><a href="terms.html">Terms & Conditions</a></li>
                    <li><a href="disclaimer.html">Disclaimer</a></li>
                    <li><a href="cookies.html">Cookies Policy</a></li>
                </ul>
            </div>
            <div class="footer-col" style="flex: 1.2;">
                <h4>Contact Us</h4>
                <p><strong>Address:</strong><br>181 Mercer Street, New York, NY 10012, United States</p>
                <p><strong>Phone:</strong><br>+1-888-777-5845</p>
                <p><strong>Email:</strong><br>concierge@savorymealjournal.com</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Savory Meal Journal. All rights reserved.</p>
            <div class="footer-bottom-links">
                <a href="privacy-policy.html">Privacy Policy</a>
                <a href="terms.html">Terms</a>
                <a href="cookies.html">Cookies</a>
            </div>
        </div>
    </footer>

    <!-- Cookie Consent Popup Banner -->
    <div class="cookie-banner" id="cookieConsentBanner">
        <h4 class="cookie-title">We Value Your Privacy</h4>
        <p class="cookie-text">We use cookies to analyze web traffic, optimize loading speed, and deliver customized advertising. By clicking "Accept All", you agree to our cookie policy.</p>
        <div class="cookie-btns">
            <button class="btn btn-primary" id="acceptCookiesBtn">Accept All</button>
            <button class="btn btn-secondary" id="rejectCookiesBtn">Reject</button>
        </div>
    </div>

    <!-- JS Scripts -->
    <script src="script.js"></script>
</body>
</html>
