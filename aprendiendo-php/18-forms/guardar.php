<?php

if(isset($_POST['name']) && isset($_POST['last-name']) && isset($_POST['cc']) && isset($_POST['sex']) && isset($_POST['preferences']) && isset($_POST['birth-date'])){
    echo '<h2>'.$_POST['name'].'</h2>';
    var_dump($_POST['birth-date']);
}
    
?>