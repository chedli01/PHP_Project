<?php
$reviewsPerPage = 3;

$sqlReviews = "SELECT * FROM reviews ORDER BY rating DESC LIMIT $reviewsPerPage";
$resultReviews = mysqli_query($conn, $sqlReviews);
if (mysqli_num_rows($resultReviews) > 0) {
    while ($row = mysqli_fetch_assoc($resultReviews)) {
        echo '<div class="card">';
        echo '<div style="display: flex; flex-direction: column; justify-content: center;">';
        echo ' <i class="fa-solid fa-quote-left" style="font-size: 60px;">';
        echo '</i>';
        echo '<p class="card-text">'. $row['review_text'] . '</p>';
        echo '</div>';
        echo '<div class="card-footer">' ;
        echo '<div style="font-size: 15px;">'.$row['review_date'].'</div>';
        echo '<div>';
        echo ' <div class="stars">';
        echo '<i class="fa-solid fa-star"></i>';
        echo'<i class="fa-solid fa-star"></i>';
        echo'<i class="fa-solid fa-star"></i>';
        echo'<i class="fa-solid fa-star"></i>';
        echo'<i class="fa-solid fa-star"></i>';
        echo '</div>';  
        echo '<div>'.$row['rating'];
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
   
} else {
    echo 'No reviews found.';
}
?>