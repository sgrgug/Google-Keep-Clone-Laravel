<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    {{-- <form class="bg-red-200 p-3" action="" method="post">
    @csrf
    <span>Title</span>
    <input class="w-full m-1" type="text" name="title">

    <span>content</span>
    <input class="w-full m-1" type="text" name="content">

    <span>bgcolor</span>
    <input class="w-full m-1" type="text" name="bgcolor">

    <input class="bg-blue-300" type="submit" value="Submit">
  </form> --}}

    <div class="max-w-screen-md m-auto">
        <div class="shadow-lg m-3 rounded-md">
            <div class="p-4">
                <form action="" method="post">
                    @csrf
                    <input class="w-full p-2 text-md font-bold focus:outline-none focus:border-transparent" type="text"
                        placeholder="Title" name="title">
                    <input class="w-full p-2 text-md focus:outline-none focus:border-transparent" type="text"
                        placeholder="Take a note..." name="content">
                    <input type="radio" name="purple" id="purle">
                    <input class="w-full p-2 text-md bg-blue-300 text-white capitalize font-bold cursor-pointer"
                        type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>


    {{-- @foreach ($keep as $keeps)
        {{ $keeps->title }}
    @endforeach --}}
    <div class="max-w-screen-xl m-auto py-10">
        <div class="grid grid-cols-2 md:grid-cols-3">
            @foreach ($keep as $keeps)
                {{-- {{ $keeps->title }} --}}
                <div class="{{ $keeps->bgcolor }} m-1 rounded-lg p-4">
                    <b>{{ $keeps->title }}</b>
                    <p>{{ $keeps->content }}</p>
                
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
