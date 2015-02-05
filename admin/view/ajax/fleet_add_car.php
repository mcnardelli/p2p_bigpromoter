<?php
    //Include Core files from WP
    include_once ('../../include.php');

    $insert = $control->addCar();
    
    if (!$insert) {
?>
        <div id="divAdd" class="alert p2p_bp_alert-success w100p left">Car included! You need to reload this page to see the car included! Wait for the automatic reload or <a href="#" onClick="window.location.reload();">click here</a>!</div>
        <script>
            setTimeout(function(){
                location.reload(true);
            }, 3000); 
        </script>
<?php
    } else {
        echo '<div id="divAddWrong" class="alert p2p_bp_alert-danger w100p left">'.$insert.'</div>';
    }
?>
<script>
        jQuery("#divAddWrong").delay(3000).fadeOut(500);
</script>