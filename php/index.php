<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact form</title>
    <link rel="stylesheet" href="css/form.css">
  </head>

  <body>
    <main>
      <p>Contact Us!</P>
        <form class="contact-form" action="contactform.php" method="post">
          <input type="text" name="name" placeholder="Full name">
          <input type="text" name="mail" placeholder="Your e-mail">
          <input type="text" name="subject" placeholder="Subject">
          <textarea name="message" placeholder="Message"></textarea>
          <button type="submit" name="submit">SEND MAIL</button>
        </form>
    </main>
  </body>
</html>