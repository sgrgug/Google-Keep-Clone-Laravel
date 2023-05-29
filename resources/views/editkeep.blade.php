<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>


<body class="bg-stone-100">
    <div class="text-center bg-white shadow-lg p-4 font-bold text-xl text-stone-600 sticky top-0 z-10">
        <p>Google Keep Clone</p>
    </div>
    <div class="max-w-screen-md m-auto">
        <div class="shadow-lg my-16 rounded-md">
            <div class="">
                <form class="" action="" method="post">
                    @csrf
                    @method('PUT')
                    <input id="title"
                        class="w-full p-4 text-md font-bold focus:outline-none focus:border-transparent rounded-t-lg"
                        type="text" placeholder="Title" name="title" value="{{ $keep->title }}">
                    <input class="w-full p-4 text-md focus:outline-none focus:border-transparent" type="text"
                        placeholder="Take a note..." name="content" value="{{ $keep->content }}">
                    <input
                        class="w-full p-4 text-md bg-orange-400 text-white capitalize font-bold cursor-pointer rounded-b-lg"
                        type="submit" value="Update">
                </form>
            </div>
        </div>
    </div>

    {{-- Input focus after reloadig --}}
    <script>
        window.onload = function() {
            var inputElement = document.getElementById("title");
            if (inputElement) {
                inputElement.focus();
            }
        };
    </script>
</body>

</html>
