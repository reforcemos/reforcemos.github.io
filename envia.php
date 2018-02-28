<?php
  if(isset($_POST['submit'])){
    $nome = $_POST['nome'];
    $email = $_POST['Email'];
    $numero = $_POST['numero'];
    $dia = $_POST["Dia"];
    $curso = $_POST['curso'];
    $turno = $_POST['Turno'];
    $quant = sizeof($dia);
    $nomeDias = "";

    for($i = 0; $i < $quant; $i++){
      $nomeDias = $nomeDias." ".$dia[$i];
    }
    $bagooska = "lucasem911@gmail.com";
    $mensagem = "Nome: ".$nome."\n\n Email: ".$email."\nNúmero telefônico: ".$numero."\nDias: ".$nomeDias."\nCurso: ".$curso."\nTurno: ".$turno;
    $headers = 'From: webmaster@example.com' . "\r\n" .'Reply-To: webmaster@example.com' . "\r\n" .'X-Mailer: PHP/' . phpversion();
    $subject = "curso de ".$nome;

    echo($mensagem);

    if(mail($bagooska, $subject, $mensagem, $headers)){
      session_start();
      $_SESSION['enviado'] = TRUE;
      header("location:index.php");
    }else{
      session_start();
      $_SESSION['erro'] = true;
      header("location:index.php");
    }
  }
?>
