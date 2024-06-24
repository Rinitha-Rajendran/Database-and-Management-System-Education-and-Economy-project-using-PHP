<!DOCTYPE html>
<html>
<head>
    <title>Course User Counts</title>
    <link rel="icon" href="a.jpg">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <style>
        h2 {
            font-family: 'Courier New', Courier, monospace;
            font-size: 60px;
            font-weight: 600;
            background-image: linear-gradient(to right, #559220, #b393d3);
            color: white;
            background-clip: text;
            -webkit-background-clip: text;
            text-align: center;
        }

        body {
            background-image: url('west.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .chart-container {
            width: 80%;
            max-width: 1200px;
            margin-top: 20px;
            background-color: #b9a7a7;
            border-radius: 20px;
            padding: 20px;
        }
    </style>
</head>
<body>

<h2>Course User Counts</h2>

<div class="chart-container">
    <div id="chart_div"></div>
</div>

<script>
    google.charts.load('current', {packages: ['bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Course');
        data.addColumn('number', 'User Count');

        <?php
        // Database connection
        include('./dbConnection.php');
        
        // Fetch course names and user counts from database
        $sql = "SELECT course_name, user_count FROM course";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "data.addRow(['" . $row['course_name'] . "', " . $row['user_count'] . "]);";
            }
        }

        $conn->close();
        ?>

        var options = {
            chart: {
                title: 'Course User Counts',
                subtitle: ''
            },
            bars: 'horizontal',
            width: '100%',
            height: 600,
            axes: {
                x: {
                    0: {label: 'User Count'}
                }
            }
        };

        var chart = new google.charts.Bar(document.getElementById('chart_div'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
    }
</script>

</body>
</html>
