<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">

<html>
<head>
    <title>Leviathan Demo</title>
</head>

<body>
    <h1>Welcome to the Leviathan Demo page.</h1>
    <hr>
    <a href="index.php?stress=true">
        <button>Press this button to wail on the server for 10 minutes.</button>
    </a>
</body>
</html>

<?php
    function stress() {
        echo "<br>Stressing<br>";
        echo exec('/usr/bin/stress --cpu 1 -t 600');
    }

    if (isset($_GET['stress'])) {
        stress();
    }
?>
