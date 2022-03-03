<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
    // Set session variables
    $_SESSION["favcolor"] = "red";
    $_SESSION["favanimal"] = "dog";
    $_SESSION["name"] = " vitor daniel";
    
    echo "Session variables are set.";
?>

</body>
</html>