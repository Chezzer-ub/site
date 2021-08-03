$.ajax({ 
    url: "https://api.github.com/users/Chezzer-ub/repos?sort=updated&type=owner",
    success: (repos) => {
        repos.forEach((repo) => {
            if (!repo.fork) {
                let desc = repo.description;
                let charCount = 55;
                if (desc.length > charCount) desc = desc.substring(0, charCount) + "...";
                $("#repos").append(`
                    <div class="my-5 px-5 w-1/2 xl:w-1/3">
                        <a href="${repo.html_url}" target="_blank" class="noAStyle">
                            <div class="bg-alt rounded p-5 relative" style="min-height: 10rem;">
                                <h3 class="text-lg">${repo.name}</h3>
                                <p class="mt-2 mb-10">${desc}</p>
                                <div class="absolute bottom-0 left-0 m-5">
                                    <i class="fa-solid fa-circle" style="color:${getLanguageColor(repo.language).color}"></i> ${repo.language}
                                </div>
                                <div class="absolute bottom-0 right-0 m-5">
                                    ${repo.stargazers_count} <i class="fa-solid fa-star" style="color:#ffd43b"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                `)
            }
        })
    }
})