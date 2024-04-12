// a4_reflected.php
<!DOCTYPE html>
<html>
<head>
    <title>Assignment 4</title>
</head>
<body>
    <script>
        // parameter 'user_input' from the URL
        var userInput = "<?php echo htmlspecialchars($_GET['user_input']); ?>";
        alert(userInput);
    </script>
</body>
</html>

