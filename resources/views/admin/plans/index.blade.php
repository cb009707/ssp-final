@extends('newadmin.layout.app')

@section('content')
    <div class="container mx-auto mt-1">
        <div class="px-4 sm:px-6 lg:px-8 bg-white pt-4">

            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="flex justify-between items-center py-6">
                <div>
                    <h1 class="text-lg font-semibold text-gray-900">Plans</h1>
                    <p class="mt-1 text-sm text-gray-700">A list of all the Plans in your account including their name, title, email, and role.</p>
                </div>
            </div>

            <div class="mt-8">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Plan ID</th>
                            <th>Plate Number</th>
                            <th>Chasis Number</th>
                            <th>Model</th>
                            <th>Plan</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($userplan as $userplans)
                            <tr>
                                <td>{{ $userplans->user_id }}</td>
                                <td>{{ $userplans->plan_id }}</td>
                                <td>{{ $userplans->car_plate }}</td>
                                <td>{{ $userplans->car_chasis }}</td>
                                <td>{{ $userplans->car_model }}</td>
                                <td>{{ $userplans->car_plan }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
