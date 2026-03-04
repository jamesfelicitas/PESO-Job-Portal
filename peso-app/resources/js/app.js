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

    // ========== Job Search & Filter ==========
    const searchInput = document.getElementById('job-search');
    const searchClear = document.getElementById('job-search-clear');
    const filterCategory = document.getElementById('filter-category');
    const filterLocation = document.getElementById('filter-location');
    const filterCompany = document.getElementById('filter-company');
    const jobList = document.getElementById('job-list');
    const jobNoResults = document.getElementById('job-no-results');
    const jobResultsCount = document.getElementById('job-results-count');
    const clearFiltersBtn = document.getElementById('job-clear-filters');

    if (searchInput && jobList) {
        const jobItems = jobList.querySelectorAll('.job-item');

        function filterJobs() {
            const query = searchInput.value.toLowerCase().trim();
            const category = filterCategory ? filterCategory.value : '';
            const location = filterLocation ? filterLocation.value : '';
            const company = filterCompany ? filterCompany.value : '';
            let visibleCount = 0;

            jobItems.forEach(item => {
                const title = (item.dataset.title || '').toLowerCase();
                const itemCategory = item.dataset.category || '';
                const itemLocation = item.dataset.location || '';
                const itemCompany = item.dataset.company || '';
                const fullText = item.textContent.toLowerCase();

                const matchesSearch = !query || title.includes(query) || fullText.includes(query);
                const matchesCategory = !category || itemCategory === category;
                const matchesLocation = !location || itemLocation === location;
                const matchesCompany = !company || itemCompany === company;

                if (matchesSearch && matchesCategory && matchesLocation && matchesCompany) {
                    item.classList.remove('hidden');
                    visibleCount++;
                } else {
                    item.classList.add('hidden');
                }
            });

            // Update results count
            if (jobResultsCount) {
                jobResultsCount.textContent = visibleCount;
            }

            // Toggle no results message
            if (jobNoResults) {
                if (visibleCount === 0) {
                    jobNoResults.classList.remove('hidden');
                    jobList.classList.add('hidden');
                } else {
                    jobNoResults.classList.add('hidden');
                    jobList.classList.remove('hidden');
                }
            }

            // Show/hide clear filters button
            if (clearFiltersBtn) {
                const hasActiveFilters = query || category || location || company;
                clearFiltersBtn.classList.toggle('hidden', !hasActiveFilters);
            }

            // Show/hide search clear (x) button
            if (searchClear) {
                if (query) {
                    searchClear.classList.remove('hidden');
                    searchClear.classList.add('flex');
                } else {
                    searchClear.classList.add('hidden');
                    searchClear.classList.remove('flex');
                }
            }
        }

        // Event listeners
        searchInput.addEventListener('input', filterJobs);
        if (filterCategory) filterCategory.addEventListener('change', filterJobs);
        if (filterLocation) filterLocation.addEventListener('change', filterJobs);
        if (filterCompany) filterCompany.addEventListener('change', filterJobs);

        // Clear search input
        if (searchClear) {
            searchClear.addEventListener('click', () => {
                searchInput.value = '';
                searchInput.focus();
                filterJobs();
            });
        }

        // Clear all filters
        if (clearFiltersBtn) {
            clearFiltersBtn.addEventListener('click', () => {
                searchInput.value = '';
                if (filterCategory) filterCategory.value = '';
                if (filterLocation) filterLocation.value = '';
                if (filterCompany) filterCompany.value = '';
                filterJobs();
                searchInput.focus();
            });
        }
    }
});
