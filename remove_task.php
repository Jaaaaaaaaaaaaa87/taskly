<?php
include 'taskly_dp.php'; // Podłączenie pliku z połączeniem do bazy danych

if (isset($_GET['tasks'])) {
  $selectedTasks = json_decode($_GET['tasks'], true);
  
  // Sprawdzenie czy tablica z zaznaczonymi zadaniami jest niepusta
  if (!empty($selectedTasks)) {
    // Usunięcie zaznaczonych zadań z bazy danych
    $taskIds = implode(',', $selectedTasks);
    $deleteQuery = "DELETE FROM tasks WHERE id IN ($taskIds)";
    
    if (mysqli_query($con, $deleteQuery)) {
      echo "Tasks removed successfully";
    } else {
      echo "Error removing tasks: " . mysqli_error($con);
    }
  } else {
    echo "No tasks selected";
  }
} else {
  echo "No tasks specified";
}

mysqli_close($con); // Zamknięcie połączenia z bazą danych
?>