<!DOCTYPE html>
<html>

<head>
    <title>PHP String Manipulation</title>
</head>

<body>

    <?php
    // 1. My full names
    $fullName = "Dieudonne_Gusenga";
    echo "<h1>My Full Name:</h1>";
    echo "<p>Original Name: " . $fullName . "</p>";

    // 2. Transform the above name into Lower Case
    $lowerCaseName = strtolower($fullName);
    echo "<h2>Lower Case Name:</h2>";
    echo "<p>" . $lowerCaseName . "</p>";

    // 3. Transform above name into Upper case
    $upperCaseName = strtoupper($fullName);
    echo "<h2>Upper Case Name:</h2>";
    echo "<p>" . $upperCaseName . "</p>";

    // 4. Replace above name with My REG number
    $regNumber = "2409001296";
    $replacedName = str_replace($fullName, $regNumber, "My name is " . $fullName);
    echo "<h2>Replaced Name with REG Number:</h2>";
    echo "<p>" . $replacedName . "</p>";
    ?>

</body>

</html>