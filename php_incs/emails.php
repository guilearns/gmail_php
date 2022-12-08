<?php 

class Email {

    public function __construct($from, $subject, $emails, $time) {
        
        echo '<div class="emails-row">

                <div class="emails-image"></div>
                <div class="emails-content-column">
                    <p class="emails-from">'. $from .'</p>
                    <p class="emails-subject">'. $subject . '</p>
                    <p class="emails-message">'. $emails .'</p>

                </div>
                <div class="emails-tail-column">
                    <p class="time">'. $time .'</p>
                    <div class="material-symbols" style="color:gray;">star</div>

                </div>
            
            </div>';
            
    }

}

?>
