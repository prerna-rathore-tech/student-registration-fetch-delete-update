<?php 

include 'connection.php';

$result = $obj->query("select * from std_register");
//$row = $result->fetch_object();
//print_r($row);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-3">
    <h2>Student Table</h2>

    <a href="insert.php" class="btn btn-success mb-3 float-end">ADD</a>

    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Enrollment</th>
                <th>Course</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
        <?php while ($row = $result->fetch_object()) { ?>
            <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo htmlspecialchars($row->name); ?></td>
                <td><?php echo htmlspecialchars($row->email); ?></td>
                <td><?php echo htmlspecialchars($row->contact); ?></td>
                <td><?php echo htmlspecialchars($row->enrollment); ?></td>
                <td><?php echo htmlspecialchars($row->course); ?></td>
                <td><?php echo htmlspecialchars($row->gender); ?></td>
                <td>
                    <a href="delete.php?delid=<?php echo $row->id; ?>"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Are you sure you want to delete this record?')">
                       Delete
                    </a>
                   <a href="edit.php?edited=<?php echo $row->id; ?>" class="btn btn-primary btn-sm">Update</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>
