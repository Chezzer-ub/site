<?php
if ($_POST['name'] && $_POST['contact'] && $_POST['subject'] && $_POST['message']) {
    mail("ryanhamiltoncherry@gmail.com", $_POST['subject'], $_POST['message'], "From: {$_POST['contact']}");
}