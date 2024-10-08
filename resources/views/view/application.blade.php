@extends('view.layouts.view')

@section('title')
    Application
@endsection

@section('content')
    @include('alerts')
    <div class="card m-5">
        <form action="{{ route('app') }}" method="POST">
            @csrf
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h2>Survey Form</h2>
                    <div class="d-flex justify-content-center align-items-center bg bg-primary px-3 rounded">
                        <a href="{{ asset('templ/Questionnaire_Gender_Climate_Final.docx') }}" class="text-white" download>Download file</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <!-- Full Name and Date of Birth -->
                <div class="row mb-3">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="fullName">Full Name</label>
                            <input type="text" class="form-control" id="fullName" name="name" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="birthDate">Date of Birth</label>
                            <input type="date" class="form-control" id="birthDate" name="date" required>
                        </div>
                    </div>
                </div>

                <!-- Region and City -->
                <div class="row mb-3">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="region">Region</label>
                            <select class="form-select" id="region" name="region" required>
                                <option value="" disabled selected>Select...</option>
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="city">City/Town</label>
                            <select class="form-select" id="city" name="city" required>
                                <option value="" disabled selected>Select...</option>
                                @foreach($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Marital Status -->
                <div class="row mb-3">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="maritalStatus">Marital Status</label>
                            <select class="form-control" id="maritalStatus" name="status" required>
                                <option value="" disabled selected>Select...</option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="divorced">Divorced</option>
                                <option value="widowed">Widowed</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="climateImpact">How do you assess the level of climate change impact on women in your region?</label>
                            <select class="form-select" id="climateImpact" name="climate_impact">
                                <option value="" disabled selected>Select...</option>
                                <option value="very_strong">Very strong</option>
                                <option value="strong">Strong</option>
                                <option value="moderate">Moderate</option>
                                <option value="minor">Minor</option>
                                <option value="none">No impact</option>
                            </select>
                        </div>
                    </div>

                </div>

                <!-- Incomplete Education Reason -->
                <div class="row mb-3">
                    <div class="col-6">
                        <div class="form-group mb-3">
                            <label for="school">Primary Education- Number of Grades Completed</label>
                            <input type="number" min="1" max="12" class="form-control" id="school" name="school" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="reasonIncomplete">If incomplete, specify the reason</label>
                            <select class="form-select" id="reasonIncomplete" name="incomplete_reason">
                                <option value="" disabled selected>Select...</option>
                                <option value="parents">Parents</option>
                                <option value="financial">Financial situation</option>
                                <option value="personal">Personal choice</option>
                                <option value="access">Difficult to get to school</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="special_education">School (if uncompleted)</label>
                            <textarea name="special_education" id="special_education" cols="30" rows="4" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group mb-3">
                            <label for="education">Higher Education - Number of course Completed</label>
                            <input type="number" min="1" max="5" class="form-control" id="education" name="education" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="reasonNoUniversity">If not completed, specify the reason</label>
                            <select class="form-select" id="reasonNoUniversity" name="reason_no_university">
                                <option value="" disabled selected>Select...</option>
                                <option value="parents">Parents</option>
                                <option value="financial">Financial situation</option>
                                <option value="personal">Personal choice</option>
                                <option value="marriage">Marriage</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="university">University (if uncompleted)</label>
                            <textarea name="university" id="university" cols="30" rows="4" class="form-control"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Measures to Improve the Situation of Women -->
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="improvementMeasures">What measures could help improve the situation of women under climate change? (Select multiple options)</label>
                            <select class="form-select" id="improvementMeasures" name="improvement_measures[]" multiple>
                                <option value="education">Educational programs for women</option>
                                <option value="financial_support">Financial support for women's initiatives</option>
                                <option value="awareness">Raising awareness of gender issues</option>
                                <option value="access_resources">Improving access to natural resources</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mt-3">
                            <label for="improvementMeasures">Fill if other</label>
                            <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="card-footer d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

    <script>

        document.querySelector('form').addEventListener('submit', function(event) {
            event.preventDefault(); // Останавливаем стандартную отправку формы

            // Собираем данные формы
            const fullName = document.getElementById('fullName').value;
            const birthDate = document.getElementById('birthDate').value;
            const region = document.getElementById('region').options[document.getElementById('region').selectedIndex].text;
            const city = document.getElementById('city').options[document.getElementById('city').selectedIndex].text;
            const maritalStatus = document.getElementById('maritalStatus').options[document.getElementById('maritalStatus').selectedIndex].text;
            const climateImpact = document.getElementById('climateImpact').options[document.getElementById('climateImpact').selectedIndex].text;
            const school = document.getElementById('school').value;
            const incompleteReason = document.getElementById('reasonIncomplete').options[document.getElementById('reasonIncomplete').selectedIndex].text;
            const specialEducation = document.getElementById('special_education').value;
            const education = document.getElementById('education').value;
            const reasonNoUniversity = document.getElementById('reasonNoUniversity').options[document.getElementById('reasonNoUniversity').selectedIndex].text;
            const university = document.getElementById('university').value;

            // Собираем несколько выбранных мер улучшений
            const improvementMeasures = Array.from(document.getElementById('improvementMeasures').selectedOptions).map(option => option.text).join(', ');

            // Инициализируем PDF-документ
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();

            // Добавляем данные в PDF
            doc.text(`Full Name: ${fullName}`, 10, 10);
            doc.text(`Date of Birth: ${birthDate}`, 10, 20);
            doc.text(`Region: ${region}`, 10, 30);
            doc.text(`City/Town: ${city}`, 10, 40);
            doc.text(`Marital Status: ${maritalStatus}`, 10, 50);
            doc.text(`Climate Impact: ${climateImpact}`, 10, 60);
            doc.text(`Primary Education (Grades Completed): ${school}`, 10, 70);
            doc.text(`Reason for Incomplete Education: ${incompleteReason}`, 10, 80);
            doc.text(`Special Education: ${specialEducation}`, 10, 90);
            doc.text(`Higher Education (Courses Completed): ${education}`, 10, 100);
            doc.text(`Reason for Not Completing University: ${reasonNoUniversity}`, 10, 110);
            doc.text(`University: ${university}`, 10, 120);
            doc.text(`Improvement Measures: ${improvementMeasures}`, 10, 130);

            // Сохраняем PDF-файл
            doc.save('form_data.pdf');

            // После сохранения можно отправить форму
            this.submit(); // Разрешаем отправку формы
        });
    </script>
@endsection
