<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Simple Calculator</h1>

        <?php
        $num1 = "";
        $num2 = "";
        $operation = "";
        $result = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];

            if ($operation == "addition") {
                $result = $num1 + $num2;
            } elseif ($operation == "subtraction") {
                $result = $num1 - $num2;
            } elseif ($operation == "multiplication") {
                $result = $num1 * $num2;
            } elseif ($operation == "division") {
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Cannot divide by zero";
                }
            }
        }
        ?>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="simple_calculator.php">
                    <div class="form-group">
                        <label for="num1">Enter Number 1:</label>
                        <input type="number" class="form-control" id="num1" name="num1" required>
                    </div>

                    <div class="form-group">
                        <label for="num2">Enter Number 2:</label>
                        <input type="number" class="form-control" id="num2" name="num2" " required>
                    </div>

                    <div class="form-group">
                        <label for="operation">Select Operation:</label>
                        <select class="form-control" id="operation" name="operation" required>
                            <option value="addition" >Addition</option>
                            <option value="subtraction" >Subtraction</option>
                            <option value="multiplication">Multiplication</option>
                            <option value="division">Division</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">Result</button>
                </form>

                <?php
                if ($result !== "") {
                    echo "<div class='alert alert-success mt-3'>";
                    echo "<strong><h1>Result: $result</h1> </strong> ";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
