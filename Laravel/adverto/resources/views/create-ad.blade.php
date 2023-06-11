@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1 gap-4 py-8 px-48 bg-[#f2f4f5]">
        <div class="md:focus:ring-0 md:w-auto w-screen flex-col items-center p-10">
            <h1 class="text-3xl font-bold mb-4">Dodaj ogłoszenie</h1>

            <form action="/ogloszenia" method="POST" class="" enctype="multipart/form-data">
                @csrf
                <div class="mb-4 bg-white p-8 rounded-md">
                    <label for="title" class="block font-bold mb-2 text-sm">Tytuł*</label>
                    <input type="text" name="title" class="w-8/12 {{ $errors->has('title') ? 'border-b-2 border-red-500 border-x-0 border-t-0' : 'border-transparent' }} rounded px-4 py-2 mb-8 bg-[#f2f4f5]" placeholder="np. Galaxy S23 jak nówka..."><br>
                    <span id="titleError" class="text-red-500 text-xs">
                        @error('title')
                            {{$message }}
                        @enderror
                    </span>

                    <label for="category_id" class="block font-bold mb-2 text-sm">Kategoria*</label>
                    <select name="category_id" class="w-1/2 {{ $errors->has('category_id') ? 'border-b-2 border-red-500 border-x-0 border-t-0' : 'border-transparent' }} rounded px-4 py-2 bg-[#f2f4f5]">
                        <option value="">Wybierz kategorię</option>
                        <option value="1">Motoryzacja</option>
                        <option value="2">Dom i Ogród</option>
                        <option value="3">Elektronika</option>
                        <option value="4">Moda</option>
                        <option value="5">Sport i Hobby</option>
                        <option value="6">Rowery</option>
                    </select><br>
                    <span id="categoryError" class="text-red-500 text-xs">
                        @error('category_id')
                            {{$message }}
                        @enderror
                    </span>
                </div>

                <div class="mb-4 bg-white p-8 rounded-md">
                    <label for="image" class="block font-bold mb-2 text-sm">Zdjęcie*</label>
                    <input type="file" name="images[]" multiple class="w-full {{ $errors->has('images.*') ? 'border-b-2 border-red-500 border-x-0 border-t-0' : 'border-transparent' }} rounded px-4 py-2 bg-[#f2f4f5]">
                    <span id="imagesError" class="text-red-500 text-xs">
                        @error('images.*')
                            {{$message }}
                        @enderror
                    </span>
                </div>

                <div class="mb-4 bg-white p-8 rounded-md">
                    <label for="description" class="block font-bold mb-2 text-sm">Opis*</label>
                    <textarea name="description" rows="5" class="w-full {{ $errors->has('description') ? 'border-b-2 border-red-500 border-x-0 border-t-0' : 'border-transparent' }} rounded px-4 py-2 bg-[#f2f4f5]" placeholder="Podaj szczegółowy opis oferowanego przedmiotu lub usługi, uwzględniając wszystkie istotne informacje. Im bardziej kompletny opis, tym większe szanse na zainteresowanie potencjalnych klientów."></textarea>
                </div>

                <div class="mb-4 bg-white p-8 rounded-md">
                    <label for="price" class="block font-bold mb-2 text-sm">Cena*</label>
                    <input type="text" name="price" class="w-full {{ $errors->has('price') ? 'border-b-2 border-red-500 border-x-0 border-t-0' : 'border-transparent' }} rounded px-4 py-2 bg-[#f2f4f5]">
                    <span id="priceError" class="text-red-500 text-xs">
                        @error('price')
                            {{$message }}
                        @enderror
                    </span>
                </div>

                <div class="mb-4 bg-white p-8 rounded-md">
                    <label for="user_autocomplete_address" class="block font-bold mb-2 text-sm">Lokalizacja*</label>
                    <input id="user_autocomplete_address" name="user_autocomplete_address" class="w-full {{ $errors->has('user_autocomplete_address') ? 'border-b-2 border-red-500 border-x-0 border-t-0' : 'border-transparent' }} rounded px-4 py-2 bg-[#f2f4f5]" placeholder="Zacznij wpisywać swój adres...">
                    <span id="locationError" class="text-red-500 text-xs">
                        @error('location_id')
                            {{$message }}
                        @enderror
                    </span>
                </div>
                    <input id="locality" name="locality">
                    <input id="administrative_area_level_1" name="administrative_area_level_1">
                    <input id="country" name="country">

                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Dodaj ogłoszenie
                </button>
            </form>
        </div>
    </div>
    <!-- Include Google Maps JS API -->
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;key=AIzaSyBRc8HqI9R9GxSh0gMGEqzIePdp-Hg8q5w"></script>

    <!-- Custom JS code to bind to Autocomplete API -->
    <script type="text/javascript" src="{{asset('js/autocomplete.js') }}"></script>
@endsection
