<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Comparison Tool</h1>

        <?php
        $number1 = "";
        $number2 = "";
        $result = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number1 = $_POST["number1"];
            $number2 = $_POST["number2"];
            $result = ($number1 > $number2) ? $number1 : $number2;
        }
        ?>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="comparison_tool.php">
                    <div class="form-group">
                        <label for="number1">First Number:</label>
                        <input type="number" class="form-control" id="number1" name="number1" value="<?php echo $number1; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="number2">Second Number:</label>
                        <input type="number" class="form-control" id="number2" name="number2" value="<?php echo $number2; ?>" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Compare</button>
                </form>

                <?php
                if ($result !== "") {
                    echo "<div class='alert alert-success mt-3'>";
                    echo "<strong>Result:</strong> The larger number is $result.";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
