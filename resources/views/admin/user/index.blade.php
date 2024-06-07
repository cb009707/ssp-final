@extends('newadmin.layout.app')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
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
                    <h1 class="text-lg font-semibold text-gray-900">Users</h1>
                    <p class="mt-1 text-sm text-gray-700">A list of all the users in your account including their name, title, email, and role.</p>
                </div>
                <div>
                    <a href="{{ route('admin.user.create') }}" class="btn btn-primary">Create User</a>
                </div>
            </div>

            <div class="mt-8">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ ucwords(str_replace('_', ' ', $user->role->name)) }}</td>
                                <td>
                                    <div class="flex items-center gap-2">
                                        <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-info">Edit</a>
                                        @if ($user->email != 'Admin@admin.com')
                                            <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                            <a href="{{ route('admin.booking.index', ['user_id' => $user->id]) }}" class="btn btn-secondary">Update Service</a>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <div class="py-3">
                    {!! $users->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
