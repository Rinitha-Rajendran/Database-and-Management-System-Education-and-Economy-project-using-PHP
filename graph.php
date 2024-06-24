<!DOCTYPE html>
<html>
<head>
    <title>Pop stats</title>
    <link rel="icon" href="a.jpg">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <style>
        h2 {
            font-family: 'Courier New', Courier, monospace;
            font-size: 60px;
            font-weight: 600;
            background-image: linear-gradient(to left, #144c06, #b393d3);
            color: white;
            background-clip: text;
            -webkit-background-clip: text;
        }

        body {
            background-image: url('worldmap.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .div1 {
            height: 520px;
            width: 1200px;
            margin: 20px;
            background-color: #EBEBEB;
        }
    </style>
</head>
<body>

<?php
include('./dbConnection.php'); // Include your database connection file

// Fetch course names and user counts from the database
$sql = "SELECT course_name, user_count FROM course"; // Adjust the query as per your table schema
$result = $conn->query($sql);

$courseData = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $courseData[] = [
            'name' => $row['course_name'],
            'count' => $row['user_count']
        ];
    }
}

// Convert PHP array to JSON for JavaScript use
$courseDataJson = json_encode($courseData);

$conn->close();
?>

<center><h2>WORLD-WIDE Usercount</h2></center>

<center>
    <div class="div1">
        <center><canvas id="myChart" style="width:100%;max-width:1000px"></canvas></center>
    </div>
</center>

<script>
    // Get data from PHP
    var courseData = <?php echo $courseDataJson; ?>;
    var xValues = courseData.map(function(item) { return item.name; });
    var yValues = courseData.map(function(item) { return item.count; });
    var barColors = ["red", "green", "blue", "orange", "brown", "yellow", "blue", "red", "green", "orange"];

    new Chart("myChart", {
        type: "horizontalBar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            legend: { display: false },
            title: {
                display: true,
                text: "Course User Counts"
            },
            scales: {
                xAxes: [{ ticks: { beginAtZero: true } }] // Adjust the scale as needed
            }
        }
    });
</script>

</body>
</html>
