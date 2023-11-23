<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raqo | Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#272424] m-5">
    <div class="w-1/5 sm:w-14">
        <a class="flex" href="/blog"><img src="/media/back.svg" alt=""></a>
    </div>
    <div class="w-[60vw] mx-auto ">
        <div class="bg-white text-center p-5  rounded-lg">
            <div class="border-b-2 mb-4">
                <h1 class="font-black text-4xl">{{$blog[0]->title}}</h1>
                <p class="text-gray-500">{{$blog[0]->date}}</p>
            </div>
            <p class=" px-1 sm:px-16 text-lg break-words">{{$blog[0]->blog}}</p>
        </div>
    </div>
</body>

</html>
