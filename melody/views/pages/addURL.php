<div class="modal-header">
    <h5 class="modal-title">Queue URL</h5>
    <button class="close" data-dismiss="modal">×</button>
</div>
<div class="modal-body p-4">
    <form action="javascript:submit()" id="addURL">
        <label for="url">Enter URL</label>
        <input type="text" name="url" placeholder="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="form-control">
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
<script>
    function submit() {
        var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
        '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.?)+[a-z]{2,}|'+ // domain name
        '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
        '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
        '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
        '(\\#[-a-z\\d_]*)?$','i'); // fragment locator
        if (pattern.test($("[name=url]").val())) {
            queue($("[name=url]").val());
            $("#siteModal").modal("hide");
            $("[name=url]").val("");
            addAlert("Success", "URL queued.", "success");
        } else {
            addAlert("Error", "Please enter a valid URL.", "danger");
        }
    }
</script>