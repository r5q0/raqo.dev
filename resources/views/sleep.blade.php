<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Sleep</title>
</head>

<body class="bg-black flex justify-center items-center h-screen ">
    <a id="sleep" href="bol.com" class="text-2xl border-white ">
        <div class="rounded-lg border-white bg-gray-600 border-2 p-20 rounded text-center">
            <button class="text-6xl">⏰</button>
        </div>
    </a>
    <script>
        document.getElementById('sleep').addEventListener('click', function(e) {
            e.preventDefault();
            setTimeout(() => {
                fetch('api/sleep', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                })
            }, ); // Replace with your desired delay in milliseconds
        });
    </script>
</body>

</html>
