<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nadeleine.id</title>

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/joinus.css">

</head>
<body>
    <nav>
        <div class="container navbarContainer">
            <a href="index.php"><img src="assets/img/icon.png" class="icon"></a>
            <ul class="navbarMenu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Register</a></li>
                <li><a href="forum.php">Forum</a></li>
            </ul>
            <button id="open-icon-btn"><i class="uil uil-bars"></i></button>
            <button id="close-icon-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>

    <section class="contact">
        <div class="container contactContainer">
           <aside class="contactAside">
                <div class="aside-img">
                    <img src="assets/img/contactPNG.png">
                </div>
                <h3 style="text-align: center;">Join Us</h3><br>
                <p>
                    Let's join our community! Bersama kita hadapi trauma dan kepedihan. Ingat korban tidaklah bersalah.  
                </p>
                <ul class="contactDetails">
                    <li>
                        <i class="uil uil-phone-times"></i>
                        <h5>021-00021029</h5>
                    </li>
                    <li>
                        <i class="uil uil-envelope"></i>
                        <h5>Nadeleine@gmail.com</h5>
                    </li>
                    <li>
                        <i class="uil uil-location-point"></i>
                        <h5>Jakarta, Indonesia</h5>
                    </li>
                </ul>
                <ul class="socialMedia-contact">
                    <li>
                        <a href="#"><i class="uil uil-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-instagram"></i></a>
                    </li><li>
                        <a href="#"><i class="uil uil-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-whatsapp"></i></a>
                    </li>
                </ul>
           </aside>

           <form class="questionForm" action="register.php" method="post">
                <div class="formName">
                    <input type="text" 
                    id="name" name="name" placeholder="Name" required>
                    <input type="text" name="username" id="username" placeholder="Username" required>
                </div>
                <div class="radio-group">
                    <input type="radio" id="jeniskelamin" name="jeniskelamin" onclick="getJk(this.value)" value="pria" required>
                    <label for="pria">Male</label>
                    <input type="radio" id="jeniskelamin" name="jeniskelamin" onclick="getJk(this.value)"  value="perempuan" required>
                    <label for="perempuan">Female</label>
                </div>
                <div class="formName">
                    <input type="text" name="usia" id="usia" placeholder="Usia" required>
                    <input type="text" name="email" placeholder="Email" id="email" required></input>
                </div>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <button type="submit" class="btn btn-primary" onclick="joinus()">Register</button>
           </form>
        </div>
    </section>
    <footer>
        <div class="container footerContainer">
            <div class="footer1">
                <a href="index.php" class="footerLogo"><h4>Nadeleine</h4></a>
                <p>You are not alone.</p>
            </div>
            <footer class="footer2">
                <h4>Permalinks</h4>
                <ul class="permalinks">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Join Us</a></li>
                </ul>
            </footer>
            <footer class="footer3">
                <h4>Primacy</h4>
                <ul class="primacy">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and Condition</a></li>
                    <li><a href="#">Refund Policy</a></li>
                </ul>
            </footer>
            <footer class="footer4">
                <h4>Contact Us</h4>
                <div>
                    <p>087882704721</p>
                    <p>naomi.britiana@gmail.com</p>
                </div>

                <ul class="socials">
                    <li>
                        <a href="#"><i class="uil uil-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-instagram"></i></a>
                    </li><li>
                        <a href="#"><i class="uil uil-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-whatsapp"></i></a>
                    </li>
                </ul>
            </footer>
        </div>
        <div class="copyright">
            <small>copyright &copy; PT NaoTech</small>
        </div>
    </footer>

    <script src="assets/Nadeline.js"></script>
</body>
</html>