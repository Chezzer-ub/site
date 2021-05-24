<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mega Image Transfer</title>
</head>
<body>
    <style>
        body {
            margin:0;
            padding:0;
            font-family: sans-serif;
        }

        #download {
            background: #eee;
            width: 50%;
            padding: 1rem;
        }
    </style>

    <div style="display: flex;">
        <div style="width: 50%;padding:1rem">
            <form style="position: fixed;" action="" id="upload">
                <input type="file" name="image" multiple>
                <input type="submit" value="Upload Image">
            </form>
        </div>
        <div id="download">
            <?php 
                $files = json_decode(file_get_contents("https://chezzer.dev/mit/connect"), true);
                $i = 0;
                foreach ($files as $file) {
                    if ($i < ($_GET['limit'] ? (int)$_GET['limit'] : 15)) {
                        echo "<a href=\"https://chezzer.dev/mit/images/{$file}\" target=\"_blank\"><img src=\"https://chezzer.dev/mit/connect?filename={$file}&size=300\" width=\"16.6%\"></a>";
                    }
                    $i++;
                }
            ?>
            <p style="margin:0;margin-top:1rem">Images are deleted after 24 hours, limited to <?php echo $_GET['limit'] ? (int)$_GET['limit'] : 15?> recent images, add ?limit=30 to URL to increse.</p>
        </div>
    </div>

    <script src="jq.js"></script>
    <script>
        var socket = new WebSocket("wss://chezzer.dev/mit/connect");

        socket.onmessage = (e) => {
            let data = {};
            try {
                data = JSON.parse(e.data)
            } catch (e) {

            }

            if (data.type == "download") {
                $("#download").prepend(`<img style="margin-top: 1rem" src="${data.data}" width="100%">`);
            } else if (data.type == "error") {
                $("#download").prepend(`<span style="color:crimson">${data.data}</span><br>`);
            } else if (data.type == "message") {
                $("#download").prepend(`<span>${data.data}</span><br>`);
            }
        };

        socket.onerror = function(error) {
            alert(`[error] ${error.message}`);
        };

        socket.onclose = () => {
            alert("Disconnected from server.");
        }

        $("#upload").on('submit',(function(e) {
            socket.send(JSON.stringify({type: "upload"}));
            e.preventDefault();
            $.ajax({
                type: "POST",
                enctype: 'multipart/form-data',
                url: "https://chezzer.dev/mit/upload",
                data:  new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                timeout: 600000,
                success: function (data) {
                },
                error: function (e) {
                    alert("[error]: "+e.responseText)
                }
            });
        }))
    </script>
</body>
</html>
