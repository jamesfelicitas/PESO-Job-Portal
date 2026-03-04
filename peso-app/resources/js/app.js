import './bootstrap';

// ========== Mobile Menu Toggle ==========
document.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const closeIcon = document.getElementById('close-icon');
    const aboutBtn = document.getElementById('mobile-about-btn');
    const aboutDropdown = document.getElementById('mobile-about-dropdown');
    const aboutArrow = document.getElementById('mobile-about-arrow');

    // Toggle main mobile menu
    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            hamburgerIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });
    }

    // Toggle "Get To Know Us" sub-menu
    if (aboutBtn && aboutDropdown) {
        aboutBtn.addEventListener('click', () => {
            aboutDropdown.classList.toggle('hidden');
            aboutArrow.classList.toggle('rotate-180');
        });
    }

    // Close mobile menu when clicking a link (except the about toggle)
    if (mobileMenu) {
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                hamburgerIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            });
        });
    }
});
