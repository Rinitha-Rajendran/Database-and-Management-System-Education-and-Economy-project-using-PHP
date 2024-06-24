<?php
include('./dbConnection.php');
// Header Include from mainInclude 
include('./mainInclude/header.php'); 
?>  

<div class="container mt-5">
    <h1 class="text-center">Opportunities</h1>
    <div class="row mt-4">
    <?php
        $sql = "SELECT * FROM opportunities";
        $result = $conn->query($sql);
        if($result->num_rows > 0){ 
            while($row = $result->fetch_assoc()){
                $opportunity_id = $row['OpportunityID'];
                $eligibility_criteria = $row['OpportunityEligibilityCriteria']; // New column for eligibility criteria
                echo ' 
                    <div class="col-sm-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">'.$row['OpportunityTitle'].'</h5>
                                <p class="card-text">'.$row['OpportunityDescription'].'</p>
                                <!-- Add more fields as needed -->
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary" onclick="showEligibility(\''.addslashes($eligibility_criteria).'\')">Details</button>
                            </div>
                        </div>
                    </div>
                ';
            }
        } else {
            echo '<p class="text-center">No opportunities found.</p>';
        }
    ?> 
    </div>
</div>

<script>
function showEligibility(criteria) {
    alert("Eligibility Criteria: " + criteria);
}
</script>

<?php 
// Contact Us
include('./contact.php'); 
?> 

<?php 
// Footer Include from mainInclude 
include('./mainInclude/footer.php'); 
?>  
