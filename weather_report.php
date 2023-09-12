<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Weather Report</h1>

        <?php
        $temperature = -2; 
        if ($temperature <= 0) {
            $message = "It's freezing!";
            $alertClass = "alert-primary";
        } elseif ($temperature > 0 && $temperature < 20) {
            $message = "It's cool.";
            $alertClass = "alert-info";
        } elseif ($temperature >= 20) {
            $message = "It's warm.";
            $alertClass = "alert-warning";
        }
        ?>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="alert <?php echo $alertClass; ?> text-center">
                    <strong>Weather Message:</strong> <?php echo $message; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
