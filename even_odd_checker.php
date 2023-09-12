<!DOCTYPE html>
<html>
<head>
    <title>Even/Odd Checker</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Even/Odd Checker</h1>

        <?php
        $number = "";
        $result = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST["number"];

            if ($number % 2 == 0) {
                $result = "Even";
            } else {
                $result = "Odd";
            }
        }
        ?>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="number">Enter Your Number:</label>
                        <input type="number" class="form-control" id="number" name="number" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Check</button>
                </form>

                <?php
                if ($result !== "") {
                    $alertClass = ($result == "Even") ? "alert-success" : "alert-warning";
                    echo "<div class='alert $alertClass mt-3'>";
                    echo "<strong>Result:</strong> The number $number is $result.";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
