<!DOCTYPE html>
<html>
<head>
    <title>My Personal Information</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Personal Information</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <?php
                        $name = "Mohammad Emran Sikder";
                        $age = 29;
                        $country = "Bangladesh";
                        $introduction = "Hello, This Is Emran Froma Bangladesh. I'm 29 Years Old. Coading Is My Passion";

                        // Display personal information using Bootstrap styling
                        echo "<p class='card-text'><strong>Name:</strong> $name</p>";
                        echo "<p class='card-text'><strong>Age:</strong> $age</p>";
                        echo "<p class='card-text'><strong>Country:</strong> $country</p>";
                        echo "<p class='card-text'><strong>Introduction:</strong> $introduction</p>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
