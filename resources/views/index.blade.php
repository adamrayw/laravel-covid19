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
            <div class="statistik grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-12 mt-10 px-8 text-left">
                @foreach ($data as $datas)
                <div class="card px-6 py-4 border-b-4 border-white bg-red-500 text-white rounded-md shadow-lg">
                    <div class="flex items-center">
                        <i class="fas fa-frown fa-lg mr-2"></i>
                        <p class="font-light">TOTAL POSITIF</p>
                    </div>
                    <div class="mt-2">
                        <div>
                            <p class="text-2xl font-bold">{{ $datas['positif'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="card px-6 py-4 border-b-4 border-white bg-green-500 text-white rounded-md shadow-lg">
                    <div class="flex items-center">
                        <i class="fas fa-grin fa-lg mr-2"></i>
                        <p class="font-light">TOTAL SEMBUH</p>
                    </div>
                    <div class="mt-2">
                        <p class="text-2xl font-bold counter">{{ $datas['sembuh'] }}</p>
                        <span class="countfect" data-num="1200"></span>
                    </div>
                </div>
                <div class="card px-6 py-4 border-b-4 border-white bg-gray-500 text-white rounded-md shadow-lg">
                    <div class="flex items-center">
                        <i class="fas fa-sad-tear fa-lg mr-2"></i>
                        <p class="font-light">TOTAL MEINGGAL</p>
                    </div>
                    <div class="mt-2">
                        <p class="text-2xl font-bold">{{ $datas['meninggal'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="update mt-4">
                <p class="text-gray-400 text-xs">Update terakhir : {{ date('d F Y') }}</p>
            </div>
    </header>
</section>
@endSection