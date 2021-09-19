<?php
$res = new stdClass;
if ($_POST['name'] && $_POST['contact'] && $_POST['subject'] && $_POST['message']) {
    mail("ryanhamiltoncherry@gmail.com", $_POST['subject'], $_POST['message'], "From: {$_POST['contact']}");
    $url = "https://discord.com/api/webhooks/889067323963637781/FdAy22YZ-f8o82Pf4sn4QQPqNKbD4IhYVkNFibHq2bG_vh2sJWvWiaC7ua-ojjlqzHpr";

    $hookObject = json_encode([
        "content" => "**{$_POST['subject']}** \n{$_POST['message']} \n\n__{$_POST['contact']}__\n@here",
        "username" => $_POST['name']

    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

    $ch = curl_init();

    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $hookObject,
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/json"
        ]
    ]);

    $response = curl_exec($ch);
    curl_close($ch);
    $res->success = true;
} else {
    $res->error = "Please enter all fields.";
}
header("content-type: application/json");
echo json_encode($res);