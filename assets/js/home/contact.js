$("#contact-form").submit(() => {
    $.post("https://chezzer.dev/api/form.php", {
        name: $("[name=name]").val(),
        contact: $("[name=contact]").val(),
        subject: $("[name=subject]").val(),
        message: $("[name=message]").val()
    }, (res) => {
        if (res.success) {
            $("#res").html("Sent, thank you for your message.")
        } else {
            $("#res").html(res.error);
        }
    })
})