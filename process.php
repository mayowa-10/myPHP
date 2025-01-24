<?php
    if ($_SERVER["REQUEST_METHOD" ] =="POST") 
    {
        $task = $_POST["task"];
// Save the task to a databaseor file (for simplicity, we'll just echo it here)
        echo "Task added:" .htmlspecialchars($task);
    }
?>