<?php
  include('./dbConnection.php');
  // Header Include from mainInclude 
  include('./mainInclude/header.php'); 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Opportunity</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Add any additional styling here */
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Add New Opportunity</h2>
    <form method="POST" action="">
        <div class="form-group">
            <label for="opportunity_title">Opportunity Title:</label>
            <input type="text" class="form-control" id="opportunity_title" name="opportunity_title" value="New Opportunity">
        </div>
        <div class="form-group">
            <label for="opportunity_description">Opportunity Description:</label>
            <textarea class="form-control" id="opportunity_description" name="opportunity_description" rows="3">Description about the opportunity</textarea>
        </div>
        <div class="form-group">
            <label for="opportunity_location">Opportunity Location:</label>
            <input type="text" class="form-control" id="opportunity_location" name="opportunity_location" value="Location">
        </div>
        <div class="form-group">
            <label for="opportunity_type">Opportunity Type:</label>
            <input type="text" class="form-control" id="opportunity_type" name="opportunity_type" value="Type">
        </div>
        <div class="form-group">
            <label for="opportunity_start_date">Opportunity Start Date:</label>
            <input type="date" class="form-control" id="opportunity_start_date" name="opportunity_start_date">
        </div>
        <div class="form-group">
            <label for="opportunity_end_date">Opportunity End Date:</label>
            <input type="date" class="form-control" id="opportunity_end_date" name="opportunity_end_date">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- Bootstrap JS, jQuery, and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include('dbConnection.php'); // Include your database connection file

    // Retrieve form data
    $title = $_POST['opportunity_title'];
    $description = $_POST['opportunity_description'];
    $location = $_POST['opportunity_location'];
    $type = $_POST['opportunity_type'];
    $start_date = $_POST['opportunity_start_date'];
    $end_date = $_POST['opportunity_end_date'];

    // Perform SQL insertion
    $sql = "INSERT INTO opportunities (OpportunityTitle, OpportunityDescription, OpportunityLocation, OpportunityType, OpportunityStartDate, OpportunityEndDate) 
        VALUES ('$title', '$description', '$location', '$type', '$start_date', '$end_date')";

    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Opportunity added successfully');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

</body>
</html>
