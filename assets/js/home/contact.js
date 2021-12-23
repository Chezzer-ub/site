$("#contact-form").submit(() => {
    $("#contact-form [type='submit']").addClass("disabled");
    $("#res").removeClass("text-green-500")
    $.post("https://chezzer.dev/api/form.php", {
        name: $("[name=name]").val(),
        contact: $("[name=contact]").val(),
        subject: $("[name=subject]").val(),
        message: $("[name=message]").val()
    }, (res) => {
        if (res.success) {
            $("#res").html("Sent, thank you for your message.")
        } else {
            $("#contact-form [type='submit']").removeClass("disabled");
            $("#res").html(res.error);
            $("#res").addClass("text-green-500");
        }
    })
})