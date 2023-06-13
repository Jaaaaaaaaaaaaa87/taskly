<!DOCTYPE html>
<?php
    include("taskly_session.php");
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Taskly</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<link href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&display=swap" rel="stylesheet">
<div class="task-manager">
  <div class="left-bar">
    <div class="upper-part">
      <div class="actions">
        <div class="circle"></div>
        <div class="circle-2"></div>
      </div>
    </div>
    <div class="left-content">
      <ul class="action-list">
        <li class="item" id="nwm">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-inbox"
            viewBox="0 0 24 24">
            <path d="M22 12h-6l-2 3h-4l-2-3H2" />
            <path
              d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z" />
          </svg>
          <span>Inbox</span>
        </li>
        <li class="item">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-star">
            <polygon
              points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
            </svg>
          <span> Today</span>
        </li>
        <li class="item">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-calendar"
            viewBox="0 0 24 24">
            <rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
            <path d="M16 2v4M8 2v4m-5 4h18" />
          </svg>
          <span>Upcoming</span>
        </li>
        <li class="item">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-hash">
            <line x1="4" y1="9" x2="20" y2="9" />
            <line x1="4" y1="15" x2="20" y2="15" />
            <line x1="10" y1="3" x2="8" y2="21" />
            <line x1="16" y1="3" x2="14" y2="21" /></svg>
          <span>Important</span>
        </li>
        <li class="item">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-users">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
            <circle cx="9" cy="7" r="4" />
            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
            <path d="M16 3.13a4 4 0 0 1 0 7.75" /></svg>
          <span>Meetings</span>
        </li>
        <li class="item">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-trash"
            viewBox="0 0 24 24">
            <path d="M3 6h18m-2 0v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
          </svg>
          <span>Trash</span>
        </li>
      </ul>
      <ul class="category-list">
        <li class="item">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-users">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
            <circle cx="9" cy="7" r="4" />
            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
            <path d="M16 3.13a4 4 0 0 1 0 7.75" /></svg>
          <span>Family</span>
        </li>
        <li class="item">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-sun"
            viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="5" />
            <path
              d="M12 1v2m0 18v2M4.22 4.22l1.42 1.42m12.72 12.72l1.42 1.42M1 12h2m18 0h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42" />
          </svg>
          <span>Vacation</span>
        </li>
        <li class="item">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-trending-up">
            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18" />
            <polyline points="17 6 23 6 23 12" /></svg>
          <span>Festival</span>
        </li>
        <li class="item">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-zap">
            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" /></svg>
          <span>Concerts</span>
        </li>
      </ul>
    </div>
  </div>
  <div class="page-content">
  <div class="header">Today Tasks</div>
  <div class="content-categories">
    <div class="label-wrapper">
      <input class="nav-item" name="nav" type="radio" id="opt-1">
      <label class="category" for="opt-1">All</label>
    </div>
    <div class="label-wrapper">
      <input class="nav-item" name="nav" type="radio" id="opt-2" checked>
      <label class="category" for="opt-2">Important</label>
    </div>
    <div class="label-wrapper">
      <input class="nav-item" name="nav" type="radio" id="opt-3">
      <label class="category" for="opt-3">Notes</label>
    </div>
    <div class="label-wrapper">
      <input class="nav-item" name="nav" type="radio" id="opt-4">
      <label class="category" for="opt-4">Links</label>
    </div>
  </div>
  <div class="tasks-wrapper" id="task-list">
  <?php
    include 'taskly_dp.php'; // Podłączenie pliku z połączeniem do bazy danych
    
    // Zapytanie do bazy danych
    $query = "SELECT * FROM tasks";
    $result = mysqli_query($con, $query);
    
    if(mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        $taskId = $row['id'];
        $taskName = $row['task_name'];
        $status = $row['status'];
        
        echo '<div class="task">';
        echo '<input class="task-item" name="task" type="checkbox" id="item-'.$taskId.'">';
        echo '<label for="item-'.$taskId.'">';
        echo '<span class="label-text">'.$taskName.'</span>';
        echo '</label>';
        
        if ($status == "Approved") {
          echo '<span class="tag approved">Approved</span>';
        } elseif ($status == "In Progress") {
          echo '<span class="tag progress">In Progress</span>';
        } elseif ($status == "In Review") {
          echo '<span class="tag review">In Review</span>';
        } elseif ($status == "Waiting") {
          echo '<span class="tag waiting">Waiting</span>';
        }
        
        echo '</div>';
      }
    } else {
      echo '<p>No tasks found.</p>';
    }
    
    mysqli_close($con); // Zamknięcie połączenia z bazą danych
  ?>
</div>
<div class="task">
  <span class="label-text">Add new task: </span>
  <input type="text" id="new-task-input" style="width:70%">
  <input type="button" value="Confirm" onclick="addTask()">
</div>
<script>
  function addTask() {
    var input = document.getElementById('new-task-input');
    var taskText = input.value;
    
    if (taskText !== '') {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          alert('New task added successfully!');
          input.value = '';
          location.reload();
        }
      };
      xmlhttp.open("GET", "add_task.php?task=" + taskText, true);
      xmlhttp.send();
    }
  }
  function removeTask() {
    var checkboxes = document.getElementsByName('task');
    var selectedTasks = [];
    
    for (var i = 0; i < checkboxes.length; i++) {
      if (checkboxes[i].checked) {
        var taskId = checkboxes[i].id.split('-')[1];
        selectedTasks.push(taskId);
      }
    }
    
    if (selectedTasks.length > 0) {
      var confirmation = confirm('Are you sure you want to remove the selected task(s)?');
      
      if (confirmation) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            alert('Selected task(s) removed successfully!');
            location.reload();
          }
        };
        xmlhttp.open("GET", "remove_task.php?tasks=" + JSON.stringify(selectedTasks), true);
        xmlhttp.send();
      }
    } else {
      alert('No task selected. Please select at least one task to remove.');
    }
  }
</script>
<div class="task">
  To remove a task select it by checking the box and press the button: <input type="button" value="Remove task" onclick="removeTask()">
</div>
</div>
  <div class="right-bar">
    <div class="top-part">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
        class="feather feather-users" id="thing">
        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
        <circle cx="9" cy="7" r="4" />
        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
        <path d="M16 3.13a4 4 0 0 1 0 7.75" /></svg>
      <div class="count">6</div>
      <a href="logout_taskly.php"><button>Log out</button></a>
    </div>
    <div class="header">Schedule</div>
    <div class="right-content">
      <div class="task-box yellow">
        <div class="description-task">
          <div class="time">08:00 - 09:00 AM</div>
          <div class="task-name">Product Review</div>
        </div>
        <div class="more-button"></div>
        <div class="members">
          <img
            src="https://images.unsplash.com/photo-1491349174775-aaafddd81942?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80"
            alt="member">
          <img
            src="https://images.unsplash.com/photo-1476657680631-c07285ff2581?ixlib=rb-1.2.1&auto=format&fit=crop&w=2210&q=80"
            alt="member-2">
          <img
            src="https://images.unsplash.com/photo-1496345875659-11f7dd282d1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80"
            alt="member-3">
          <img
            src="https://images.unsplash.com/photo-1455504490126-80ed4d83b3b9?ixlib=rb-1.2.1&auto=format&fit=crop&w=2250&q=80"
            alt="member-4">
        </div>
      </div>
      <div class="task-box blue">
        <div class="description-task">
          <div class="time">10:00 - 11:00 AM</div>
          <div class="task-name">Design Meeting</div>
        </div>
        <div class="more-button"></div>
        <div class="members">
          <img
            src="https://images.unsplash.com/photo-1484688493527-670f98f9b195?ixlib=rb-1.2.1&auto=format&fit=crop&w=2230&q=80"
            alt="member">
          <img
            src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80"
            alt="member-2">
          <img
            src="https://images.unsplash.com/photo-1455504490126-80ed4d83b3b9?ixlib=rb-1.2.1&auto=format&fit=crop&w=2250&q=80"
            alt="member-3">
        </div>
      </div>
      <div class="task-box red">
        <div class="description-task">
          <div class="time">01:00 - 02:00 PM</div>
          <div class="task-name">Team Meeting</div>
        </div>
        <div class="more-button"></div>
        <div class="members">
          <img
            src="https://images.unsplash.com/photo-1491349174775-aaafddd81942?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80"
            alt="member">
          <img
            src="https://images.unsplash.com/photo-1475552113915-6fcb52652ba2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1934&q=80"
            alt="member-2">
          <img
            src="https://images.unsplash.com/photo-1493752603190-08d8b5d1781d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80"
            alt="member-3">
          <img
            src="https://images.unsplash.com/photo-1484688493527-670f98f9b195?ixlib=rb-1.2.1&auto=format&fit=crop&w=2230&q=80"
            alt="member-4">
        </div>
      </div>
      <div class="task-box green">
        <div class="description-task">
          <div class="time">03:00 - 04:00 PM</div>
          <div class="task-name">Release Event</div>
        </div>
        <div class="more-button"></div>
        <div class="members">
          <img
            src="https://images.unsplash.com/photo-1523419409543-a5e549c1faa8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=943&q=80"
            alt="member">
          <img
            src="https://images.unsplash.com/photo-1519742866993-66d3cfef4bbd?ixlib=rb-1.2.1&auto=format&fit=crop&w=881&q=80"
            alt="member-2">
          <img
            src="https://images.unsplash.com/photo-1521122872341-065792fb2fa0?ixlib=rb-1.2.1&auto=format&fit=crop&w=2208&q=80"
            alt="member-3">
          <img
            src="https://images.unsplash.com/photo-1486302913014-862923f5fd48?ixlib=rb-1.2.1&auto=format&fit=crop&w=3400&q=80"
            alt="member-4">
          <img
            src="https://images.unsplash.com/photo-1484187216010-59798e9cc726?ixlib=rb-1.2.1&auto=format&fit=crop&w=955&q=80"
            alt="member-5">
        </div>
      </div>
      <div class="task-box blue">
        <div class="description-task">
          <div class="time">08:00 - 09:00 PM</div>
          <div class="task-name">Release Event</div>
        </div>
        <div class="more-button"></div>
        <div class="members">
          <img
            src="https://images.unsplash.com/photo-1523419409543-a5e549c1faa8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=943&q=80"
            alt="member">
          <img
            src="https://images.unsplash.com/photo-1519742866993-66d3cfef4bbd?ixlib=rb-1.2.1&auto=format&fit=crop&w=881&q=80"
            alt="member-2">
          <img
            src="https://images.unsplash.com/photo-1521122872341-065792fb2fa0?ixlib=rb-1.2.1&auto=format&fit=crop&w=2208&q=80"
            alt="member-3">
          <img
            src="https://images.unsplash.com/photo-1486302913014-862923f5fd48?ixlib=rb-1.2.1&auto=format&fit=crop&w=3400&q=80"
            alt="member-4">
          <img
            src="https://images.unsplash.com/photo-1484187216010-59798e9cc726?ixlib=rb-1.2.1&auto=format&fit=crop&w=955&q=80"
            alt="member-5">
        </div>
      </div>
      <div class="task-box yellow">
        <div class="description-task">
          <div class="time">11:00 - 12:00 PM</div>
          <div class="task-name">Practise</div>
        </div>
        <div class="more-button"></div>
        <div class="members">
          <img
            src="https://images.unsplash.com/photo-1491349174775-aaafddd81942?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80"
            alt="member">
          <img
            src="https://images.unsplash.com/photo-1476657680631-c07285ff2581?ixlib=rb-1.2.1&auto=format&fit=crop&w=2210&q=80"
            alt="member-2">
          <img
            src="https://images.unsplash.com/photo-1496345875659-11f7dd282d1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80"
            alt="member-3">
          <img
            src="https://images.unsplash.com/photo-1455504490126-80ed4d83b3b9?ixlib=rb-1.2.1&auto=format&fit=crop&w=2250&q=80"
            alt="member-4">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  
</body>
</html>
