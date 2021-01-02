     <?php

        if (isset($_POST['submit'])) {


            $myemail   = 'contacto@miguelvalencia.me';
            $name = $_POST['name'];
            $email_address = $_POST['email'];
            $message = $_POST['message'];

            $to = $myemail;

            $email_subject = "Has recibido un mensaje de $name";

            $email_body = "Los detalles: \n" .

                "Nombre: $name \n " .

                "Email: $email_address \n Mensaje: \n $message";

            $headers = "From: $myemail \n";

            $headers .= "Reply-To: $email_address";

            if (mail($to, $email_subject, $email_body, $headers)) {

                echo "<script>alert('E-mail Enviado. En breve te mando mail.')</script>";

                echo "<script>window.open('../index,'_self')</script>";
            } else {

                echo "<script>alert('Algo estuvo mal, intenta de nuevo.')</script>";

                echo "<script>window.open('../index','_self')</script>";
            }
        }
        ?>