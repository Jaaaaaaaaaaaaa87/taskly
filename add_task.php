<?php
include 'taskly_dp.php'; // Podłączenie pliku z połączeniem do bazy danych

if(isset($_GET['task'])) {
    $taskName = $_GET['task'];
    
    // Zapytanie SQL do dodania nowego zadania do tabeli tasks
    $query = "INSERT INTO tasks (task_name, status) VALUES ('$taskName', 'Waiting')";
    
    if(mysqli_query($con, $query)) {
        echo "Task added successfully";
    } else {
        echo "Error adding task: " . mysqli_error($con);
    }
} else {
    echo "Task name is not provided";
}

mysqli_close($con); // Zamknięcie połączenia z bazą danych
?>