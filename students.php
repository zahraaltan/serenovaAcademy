<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

$conn = mysqli_connect("localhost", "root", "", "serenova_db");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name   = $_POST['name'];
    $class  = $_POST['class'];
    $gender = $_POST['gender'];

    mysqli_query($conn, "INSERT INTO students (name, class, gender) VALUES ('$name', '$class', '$gender')");
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM students WHERE id=$id");
}

$students = mysqli_query($conn, "SELECT * FROM students ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
    <style>
        body {
            margin: 0; 
            font-family: Arial, sans-serif; 
            display: flex; 
            background: #f4f4f4; }

        .sidebar { 
            width: 200px; 
            background:  rgb(82, 53, 11); 
            min-height: 100vh; 
            padding: 20px 0; }
        .sidebar h2 { 
            color: white; 
            padding: 0 20px 20px; 
            border-bottom: 1px solid rgba(255,255,255,0.2); 
        }
        .sidebar a { 
            display: block; 
            color: rgba(255,255,255,0.8); 
            padding: 12px 20px; 
            text-decoration: none; 
        }
        .sidebar a:hover { 
            background: rgba(255,255,255,0.1); 
        }
        .logo {
            height: 8rem;
            width: 6rem;
            display: inline-block;
        }
        .main { 
            flex: 1; 
            padding: 30px; 
        }
        h1 { 
            font-size: 22px; 
            margin-bottom: 20px; 
        }
        .form-box { 
            background: white; 
            padding: 20px; 
            border-radius: 10px; 
            margin-bottom: 20px; 
            border: 1px solid #eee; 
        }
        .form-box h3 { 
            margin-bottom: 15px; 
            font-size: 15px; 
        }
        .form-box input, .form-box select { 
            padding: 9px 12px; 
            border: 1px solid #ddd; 
            border-radius: 7px; 
            font-size: 13px; 
            margin-right: 8px; 
        }
        .form-box button { 
            padding: 9px 20px; 
            background:  rgb(82, 53, 11); 
            color: white; 
            border: none; 
            border-radius: 7px; 
            font-size: 13px; 
            cursor: pointer; 
        }
        .table-box { 
            background: white; 
            padding: 20px; 
            border-radius: 10px; 
            border: 1px solid #eee; 
        }
        .table-box h3 { 
            margin-bottom: 15px; 
            font-size: 15px; 
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
        }
        th { 
            text-align: left; 
            padding: 10px 8px; 
            font-size: 12px; 
            color: #aaa; 
            border-bottom: 1px solid #eee; 
        }
        td { 
            padding: 10px 8px; 
            font-size: 13px; 
            border-bottom: 1px solid #f5f5f5; 
        }
        .delete-btn { 
            color: red; 
            text-decoration: none; 
            font-size: 12px; 
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h2>Serenova </h2>
    <img src="../download.png" alt="" class="logo">
    <a href="index.php">Dashboard</a>
    <a href="students.php">Students</a>
    <a href="notices.php">notices</a>
    <a href="logout.php">Logout</a>
</div>

<div class="main">
    <h1>Students</h1>

    <div class="form-box">
        <h3>Add New Student</h3>
        <form method="POST">
            <input type="text" name="name" placeholder="Student Name" required>
            <input type="text" name="class" placeholder="Class e.g. 7A" required>
            <select name="gender">
                <option>Male</option>
                <option>Female</option>
            </select>
            <button type="submit">Add Student</button>
        </form>
    </div>

    <div class="table-box">
        <h3>All Students</h3>
        <table>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Class</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($students)): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['class']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td>
                    <a class="delete-btn" href="students.php?delete=<?php echo $row['id']; ?>"
                       onclick="return confirm('Delete this student?')">
                        Delete
                    </a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
</div>

</body>
</html>