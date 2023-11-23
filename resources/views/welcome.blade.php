<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raqo | Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#272424] sm:h-screen  grid grid-cols-1">

    <div class="grid grid-cols-1 md:grid-cols-2">
        <div class=" flex flex-col items-center justify-center">
            <img class="rounded-full p-2 h-50 md:h-96" src="media/profile.png" alt="Profile Picture">
            <div class="flex justify-center space-x-5">
                <a href="https://github.com/r5q0" class="text-white hover:opacity-70">
                    <img src="media/github.svg" alt="GitHub" class="h-6 w-6 inline-block mr-2">GitHub
                </a>
                <a href="https://discordapp.com/users/798896771366387732" class="text-indigo-500 hover:opacity-70">
                    <img src="media/discord.svg" alt="Discord" class="h-6 w-6 inline-block mr-2">Discord
                </a>
            </div>
        </div>
        <div class="  text-center  text-center p-5 rounded-lg m-2 md:m-10 flex flex-col items-center justify-center">
            <h2 class="font-black text-white text-5xl mb-6 ">Raqo</h2>
            <p class="text-center text-white p-4 font-bold text-lg ">
                As a <span class="text-blue-500">passionate</span> software developer and <span class="text-blue-500">cloud service provider</span>, I delve into the realms of <span class="text-green-500">Artificial Intelligence</span> and craft <span class="text-green-500">rule-based trading algorithms</span>. My commitment to <span class="text-pink-500">privacy</span> leads me to keep my real name and profile picture discreet. Let's explore the <span class="text-yellow-500">boundless possibilities</span> in technology together! 🚀
                If you share similar interests or have exciting ideas, feel free to reach out let's collaborate and innovate! 🤝
            </p>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 m-10">

        <div class="bg-white text-center p-5 rounded-lg m-2 md:m-10 flex flex-col items-center justify-center cursor-pointer" onclick="window.location.href='blog'">
            <h2 class="font-black  md:text-2xl">📝 Blog</h2>
            <p class="lg:text-lg px-5">Step into my world! 🌐 Explore a variety of blogs ranging from development insights to topics that capture my attention. Discover what keeps me inspired and busy. 📚</p>
        </div>

        <div class="bg-white text-center p-5 rounded-lg m-2 md:m-10 flex flex-col items-center justify-center cursor-pointer" onclick="window.location.href='projects'" >
            <h2 class="font-black  md:text-2xl">🛠️ Projects</h2>
            <p class="lg:text-lg px-5">Discover my portfolio of both open and closed-source projects. 🚀 Stay tuned for corresponding blogs that delve into the development journey behind each project. 📰</p>
        </div>


        <div class="bg-white text-center p-5 rounded-lg m-2 md:m-10 flex flex-col items-center justify-center cursor-pointer" onclick="window.location.href='blog'">
            <h2 class="font-black md:text-2xl">🚀 Services</h2>
            <p class="lg:text-lg px-5">Explore a galaxy of possibilities! 🌌 Here, you'll discover the stellar services I offer, including web development, telegram bot development, gpu server solutions, and more. 🛠️</p>
        </div>

    </div>
</body>
</html>