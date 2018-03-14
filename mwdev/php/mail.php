<html>
<head>
  <style>
  body{
    background: aqua;
  }
  </style>
</head>
<body>
  <form method="POST">

    <label>Twój e-mail <input type="email" name="e-mail"></label><br>
    <label>Temat<input type="text" name="temat"></label><br>
    <br><br>
    <textarea name="tresc"></textarea>
    <input type="submit">

  </form>

  <?php

    $email = $_POST['e-mail'];
    $temat = $_POST['temat'];
    $tresc = $_POST['tresc'];

    $to = 'mwolny98@interia.pl';
    $naglowki = "Reply-to: mwdev@mwolny.cba.pl ".PHP_EOL;
   $naglowki .= "From: mwdev@mwolny.cba.pl".PHP_EOL;
   $naglowki .= "MIME-Version: 1.0".PHP_EOL;
   $naglowki .= "Content-type: text/html; charset=iso-8859-2".PHP_EOL;

    echo $email;
    echo $temat;
    echo $tresc;
    echo $to;
    echo $headers;

        mail($to, $temat, $tresc, $naglowki);



  ?>
</body>
</html>
