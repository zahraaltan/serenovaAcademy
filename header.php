
    <style>
    .header {
            width: 100%;
            background: transparent;
            backdrop-filter: blur(2px);
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            padding: 10px 0;
        }

        .header .logo {
            height: 8rem;
            width: 6rem;
        }

        .header a {
            text-decoration: none;
            font-size: 1.3rem;
            color: black;
            cursor: pointer;
            position: relative;
            display: inline-block;
        }

        .header a .underline {
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: wheat;
            transform: scaleX(0);
            transform-origin: left;
        }

        .header button {
            padding: 0.8rem 1.5rem;
            border-radius: 0.5rem;
            border: none;
            background: rgb(82, 53, 11);
            cursor: pointer;
        }

        .header button a {
            font-size: 1rem;
            color: white;
        }
</style>
    <div class="header">
        <img src="download.png" alt="" class="logo">
        <nav><a href="index.php">home<span class="underline"></span></a></nav>
        <nav><a href="about.php">about<span class="underline"></span></a></nav>
        <nav><a href="addmission.php">admission<span class="underline"></span></a></nav>
        <nav><a href="contact.php">contact<span class="underline"></span></a></nav>
        <nav><a href="admin/login.php">login<span class="underline"></span></a></nav>
        <button><a href="generate-card.php" class="card">ID Card</a></button>

    </div>
    
