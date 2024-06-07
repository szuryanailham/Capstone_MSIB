<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <head>
                        <title>Specialists</title>
                        
                        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
                    </head>
                    <body>
                        <div class="container mt-5">
                            <h1 class="mb-4">Specialists</h1>
                            
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">{{ $message }}</div>
                            @endif
                            
                            <a href="{{route('specialist.create')}}" class="btn btn-primary mb-3">Create New Specialist</a>
                            
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($specialists as $specialist)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $specialist->specialist_name }}</td>
                                            <td>
                                                
                                                <a href="{{ route('specialist.edit', $specialist->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                <form action="{{ route('specialist.destroy', $specialist->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    
                        <!-- Include Bootstrap JS and dependencies -->
                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                    </body>
                    </html>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>