<!-- <?php
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
                echo ' 
                    <div class="col-sm-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">'.$row['OpportunityTitle'].'</h5>
                                <p class="card-text">'.$row['OpportunityDescription'].'</p>
                                <!-- Add more fields as needed -->
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-primary" href="opportunitydetails.php?opportunity_id='.$opportunity_id.'">Details</a>
                            </div>
                        </div>
                    </div>
                ';
            }
        }
    ?> 
    </div>
</div>

<?php 
  // Contact Us
  include('./contact.php'); 
?> 

<?php 
  // Footer Include from mainInclude 
  include('./mainInclude/footer.php'); 
?>   -->
