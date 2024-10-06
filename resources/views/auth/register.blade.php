@extends('view.layouts.view')

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
                <h2 class="text-center mb-4">Форма Регистрации</h2>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="fullname" class="form-label">ФИО</label>
                        <input type="text" class="form-control" id="fullname" name="name" value="User" required>
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label">Страна</label>
                        <select class="form-select" id="country" name="country_id" required>
                            <option value="" disabled selected>Выберите страну</option>
                            @foreach($country as $c)
                                <option value="{{ $c->id }}">{{ $c->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">Город</label>
                        <select class="form-select" id="city" name="city_id" required>
                            <option value="" disabled selected>Выберите город</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="user@gamil.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Пароль</label>
                        <input type="password" class="form-control" id="password" name="password" value="1" required>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmed" class="form-label">Подтверждение пароля</label>
                        <input type="password" class="form-control" id="password_confirmed" name="password_confirmation" value="1" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Зарегистрироваться</button>
                </form>
            </div>
        </div>
    </div>



    <script>
        // Объект с городами
        const allCities = @json($cities); // Убедитесь, что $cities содержит массив городов

        // Получаем элементы селекторов
        const countrySelect = document.getElementById('country');
        const citySelect = document.getElementById('city');

        // Слушатель события для изменения списка городов
        countrySelect.addEventListener('change', function() {
            // Очищаем город
            citySelect.innerHTML = '<option value="" disabled selected>Выберите город</option>';

            // Получаем выбранную страну
            const selectedCountry = this.value; // Получаем значение страны (country_id)

            // Фильтруем города по выбранной стране
            const filteredCities = allCities.filter(city => city.country_id === selectedCountry);

            // Заполняем города на основе выбранной страны
            if (filteredCities.length > 0) {
                filteredCities.forEach(city => {
                    const option = document.createElement('option');
                    option.value = city.id; // Используем id города в качестве значения
                    option.textContent = city.name; // Название города
                    citySelect.appendChild(option);
                });
            } else {
                console.warn("No cities found for country id:", selectedCountry); // Предупреждение, если не найдено
            }
        });
    </script>


@endsection
