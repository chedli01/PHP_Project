<?php 
   function splitIntoSubArrays($products, $lengthOfSubArray) {
    // Initialize the final array to store sub-arrays
    $finalArray = array();

    // Calculate the total number of elements in the input array
    $totalElements = count($products);

    // Split the input array into sub-arrays
    for ($i = 0; $i < $totalElements; $i += $lengthOfSubArray) {
        // Extract a portion of the input array to form a sub-array
        $subArray = array_slice($products, $i, $lengthOfSubArray);

        // Add the sub-array to the final array
        $finalArray[] = $subArray;
    }

    // Return the final array containing sub-arrays
    return $finalArray;
}


function generatePaginationLinks($totalPages) {
    $paginationLinks = '';
    for ($i = 1; $i <= $totalPages; $i++) {
        $paginationLinks .= "<a href=\"?page=$i\">$i</a> ";
    }
    return $paginationLinks;
}
 ?>