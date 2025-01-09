<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice Questions</title>
</head>
<body>
    <h1>Practice Questions Using PHP Concepts</h1>

    <!-- Question 1: Multiplication Table -->
    <h2>1. Print Multiplication Table</h2>
    <p>Multiplication Table of 5:</p>
    <?php
    echo "<h3>Multiplication Table of 5</h3>";
    $number = 5;
    for ($i = 1; $i <= 10; $i++) {
        echo "$number x $i = " . ($number * $i) . "<br>";
    }
    ?>

    <!-- Question 2: Even or Odd -->
    <h2>2. Even or Odd</h2>
    <?php
    $num = 7; // Default value
    if ($num % 2 == 0) {
        echo "<p>$num is Even.</p>";
    } 
    else {
        echo "<p>$num is Odd.</p>";
    }
    ?>

    <!-- Question 3: Factorial Calculation -->
    <h2>3. Factorial Calculation</h2>
    <?php
    $fact_num = 5; // Default value
    $factorial = 1;
    for ($i = 1; $i <= $fact_num; $i++) {
        $factorial *= $i;
    }
    echo "<p>Factorial of $fact_num is $factorial</p>";
    ?>

    <!-- Question 4: Count Vowels -->
    <h2>4. Count Vowels</h2>
    <?php
    $vowel_string = "hello world"; // Default value
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    $str = strtolower($vowel_string);
    foreach (str_split($str) as $char) {
        if (in_array($char, $vowels)) {
            $count++;
        }
    }
    echo "<p>Number of vowels in '$vowel_string' is $count.</p>";
    ?>

    <!-- Question 5: Sum of Array Elements -->
    <h2>5. Sum of Array Elements</h2>
    <?php
    $arr = [1, 2, 3, 4, 5]; // Default array
    $sum = array_sum($arr);
    echo "<p>Sum of array elements: $sum</p>";
    ?>

    <!-- Question 6: Login Validation with Hardcoded Data -->
    <h2>6. Login Validation</h2>
    <?php
    $username = "admin"; // Default username
    $password = "1234"; // Default password
    if ($username == "admin" && $password == "1234") {
        echo "<p>Login successful! Welcome, $username.</p>";
    } else {
        echo "<p>Invalid username or password.</p>";
    }
    ?>

    <!-- Question 7: File Handling -->
    <h2>7. File Handling: Write and Read</h2>
    <?php
    $file_content = "This is a sample text."; // Default content
    file_put_contents('file.txt', $file_content); // Write to file
    $file_content_read = file_get_contents('file.txt'); // Read from file
    echo "<p>Saved Content: $file_content_read</p>";
    ?>

    <!-- Question 8: Prime Number Check -->
    <h2>8. Prime Number Check</h2>
    <?php
    $prime_num = 11; // Default value
    $is_prime = true;
    for ($i = 2; $i <= sqrt($prime_num); $i++) {
        if ($prime_num % $i == 0) {
            $is_prime = false;
            break;
        }
    }
    echo $is_prime && $prime_num > 1 ? "<p>$prime_num is a prime number.</p>" : "<p>$prime_num is not a prime number.</p>";
    ?>

    <!-- Question 9: Simple Interest Calculator -->
    <h2>9. Simple Interest Calculator</h2>
    <?php
    $principal = 1000; // Default value
    $rate = 5; // Default value
    $time = 2; // Default value
    $simple_interest = ($principal * $rate * $time) / 100;
    echo "<p>Simple Interest: $simple_interest</p>";
    ?>

    <!-- Question 10: Generate Fibonacci Series -->
    <h2>10. Generate Fibonacci Series</h2>
    <?php
    $terms = 6; // Default number of terms
    $fib = [0, 1];
    for ($i = 2; $i < $terms; $i++) {
        $fib[] = $fib[$i - 1] + $fib[$i - 2];
    }
    echo "<p>Fibonacci Series: " . implode(', ', array_slice($fib, 0, $terms)) . "</p>";
    ?>

</body>
</html>