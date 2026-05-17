<?php
include 'db.php';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['full_name'];
    $phone = $_POST['phnumber'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, phone, email, message) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $phone, $email, $message]);
    
    header("Location: contact.php?success=1");
    exit();
}
?>
<?php if(isset($_GET['success'])): ?>
    <p style='font-size: 2rem'>Message sent successfully!</p>
    <script>
        window.history.replaceState({}, document.title, "contact.php");
    </script>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" integrity="sha512-kJlvECunwXftkPwyvHbclArO8wszgBGisiLeuDFwNM8ws+wKIw0sv1os3ClWZOcrEB2eRXULYUsm8OVRGJKwGA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            text-transform:capitalize;
        }

        body {
            background-color: #a0763f;
            
        }

        h1 {
            font-size: 2rem;
            font-weight: bold;
            color: whitesmoke;
            font-variant: small-caps;
            margin-bottom: 1rem;
        }

        h4 {
            color: white;
        }

        p {
            color: white;
        }

        i {
            font-size: 1.6rem;
            color: burlywood;
        }

        .part1 {
            height: 100vh;
            width: 100%;
            background-color: #a0763f;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem;
        }

        .contact {
            height: 70vh;
            width: 40%;
            background-color: #7a5c34;
            border-radius: 15px;
            padding: 0.8rem;
        }

        .info {
            height: 70vh;
            width: 40%;
            border-radius: 15px;
        }

        .box {
            border-bottom: 2px solid rgb(82, 53, 11);
            padding: 0.5rem 0.2rem;
            margin-bottom: 0.4rem;
        }

        .timing {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        small {
            color: #ccc;
        }

        .part2 {
            height: 100vh;
            width: 100%;
            background-color: #7a5c34;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .reachus {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: 90vh;
            width: 80%;
            border: 2px solid #a0763f;
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .inputs {
            height: 80%;
            width: 80%;
            padding: 1rem;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            align-items: flex-start;
            gap: 0.5rem;
        }

        label {
            display: flex;
            flex-direction: column;
            gap: 0.3rem;
        }

        input {
            background-color: transparent;
            border: 1px solid #f0ebe5;
            border-radius: 10px;
            height: 3rem;
            width: 16rem;
            padding: 0 0.5rem;
            color: white;
        }

        textarea {
            background-color: transparent;
            border: 1px solid #f0ebe5;
            border-radius: 10px;
            padding: 0.5rem;
            color: white;
            resize: vertical;
        }

        input::placeholder,
        textarea::placeholder {
            color: #ccc;
        }

        button {
            padding: 0.8rem 5rem;
            border: none;
            background-color: #a0763f;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            margin-top: 1rem;
        }

        button:hover {
            background-color: #b8874a;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="part1">
        <div class="contact">
            <h1>Contact Info</h1>
            <div class="box">
                <p><i class="ri-phone-fill"></i> Main Office</p>
                <h4>+92 21 3456 7890</h4>
            </div>
            <div class="box">
                <p><i class="ri-whatsapp-fill"></i> Mobile / WhatsApp</p>
                <h4>+92 300 123 4567</h4>
            </div>
            <div class="box">
                <p><i class="ri-mail-fill"></i> Email</p>
                <h4>info@serenovaacademy.edu.pk</h4>
            </div>
        </div>

        <div class="info">
            <h1>Office Hours</h1>
            <div class="box timing">
                <p>Monday – Friday</p>
                <h4>8:00 AM – 4:00 PM</h4>
            </div>
            <div class="box timing">
                <p>Saturday</p>
                <h4>9:00 AM – 1:00 PM</h4>
            </div>
            <div class="box timing">
                <p>Sunday</p>
                <h4>Closed</h4>
            </div>
            <div class="box">
                <p>Emergency Contact</p>
                <h4>+92 321 987 6543</h4>
                <small>Available 24/7 for urgent matters</small>
            </div>
        </div>
    </div>
            <?php if(isset($_GET['success'])) echo "<p style='font-size: 2rem'>Message sent successfully!</p>"; ?>
            
    <div class="part2">
        <div class="reachus">
            <h1>Send Us a Message</h1>
            <form method="POST" action="contact.php"class="inputs">
                <label>
                    <p>Full Name</p>
                    <input name="full_name" type="text" placeholder="Your name">
                </label>
                <label>
                    <p>Phone Number</p>
                    <input name="phnumber" type="tel" placeholder="Phone number">
                </label>
                <label>
                    <p>Email</p>
                    <input name="email" type="email" placeholder="Email">
                </label>
                <label>
                    <p>Message</p>
                    <textarea name="message" cols="30" rows="4" placeholder="Your message"></textarea>
                </label>
                <button type="submit">Send</button>
            </form>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
