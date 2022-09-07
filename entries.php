<?php
require 'getout.php';
?>

<?php
    
    $sql = "SELECT * FROM `reports` ";
        
        
    $result = mysqli_query($conn, $sql);
    
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Your Entries</title>
    <style>
        
    </style>
</head>
<body>



<div class="body">
  
    

<br>
<header style="background-color: white">
  
  <div class="navbar navbar-transparent bg-transparent shadow-sm">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center">
    <h2>Your Inspection Entries: </h2>
    </a>
      <div class="pull-right">
      <form >
            <a href="accounts.php" name="back" class="btn btn-danger my-2">BACK</a>
        </form>
      </div>
</div>
</header>
      <div class="container">
    <br>
        <div class="row">
            <div class="col-md-12">

                    <div class="card-body">

                    

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th hidden>Email</th>
                                    <th>Assets</th>
                                    <th>Total No.</th>
                                    <th>Working</th>
                                    <th>Non-working</th>
                                    <th>from station</th>
                                    <th>to station</th>
                                    <th>date of inspection</th>
                                    <th>PDC</th>
                                    <th>Remarks</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $email = $_SESSION['email'];
                                    $query = "SELECT * FROM `reports` where email = '$email'";
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                            ?>
                                            <tr>
                                                <td hidden><?= $student['email']; ?></td>
                                                <td><?= $student['assets']; ?></td>
                                                <td><?= $student['total']; ?></td>
                                                <td><?= $student['working']; ?></td>
                                                <td><?= $student['nonwrkg']; ?></td>
                                                <td><?= $student['froms']; ?></td>
                                                <td><?= $student['to']; ?></td>
                                                <td><?= $student['dtofinspection']; ?></td>
                                                <td><?= $student['pdc']; ?></td>
                                                <td><?= $student['issue']; ?></td>
                                                <td>
                                                    
                                                    <a href="edit.php?id=<?= $student['id']; ?>" class="btn btn-primary btn-sm">Update</a><pre></pre>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_email" value="<?=$student['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
                
            </div>
            
        </div>
       
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
