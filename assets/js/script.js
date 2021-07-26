page('/', () => {
    getContent("home.html");
})

function getContent(path) {
    $.get(`/pages/${path}`, $("main").html)
}