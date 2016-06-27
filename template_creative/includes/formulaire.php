<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
<?php
    $to = "idoux.bao@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $last_name = $_POST['nom'];
    $subject = "Message depuis baoidoux.fr";
    $subject2 = "Copie de votre message";
    $message = $last_name . " à écrit : \n\n" . $_POST['text'];
    $message2 = "Voici une copie de votre message \n\n" . $_POST['text'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    header('refresh: 2; url=../index.html#contact'); // redirect the user after 10 seconds
    #exit; // note that exit is not required, HTML can be displayed.
?>
<div>
  <p>Message envoyé ! Merci <?php echo $first_name ?>, je vous contacterai prochainement.</p>
  <p>Vous allez être redirigé(e) dans <span id="counter">5</span> second(s).</p>
</div>
  <script type="text/javascript">
  function countdown() {
      var i = document.getElementById('counter');
      if (parseInt(i.innerHTML)<=0) {
          location.href = '../index.html#contact';
      }
      i.innerHTML = parseInt(i.innerHTML)-1;
  }
  setInterval(function(){ countdown(); },1000);
</script>
</body>
</html>
