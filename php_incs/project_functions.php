<?php 

function createEmails($database) {

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        if($_POST['to'] == "Fulano" && $_POST['from'] != "" && $_POST['subject'] != "" && $_POST['message'] != "") {

            $time = date("H:i"); 
            $database->conn->query('INSERT INTO emails.inbox (isfrom, subject, message, time) VALUES' . '(" ' . $_POST["from"] . '", "'. $_POST["subject"] . '", "' . $_POST["message"] . '", "' . $time . '");');

        }

    }

    $result = $database->conn->query("SELECT * FROM emails.inbox ORDER BY id DESC;");
    
    $allEmails = $result->fetch_all();
    $emailsLength = count($allEmails);

    if ($emailsLength == 0) {

        echo '<div class="no-email"> Parece que você ainda não recebeu nenhum e-mail. </div>';

    } else {

        for ($i = 0; $i < $emailsLength; $i++) {

            new Email($allEmails[$i][1], $allEmails[$i][2], $allEmails[$i][3], $allEmails[$i][4]);
    
        }
    
    }

}

//-----------------------------------------------------------//

function validatePostRequestMethod() {

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if($_POST['to'] == "Fulano" && $_POST['from'] == "" || $_POST['subject'] == "" || $_POST['message'] == "") {
            echo '<div id="erro">Erro: Preencha todos os campos para enviar seu e-mail</div>';
        }

    }

}

//-----------------------------------------------------------//

?>