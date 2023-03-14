<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Restraunt</title>
   
    <link rel="stylesheet" href="mystyle.css" />
</head>

<body>
    <nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#food-menu">Menu</a></li>
                <li><a href="#testimonials">Testimonial</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <h1 class="logo">Backyard Bowls</h1>
        </div>
    </nav>
<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

 
  $to = 'christinemwango80@gmail.com';
  $subject = 'New message from contact form';
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  mail($to, $subject, $body);


  header('Location: thank-you.html');
  exit;
}
?>
 <section id="contact">
  <div class="contact-container container">
    <div class="contact-img">
      <img src="images/quotes.jpg" alt="" />
    </div>

    <div class="form-container">
      <h2>Contact Us</h2>
      <input type="text" id="name-input" placeholder="Your Name" />
      <input type="email" id="email-input" placeholder="E-Mail" />
      <textarea id="message-input" cols="30" rows="6" placeholder="Type Your Message"></textarea>
      <a href="#" class="btn btn-primary" onclick="submitForm()">Submit</a>
    </div>
  </div>
</section>

<script>
  function submitForm() {
    const name = document.getElementById('name-input').value;
    const email = document.getElementById('email-input').value;
    const message = document.getElementById('message-input').value;
    
    console.log(`Name: ${name}, Email: ${email}, Message: ${message}`);
    
    document.getElementById('name-input').value = '';
    document.getElementById('email-input').value = '';
    document.getElementById('message-input').value = '';
    
    alert('Thanks for your message!');
  }
</script>
