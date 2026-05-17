<?php
include '../db.php';
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}


$result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM students");
$result2 = mysqli_query($conn, "SELECT COUNT(*) AS total FROM teachers");
$result3 = mysqli_query($conn, "SELECT COUNT(*) AS total FROM notices");


$row = mysqli_fetch_assoc($result);
$row2 = mysqli_fetch_assoc($result2);
$row3 = mysqli_fetch_assoc($result3);


$total_students = $row['total'];
$total_teachers = $row2['total'];
$total_notices = $row3['total'];

$students = mysqli_query($conn, "SELECT name, class FROM students ORDER BY id DESC LIMIT 5");
$teachers = mysqli_query($conn, "SELECT name FROM teachers ORDER BY id DESC LIMIT 5");
$notices = mysqli_query($conn, "SELECT id, title FROM notices ORDER BY id DESC LIMIT 5");


?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body { 
            margin: 0; 
            font-family: Arial, sans-serif; 
            display: flex; 
        }
        .logo {
            height: 2rem;
            width: auto;
            vertical-align: middle;
        }
        .sidebar { 
            width: 200px; 
            background: rgb(82, 53, 11);
            min-height: 100vh; 
            padding: 20px 0; 
        }
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
            color: white; 
        }

        .main { 
            flex: 1; 
            padding: 30px; 
            background: #f4f4f4; 
        }
        h1 { 
            font-size: 22px; 
            margin-bottom: 5px; 
        }
        p.sub { 
            color: #888; margin-bottom: 25px; 
        }
        .cards { 
            display: flex; 
            gap: 15px; 
            margin-bottom: 30px; 
        }
        .card { 
            background: white; 
            border-radius: 10px; 
            padding: 20px 30px; 
            text-align: center; 
            border: 1px solid #eee; 
        }
        .card .number {
             font-size: 32px; 
             font-weight: bold; 
            color: rgb(82, 53, 11);
            }
        .card .label { 
            font-size: 13px; 
            color: #888; 
            margin-top: 5px; 
        }

        .table-box { 
            background: white; 
            border-radius: 10px; 
            padding: 20px; border: 
            1px solid #eee;
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
            padding: 8px; 
            font-size: 12px; 
            color: #aaa; 
            border-bottom: 1px solid #eee; 
        }
        td {
             padding: 10px 8px; 
             font-size: 13px; 
             border-bottom: 1px solid #f5f5f5; 
            }
    </style>
</head>
<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h2>Serenova <img src="../download.png" alt="" class="logo"></h2>
        <a href="index.php">Dashboard</a>
        <a href="students.php">Students</a>
        <a href="notices.php">Notices</a>
        <a href="../index.php">Logout</a>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main">
        <h1>Dashboard</h1>
        <p class="sub">Welcome back, Admin!</p>

        <div class="cards">
            <div class="card">
                <div class="number"><?php echo $total_students; ?></div>
                <div class="label">Total Students</div>
            </div>
            <div class="card">
                <div class="number"><?php echo $total_teachers; ?></div>
                <div class="label">Teachers</div>
            </div>
            <div class="card">
                <div class="number"><?php echo $total_notices; ?></div>
                <div class="label">Notices</div>
            </div>
        </div>

        <!-- STUDENTS TABLE -->
        <div class="table-box">
            <h3>Latest Students</h3>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Class</th>
                </tr>
                <?php while ($student = mysqli_fetch_assoc($students)): ?>
                <tr>
                    <td><?php echo htmlspecialchars($student['name']);?></td>
                    <td><?php echo htmlspecialchars($student['class']); ?></td>
                </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </div>

</body>
</html>