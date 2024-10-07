@extends('admin.layouts.app')
@section('content')
    <div class="page-content">
        @include('alerts')
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addCountry">Add country</button>
            </div>
            <div class="card-body">
                <table class="table mb-0">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">States - Country</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($cities as $c)
                            <tr>
                                <th scope="row">{{ $c->id }}</th>
                                <td>{{$c->name}}</td>
                                <td>{{$c->states->name .' - '. $c->states->country->name ?? ''}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addCountry" tabindex="-1" aria-labelledby="addCountry" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('city.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addCountry">City</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="states_id">States</label>
                            <select class="form-select" name="states_id" id="states_id" required>
                                <option selected value="">Select state</option>
                                @foreach($states as $ca)
                                    <option value="{{ $ca->id }}"> {{ $ca->name  . ' - '. $ca->country->name ?? ''}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
