<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- TailWind -->
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2/dist/tailwind.min.css">
      
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="">
       <div class="lg:w-2/4 m-auto py-8 px-6 bg-white rounded-xl ">
        <h1 class="font-bold text-5xl text-center mb-8">Mon Todo List en Laravel </h1>
    
        <div class="mb-6">
            <form action="/store" method="get" class="flex flex-col space-y-4">
                <input type="text" name="title" placeholder="The todo title" class="py-3 px-4 bg-gray-100 rounded-xl">
                <textarea name="description" cols="30" rows="10" placeholder="The todo description" class="py-30 px-4 bg-gray-100 rounded-xl" id=""></textarea>
                <button class="w-28 py-4 px-8 bg-green-500 text-white rounded-xl">Add</button>    
            </form>
        </div>
        <hr>
        <div class="mt-2">
            @foreach ($todos as $todo)
            <div 
            @class([
                'py-4 flex items-center border-b bord-gray-300 px-3',
                $todo->isDone ? 'bg-green-200': ''
            ])
            
            >
                <div class="flex-1 pr-8">
                    <h3 class="text-lg font-semi-bold">{{$todo->title}}</h3>
                    <p class="text-gray-500">{{$todo->description}}</p>
                </div>
                <div class="flex space-x-3">
                    <form action="/{{$todo->id}}" method="post">
                        @csrf
                        @method('PATCH')
                        <button class="py-2 px-2 bg-green-500 text-white rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>
                        </button>
                    </form>
                    <form action="/{{$todo->id}}" method="post">
                        @csrf
                        @method('DELETE')
                    <button class="py-2 px-2 bg-red-500 text-white rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </body>
</html>
