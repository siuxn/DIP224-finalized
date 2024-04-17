<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Survey Responses</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container text-light p-3 rounded my-4" >
    <div class="d-flex align-items-center justify-content-between px-1">
      <h2>
        <a class="text-black text-decoration-none">Admin Page</a>
      </h2>
      <div class="d-flex align-items-center">
        <!-- Add Content button triggering modal -->
        
        <!-- Logout button -->
        <a href="admin.php" class="btn btn-info me-2">
          Edit Content <i class="bi bi-book"></i>
        </a>
        <a href="edituserpage.php" class="btn btn-primary me-2">
          Edit User <i class="bi bi-person"></i>
        </a>
        <a href="loginandsignup.php?logout=1" class="btn btn-danger">
                    Logout <i class="bi bi-box-arrow-left"></i>
                </a>
      </div>
    </div>
  </div>
  <div class="container mt-5">
    <h2>Survey Responses</h2>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Email</th>
          <th>Design</th>
          <th>Navigation</th>
          <th>Usability</th>
          <th>Met Needs</th>
          <th>Improvements</th>
        </tr>
      </thead>
      <tbody>
            <?php
            require("connection.php");

            // SQL query to retrieve survey responses
            $sql = "SELECT * FROM Survey_Responses";
            $result = mysqli_query($con, $sql);
            $i = 1;

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr class="align-middle">';
                echo '<th scope="row">' . $i . '</th>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . $row['Design'] . '</td>';
                echo '<td>' . $row['Navigation'] . '</td>';
                echo '<td>' . $row['Usability'] . '</td>';
                echo '<td>' . $row['Met_needs'] . '</td>';
                echo '<td>' . $row['Improvements'] . '</td>';
                echo '<td>';
                echo '</td>';
                echo '</tr>';
                $i++;
            }
            ?>
        </tbody>
    </table>
    <br>
    <br>
    <br>
</div>

      </tbody>
    </table>
  </div>
</body>
</html>