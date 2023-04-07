@extends('app')

@section('content')
    <div class = "container w-25  border p-4 mt-4">
    <form action = "{{ route('todos') }}" method = "POST">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Titulo de la Tareas</label>
            <input type="text" class="form-control" name = "tile">
        </div>
        
        <button type="submit" class="btn btn-primary">Crear Tarea</button>
    </form>

    </div>
@endsection