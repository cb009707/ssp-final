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
                    <p class="mt-1 text-sm text-gray-700">A list of all the Plans in your account.</p>
                </div>
            </div>

            <div class="mt-8">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Plan ID</th>
                            <th>Plate Number</th>
                            <th>Chasis Number</th>
                            <th>Model</th>
                            <th>Plan</th>
{{--                            <th>Action</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($userp as $user)
                            <tr>
                                <td>{{ $user->plan_id }}</td>
                                <td>{{ $user->car_plate }}</td>
                                <td>{{ $user->car_chasis }}</td>
                                <td>{{ $user->car_model }}</td>
                                <td>{{ $user->car_plan }}</td>
{{--                                <td>--}}
{{--                                    <div class="flex gap-2">--}}
{{--                                        <a href="{{ route('admin.booking.edit', $user->id) }}" class="btn btn-info">Edit booking</a>--}}
{{--                                        <form action="{{ route('admin.booking.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">--}}
{{--                                            @csrf--}}
{{--                                            @method('DELETE')--}}
{{--                                            <button type="submit" class="btn btn-danger">Delete booking</button>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
