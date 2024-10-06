@extends('view.layouts.view')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Форма Регистрации</h2>
                <form>
                    <div class="mb-3">
                        <label for="fullname" class="form-label">ФИО</label>
                        <input type="text" class="form-control" id="fullname" required>
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label">Страна</label>
                        <select class="form-select" id="country" required>
                            <option value="" disabled selected>Выберите страну</option>
                            <option value="tajikistan">Таджикистан</option>
                            <option value="russia">Россия</option>
                            <option value="usa">США</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">Город</label>
                        <select class="form-select" id="city" required>
                            <option value="" disabled selected>Выберите город</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Пароль</label>
                        <input type="password" class="form-control" id="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmed" class="form-label">Подтверждение пароля</label>
                        <input type="password" class="form-control" id="password_confirmed" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Зарегистрироваться</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Объект с городами по странам
        const citiesByCountry = {
            tajikistan: ["Душанбе", "Худжанд", "Курган-Тюбе"],
            russia: ["Москва", "Санкт-Петербург", "Новосибирск"],
            usa: ["Нью-Йорк", "Лос-Анджелес", "Чикаго"]
        };

        // Получаем элементы селекторов
        const countrySelect = document.getElementById('country');
        const citySelect = document.getElementById('city');

        // Слушатель события для изменения списка городов
        countrySelect.addEventListener('change', function() {
            // Очищаем город
            citySelect.innerHTML = '<option value="" disabled selected>Выберите город</option>';

            // Получаем выбранную страну
            const selectedCountry = this.value;

            // Заполняем города на основе выбранной страны
            if (selectedCountry in citiesByCountry) {
                citiesByCountry[selectedCountry].forEach(city => {
                    const option = document.createElement('option');
                    option.value = city.toLowerCase(); // Приводим к нижнему регистру
                    option.textContent = city;
                    citySelect.appendChild(option);
                });
            }
        });
    </script>
@endsection
