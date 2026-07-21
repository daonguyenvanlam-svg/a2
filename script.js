document.addEventListener('DOMContentLoaded', () => {
    // 1. Scroll-Reveal Action using Intersection Observer
    const revealItems = document.querySelectorAll('.reveal-item');
    
    if ('IntersectionObserver' in window) {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -40px 0px'
        };
        
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        revealItems.forEach(item => {
            revealObserver.observe(item);
        });
    } else {
        // Fallback for older browsers
        revealItems.forEach(item => {
            item.classList.add('revealed');
        });
    }

    // 2. Header Scroll Effect
    const header = document.querySelector('header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 40) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // 3. Mobile Menu Toggle
    const menuBtn = document.querySelector('.menu-btn');
    const navLinks = document.querySelector('.nav-links');
    
    if (menuBtn && navLinks) {
        menuBtn.addEventListener('click', () => {
            menuBtn.classList.toggle('active');
            navLinks.classList.toggle('active');
        });
        
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                menuBtn.classList.remove('active');
                navLinks.classList.remove('active');
            });
        });
    }

    // 4. Cookie Consent Popup Notice
    const cookieBanner = document.getElementById('cookieConsentBanner');
    const acceptBtn = document.getElementById('acceptCookiesBtn');
    const rejectBtn = document.getElementById('rejectCookiesBtn');

    if (cookieBanner && acceptBtn && rejectBtn) {
        let consent = null; try { consent = localStorage.getItem('cookieConsent'); } catch(e) { console.warn(e); }
        
        if (consent === null) {
            setTimeout(() => {
                cookieBanner.style.display = 'block';
                cookieBanner.offsetHeight; // force reflow
                cookieBanner.classList.add('show');
            }, 1200);
        }

        acceptBtn.addEventListener('click', () => {
            try { localStorage.setItem('cookieConsent', 'accepted'); } catch(e) { console.warn(e); }
            cookieBanner.classList.remove('show');
            setTimeout(() => {
                cookieBanner.style.display = 'none';
            }, 500);
        });

        rejectBtn.addEventListener('click', () => {
            try { localStorage.setItem('cookieConsent', 'rejected'); } catch(e) { console.warn(e); }
            cookieBanner.classList.remove('show');
            setTimeout(() => {
                cookieBanner.style.display = 'none';
            }, 500);
        });
    }
});
