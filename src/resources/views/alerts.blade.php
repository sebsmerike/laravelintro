<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post | index</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-black">
    <div class="max-w-7xl mx-auto px-4 ">
        <h1 class="text-3xl font-bold text-white">Test alerts</h1>
        <br />
        
        <x-alert type="{{ $type }}">
            <x-slot name="title">ALERT</x-slot>
            Testing the alert box
        </x-alert>
        <br />
        
        <x-alert type="{{ $type }}"  class="p-10">
            <x-slot name="title">ALERT</x-slot>
            Testing the alert box
        </x-alert>
        <br />
        
        <x-info>
            <x-slot name="title">OPTIONS:</x-slot>
            info - danger - success - warning - dark(default)
        </x-info>

        
    </div>
</body>
</html>