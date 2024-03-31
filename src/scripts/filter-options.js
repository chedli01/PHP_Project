// JavaScript code to handle filter interactions

// Get references to DOM elements
const filterContainer = document.querySelector('.filter-container');
const applyFiltersBtn = document.getElementById('applyFilters');
const clearFiltersBtn = document.getElementById('clearFilters');

const minPrice = document.getElementById('minPrice');
const maxPrice = document.getElementById('maxPrice');
const categorySelect = document.getElementById('category');

// Function to toggle filter container visibility
function toggleFilterContainer() {
    filterContainer.classList.toggle('hidden');
}

// Function to apply filters
function applyFilters() {
    // Get selected filter options
    const selectedPriceRange = `${minPrice.value},${maxPrice.value}`;
    const selectedCategory = categorySelect.value;

    // Set cookies with filter options
    document.cookie = `priceRange=${selectedPriceRange}; max-age=3600`; // Cookie expires in 1 hour
    document.cookie = `category=${selectedCategory}; max-age=3600`;

    // Hide the filter container after applying filters
    toggleFilterContainer();
}

// Function to delete a cookie by name
function deleteCookie(cookieName) {
    // Set the expiration date to the past
    document.cookie = `priceRange=${cookieName}; max-age=1`; // Cookie expires in 1 hour

}


// Function to clear filters
function clearFilters() {
    // Reset filter options
    minPrice.value = 0;
    maxPrice.value = 0;
    categorySelect.value = 'All';

    // Delete cookies
    // deleteCookie('priceRange');
    // deleteCookie('category');

    // Apply filters (which effectively clears them)
    applyFilters();
}

// Add event listeners to buttons
applyFiltersBtn.addEventListener('click', applyFilters);
clearFiltersBtn.addEventListener('click', clearFilters);
