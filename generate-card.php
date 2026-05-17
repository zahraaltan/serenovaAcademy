<?php
// include 'db.php';
$conn = mysqli_connect("localhost", "root", "", "serenova_db");

$card = null;
$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name        = $_POST['name'];
    $roll        = $_POST['roll_number'];
    $class       = $_POST['class'];
    $father      = $_POST['father_name'];
    $contact     = $_POST['contact'];
    $photo_name  = "";

    if (!empty($_FILES['photo']['name'])) {
        $ext        = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
        $photo_name = time() . "." . $ext;
        move_uploaded_file($_FILES['photo']['tmp_name'], "uploads/" . $photo_name);
    }

    mysqli_query($conn, "INSERT INTO students (name, roll_number, class, father_name, contact, photo) 
                         VALUES ('$name', '$roll', '$class', '$father', '$contact', '$photo_name')");

    $card = [
        'name'        => $name,
        'roll_number' => $roll,
        'class'       => $class,
        'father_name' => $father,
        'contact'     => $contact,
        'photo'       => $photo_name,
    ];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Card Generator</title>
    <style>
        body { 
            margin: 0; 
            font-family: Arial, sans-serif; 
            background: #f4f4f4; 
            padding: 0px; 
        }
        h1 { 
            text-align: center; 
            color: rgb(82, 53, 11); 
            margin-bottom: 5px; 
        }
        p.sub { 
            text-align: center; 
            color: #888; 
            font-size: 13px; 
            margin-bottom: 25px; 
        }
        .logo{
            height: 4rem;
            width: 3rem;
            border: none;
        }
        .form-box { 
            background: white; 
            max-width: 500px; 
            margin: 0 auto 30px; 
            padding: 25px; 
            border-radius: 12px; 
            border: 1px solid #eee; 
        }
        .form-box h3 { 
            margin-bottom: 15px; 
            font-size: 15px; 
            color: #333; 
        }
        .form-box input { 
            width: 100%; 
            padding: 10px 12px; 
            border: 1px solid #ddd; 
            border-radius: 7px; 
            font-size: 13px; 
            margin-bottom: 12px; 
            box-sizing: border-box; 
        }
        .form-box button { 
            width: 100%; 
            padding: 11px; 
            background: rgb(82, 53, 11); 
            color: white; 
            border: none; 
            border-radius: 7px; 
            font-size: 14px; 
            cursor: pointer; 
        }

        .card-wrap { 
            max-width: 380px; 
            margin: 0 auto; 
        }
        .card-wrap h2 { 
            text-align: center; 
            font-size: 14px; 
            color: #555; 
            margin-bottom: 12px; 
        }

        #student-card {
            background-image: url(exelance.png);
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
            border-radius: 14px;
            border: 2px solid rgb(82, 53, 11);
            padding: 24px;
            display: flex;
            gap: 20px;
            align-items: center;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }

        #student-card .photo {
            width: 90px; height: 90px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid rgb(82, 53, 11);
            flex-shrink: 0;
        }

        .card-info h3 { 
            font-size: 16px; 
            color: rgb(82, 53, 11); 
            margin-bottom: 6px; 
        }
        .card-info p { 
            font-size: 12px; 
            color: #555; 
            margin-bottom: 4px; 
        }
        .card-info span { 
            font-weight: bold; 
            color: #222; 
        }

        .school-name {
            text-align: center;
            font-size: 13px;
            font-weight: bold;
            color: rgb(82, 53, 11);
            margin-top: 14px;
            padding-top: 10px;
            border-top: 1px solid #eee;
        }

        .download-btn {
            display: block;
            text-align: center;
            margin: 16px auto 0;
            padding: 10px 28px;
            background: rgb(82, 53, 11);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 13px;
            cursor: pointer;
            width: fit-content;
        }
        
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
</head>
<body>
    <?php include 'header.php'; ?>


<h1>Serenova School</h1>
<p class="sub">Generate your Card.</p>

<?php if (!$card): ?>

<!-- FORM -->
<div class="form-box">
    <h3>fill your details</h3>
    <form method="POST" enctype="multipart/form-data">
        <input type="text"   name="name"        placeholder="Apna Naam"         required>
        <input type="text"   name="roll_number" placeholder="Roll Number"        required>
        <input type="text"   name="class"       placeholder="Class (e.g. 7A)"    required>
        <input type="text"   name="father_name" placeholder="Father ka Naam"     required>
        <input type="text"   name="contact"     placeholder="Contact Number"     required>
        <input type="file"   name="photo"       accept="image/*"                 required>
        <br><br>
        <button type="submit">generate card</button>
    </form>
</div>

<?php else: ?>

<div class="card-wrap">
    <h2>your id card is ready!!</h2>

    <div id="student-card">
        <?php if ($card['photo']): ?>
            <img src="uploads/<?php echo $card['photo']; ?>" alt="Photo" class="photo">
        <?php else: ?>
            <img src="https://via.placeholder.com/90" alt="Photo">
        <?php endif; ?>

        <div class="card-info">
            <h3>serenova Academy</h3>
            <img src="download.png" alt="" class="logo">
            <p>Name: <span><?php echo $card['name']; ?></span></p>
            <p>Roll No: <span><?php echo $card['roll_number']; ?></span></p>
            <p>Class: <span><?php echo $card['class']; ?></span></p>
            <p>Father: <span><?php echo $card['father_name']; ?></span></p>
            <p>Contact: <span><?php echo $card['contact']; ?></span></p>
        </div>
    </div>

    <div class="school-name">🏫 Serenova School</div>

    <button class="download-btn" onclick="downloadCard()">
        ⬇ download card
    </button>
</div>
    <?php include 'footer.php'; ?>

<script>
function downloadCard() {
    html2canvas(document.getElementById('student-card')).then(function(canvas) {
        var link = document.createElement('a');
        link.download = 'student-card.png';
        link.href = canvas.toDataURL();
        link.click();
    });
}
</script>

<?php endif; ?>

</body>
</html>