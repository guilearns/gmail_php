<?php

require_once('php_incs/database.php');
require_once('php_incs/emails.php');
require_once('php_incs/project_functions.php');
date_default_timezone_set("America/Sao_Paulo");

$database = new ConnectDatabase();

?>

<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gmail</title>
    <link href="styles/style.css" rel="stylesheet">
</head>

<body>
    
    <div class="main-div">

    <div class="app" id="app1">

        <?php validatePostRequestMethod(); ?>

        <div class="top-row"> 

            <div class="material-symbols">Close</div>

            <div class="top-row-right-buttons">
                <div class="material-symbols">Attachment</div>
                <button type="submit" form="send"><span class="material-symbols">Send</span></button>
                <div class="material-symbols">More_Horiz</div>

            </div>

        </div>
        
        <div class="write-message-column">
            <form id="send" method="post" action="index.php" autocomplete="off">

                <div class="write-message-sendto-row">
                    <span>Para</span>
                    <input type="text" value="Fulano" readonly="readonly" class="send-email-info" name="to">
                    
                </div>
                <hr class="input-hr">

                <div class="write-message-from-row" >
                    <span>De</span>
                    <input type="text" class="send-email-info" name="from">
                    
                </div>
                <hr class="input-hr">

                <div class="write-message-subject-row" >
                    <input type="text" placeholder="Assunto" class="send-email-info" name="subject">

                </div>
                <hr class="input-hr">

                <textarea placeholder="Escrever e-mail" name="message"></textarea>
            </form>

        </div>

    </div>

    <!---------------------------------------------------------------------------------------------------->

    <hr class="break">

    
    <div class="app" id="app2">

        <div class="search-bar-column"> 

            <div class="search-bar-row">
    
                    <div class="material-symbols">menu</div>

                    <input type="text" placeholder="Pesquisar no e-mail">

                    <div class="search-bar-round-image"></div>

            </div>

        </div>
        
        <h5>PRINCIPAIS</h5>

            <div class="emails-column">

                <?php createEmails($database); ?>

            </div>

    </div>
    </div>
    <script src="scripts/script.js"></script>
</body>