<?php
  if (isset($_POST["submit"])) {
    $username = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = $email;
    $subject = $message;

    $message = "Name: {$username} Email: {$email} Phone: {$phone}  Message: " . $message;

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $mail = ('C:\xampp\htdocs\Demo\contact-us\ContactUs\index.php');

    if ($mail) {
      echo "<script>alert('Mail Send.');</script>";
    }else {
      echo "<script>alert('Mail Not Send.');</script>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@300&family=Raleway:wght@100&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body,
input,
textarea {
    font-family: "Montserrat";
}

.navbar {
    overflow: hidden;
    position: sticky;
    top: 0%;
    height: 70px;
    width: 100%;
    background-color: #ffffff;
}

.logo {
    line-height: 70px;
    display: inline-block;
    margin-left: 30px;
    color: #000000;
    letter-spacing: 1px;
    font-weight: bold;
    font-family: 'Montserrat';
}

.navbar ul {
    float: right;
    margin-right: 40px;
    list-style: none;
}

.navbar ul li {
    display: inline-block;
    line-height: 80px;
    margin: 0 15px;
}

.navbar ul li a {
    display: block;
    text-decoration: none;
    font-family: 'Montserrat';
    color: #000000;
    letter-spacing: 2px;
    font-size: 14px;
}

.navbar ul li a:hover,
.logo:hover {
    color: #ca6850;
    transition: 0.3s ease-in-out;
}

label #btn,
label #close {
    color: rbg(52, 50, 64);
    font-size: 30px;
    float: right;
    margin-right: 40px;
    line-height: 80px;
    cursor: pointer;
    display: none;
}

#check {
    display: none;
}

.container {
    position: relative;
    width: 100%;
    min-height: 100vh;
    padding: 2rem;
    background-color: #fafafa;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
}

.form {
    width: 100%;
    max-width: 820px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    overflow: hidden;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    padding-top: 0px;
}

.contact-form {
    background-color: #ca6850;
    position: relative;
}

.contact-form:before {
    content: "";
    position: absolute;
    width: 26px;
    height: 26px;
    background-color: #ca6850;
    transform: rotate(45deg);
    top: 50px;
    left: -13px;
}

form {
    padding: 2.3rem 2.2rem;
    z-index: 10;
    overflow: hidden;
    position: relative;
}

.title {
    color: #fff;
    font-weight: 500;
    font-size: 1.5rem;
    line-height: 1;
    margin-bottom: 0.7rem;
}

.input-container {
    position: relative;
    margin: 1rem 0;
}

.input {
    width: 100%;
    outline: none;
    border: 2px solid #fafafa;
    background: none;
    padding: 0.6rem 1.2rem;
    color: #fff;
    font-weight: 500;
    font-size: 0.95rem;
    letter-spacing: 0.5px;
    border-radius: 5px;
    transition: 0.3s;
}

textarea.input {
    padding: 0.8rem 1.2rem;
    min-height: 150px;
    border-radius: 5px;
    resize: none;
    overflow-y: auto;
}

.input-container label {
    position: absolute;
    top: 50%;
    left: 15px;
    transform: translateY(-50%);
    padding: 0 0.4rem;
    color: #fafafa;
    font-size: 0.9rem;
    font-weight: 400;
    pointer-events: none;
    z-index: 1000;
    transition: 0.5s;
}

.input-container.textarea label {
    top: 1rem;
    transform: translateY(0);
}

.btn {
    padding: 0.6rem 1.3rem;
    background-color: #fff;
    border: 2px solid #fafafa;
    font-size: 0.95rem;
    color: #ca6850;
    line-height: 1;
    border-radius: 5px;
    outline: none;
    cursor: pointer;
    transition: 0.3s;
    margin: 0;
    width: 100%;
}

.btn:hover {
    background-color: transparent;
    color: #fff;
}

.input-container span {
    position: absolute;
    top: 0;
    left: 25px;
    transform: translateY(-50%);
    font-size: 0.8rem;
    padding: 0 0.4rem;
    color: transparent;
    pointer-events: none;
    z-index: 500;
}

.input-container span:before,
.input-container span:after {
    content: "";
    position: absolute;
    width: 10%;
    opacity: 0;
    transition: 0.3s;
    height: 5px;
    background-color: #ca6850;
    top: 50%;
    transform: translateY(-50%);
}

.input-container span:before {
    left: 50%;
}

.input-container span:after {
    right: 50%;
}

.input-container.focus label {
    top: 0;
    transform: translateY(-50%);
    left: 25px;
    font-size: 0.8rem;
}

.input-container.focus span:before,
.input-container.focus span:after {
    width: 50%;
    opacity: 1;
}

.contact-info {
    padding: 2.3rem 2.2rem;
    position: relative;
}

.contact-info .title {
    color: #ca6850;
}

.text {
    color: #333;
    margin: 1.5rem 0 2rem 0;
}

.information {
    display: flex;
    color: #555;
    margin: 0.7rem 0;
    align-items: center;
    font-size: 0.95rem;
}

.icon {
    width: 28px;
    margin-right: 0.7rem;
}

.social-media {
    padding: 2rem 0 0 0;
}

.social-media p {
    color: #333;
}

.social-icons {
    display: flex;
    margin-top: 0.5rem;
}

.social-icons a {
    width: 35px;
    height: 35px;
    border-radius: 5px;
    background: linear-gradient(45deg, #ca6850, #ca6850);
    color: #fff;
    text-align: center;
    line-height: 35px;
    margin-right: 0.5rem;
    transition: 0.3s;
    padding-top: 1px;
}

.social-icons a:hover {
    transform: scale(1.05);
}

.contact-info:before {
    content: "";
    position: absolute;
    width: 110px;
    height: 100px;
    border: 22px solid #ca6850;
    border-radius: 50%;
    bottom: -77px;
    right: 50px;
    opacity: 0.3;
}

@media (max-width: 850px) {
    .form {
        grid-template-columns: 1fr;
    }
    .contact-info:before {
        bottom: initial;
        top: -75px;
        right: 65px;
        transform: scale(0.95);
    }
    .contact-form:before {
        top: -13px;
        left: initial;
        right: 70px;
    }
    .square {
        transform: translate(140%, 43%);
        height: 350px;
    }
    .text {
        margin: 1rem 0 1.5rem 0;
    }
    .social-media {
        padding: 1.5rem 0 0 0;
    }
}

@media (max-width: 480px) {
    .container {
        padding: 1.5rem;
    }
    .contact-info:before {
        display: none;
    }
    .square,
    form,
    .contact-info {
        padding: 1.7rem 1.6rem;
    }
    .text,
    .information,
    .social-media p {
        font-size: 0.8rem;
    }
    .title {
        font-size: 1.15rem;
    }
    .social-icons a {
        width: 30px;
        height: 30px;
        line-height: 30px;
    }
    .icon {
        width: 23px;
    }
    .input {
        padding: 0.45rem 1.2rem;
    }
    .btn {
        padding: 0.45rem 1.2rem;
    }
}
    </style>
  </head>
  <body>
        <!--NAVBAR-->
        <div class="navbar">
        <input type="checkbox" id="check">
        <label for="check">
                <i class="material-icons" id="btn">subject</i>
                <i class="material-icons" id="close">close</i>
            </label>
        <a href="index.html">
            <h2 class="logo">NASŚH BEAUTY</h2>
        </a>
        <ul class="navbar-menu">
            <li><a href="index.html">HOME</a></li>
            <li><a href="about-us.html">ABOUT</a></li>
            <li><a href="product.html">PRODUCT</a></li>
            <li><a href="contact.html">CONTACT</a></li>
            <li><a href="Login/index.php">LOGIN</a></li>
        </ul>
    </div>
    <!--NAVBAR SELESAI-->
    <div class="container">
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch!</h3>
          <p class="text">
            Send your own message and let's make many more memories together!
          </p>

          <div class="info">
            <div class="information">
              <img src="images/logo.webp" class="icon" alt="" />
              <p>Jalan RS. Fatmawati Raya, Pd. Labu, Kec. Cilandak, Kota Depok, Jawa Barat 12450</p>
            </div>
            <div class="information">
              <img src="images/gmail.png" class="icon" alt="" />
              <p>nasshbeauty@gmail.com</p>
            </div>
            <div class="information">
              <img src="images/call4.jpg" class="icon" alt="" />
              <p>+62 765 6971</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="facebook.com/nasshbeauty">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/nasshbeauty">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="instagram.com./nasshbeauty">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="youtube.come/nasshbeauty">
                <i class="fab fa-youtube"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">

          <form action="" method="post" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Your name</label>
              <span>Your name</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" name="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>

    <script src="js.js"></script>
  </body>
</html>
