<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Grade Calculator</h1>

        <?php
        $score1 = "";
        $score2 = "";
        $score3 = "";
        $average = "";
        $letterGrade = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $score1 = $_POST["score1"];
            $score2 = $_POST["score2"];
            $score3 = $_POST["score3"];

            $average = ($score1 + $score2 + $score3) / 3;

            if ($average >= 80) {
                $letterGrade = "A";
            } elseif ($average >= 60) {
                $letterGrade = "B";
            } elseif ($average >= 50) {
                $letterGrade = "C";
            } elseif ($average >= 40) {
                $letterGrade = "D";
            } else {
                $letterGrade = "F";
            }
        }
        ?>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="score1">Enter Your First Result:</label>
                        <input type="number" class="form-control" id="score1" name="score1" value="" required>
                    </div>

                    <div class="form-group">
                        <label for="score2">Enter Your Second Result:</label>
                        <input type="number" class="form-control" id="score2" name="score2" value="" required>
                    </div>

                    <div class="form-group">
                        <label for="score3">Enter Your Third Result:</label>
                        <input type="number" class="form-control" id="score3" name="score3" value="" required>
                    </div>

                    <button type="submit" class="btn btn-success">Result</button>
                </form>

                <?php
                if ($average !== "") {
                    echo "<div class='alert alert-success mt-3'>";
                    echo "<strong>Your Avarage Score Is:</strong> $average<br>";
                    echo "<strong>Letter Grade:</strong> $letterGrade";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
