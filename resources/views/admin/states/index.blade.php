@extends('admin.layouts.app')
@section('content')
    <div class="page-content">
        @include('alerts')
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addStates">Add states</button>
            </div>
            <div class="card-body">
                <table class="table mb-0">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Country</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($states as $s)
                            <tr>
                                <th scope="row">{{ $s->id }}</th>
                                <td>{{$s->name}}</td>
                                <td>{{$s->country->name ?? ''}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addStates" tabindex="-1" aria-labelledby="addStates" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('states.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addStates">Add states</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="country_id">Country</label>
                            <select class="form-select" name="country_id" id="country_id" required>
                                <option selected value="">Select country</option>
                                @foreach($country as $ca)
                                    <option value="{{ $ca->id }}"> {{ $ca->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-body">
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
