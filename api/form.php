<?php
$res = new stdClass;
if ($_POST['name'] && $_POST['contact'] && $_POST['subject'] && $_POST['message']) {
    mail("ryanhamiltoncherry@gmail.com", $_POST['subject'], $_POST['message'], "From: {$_POST['contact']}");
    $res->success = true;
} else {
    $res->error = "Please enter all fields.";
}
header("content-type: application/json");
echo json_encode($res);