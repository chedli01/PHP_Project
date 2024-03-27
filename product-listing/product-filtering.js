document.addEventListener("DOMContentLoaded", function () {
    const toggleFiltersBtn = document.getElementById("toggleFiltersBtn");
    const filtersSection = document.getElementById("filtersSection");
    const clearFiltersBtn = document.getElementById("clearFiltersBtn");

    toggleFiltersBtn.addEventListener("click", function () {
        // Toggle the display of the filters section
        if (filtersSection.style.display === "none") {
            filtersSection.style.display = "block";
        } else {
            filtersSection.style.display = "none";
        }
    });

    clearFiltersBtn.addEventListener("click", function () {
        // Reset all filter fields to their default values
        document.getElementById("category").value = "";
        document.getElementById("priceRange").value = "";
        // Add more filter fields as needed

        // You can also submit the form here to apply the cleared filters
        document.getElementById("filtersForm").submit();
    });
});
