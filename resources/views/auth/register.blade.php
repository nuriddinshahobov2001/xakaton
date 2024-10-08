@extends('view.layouts.view')

@section('title')
    Registration
@endsection

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h2 class="text-center mb-4">Registration</h2>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Full name</label>
                        <input type="text" class="form-control" id="fullname" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label">Country</label>
                        <select class="form-select" id="country" name="country_id" required>
                            <option value="" disabled selected>Select country</option>
                            @foreach($country as $c)
                                <option value="{{ $c->id }}">{{ $c->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <select class="form-select" id="city" name="city_id" required>
                            <option value="" disabled selected>Select city</option>
                            @foreach($cities as $c)
                                <option value="{{ $c->id }}">{{ $c->name . ' - ' . $c->states->name . ' - ' . $c->states->country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmed" class="form-label">Conform password</label>
                        <input type="password" class="form-control" id="password_confirmed" name="password_confirmation" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </form>
            </div>
        </div>
    </div>



{{--    <script>--}}
{{--        // Объект с городами--}}
{{--        const allCities = @json($cities); // Убедитесь, что $cities содержит массив городов--}}

{{--        // Получаем элементы селекторов--}}
{{--        const countrySelect = document.getElementById('country');--}}
{{--        const citySelect = document.getElementById('city');--}}

{{--        // Слушатель события для изменения списка городов--}}
{{--        countrySelect.addEventListener('change', function() {--}}
{{--            // Очищаем город--}}
{{--            citySelect.innerHTML = '<option value="" disabled selected>Select city</option>';--}}

{{--            // Получаем выбранную страну--}}
{{--            const selectedCountry = this.value; // Получаем значение страны (country_id)--}}

{{--            // Фильтруем города по выбранной стране--}}
{{--            const filteredCities = allCities.filter(city => city.country_id === selectedCountry);--}}

{{--            // Заполняем города на основе выбранной страны--}}
{{--            if (filteredCities.length > 0) {--}}
{{--                filteredCities.forEach(city => {--}}
{{--                    const option = document.createElement('option');--}}
{{--                    option.value = city.id; // Используем id города в качестве значения--}}
{{--                    option.textContent = city.name; // Название города--}}
{{--                    citySelect.appendChild(option);--}}
{{--                });--}}
{{--            } else {--}}
{{--                console.warn("No cities found for country id:", selectedCountry); // Предупреждение, если не найдено--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}


@endsection
