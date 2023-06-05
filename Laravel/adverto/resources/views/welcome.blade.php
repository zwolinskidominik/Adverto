@extends('layouts.app')
@section('title', 'Adverto - Serwis ogłoszeniowy')
@section('content')
<form action="search.php" method="GET" class="search-form">
    <div class="flex border-2 border-white md:px-56 py-12 bg-[#f2f4f5]">
        <i class="fa fa-magnifying-glass pt-5 text-[#6b7280] p-4 bg-white"></i>
        <input type="search" name="search" placeholder="Wyszukaj..." class="w-screen border-none focus:outline-none focus:ring-0 h-14 flex bg-white p-2 w-11/12">                   
        <button type="submit" class="pr-5 bg-white">
            <i class="fa fa-search bg-white text-xl"></i>
        </button>
    </div>
</form>

<div class="mt-5 w-screen bg-white rounded-lg">
    <ul class="m-5 p-5 grid grid-cols-3 md:gap-3 md:grid-cols-6">
        <li>
            <div class="flex justify-center">
                <a href="{{ url('/ads/Motoryzacja') }}">
                    <div class="w-16 h-16 flex items-center justify-center bg-blue-500 rounded-full shadow-md transition-transform duration-300 hover:scale-110">
                        <i class="fa-solid fa-car text-3xl bg-blue-500 text-white p-4 rounded-full shadow-md transition-transform duration-300 hover:scale-110 w-18 h-18"></i>
                    </div>
                </a>
            </div>
            <div class="flex justify-center p-2">
                <a href="{{ url('/ads/Motoryzacja') }}" class="truncate hover:bg-black hover:text-white text-base font-semibold">Motoryzacja</a>
            </div>
        </li>
        <li>
            <div class="flex justify-center">
                <a href="{{ url('/ads/Dom_i_ogrod') }}">
                    <div class="w-16 h-16 flex items-center justify-center bg-blue-500 rounded-full shadow-md transition-transform duration-300 hover:scale-110">
                        <i class="fa fa-house text-3xl bg-blue-500 text-white p-4 rounded-full shadow-md transition-transform duration-300 hover:scale-110 w-18 h-18"></i>
                    </div>      
                </a>
            </div>
            <div class="flex justify-center p-2">
                <a href="{{ url('/ads/Dom_i_ogrod') }}" class="truncate hover:bg-black hover:text-white text-base font-semibold">Dom i ogród</a>
            </div>
        </li>
        <li>
            <div class="flex justify-center">
                <a href="{{ url('/ads/Elektronika') }}">
                    <div class="w-16 h-16 flex items-center justify-center bg-blue-500 rounded-full shadow-md transition-transform duration-300 hover:scale-110">
                        <i class="fa fa-laptop text-3xl text-white bg-blue-500 text-white p-4 rounded-full shadow-md transition-transform duration-300 hover:scale-110 w-18 h-18"></i>
                    </div>
                </a>
            </div>
            <div class="flex justify-center p-2">
                <a href="{{ url('/ads/Elektronika') }}" class="truncate hover:bg-black hover:text-white text-base font-semibold">Elektronika</a>
            </div>
        </li>
        <li>
            <div>
                <div class="flex justify-center">
                    <a href="{{ url('/ads/Moda') }}">
                        <div class="w-16 h-16 flex items-center justify-center bg-blue-500 rounded-full shadow-md transition-transform duration-300 hover:scale-110">
                            <i class="fa-solid fa-shirt text-3xl bg-blue-500 text-white p-4 rounded-full shadow-md transition-transform duration-300 hover:scale-110 w-18 h-18"></i>
                        </div>
                    </a>
                </div>
            <div class="flex justify-center p-2">
                <a href="{{ url('/ads/Moda') }}" class="truncate hover:bg-black hover:text-white text-base font-semibold">Moda</a>
            </div>
        </li>
        <li>
            <div>
                <div class="flex justify-center">
                    <a href="{{ url('/ads/Sport_i_Hobby') }}">
                        <div class="w-16 h-16 flex items-center justify-center bg-blue-500 rounded-full shadow-md transition-transform duration-300 hover:scale-110">
                            <i class="fa-solid fa-bowling-ball text-4xl bg-blue-500 text-white p-4 rounded-full shadow-md transition-transform duration-300 hover:scale-110 w-18 h-18"></i>
                        </div>
                    </a>
                </div>
            <div class="flex justify-center p-2">
                <a href="{{ url('/ads/Sport_i_Hobby') }}" class="truncate hover:bg-black hover:text-white text-base font-semibold">Sport i Hobby</a>
            </div>
        </li>
        <li>
            <div>
                <div class="flex justify-center">
                    <a href="{{ url('/ads/Rowery') }}">
                        <div class="w-16 h-16 flex items-center justify-center bg-blue-500 rounded-full shadow-md transition-transform duration-300 hover:scale-110">
                            <i class="fa-solid fa-bicycle text-3xl bg-blue-500 text-white p-4 rounded-full shadow-md transition-transform duration-300 hover:scale-110 w-18 h-18"></i>
                        </div>
                    </a>
                </div>
            <div class="flex justify-center p-2">
                <a href="{{ url('/ads/Rowery') }}" class="truncate hover:bg-black hover:text-white text-base font-semibold">Rowery</a>
            </div>
        </li>
    </ul>
</div>

<div>
    <span class="flex flex-col items-center text-white text-lg"><strong>Proponowane ogłoszenia</strong>
    <span>
    <ul class="m-5 p-5 grid gap-4 grid-cols-1 md:grid-cols-4 text-black">
        <li class="w-auto">
            <div class="p-2 bg-white rounded-lg">
                <div>
                    <img class="h-full w-full" src="{{ asset('img/images/icons/car.png') }}" alt="car">
                </div>
                <div class="flex justify-center p-2"><a class="truncate hover:text-slate-400">Nazwa produktu</a></div>
                <div class="text-sm">Miejsce i data</div>
                <div class="p2 text-lg">cena</div>
            </div>
        </li>
        <li class="w-auto md:w-30">
            <div class="p-2 bg-white rounded-lg">
                <div>
                    <img class="h-full w-full" src="{{ asset('img/images/icons/car.png') }}" alt="car">
                </div>
                <div class="flex justify-center p-2"><a class="truncate hover:text-slate-400">Nazwa produktu</a></div>
                <div class="text-sm">Miejsce i data</div>
                <div class="p2 text-lg">cena</div>
            </div>
        </li>
        <li class="w-auto">
            <div class="p-2 bg-white rounded-lg">
                <div>
                    <img class="h-full w-full" src="{{ asset('img/images/icons/car.png') }}" alt="car">
                </div>
                <div class="flex justify-center p-2"><a class="truncate hover:text-slate-400">Nazwa produktu</a></div>
                <div class="text-sm">Miejsce i data</div>
                <div class="p2 text-lg">cena</div>
            </div>
        </li>
        <li class="w-auto md:w-30">
            <div class="p-2 bg-white rounded-lg">
                <div>
                    <img class="h-full w-full" src="{{ asset('img/images/icons/car.png') }}" alt="car">
                </div>
                <div class="flex justify-center p-2"><a class="truncate hover:text-slate-400">Nazwa produktu</a></div>
                <div class="text-sm">Miejsce i data</div>
                <div class="p2 text-lg">cena</div>
            </div>
        </li>
        <li class="w-auto md:w-30">
            <div class="p-2 bg-white rounded-lg">
                <div>
                    <img class="h-full w-full" src="{{ asset('img/images/icons/car.png') }}" alt="car">
                </div>
                <div class="flex justify-center p-2"><a class="truncate hover:text-slate-400">Nazwa produktu</a></div>
                <div class="text-sm">Miejsce i data</div>
                <div class="p2 text-lg">cena</div>
            </div>
        </li>
        <li class="w-auto md:w-30">
            <div class="p-2 bg-white rounded-lg">
                <div>
                    <img class="h-full w-full" src="{{ asset('img/images/icons/car.png') }}" alt="car">
                </div>
                <div class="flex justify-center p-2"><a class="truncate hover:text-slate-400">Nazwa produktu</a></div>
                <div class="text-sm">Miejsce i data</div>
                <div class="p2 text-lg">cena</div>
            </div>

        </li> 
        <li class="w-auto md:w-30">
            <div class="p-2 bg-white rounded-lg">
                <div>
                    <img class="h-full w-full" src="{{ asset('img/images/icons/car.png') }}" alt="car">
                </div>
                <div class="flex justify-center p-2"><a class="truncate hover:text-slate-400">Nazwa produktu</a></div>
                <div class="text-sm">Miejsce i data</div>
                <div class="p2 text-lg">cena</div>
            </div>
        </li> 
        <li class="w-auto md:w-30">
            <div class="p-2 bg-white rounded-lg">
                <div>
                    <img class="h-full w-full" src="{{ asset('img/images/icons/car.png') }}" alt="car">
                </div>
                <div class="flex justify-center p-2"><a class="truncate hover:text-slate-400">Nazwa produktu</a></div>
                <div class="text-sm">Miejsce i data</div>
                <div class="p2 text-lg">cena</div>
            </div>
        </li> 
        <li class="w-auto md:w-30">
            <div class="p-2 bg-white rounded-lg">
                <div>
                    <img class="h-full w-full" src="{{ asset('img/images/icons/car.png') }}" alt="car">
                </div>
                <div class="flex justify-center p-2"><a class="truncate hover:text-slate-400">Nazwa produktu</a></div>
                <div class="text-sm">Miejsce i data</div>
                <div class="p2 text-lg">cena</div>
            </div>
        </li>   
    </ul>  
</div>
@endsection