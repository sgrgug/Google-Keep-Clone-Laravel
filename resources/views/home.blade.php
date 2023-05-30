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
                    <input id="title"
                        class="w-full p-4 text-md font-bold focus:outline-none focus:border-transparent rounded-t-lg"
                        type="text" placeholder="Title" name="title">
                    <input class="w-full p-4 text-md focus:outline-none focus:border-transparent" type="text"
                        placeholder="Take a note..." name="content">
                    <input
                        class="w-full p-4 text-md bg-orange-400 text-white capitalize font-bold cursor-pointer rounded-b-lg"
                        type="submit" value="Create">
                </form>
                @if (session()->has('status'))
                    <div class="bg-green-300 p-2">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    {{-- Pin --}}
    <div class="max-w-screen-xl m-auto py-0 px-16 my-16">
        <div class="py-8 uppercase">{{ $isAvailability }}</div>
        <div class="columns-1 sm:columns-2 md:columns-3 lg:columns-4 gap-3 space-y-3">
            @foreach ($keep as $keeps)
                @if ($keeps->pin === 1)
                    <div id="card"
                        class="bg-white rounded-md px-4 break-inside-avoid border-2 hover:shadow-md hover:border-2 hover:border-slate-300 cursor-default">
                        <div class="font-bold py-3">{{ $keeps->title }}</div>
                        <div class="line-clamp-6">{{ $keeps->content }}</div>

                        {{-- For Bottom Logo --}}
                        <div id="hoverItem" class="flex justify-between items-center pt-8">
                            <a href="{{ url('/editkeep', $keeps->id) }}">
                                <ion-icon class="mr-1 cursor-pointer p-2 hover:bg-stone-100 hover:rounded-full"
                                    name="create"></ion-icon>
                            </a>
                            <a href="{{ url('/delete', $keeps->id) }}">
                                <ion-icon class="cursor-pointer p-2 hover:bg-stone-100 hover:rounded-full"
                                    name="trash">
                                </ion-icon>
                            </a>
                            <ion-icon class="cursor-pointer p-2 hover:bg-stone-100 hover:rounded-full"
                                name="person-add">
                            </ion-icon>
                            <ion-icon class="cursor-pointer p-2 hover:bg-stone-100 hover:rounded-full"
                                name="images-sharp">
                            </ion-icon>
                            <ion-icon class="cursor-pointer p-2 hover:bg-stone-100 hover:rounded-full"
                                name="archive-sharp">
                            </ion-icon>
                            <ion-icon class="cursor-pointer p-2 hover:bg-stone-100 hover:rounded-full"
                                name="ellipsis-vertical-sharp"></ion-icon>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>


    {{-- Others --}}
    <div class="max-w-screen-xl m-auto py-0 px-16">
        <div class="py-8 uppercase">Others</div>
        <div class="columns-1 sm:columns-2 md:columns-3 lg:columns-4 gap-3 space-y-3">
            @foreach ($keep as $keeps)
                <div id="card"
                    class="relative bg-white rounded-md px-4 break-inside-avoid border-2 hover:shadow-md hover:border-2 hover:border-slate-300 cursor-default">
                    <div id="hoverItem" class="absolute -top-3.5 -left-3.5 text-2xl cursor-pointer">
                        <ion-icon name="checkmark-circle-sharp"></ion-icon>
                    </div>

                    {{-- Pin Logo --}}
                    <div class="absolute top-3 right-1 text-2xl">
                        @if ($keeps->pin === 1)
                            <ion-icon name="pin-sharp"></ion-icon>
                        @else
                            <ion-icon name="pin-outline"></ion-icon>
                        @endif
                    </div>

                    {{-- title --}}
                    <div class="font-bold py-3">{{ $keeps->title }}</div>
                    {{-- content --}}
                    <div class="line-clamp-6">{{ $keeps->content }}</div>

                    {{-- For Bottom Logo --}}
                    <div id="hoverItem" class="flex justify-between items-center pt-8">
                        <a href="{{ url('/editkeep', $keeps->id) }}">
                            <ion-icon class="mr-1 cursor-pointer p-2 hover:bg-stone-100 hover:rounded-full"
                                name="create"></ion-icon>
                        </a>
                        <a href="{{ url('/delete', $keeps->id) }}">
                            <ion-icon class="cursor-pointer p-2 hover:bg-stone-100 hover:rounded-full" name="trash">
                            </ion-icon>
                        </a>
                        <ion-icon class="cursor-pointer p-2 hover:bg-stone-100 hover:rounded-full" name="person-add">
                        </ion-icon>
                        <ion-icon class="cursor-pointer p-2 hover:bg-stone-100 hover:rounded-full" name="images-sharp">
                        </ion-icon>
                        <ion-icon class="cursor-pointer p-2 hover:bg-stone-100 hover:rounded-full" name="archive-sharp">
                        </ion-icon>
                        <ion-icon class="cursor-pointer p-2 hover:bg-stone-100 hover:rounded-full"
                            name="ellipsis-vertical-sharp"></ion-icon>
                    </div>
                </div>
            @endforeach
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
    {{-- icon pack --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
