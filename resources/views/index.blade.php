@extends('layout.template')


@section('title', 'Live Data Covid-19 | Home')

@section('content')
<section>
    <header class="max-w-4xl mx-auto">
        <div class="mt-24 md:mt-32 text-center">
            <h1 class="text-4xl font-light">Kawal Covid-19</h1>
            <div class="flex justify-center items-center mt-6">
                <p class="font-extralight">Live Data Covid-19 Indonesia</p>
                <img class="w-6 h-auto ml-2" src="https://img.icons8.com/color/48/000000/indonesia.png" />
            </div>
            <div class="statistik grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-12 mt-10 px-8">
                @foreach ($data as $datas)
                <div class="card px-6 py-4 border-b-4 border-white bg-red-500 text-white rounded-md shadow-lg">
                    <p class="font-light">TOTAL POSITIF</p>
                    <div class="flex items-baseline justify-center">
                        <p class="text-2xl font-bold">{{ $datas['positif'] }}</p>
                        <p class="text-light text-xs ml-1">ORANG</p>
                    </div>
                </div>
                <div class="card px-6 py-4 border-b-4 border-white bg-green-500 text-white rounded-md shadow-lg">
                    <p class="font-light">TOTAL SEMBUH</p>
                    <p class="text-2xl font-bold">{{ $datas['sembuh'] }}</p>
                </div>
                <div class="card px-6 py-4 border-b-4 border-white bg-gray-500 text-white rounded-md shadow-lg">
                    <p class="font-light">TOTAL MENINGGAL</p>
                    <p class="text-2xl font-bold">{{ $datas['meninggal'] }}</p>
                </div>
                @endforeach
            </div>
    </header>
</section>
@endSection