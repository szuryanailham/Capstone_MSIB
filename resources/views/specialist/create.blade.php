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
                        <title>Create Specialist</title>
                        <!-- Bootstrap CSS -->
                        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
                    </head>
                    <body>
                        <div class="container mt-5">
                            <h1>Create Specialist</h1>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('specialist.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="specialist_name">Specialist Name:</label>
                                    <input type="text" class="form-control" name="specialist_name" id="specialist_name" value="{{ old('specialist_name') }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('specialist.index') }}" class="btn btn-secondary">Back to list</a>
                            </form>
                        </div>
                        <!-- Bootstrap JS and dependencies -->
                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                    </body>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>