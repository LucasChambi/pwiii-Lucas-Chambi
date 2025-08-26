<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="{{ asset('imgs/linktree.png') }}">
    <title>Linktree - Lucas Chambi</title>
</head>
<body class="bg-[#2e8fa6] text-center">
    <img src="{{ asset('imgs/kirby-jaeyun.jpg') }}" alt="description of myimage" class="mx-auto mt-10 rounded-full w-48 h-48 text-center m-5 border-2 border-solid border-white">
    <h1 class="font-semibold text-white text-4xl m-5">Boas-Vindas ao meu perfil</h1>
    <p class="font-semibold text-white text-1xl m-5">Meu nome é Lucas Bruno Calle Chambi.</p>
    <p class="font-semibold text-white text-1xl m-5">Amo jogos de luta e Programação Web.</p>
    <div class="flex flex-col items-center space-y-4 m-10">
        <button class="bg-white text-[#2e8fa6] font-bold p-3 pr-10 pb-3 pl-10 w-64 rounded-full transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-white"><a href="{{ url('https://github.com/LokiiiGo') }}">Github</a></button>
        <button class="bg-white text-[#2e8fa6] font-bold p-3 pr-10 pb-3 pl-10 w-64 rounded-full transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-white"><a href="{{ url('https://www.linkedin.com/in/lucas-chambi-48299435a/') }}">LinkedIn</a></button>
        <button class="bg-white text-[#2e8fa6] font-bold p-3 pr-10 pb-3 pl-10 w-64 rounded-full transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-white"><a href="{{ url('https://twitter.com/kinubiyosoy') }}">Twitter</a></button>
        <button class="bg-white text-[#2e8fa6] font-bold p-3 pr-10 pb-3 pl-10 w-64 rounded-full transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-white"><a href="{{ url('https://www.instagram.com/kinubiyosoy/') }}">Instagram</a></button>
    </div>

</body>
</html>