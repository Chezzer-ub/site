var projects = [
    {
        name: "Expedition Isles",
        tags: "Web, Backend Systems, Minecraft",
        description: `
            EI is one of my major projects, it includes 90% of what I enjoy doing; Minecraft, Web Development and Media, and has one of the 
            best teams I have ever worked in. We love to build on a massive scale, making giant structures and storylines, 
            we hope to open later next year, but we will see.
            <br><br>
            After I left Sapphire Adventures, I was really looking for a place to call home, I reached out to a bunch of servers to basically no avail. 
            When I gave up almost all hope, I messaged Jacob (supapap), we had kind of worked together on Sapphire and knew of each other and what our skills were.
            I asked him if he wanted help with any web development in Kw6Craft (his server at the time) and at this point, not known to me, Jacob was wanting to leave
            and start his own server, perfect timing. 
            <br><br>
            The first couple of weeks was a massive rush for the whole team he had recruited, and felt like we we're on to something
            big and amazing. The server now is mainly ran by him, me and shrake, and we are having a blast! I honestly am so proud of what
            we've managed to accomplish so far and I am really looking forward to the future, check out the website for pics down below.
            <br><br>
            Anyway, enough about the story, lets talk about the website.
            <br>
            The whole thing is built on a Debian 10 machine from Meloncube and runs like a dream, it handles Minecraft so nicely with what we need in terms
            of performance and speed. It is also a linux environment so it runs <a class="text-light" onclick="project(2)">Cloud Core</a> very well and has massive
            expandability when paired with the website. 
            <br><br>
            Its currently running PHP, MySQL & Bootstrap 5, the login system is completely based off Discord, which makes
            logging in so much easier and completely latches on to your Discord profile, removing the need to store any passwords. It does come with it's trade-offs
            though. Discord have a normal API rate-limit and naturally you don't want to spam Discord's API every time a logged-in user visits the site. To combat
            this I simply stored Discord JSON data inside of a database table and treated it like a cache, worked like a charm first try. 
            <br><br>
            Some other interesting  aspects is that the staff integration is completely built into the site, meaning it will contact the server and try to look up a user's groups and give
            them access to certain pages. This took me ages to figure out and hours staring at the LuckPerms database, but it all worked out. If a user has a staff
            role, they use staff only pages like they would use any other page, instead of having it on for instance a staff panel or a separate website. Centralize!
            <br><br>
            So thats Expedition Isles, I am sure I have left out some details and if you have any questions, send them my way over at my <a href="https://dsc.bio/chezzer" target="_blank">Discord.bio</a>
        `,
        links: [
            {
                name: "Website",
                href: "https://expeditionisles.net"
            },
            {
                name: "Twitter",
                href: "https://twitter.com/ExpeditionIsles"
            },
            {
                name: "YouTube",
                href: "https://www.youtube.com/channel/UCXdw0fkmtR8aq1OM6vMoSnQ"
            }
        ],
        time: "29/3/2021 - Present"
    },
    {
        name: "Rocketspark",
        tags: "NodeJS, PHP, Real-Life Work, Internship",
        description: `
            I originally joined Rocketspark as an un-paid intern. The way I managed to get this sweet deal of a job is by a very long story...
            <br><br>
            My school's internet system is pretty sub-average, I normally get around 7-10mbps if I'm lucky, but every lunch time I would sit in 
            the library and browse reddit and code. Sure this was enough for quite a while, but when 2020 came around, ~300 year 9's joined the 
            school, and of course they needed a place to go, so a lot of them decided the library was good.
            <br><br>
            The speeds dropped to around 1mbps and the connection was utter ass, things like complete drops and really slow loading times occurred, 
            and it wasn't just me who was feeling the pain. A lot of my friends do the same as me, and they were about to melt down at the speeds.
            So I tried to come up with a solution. My school has these things in the floor that house power and ethernet cables. I thought, "Maybe, 
            just maybe I can put a modem down there and configure it as an access point". So I did. My friend Harrison had an old modem from the early 
            2010s lying around that was small enough to fit in the very tight space in the floor, but it worked, even though it looked a bit weird as 
            the modem had to push the cover up a tiny bit. The main thing is it worked. 
            <br><br>
            Over the next couple of months we reaped the benefit of a WiFi signal not having to travel across the library into the PoE modem that was 
            under a magnitude of strain, but it wasn't perfect. The connection was still slow, sure there weren't dropouts, but its still pretty bad 
            as the modem is around 10 years old. So I wanted to upgrade. I can't easily hide a modern modem inside of the service holes in the floor 
            so I had to figure out a new solution, a solution that would doom me in the coming months.
            <br><br>
            I had an old Vodafone modem lying around that was used to run the guest network in my house, it was good, capable of 5G and reasonably 
            normal looking. We kept it underneath a library stand where books we're displayed, close to an ethernet port on the wall, and just plugged 
            it in every lunch time. This worked, but we wanted a better solution and we were worried that someone would see it and take it. Well that 
            happened, but not exactly. A librarian teacher saw it when she was moving the stand and gave it to the student office not knowing what it was, 
            Months passed and we accepted that it had been stolen, but one day my friend Dan was getting something from the student office and thought he saw 
            something like it on one of the desks, and surely enough, there it was.
            <br><br>
            We were careful now, only having the modem in my bag, but this was so annoying. We needed a better option. One day, I am at the library main desk, 
            where students scan other students books. The computer has a reasonably sizeable space beneath it, and a spare ethernet port. I take this opportunity 
            and slap the modem under it.
            <br><br>
            It works even better than before, we now name the network to "CHS_LIBRARY" to feel official, and never released the password (which was "startrek" 
            if anyone is wondering). Things were good for a couple months, it was fast, reliable and didn't put us into any trouble as normal librarians just 
            thought it was apart of the computer that scanned books. But around 4 months after we planted the modem, disaster struck.
            <br><br>
            One of the system-admin staff at our school (there were 2) spotted something flashing below the computer when he was in the room that it was in, he 
            made sure it wasn't the other system-admin staff member who put it there and unplugged it, waiting for the person who owned it to come and plug it 
            back in (pretty genius if you ask me). Surely enough I noticed it had been turned off one lunch time, and went to plug it back in. The staff member 
            didn't get to it in time and saw it plugged in again, so he repeated the process. This happened 3 times until he just plainly asked the student 
            manning the scanner computer who did it. Typically one of my friends were on it that day and couldn't hold a straight face. To be fair, I really 
            should've taken it out when it got unplugged, but naive me thought someone was just being a dick.
            <br><br>
            My friend rats me out, which is understandable since I would've probably done that to me if I was asked who was the owner of the modem. He approached 
            my table and said the whole story and asked me to come or it would lead to something bigger that it already is. They unplugged the modem and took me 
            to the system-admin boss (the other guy). I was shitting my pants when I was walking down the hallway of admin block to his office, but I realistically 
            hadn't broken any rules and could argue that its the same as putting a laptop into the ethernet cable. My school really does not like VPNs, so I was smart 
            not to put one on the modem as that could've ended badly.
            <br><br>
            I walk into the room, he says "What's your name?",<br>
            I answer with "Ryan",<br>
            He recognizes my name from the school URL logging system, which I find really spooky.<br>
            The rest of the conversation basically includes how I did it (<em>which is just a modem in access point mode</em>), and why I did it (<em> which I already 
            explained above</em>). He said that they were going to contact my parents, but that didn't scare me as I was telling them more or less about this whole thing. 
            They scheduled a meeting with them and I was released with no punishment yet.
            <br><br>
            My Dad is the only one able to attend the meeting, and I don't get invited. He basically argues that I am not being challenged at school, and needed something 
            more to learn. This voids any punishment for me at all and I just get a warning. They accept this, and tell my Dad about this new cool thing called Rocketspark 
            and how they could contact them to "further" my learning, and so my Dad agreed.
            <br><br>
            That's the story how I bended the rules at my school, and got an intern job out of it, completely hassle free. Pretty crazy, right?
            <br><br>
            Working at Rocketspark is a dream, the workplace is very nice and communicative. I started out working with Richard, learning a bit of vue.js, but then was quickly 
            contacted by Jason about a way we could transfer people's sites coming from other providers like Wix and Squarespace. It would involve me manually looking at the sites 
            and re-creating them on Rocketspark's web builder, and they would <em>pay me</em>.
            <br></br>
            I instantly accepted and he started to give me the basics of the editor. From there I started doing a lot of odd jobs, mainly doing the hard work with code. 
            It was amazing to be able to help them gain a lot of clients by doing the hard work for them, and get paid to do it aswell. As an employee I was able to attend 
            all their events (outside of school) and was able to attend my first fine dining experience at the Launch Awards. It was a very new experience for me, and after 
            I had <a href="https://www.rocketspark.com/blog/post/293/meet-the-16-year-old-computer-programmer/" target="_blank">an article</a> written on the Rocketspark website, 
            I was pretty popular.
            <br><br>
            And here I am today, still working there earning a pretty amazing paycheck and employing my friends to help me where needed, its pretty amazing and can't wait to see 
            where this eventually leads me. The story on how I got here isn't really known to Rocketspark, so I thought I'd make it extra detailed so they and you can have a 
            laugh how I did this, and who knows, I might be able to become a developer here someday.
            <br><br>
            Check out the website and my article with the buttons below.
        `,
        links: [
            {
                name: "Website",
                href: "https://rocketspark.com"
            },
            {
                name: "Blog Article",
                href: "https://www.rocketspark.com/blog/post/293/meet-the-16-year-old-computer-programmer/"
            }
        ],
        time: "11/6/2020 - Present"
    },
    {
        name: "Cambridge Camera",
        tags: "Live Camera, OBS, Outdoor Mayhem",
        description: `
            This project was an idea I had back in October; Put a camera on the roof. Simple Right?
            <br><br>
            The first design I came up for this is to use my Logitech C920 webcam, a Raspberry Pi Tripod, a Solar Power Bank and a Raspberry Pi Zero. 
            I found a box and housed all the electronics in and thread the cable through a gap in the box. I tested this for many weeks but the power bank 
            kept running out of charge, this wouldn't work so I ordered a second one. Thinking this is just going to be a money hole I put it up on the roof for 2 
            days.
            <br>
            1 night I come home and it starts to rain, oh no. I try to get home as fast as possible put I am too late, the raspberry pi is literally swimming in water. 
            I start it up and it doesn't start streaming (I didn't have a screen at this point), so I try to login to SSH to no avail. I decide to buy a mini HDMI to HDMI 
            to finally see whats going on and to no surprise at all, I completely fried the WiFi driver. Well, back to the drawing board.
            <br><br>
            My second attempt was to just do away with remote all together and run a 6 meter USB extension cord up the side of my house. After some careful 
            negociating with my parents, I manage to get permission to get up on a ladder and run it out a window, along the gutter and up the house, making sure 
            this time that the connections are taped over and the camera has a bag on top to at least try and prevent rain. I also used a couple of adhesive zip tie 
            holders to connect the tripod and cable to the roof. It's currently 2 days after installing this and I really hope it will be fine in the rain and wind, but 
            we will see.
            <br><br>
            You can view the live camera stream down below and enjoy the ambient noise from the camera and a lofi-hiphop playlist I put together, aswell as see the current 
            weather, when the sun is going to rise and set and the current time. 
        `,
        links: [
            {
                name: "Twitch Stream",
                href: "https://www.twitch.tv/cambridgecam"
            },
            {
                name: "Instagram",
                href: "https://instagram.com/cambridgecameranz"
            },
            {
                name: "YouTube",
                href: "https://www.youtube.com/channel/UCz-mX5VLjAMqF8IY5lQfAHw"
            },
            {
                name: "Camera Photo",
                href: "https://cdn.discordapp.com/attachments/924772262878539838/927074322730876938/17E5FFAD-B98C-4F1B-A7FE-614839D22780.jpg"
            }
        ],
        time: "15/9/2021 - Present"
    },
    {
        name: "Bunker",
        tags: "Web, Backend Systems, Radio, Spotify Intergration",
        description: `
            Bunker is a dance/electronic music radio station and has been my project ever since I left UpBeat. This radio is meant to be 
            a change in the community, from the old slave labour that most of the radios in the community offer. A no-care, no-restriction 
            radio based on actual DJing and mixing.
            <br><br>
            So far we have built a pretty cool website built with Discord & Spotify intergration for accounts. You can like songs to your 
            Spotify library or login with Spotify or Discord.
            <br><br>
            Just after the release of our website, we started work on our radio & track API. This API can do wonders, migrating the Spotify, 
            Deezer and Musixmatch APIs together into 1 free API. You can search for tracks, use ISRC or even Spotify IDs, all at superfast 
            times as it's stored on the CloudFlare Edge caching network. This has been mine and Polar's baby for the last couple of months, 
            constantly tinkering to make it better and offer more data (which it already offers everything you could imagine). Check it out at 
            the link below.
            <br><br>
            But yes, a truely massive passion project that is going up strong, if you have mixing skills or DJing skills, you can even apply 
            to be one. Check it out.
        `,
        links: [
            {
                name: "Website",
                href: "https://bunker.dance"
            },
            {
                name: "API",
                href: "https://github.com/bunkerradio/api/wiki/Methods-(v1)#apitreblelookup"
            }
        ],
        time: "6/7/2021 - Present"
    },
    {
        name: "Cloud Core",
        tags: "Minecraft Development, NodeJS, Linux",
        description: `
            This project is now deprecated, you can still find it on NPM and GitHub.
        `,
        links: [
            {
                name: "NPM Module",
                href: "http://npmjs.com/package/cloud-core-server"
            },
            {
                name: "GitHub",
                href: "https://github.com/Chezzer-ub/cloud-core"
            }
        ],
        time: "15/5/2021 - 25/8/2021"
    },
    {
        name: "Coasters and Crafters",
        tags: "Minecraft Development, PHP, OBS",
        description: `
            Coasters and Crafters is a community that specializes in Minecraft advertising. I am owner alongside Euan. This mostly consists of 
            making new tools and features to help servers by making their lives easier or giving them some recognition. The project originally started 
            as a small Minecraft theme park community, but has since turned into a platform for server owners of Minecraft, Discord and many other servers 
            to sign on and be able to be part of a larger community.
            <br><br>
            My main job is making the website, things like account creation and account editing is my thing (aswell as that god awful Minecraft verify thing). The website is 
            built in mainly PHP, but some things are exhausted with node, like the server & user page randomization is ran every 5 minutes to reduce lag on clients.
            <br><br>
            Every year at Coasters and Crafters, we host our annual Coaster Con event. This massive event is a weekend long event bringing all the servers into 1 big world. 
            At Coaster Con 2021, I mainly helped with livestreaming and general management. This includes setting up a global network so livestreamers (cameramen) can provide 
            unique views to the livestream, and I can choose which one is best (a bit like real life). The only problem with this is that a lot of the inferstructure couldn't 
            handle the trip from overseas to New Zealand, which gave laggy and buffered streams. All in all it was good enough, but next year I am planning hopefully something 
            a hell of a lot better. I can't reveal much ;). 
        `,
        links: [
            {
                name: "Website",
                href: "https://candc.icu"
            }
        ],
        time: "3/8/2020 - Present"
    },
    {
        name: "UpBeatRadio",
        tags: "Radio Development, PHP, JavaScript",
        description: `
            UpBeat is quite an old project for me and will always stay dear in my heart, I stayed there for quite a while and was one of 
            my first large scale web projects. Of course I had no idea what I was doing, but soon picked up all the nits and kinks of the 
            UpBeat website. 
            <br><br>
            We went through many phases, things like the team rethinking an entire idea and slow months where we would all be burnt out. 
            It was one of the best experiences to start my carrer off and I thank the entire crew at UpBeat for what they do and what they 
            have been through.
            <br><br>
            I left late 2019 looking to start some of my own projects as UpBeat started to die down a little, I am still a guest radio 
            presenter and go live sometimes, but not too often.
        `,
        links: [
            {
                name: "Website",
                href: "https://upbeat.pw"
            }
        ],
        time: "1/7/2018 - 28/7/2019"
    }
]

var height = ($(".projects").height() / projects.length);
projects.forEach((item, i) => {
    //i*height+(height*(i/projects.length))
    $(".projects").append(`
        <div data-project="${i}" style="top: ${(i*height)+(i/projects.length*height)}px;" class="relative bg-accent rounded-full project-dot">
            <div class="project-name">${item.name}</div>
        </div>
    `)
    $(".projects").append(`
        <style>
            [data-project="${i}"]:hover {
                width: calc(${$(`[data-project=${i}] .project-name`).width()}px + 1rem);
            }

            [data-project="${i}"] {
                width: 20px;
            }
        </style>
    `)
})


$("[data-project]").on("click", (e) => {
    project(Number($(e.currentTarget).attr("data-project")))
})

function project(id) {
    let projectId = Number($(".project-dot.active").attr("data-project"));

    let pos = "", neg = "-";
    if (id < projectId) {
        pos = "-";
        neg = "";
    }

    $("[data-project]").removeClass("active");
    $(`[data-project=${id}]`).addClass("active");
    let data = projects[id];
    let links = "";
    data.links.forEach((link) => {
        links += `<a class="bg-body px-4 mr-3 py-1 md:mt-0 mt-3 text-white text-center rounded-full text-sm hover:bg-red-500 transition duration-300 noAStyle" href="${link.href}" target="_blank">${link.name}</a>`
    })

    $(".project-inner").css("transform", `translateY(${neg}100px)`)
    $(".project-inner").css("opacity", "0")
    setTimeout(() => {
        $(".project-inner").css("transition", "0s")
        $(".project-inner").css("transform", `translateY(${pos}100px)`)
    }, 300)
    setTimeout(() => {
        $(".project-inner").css("transition", ".3s")
        $(".project-inner").css("transform", "translateY(0px)")
        $(".project-inner").css("opacity", "1")
        $(".project-inner").html(`
            <h2 class="text-5xl text-accent">${data.name}</h2>
            <div class="my-4">
                <span class="font-mono opacity-50">${data.tags} • ${data.time}</span>
            </div>
            <div class="mb-5 w-6/12 project-content">
                ${data.description}
            </div>
            <div class="md:inline-flex grid">
                ${links}
            </div>
        `)
        
    }, 350)
}