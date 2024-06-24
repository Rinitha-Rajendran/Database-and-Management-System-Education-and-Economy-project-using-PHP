<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Design by foolishdeveloper.com -->
    <title>Vote</title>
    <link rel="icon" href="a.jpg">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #080710;
        }

        .background {
            width: 900px;
            height: 520px;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
        }

        .background .shape {
            height: 200px;
            width: 200px;
            position: absolute;
            border-radius: 50%;
        }

        .shape:first-child {
            background: linear-gradient(
                    #1845ad,
                    #23a2f6
            );
            left: -80px;
            top: -80px;
        }

        .shape:last-child {
            background: linear-gradient(
                    to right,
                    #ff512f,
                    #f09819
            );
            right: -30px;
            bottom: -80px;
        }

        form {
            height: 600px;
            width: 840px;
            background-color: rgba(255, 255, 255, 0.13);
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 50px 35px;
        }

        form * {
            font-family: 'Poppins', sans-serif;
            color: #ffffff;
            letter-spacing: 0.5px;
            outline: none;
            border: none;
        }

        form h2 {
            font-size: 32px;
            font-weight: 500;
            line-height: 42px;
            text-align: center;
        }

        input {
            margin-right: 10px;
            margin-left: 20px;
        }

        label {
            display: block;
            margin-top: 30px;
            font-size: 16px;
            font-weight: 500;
        }

        ::placeholder {
            color: #e5e5e5;
        }

        button {
            margin-top: 50px;
            width: 100%;
            background-color: #ffffff;
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }

        .social {
            margin-top: 30px;
            display: flex;
        }

        .social div {
            background: red;
            width: 150px;
            border-radius: 3px;
            padding: 5px 10px 10px 5px;
            background-color: rgba(255, 255, 255, 0.27);
            color: #eaf0fb;
            text-align: center;
        }

        .social div:hover {
            background-color: rgba(255, 255, 255, 0.47);
        }

        .social .fb {
            margin-left: 25px;
        }

        .social i {
            margin-right: 4px;
        }

        input[type=range] {
            height: 37px;
            -webkit-appearance: none;
            position: relative;
            width: 80%;
            left: 50px;
            top: 30px;
            background: none;
        }

        input[type=range]:focus {
            outline: none;
        }

        input[type=range]::-webkit-slider-runnable-track {
            width: 100%;
            height: 2px;
            cursor: pointer;
            background: #818181;
            border-radius: 5px;
        }

        input[type=range]::-webkit-slider-thumb {
            height: 20px;
            width: 20px;
            border-radius: 10px;
            background: #30D5C8;
            cursor: pointer;
            -webkit-appearance: none;
            margin-top: -8px;
        }

        input[type=range]:focus::-webkit-slider-runnable-track {
            background: #818181;
        }

        input[type=range]::-moz-range-track {
            width: 100%;
            height: 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type=range]::-moz-range-thumb {
            height: 20px;
            width: 20px;
            border-radius: 10px;
            background: #30D5C8;
            cursor: pointer;
        }

        input[type=range]::-ms-track {
            width: 100%;
            height: 10px;
            cursor: pointer;
            background: transparent;
            border-color: transparent;
            color: transparent;
        }

        input[type=range]::-ms-fill-lower {
            border-radius: 10px;;
        }

        input[type=range]::-ms-fill-upper {
            border-radius: 10px;
        }

        input[type=range]::-ms-thumb {
            height: 20px;
            width: 20px;
            border-radius: 10px;
            background: #30D5C8;
            cursor: pointer;
        }

        #slider-value {
            position: relative;
            background-color: none;
            display: inline-block;
            top: 30px;
            padding-top: 10px;
            padding-bottom: 10px;
            width: 100%;
            text-align: center;
        }
    </style>

    <script>
        function slider() {
            const mySlider = document.getElementById("my-slider");
            const sliderValue = document.getElementById("slider-value");
            valPercent = (mySlider.value / mySlider.max) * 20;
            mySlider.style.background = `linear-gradient(to right, turquoise ${valPercent}%, #d5d5d5 ${valPercent}%)`;
            sliderValue.textContent = mySlider.value + "⭐";
        }

        function showAlert() {
            var selectedDB = document.querySelector('input[name="db"]:checked');
            if (selectedDB) {
                var dbValue = selectedDB.value;
                var ratingValue = document.getElementById("my-slider").value;
                var message = `You have rated ${dbValue} ${ratingValue} stars. Thank you for your vote!`;
                alert(message);
            } else {
                alert("Please select a database to vote for.");
            }
        }
    </script>
</head>
<body>
<div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
</div>
<form>
    <center><h2>RATE!</h2></center>
    <br>
    <br>
    <p>Choose the database that you want to vote for from the below menu</p>
    <div style="position: relative; left:40px; top: 20px;">
        <?php
        // Database connection
        include('./dbConnection.php');

        // Fetch course names from the database
        $sql = "SELECT course_name FROM course";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<input type="radio" name="db" value="' . $row['course_name'] . '" required>' . $row['course_name'] . PHP_EOL;
            }
        }

        $conn->close();
        ?>
    </div>
    <div style="position:relative; top: 80px;">
        <p>Give your rating using the slider below</p>
        <input type="range" id="my-slider" min="0" max="10" step="0.1" oninput="slider()">
        <div id="slider-value">5⭐</div>
    </div>
    <button type="button" style="position: relative; bottom: -70px;" onclick="showAlert()">Submit</button>
</form>
</body>
</html>
