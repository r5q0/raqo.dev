<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raqo | Projects</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#272424] m-5">
    <div class="w-1/5 sm:w-14">
        <a class="flex" href="/"><img src="/media/back.svg" alt=""></a>
    </div>
    @foreach($projects as $index => $project)
    @if ($loop->iteration % 2 == 0)
    <div class="sm:flex justify-end  ">

    <div class="break-words w-[303px] sm:w-1/2 bg-white border-4 border-black rounded-lg m-4 p-4">
        @else
        <div class="sm:flex justify-start ">
        <div class=" break-words w-[303px] sm:w-1/2 bg-white  border-4 border-black rounded-lg m-4 p-4 ">
            @endif
            <h2 class="text-5xl font-bold">{{$project->title}}</h2>
            <p class="inline-flex">{{$project->date}}</p>
            @if($project->isPublic)
            <strong class="text-green-500 inline-flex">Open Source</strong>
            <a class="text-blue-500 inline-flex font-bold" href="{{$project->link}}">Link</a>
            @endif

            @if(!$project->isPublic)
            <strong class="inline-flex text-red-500">Closed Source</strong>
            @endif
            <h2 class="p-3">{{$project->project}}</h2>
        </div>
        </div>
    </div>

        @endforeach
        </div>
</body>

</html>