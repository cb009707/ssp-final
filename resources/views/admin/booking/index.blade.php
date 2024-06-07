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
                    <h1 class="text-lg font-semibold text-gray-900">Bookings</h1>
                    <p class="mt-1 text-sm text-gray-700">A list of all the bookings in your account including their name, title, email, and role.</p>
                </div>

            </div>

            <div class="mt-8">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Nic</th>
                            <th>Phone Number</th>
                            <th>Payment</th>
                            <th>Address</th>
                            <th>Plate Number</th>
                            <th>Chasis Number</th>
                            <th>Discount Number</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($bookings as $booking)
                            <tr>
                                <td>{{ $booking->id }}</td>
                                <td>{{ $booking->full_name }}</td>
                                <td>{{ $booking->nic }}</td>
                                <td>{{ $booking->phone_number }}</td>
                                <td>{{ $booking->payment }}</td>
                                <td>{{ $booking->address }}</td>
                                <td>{{ $booking->plate }}</td>
                                <td>{{ $booking->chasis }}</td>
                                <td>{{ $booking->discount }}</td>
                                <td>
                                    <div class="flex gap-2">
                                        <a href="{{ route('admin.booking.edit', $booking->id) }}" class="btn btn-info">Edit booking</a>
                                        <form action="{{ route('admin.booking.destroy', $booking->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete booking</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{ $bookings->links() }}
    </div>
@endsection
