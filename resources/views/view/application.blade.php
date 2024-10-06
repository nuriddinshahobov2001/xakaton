@extends('view.layouts.view')

@section('content')


        <form>
            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" class="form-control" id="fullName" required>
            </div>

            <div class="form-group">
                <label for="birthDate">Date of Birth</label>
                <input type="date" class="form-control" id="birthDate" required>
            </div>

            <div class="form-group">
                <label for="region">Region</label>
                <input type="text" class="form-control" id="region" required>
            </div>

            <div class="form-group">
                <label for="city">City/Town</label>
                <input type="text" class="form-control" id="city" required>
            </div>

            <div class="form-group">
                <label for="maritalStatus">Marital Status</label>
                <select class="form-control" id="maritalStatus" required>
                    <option value="" disabled selected>Select...</option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                    <option value="divorced">Divorced</option>
                    <option value="widowed">Widowed</option>

                </select>
            </div>

            <div class="form-group">

                <label for="specialEducation">Special Education</label>
                <input type="text" class="form-control" name="special_education" id="specialEducation">
            </div>

            <div class="form-group">
                <label for="university">University</label>
                <input type="text" class="form-control" id="university" name="university">

                <small class="form-text">If not, please specify the reason:</small>
                <select class="form-control" id="reasonNoUniversity" name="reason">
                    <option value="" disabled selected>Select...</option>
                    <option value="parents">Parents</option>
                    <option value="financial">Financial Situation</option>
                    <option value="personal">Personal Choice</option>
                    <option value="marriage">Marriage</option>
                </select>
            </div>

            <div class="form-group">
                <label for="profession">Profession</label>
                <select class="form-control" id="profession" name="profession">
                    <option value="" disabled selected>Select...</option>
                    <option value="housewife">Housewife</option>
                    <option value="office_worker">Office Worker</option>
                    <option value="trader">Trader</option>
                    <option value="laborer">Laborer</option>
                    <option value="agriculture">Agriculture</option>
                    <option value="healthcare">Healthcare Institution</option>
                    <option value="government">Government Institution</option>
                    <option value="educational">Educational Institution</option>
                </select>
            </div>


                <label for="initialEducation">Initial Education - Number of Grades Completed</label>
                <input type="number" class="form-control" id="initialEducation" required>
                <small class="form-text">If incomplete, please specify the reason:</small>
                <select class="form-control" id="reasonIncomplete">
                    <option value="" disabled selected>Select...</option>
                    <option value="parents">Parents</option>
                    <option value="financial">Financial Situation</option>
                    <option value="personal">Personal Choice</option>
                    <option value="distance">Difficult to Reach School</option>
                </select>
            </div>

            <div class="form-group">
                <label for="specialEducation">Special Education</label>
                <input type="text" class="form-control" id="specialEducation">
            </div>

            <div class="form-group">
                <label for="university">University</label>
                <input type="text" class="form-control" id="university">
                <small class="form-text">If not, please specify the reason:</small>
                <select class="form-control" id="reasonNoUniversity">
                    <option value="" disabled selected>Select...</option>
                    <option value="parents">Parents</option>
                    <option value="financial">Financial Situation</option>
                    <option value="personal">Personal Choice</option>
                    <option value="marriage">Marriage</option>
                </select>
            </div>

            <div class="form-group">
                <label for="profession">Profession</label>
                <select class="form-control" id="profession">
                    <option value="" disabled selected>Select...</option>
                    <option value="housewife">Housewife</option>
                    <option value="office_worker">Office Worker</option>
                    <option value="trader">Trader</option>
                    <option value="laborer">Laborer</option>
                    <option value="agriculture">Agriculture</option>
                    <option value="healthcare">Healthcare Institution</option>
                    <option value="government">Government Institution</option>
                    <option value="educational">Educational Institution</option>
                </select>
            </div>


            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #e9ecef;
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        .form-container:hover {
            transform: scale(1.02);
        }
        h2 {
            margin-bottom: 30px;
            text-align: center;
            color: #343a40;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .form-text {
            color: #6c757d;
        }
    </style>

@endsection
