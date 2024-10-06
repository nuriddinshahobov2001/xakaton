@extends('view.layouts.view')

@section('content')


    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-between">
            <h1 class="text-center mb-4">Опрос</h1>
            <div class="progress-text" id="progress-text">1/3</div> <!-- Прогресс опроса -->
        </div>

        <div id="survey-container" class="mb-4"></div> <!-- Контейнер для динамического контента -->

        <!-- Кнопки "Назад" и "Далее" -->
        <div class="d-flex justify-content-end">
            <div class="btn-group col-4">
                <button class="btn btn-secondary" onclick="goBack()">Previous question</button>
                <button class="btn btn-primary" onclick="goNext()">Next question</button>
            </div>
        </div>

    </div>
    <script>
        // Массив с вопросами и вариантами ответов
        const surveyQuestions = [
            {
                id: 1,
                question: "Как часто вы пользуетесь интернетом?",
                options: [
                    { id: 1, parent_id: 1, text: "Ежедневно" },
                    { id: 2, parent_id: 1, text: "Несколько раз в неделю" },
                    { id: 3, parent_id: 1, text: "Редко" },
                    { id: 4, parent_id: 1, text: "Никогда" }
                ]
            },
            {
                id: 2,
                question: "Какое ваше любимое время года?",
                options: [
                    { id: 5, parent_id: 2, text: "Весна" },
                    { id: 6, parent_id: 2, text: "Лето" },
                    { id: 7, parent_id: 2, text: "Осень" },
                    { id: 8, parent_id: 2, text: "Зима" }
                ]
            },
            {
                id: 3,
                question: "Предпочитаете ли вы активный отдых?",
                options: [
                    { id: 9, parent_id: 3, text: "Да" },
                    { id: 10, parent_id: 3, text: "Нет" },
                    { id: 11, parent_id: 3, text: "Иногда" }
                ]
            }
        ];

        // Загружаем данные из localStorage
        let currentQuestionIndex = parseInt(localStorage.getItem('currentQuestionIndex')) || 0; // Индекс текущего вопроса
        const userResponses = JSON.parse(localStorage.getItem('userResponses')) || {}; // Загружаем ответы из localStorage

        // Функция для отображения текущего вопроса
        function displayQuestion() {
            const surveyContainer = document.getElementById('survey-container');
            const currentQuestion = surveyQuestions[currentQuestionIndex];

            // Очищаем контейнер
            surveyContainer.innerHTML = '';

            // Добавляем вопрос
            const questionElement = document.createElement('h5');
            questionElement.textContent = currentQuestion.question;
            surveyContainer.appendChild(questionElement);

            // Добавляем варианты ответов
            currentQuestion.options.forEach(option => {
                const formCheckDiv = document.createElement('div');
                formCheckDiv.classList.add('form-check');
                formCheckDiv.setAttribute('onclick', `toggleOption(${currentQuestion.id}, ${option.id})`);

                const input = document.createElement('input');
                input.classList.add('form-check-input');
                input.setAttribute('type', 'checkbox');
                input.setAttribute('id', `option${option.id}`);
                input.setAttribute('value', option.text);

                const label = document.createElement('label');
                label.classList.add('form-check-label');
                label.setAttribute('for', `option${option.id}`);
                label.textContent = option.text;

                formCheckDiv.appendChild(input);
                formCheckDiv.appendChild(label);
                surveyContainer.appendChild(formCheckDiv);

                // Восстанавливаем состояние чекбокса из localStorage
                if (userResponses[currentQuestion.id] && userResponses[currentQuestion.id].includes(option.id)) {
                    input.checked = true;
                    formCheckDiv.classList.add('active');
                }
            });

            // Убираем красную рамку, если она есть
            removeInvalidClass();

            // Обновляем текст прогресса
            updateProgress();
        }

        // Функция переключения состояния чекбокса
        function toggleOption(questionId, optionId) {
            const checkbox = document.getElementById(`option${optionId}`);
            checkbox.checked = !checkbox.checked; // Переключаем состояние

            // Активируем или снимаем класс 'active' в зависимости от состояния чекбокса
            const formCheckDiv = checkbox.parentElement;
            if (checkbox.checked) {
                formCheckDiv.classList.add('active');

                // Добавляем ответ в объект
                if (!userResponses[questionId]) {
                    userResponses[questionId] = []; // Создаем массив для текущего вопроса, если он не существует
                }
                userResponses[questionId].push(optionId);
            } else {
                formCheckDiv.classList.remove('active');

                // Удаляем ответ из массива
                userResponses[questionId] = userResponses[questionId].filter(response => response !== optionId);
            }

            // Сохраняем обновленные ответы в localStorage
            localStorage.setItem('userResponses', JSON.stringify(userResponses));

            // Убираем красную рамку, если выбран хотя бы один вариант
            if (userResponses[questionId] && userResponses[questionId].length > 0) {
                removeInvalidClass();
            }

            console.log(userResponses); // Выводим ответы в консоль
        }

        // Функция для кнопки "Назад"
        function goBack() {
            if (currentQuestionIndex > 0) {
                currentQuestionIndex--;
                localStorage.setItem('currentQuestionIndex', currentQuestionIndex); // Сохраняем текущий индекс в localStorage
                displayQuestion();
            }
        }

        // Функция для кнопки "Далее"
        function goNext() {
            // Проверка, есть ли выбранные варианты для текущего вопроса
            if (!userResponses[surveyQuestions[currentQuestionIndex].id] || userResponses[surveyQuestions[currentQuestionIndex].id].length === 0) {
                // Устанавливаем красную рамку для всех вариантов, если нет ответа
                markInvalid();
                return; // Если нет ответов, не переходим к следующему вопросу
            }

            // Переход к следующему вопросу
            if (currentQuestionIndex < surveyQuestions.length - 1) {
                currentQuestionIndex++;
                localStorage.setItem('currentQuestionIndex', currentQuestionIndex); // Сохраняем текущий индекс в localStorage
                displayQuestion();
            } else {
                alert("Вы завершили опрос! Ваши ответы: " + JSON.stringify(userResponses));
                // Очистка localStorage после завершения опроса (если необходимо)
                localStorage.removeItem('userResponses');
                localStorage.removeItem('currentQuestionIndex');
            }
        }

        // Функция для установки класса invalid
        function markInvalid() {
            const formChecks = document.querySelectorAll('.form-check');
            formChecks.forEach(check => {
                check.classList.add('invalid');
            });
        }

        // Функция для удаления класса invalid
        function removeInvalidClass() {
            const formChecks = document.querySelectorAll('.form-check');
            formChecks.forEach(check => {
                check.classList.remove('invalid');
            });
        }

        // Функция для обновления прогресса
        function updateProgress() {
            const progressText = document.getElementById('progress-text');
            const totalQuestions = surveyQuestions.length; // Общее количество вопросов
            const completedQuestions = currentQuestionIndex + 1; // Завершённые вопросы (индекс + 1)
            progressText.textContent = `${completedQuestions}/${totalQuestions}`; // Обновляем текст прогресса
        }

        // Инициализация отображения текущего вопроса
        document.addEventListener("DOMContentLoaded", function() {
            displayQuestion(); // Отображаем текущий вопрос
            updateProgress();
        });
    </script>


@endsection
