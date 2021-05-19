<div class="modal-header">
    <h5 class="modal-title">New Playlist</h5>
    <button class="close" data-dismiss="modal">×</button>
</div>
<div class="modal-body p-4">
    <div class="row">
        <div class="col-auto">
            <form id="playlist-image" class="dropzone white b-a b-3x b-dashed b-dark rounded p-0 text-center">
                <div class="dz-message">
                    <h4 class="my-4">Drop files here or click to upload.</h4>
                    <span class="text-muted d-block mb-4">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                </div>
            </form>
        </div>
        <div class="col-auto">

        </div>
    </div>
</div>
<script>
    $("#playlist-image").dropzone({
        url: "/file/post", 
        parallelUploads: 1,
        resizeWidth: 250,
        resizeHeight: 250,
        resizeMethod: "crop",
        maxFiles: 1,
        acceptedFiles: "image/*"
    });
</script>