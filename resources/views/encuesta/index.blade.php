@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center h-screen">
        <div class="text-center p-36">
            <h1 class="text-3xl font-semibold mb-4">¡Agradecimiento por tu Encuesta!</h1>
            <p class="text-lg">Queremos expresar nuestro sincero agradecimiento por tomarte el tiempo de realizar nuestra encuesta. Tu opinión es invaluable y nos ayuda a mejorar continuamente. Gracias por ser parte activa de este proceso.</p>

            <div class=" mt-5">
                <a class="rounded px-3 py-2 bg-orange-500 font-semibold text-white" href="{{ route('encuesta.create') }}">Comenzar</a>
            </div>
        </div>
    </div>
@endsection
