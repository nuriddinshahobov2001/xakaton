@extends('view.layouts.view')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h2 class="text-center mb-4">Форма Входа</h2>
                <form>
                    <div class="mb-3">
                        <label for="username" class="form-label">Имя пользователя</label>
                        <input type="text" class="form-control" id="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Пароль</label>
                        <input type="password" class="form-control" id="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Войти</button>
                </form>
            </div>
        </div>
    </div>


{{--    <button type="button" class="btn btn-primary" id="fetch-cities">Получить города</button>--}}
{{--    <script>--}}
{{--        $(document).ready(function() {--}}
{{--            async function getRedditPosts() {--}}
{{--                try {--}}
{{--                    const response = await fetch('https://namaztimes.kz/ru/api/country?type=json');--}}
{{--                    const data = await response.json();--}}
{{--                    console.log(sendData(data))--}}
{{--                } catch (error) {--}}
{{--                    console.error(error);--}}
{{--                }--}}
{{--            }--}}
{{--            async function sendData(postData) {--}}
{{--                try {--}}
{{--                    const response = await fetch('http://192.168.109.71:9999/country', {--}}
{{--                        method: 'POST', // Указываем метод POST--}}
{{--                        headers: {--}}
{{--                            'Content-Type': 'application/json' // Указываем тип содержимого--}}
{{--                        },--}}
{{--                        body: JSON.stringify(postData) // Преобразуем данные в JSON--}}
{{--                    });--}}

{{--                    // Проверяем, успешен ли ответ--}}
{{--                    if (!response.ok) {--}}
{{--                        throw new Error('Network response was not ok: ' + response.statusText);--}}
{{--                    }--}}

{{--                    const data = await response.json(); // Преобразуем ответ в JSON--}}
{{--                    console.log('Response from server:', data); // Логируем ответ сервера--}}

{{--                } catch (error) {--}}
{{--                    console.error('Ошибка при отправке данных:', error); // Логируем ошибку--}}
{{--                }--}}
{{--            }--}}



{{--            $('#fetch-cities').click(function() {--}}
{{--                getRedditPosts();--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}


@endsection
