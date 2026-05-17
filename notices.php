<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
include '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];

    mysqli_query($conn, "INSERT INTO notices (title, description) VALUES ('$title', '$description')");
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM notices WHERE id=$id");
}

$notices = mysqli_query($conn, "SELECT * FROM notices ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Notices</title>
    <style>
        body { 
            margin: 0; 
            font-family: Arial, sans-serif; 
            display: flex; 
            background: #f4f4f4; 
        }

        .sidebar { 
            width: 200px; 
            background:  rgb(82, 53, 11); 
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
        .form-box input, .form-box textarea {
            width: 100%; 
            padding: 9px 12px; 
            border: 1px solid #ddd;
            border-radius: 7px; 
            font-size: 13px; 
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        .form-box textarea { 
            height: 80px; 
            resize: none; 
        }
        .form-box button { 
            padding: 9px 20px; 
            background: rgb(82, 53, 11); 
            color: white; 
            border: none; 
            border-radius:7px; 
            font-size: 13px; 
            cursor: pointer; }
        .notice-card { 
            background: white; 
            padding: 18px 20px; 
            border-radius: 10px; 
            border: 1px solid #eee; 
            margin-bottom: 12px; 
            display: flex; 
            justify-content: space-between; 
            align-items: flex-start; 
        }
        .notice-card h3 { 
            font-size: 15px; 
            color: #222; 
            margin-bottom: 6px; 
        }
        .notice-card p { 
            font-size: 13px; 
            color: #666; 
            line-height: 1.6; 
        }
        .notice-card .date { 
            font-size: 11px; 
            color: #bbb; 
            margin-top: 8px; 
        }
        .delete-btn { 
            color: red; 
            text-decoration: none; 
            font-size: 12px; 
            flex-shrink: 0; 
            margin-left: 15px; 
        }

        .empty { 
            color: #aaa; 
            font-size: 13px; 
            text-align: center; 
            padding: 30px; 
            background: white; 
            border-radius: 10px; 
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h2>Serenova</h2>
    <img src="../download.png" alt="" class="logo">
    <a href="index.php">Dashboard</a>
    <a href="students.php">Students</a>
    <a href="notices.php">Notices</a>
    <a href="../index.php">Logout</a>
</div>

<div class="main">
    <h1>Notices</h1>

    <!-- ADD FORM -->
    <div class="form-box">
        <h3>Add New Notice</h3>
        <form method="POST">
            <input type="text" name="title" placeholder="Notice Title" required>
            <textarea name="description" placeholder="Notice details..."></textarea>
            <button type="submit">Add Notice</button>
        </form>
    </div>

    <!-- NOTICES LIST -->
    <?php if (mysqli_num_rows($notices) == 0): ?>
        <div class="empty">Koi notice nahi hai abhi.</div>
    <?php endif; ?>

    <?php while ($row = mysqli_fetch_assoc($notices)): ?>
    <div class="notice-card">
        <div>
            <h3><?php echo $row['title']; ?></h3>
            <p><?php echo $row['description']; ?></p>
            <div class="date"><?php echo date('d M Y', strtotime($row['created_at'])); ?></div>
        </div>
        <a class="delete-btn" href="notices.php?delete=<?php echo $row['id']; ?>"
           onclick="return confirm('Delete this notice?')">
            Delete
        </a>
    </div>
    <?php endwhile; ?>

</div>

</body>
</html>