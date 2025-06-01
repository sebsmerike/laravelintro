<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post | index</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="max-w-7xl mx-auto px-4">
        <h1 class="text-3xl font-bold">Show all posts</h1>
        <br />
        <x-info>
            <x-slot name="title">sql: </x-slot>
            SELECT * FROM post;
        </x-info>
        <br />
        <x-info>
            <a class="underline" href="https://flowbite.com/docs/components/alerts/">tailwind alerts</a>
        </x-info>

        
    </div>
</body>
</html>