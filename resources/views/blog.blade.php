    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Raqo | Blog</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-[#272424] m-5" >
        <div class=" w-1/5 sm:w-14  ">
    <a class="flex" href="/"><img src="media/back.svg"alt=""></a>
    </div>
    <div class="flex justify-center flex-col gap-5 items-center">
    @foreach($blog as $blog)
    <a href="blog/{{$blog->id}}">
    <div class="bg-[#404040] border-2 border-white py-3 w-[50vw] flex justify-center items-center relative rounded-lg hover:opacity-80 ">
        <h2 class="font-bold text-white text-center text-lg sm:text-2xl">{{$blog->title}}</h2>
        <p class=" text-[0.65rem] text-white   sm:text-sm absolute bottom-1 left-1">{{$blog->date}}</p>
    </div>
    </a>
    @endforeach
</div>

    </body>
    </html>