<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en" class=" bg-base-content text-neutral-content">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="flex">
  <h3 class="text-3xl font-bold text-start text-primary-500 mb-4 pt-4 mr-4 ml-4">Users Statistics</h3> 
  <button onclick="window.location.href = 'homepage_homecook.php'" class="btn btn-sm btn-primary" style="margin-top: 20px;">Home</button>
</div>
<div>
    <div class="dropdown dropdown-end">
    <form method="POST" action="/../backend/src/userfilter.php">
        <div class="m-1 ml-4">
            <label class="input input-bordered flex items-center gap-2 input-xs bg-neutral">
                <input type="text" name="age" class="grow" placeholder="Enter age amount: " style="color: white;"/>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" /></svg>
            </label>
        </div>
        <div class="join">

        <!-- <div class="m-1 ml-4">
        <label class="input input-bordered flex items-center gap-2 input-xs bg-neutral">
                <input type="text" name="numberoffollowers" class="grow" placeholder="Enter number of followers: " style="color: white;"/>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" /></svg>
            </label>
        </div> -->
    </div>
    <p class =  "ml-4">
        Find the number of people in each age group where the average number of followers for users above a certain age (specified by the user) is higher than the average number of followers for all users across all age groups.
    </p>
    <br>
        <button type="submit" class="btn btn-sm btn-primary ml-4 mr-4">Search</button>
    </form>
   

</div>
<!-- 
<style>
    .result-item {
        display: inline-block;
        margin-right: 20px; /* Adjust margin as needed */
    }
</style> -->

<?php

if (isset($_SESSION['UserQueryResults'])) {
    $userresults = $_SESSION['UserQueryResults'];
    
    echo '<div class="results">';
    foreach ($userresults as $row) {
        echo '<div class="result-item">';
        
        echo 'Age: ' . htmlspecialchars($row['age']). ', ';// Using "\n" for a newline
        echo 'Number of People: ' . htmlspecialchars($row['count']) . "\n"; // Using "\n" for a newline

        echo '</div>';
    }
    echo '</div>';
    
    unset($_SESSION['UserQueryResults']); 
}

?>

</body>
</html>
