<button id="toggleFiltersBtn">Add Filters</button>

<section id="filtersSection" style="display: none;">
    <form id="filtersForm">
        <label for="category">Category:</label>
        <select id="category" name="category">
            <option value="">All</option>
            <option value="computer">Computer</option>
            <option value="phone">Phone</option>
        </select>

        <label for="priceRange">Price Range:</label>
        <select id="priceRange" name="priceRange">
            <option value="">All</option>
            <option value="0-100">$0 - $100</option>
            <option value="101-300">$101 - $300</option>
            <option value="301-500">$301 - $500</option>
            <!-- Add more options as needed -->
        </select>

        <button type="submit">Apply Filters</button>
        <button type="button" id="clearFiltersBtn">Clear Filters</button>
    </form>
    <script src="product-filtering.js"></script>
</section>
