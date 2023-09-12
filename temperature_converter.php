<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Temperature Converter</h1>

        <?php
        $tempureture = "";
        $contype = "";
        $result = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $tempureture = $_POST["temperature"];
            $contype = $_POST["conversion_type"];
            if ($contype == "cel_to_fer") {
                $result = ($tempureture * 9/5) + 32;
            } elseif ($contype == "fer_to_c") {
                $result = ($tempureture - 32) * 5/9;
            }
        }
        ?>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="temperature">Enter Temperature:</label>
                        <input type="text" class="form-control" id="temperature" name="temperature" value="<?php echo $tempureture; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="conversion_type">Select Conversion:</label>
                        <select class="form-control" id="conversion_type" name="conversion_type" required>
                            <option value="cel_to_fer" <?php if ($contype == "cel_to_fer") echo "selected"; ?>>Celsius to Fahrenheit</option>
                            <option value="fer_to_c" <?php if ($contype == "fer_to_c") echo "selected"; ?>>Fahrenheit to Celsius</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Convert</button>
                </form>

                <?php
                if ($result !== "") {
                    $originalUnit = ($contype == "cel_to_fer") ? "Celsius" : "Fahrenheit";
                    $convertedUnit = ($contype == "cel_to_fer") ? "Fahrenheit" : "Celsius";

                    echo "<div class='alert alert-success mt-3'>";
                    echo "<strong>Result:</strong> $tempureture $originalUnit is $result $convertedUnit";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
