@extends('view.layouts.view')

@section('content')

        <div class="card m-5">
            <form action="{{ route('app') }}" method="POST">
                @csrf
                <div class="card-header"> <h2>Survey Form</h2> <a href="{{ asset('templ/Questionnaire_Gender_Climate_Final.docx') }}" class="text-primary" download>Download file</a></div>
                <div class="card-body">
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

                    <div class="row mb-3">
                        <div class="col-6">
                            <div class="form-group">

                                <label for="maritalStatus">Region</label>
                                <select class="form-select" id="maritalStatus" name="region" required>
                                    <option value="" disabled selected>Select...</option>
                                    @foreach($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="maritalStatus">City/States</label>
                                <select class="form-select" id="maritalStatus" name="city" required>
                                    <option value="" disabled selected>Select...</option>
                                    @foreach($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name .' - '. $city->states->name .' - '. $city->states->country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

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
                                <label for="initialEducation">Initial Education - Number of Grades Completed</label>
                                <input type="number" class="form-control" id="initialEducation" name="education" required>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <div class="form-group">
                                <small class="form-text">If incomplete, please specify the reason:</small>
                                <select class="form-control" id="reasonIncomplete" name="parents">
                                    <option value="" disabled selected>Select...</option>
                                    <option value="parents">Parents</option>
                                    <option value="financial">Financial Situation</option>
                                    <option value="personal">Personal Choice</option>
                                    <option value="distance">Difficult to Reach School</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="specialEducation">Special Education</label>
                                <input type="text" class="form-control" name="special_education" id="specialEducation">
                            </div>
                        </div>
                    </div>

                   <div class="row mb-3">
                       <div class="col-6">
                           <div class="form-group">
                               <label for="university">University</label>
                               <input type="text" class="form-control" id="university" name="university">
                           </div>
                       </div>
                       <div class="col-6">
                           <div class="form-group">
                               <small class="form-text">If not, please specify the reason:</small>
                               <select class="form-control" id="reasonNoUniversity" name="reason">
                                   <option value="" disabled selected>Select...</option>
                                   <option value="parents">Parents</option>
                                   <option value="financial">Financial Situation</option>
                                   <option value="personal">Personal Choice</option>
                                   <option value="marriage">Marriage</option>
                               </select>
                           </div>
                       </div>
                   </div>

                   <div class="row mb-3">
                       <div class="col-6">
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
                       </div>
                       <div class="col-6"></div>
                   </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <button type="submit" class="btn btn-success">Create</button>
                </div>
            </form>
        </div>

@endsection
