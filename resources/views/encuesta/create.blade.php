@extends('layouts.app')


@section('content')
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 mt-10 mb-10">
        <div class="p-4 border-2 border-black border-dashed rounded-lg dark:border-gray-700">
            <div class="flex space-x-4 mb-3">
                <div class="lg:w-4/5">
                    <h1 class="font-bold lg:text-2xl">FORMULARIO DE RETROALIMENTACIÓN</h1>
                </div>
                <div class="lg:w-1/5 lg:text-justify text-center">
                    <p><span>N°</span> <span class="text-red-800 text-2xl font-bold ml-3">00001</span></p>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-4 mb-2">
                <div class="flex items-center justify-center h-24">
                    <img src="{{ asset('img/logo_care.svg') }}" alt="imagen" class="w-24 h-auto">
                </div>
                <div class="flex items-center justify-center h-24">
                    <img src="{{ asset('img/logo_alma_llanera.png') }}" alt="imagen" class="w-24 h-auto">
                </div>
                <div class="flex items-center justify-center h-24">
                    <img src="{{ asset('img/logo_prm.png') }}" alt="imagen" class="w-24 h-auto">
                </div>
            </div>

            <div class="flex items-center text-justify mb-2">
                <p>
                    Hola, estás ingresando al buzón de sugerencias y quejas de CARE Perú. Es muy importante conocer tus
                    comentarios u opiniones acerca de los diferentes servicios. La información que tú nos compartes
                    tendrá un mensaje confidencial. Si deseas, puedes permanecer anónimo, pero de esta forma no será
                    posible
                    responder de manera directa.
                </p>
            </div>
            <form action="{{ route('encuesta.store') }}" method="POST">
                @csrf
                <div class="flex justify-center mb-2 rounded bg-gray-50">
                    <ol class="ps-5 mt-2 space-y-3 list-decimal list-inside">
                        <div class="mb-4">
                            <li class="font-semibold">
                                ¿Usted da el consentimiento para recopilar y procesar esta información con la finalidad de
                                dar
                                seguimiento y proveer una respuesta?
                                <div class="grid grid-cols-2 gap-4">
                                    <label for="seguimiento-si">
                                        <input id="seguimiento-si" name="seguimiento" type="checkbox" value="1"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                        <span class="text-sm font-medium text-gray-900 mb-1">Sí</span>
                                    </label>

                                    <label for="seguimiento-no">
                                        <input id="seguimiento-no" name="seguimiento" type="checkbox" value="0"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                        <span class="text-sm font-medium text-gray-900 mb-1">No</span>
                                    </label>
                                </div>
                            </li>
                        </div>

                        <div class="mb-3">
                            <li class="font-semibold">
                                ¿Desea permanecer anónimo (Si selecciona Sí, saltar al paso 6)?
                                <div class="grid grid-cols-2 gap-4">
                                    <label for="anonimo-si">
                                        <input id="anonimo-si" name="anonimo" type="checkbox" value="1"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                        <span class="text-sm font-medium text-gray-900 mb-1">Sí</span>
                                    </label>

                                    <label for="anonimo-no">
                                        <input id="anonimo-no" name="anonimo" type="checkbox" value="0"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                        <span class="text-sm font-medium text-gray-900 mb-1">No</span>
                                    </label>
                                </div>
                            </li>
                        </div>


                        <div class="div-info" id="div-info">
                            <div class="mb-3">
                                <li class="font-semibold">
                                    N° de documento de identidad
                                    <div class="container mt-5 lg:mb-0 -mb-6 w-max lg:flex">
                                        <div class="flex">
                                            <div class="rounded-md shadow-sm md:w-96">
                                                <input type="text" name="person_nrodoc" id="person_nrodoc"
                                                    data-url="{{ route('person_nrdoc') }}"
                                                    class="block w-full rounded-md border-0 py-1.5 pl-2 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                    placeholder="Número de documento">
                                                <!-- Agregar el div de person_nrodoc_list aquí dentro -->
                                                <div id="person_nrodoc_list"
                                                    class="absolute hidden mt-2 py-2 px-4 bg-white border border-gray-300 rounded shadow-md w-96 max-h-96 overflow-y-auto">
                                                </div>
                                            </div>
                                            <div class="flex items-center ms-3">
                                                <a id="buscar"
                                                    class="hover:cursor-pointer bg-orange-500 text-white font-bold border border-white py-1 px-5 rounded-md">Buscar</a>
                                            </div>
                                        </div>
                                        {{ csrf_field() }}
                                    </div>
                                </li>
                            </div>

                            <div class="mb-3">
                                <li class="font-semibold">
                                    Nombres y Apellidos
                                    <div class="grid grid-cols-3 gap-4">
                                        <div class="mt-2">
                                            <label for="nombres" class="flex flex-col">
                                                <span
                                                    class="text-sm font-medium text-gray-900 mb-1">Nombres</span>
                                                <input id="nombres" name="nombres" type="text"
                                                    class="w-full py-2 px-3 border border-gray-300 rounded">
                                            </label>
                                        </div>

                                        <div class="mt-2">
                                            <label for="apellido_pate" class="flex flex-col">
                                                <span
                                                    class="text-sm font-medium text-gray-900 mb-1">Apellido
                                                    paterno</span>
                                                <input id="apellido_pate" name="apellido_paterno" type="text"
                                                    class="w-full py-2 px-3 border border-gray-300 rounded">
                                            </label>
                                        </div>


                                        <div class="mt-2">
                                            <label for="apellido_mate" class="flex flex-col">
                                                <span
                                                    class="text-sm font-medium text-gray-900 mb-1">Apellido
                                                    Materno</span>
                                                <input id="apellido_mate" name="apellido_materno" type="text"
                                                    class="w-full py-2 px-3 border border-gray-300 rounded">
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <li class="mb-3 font-semibold">
                                    Datos de contacto Teléfono / Correo
                                    <div class="grid grid-cols-1 gap-4">
                                        <div class="mt-2">
                                            <label for="contacto" class="flex flex-col items-center">
                                                <input id="contacto" name="contacto" type="text"
                                                    class="w-full py-2 px-3 border border-gray-300 rounded">
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-3 font-semibold">
                                    Localidad (Ciudad / Comunidad)
                                    <div class="grid grid-cols-1 gap-4">
                                        <div class="mt-2">
                                            <label for="localidad" class="flex flex-col items-center">
                                                <input id="localidad" name="localidad" type="text"
                                                    class="w-full py-2 px-3 border border-gray-300 rounded">
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </div>


                        <div class="grid grid-cols-1 gap-4">
                            <li class="mb-3 font-semibold">
                                Fecha nacimiento (dia / mes / año)
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="mt-2">
                                        <label for="fecha" class="flex flex-col items-center">
                                            <input id="fecha" name="fecha" type="date"
                                                class="w-full py-2 px-3 border border-gray-300 rounded">
                                        </label>
                                    </div>
                                </div>
                            </li>
                        </div>

                        <div class="grid grid-cols-1 gap-4">
                            <li class="mb-3 font-semibold">
                                ¿Con cuál genero se identifica?
                                <div class="grid grid-cols-4 gap-4">
                                    <label for="genero_femenino">
                                        <input id="genero_femenino" name="genero" type="checkbox" value="Femenino"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                        <span
                                            class="text-sm font-medium text-gray-900 mb-1">Femenino</span>

                                    </label>

                                    <label for="genero_masculino">
                                        <input id="genero_masculino" name="genero" type="checkbox" value="Masculino"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                        <span
                                            class="text-sm font-medium text-gray-900 mb-1">Masculino</span>
                                    </label>

                                    <label for="genero_otro">
                                        <input id="genero_otro" name="genero" type="checkbox" value="Otro"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                        <span class="text-sm font-medium text-gray-900 mb-1">Otro</span>
                                    </label>

                                    <label for="genero_no_sabe">
                                        <input id="genero_no_sabe" name="genero" type="checkbox"
                                            value="No sabe/No responde"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                        <span class="text-sm font-medium text-gray-900 mb-1">No sabe
                                            /
                                            No responde</span>
                                    </label>
                                </div>
                            </li>

                        </div>

                        <div class="grid grid-cols-1 gap-4">
                            <li class="mb-3 font-semibold">
                                ¿Cuál es su edad (años)?
                                <div class="grid grid-cols-4 gap-4">
                                    <div class="mt-2">
                                        <label for="edad" class="flex flex-col items-center">
                                            <input id="edad" name="edad" type="number" min="1"
                                                class="w-full py-2 px-3 border border-gray-300 rounded">
                                        </label>
                                    </div>
                                </div>
                            </li>
                        </div>

                        <div class="grid grid-cols-1 gap-4">
                            <li class="mb-3 font-semibold">
                                ¿Con cuál grupo se identifica?
                                <div class="grid grid-cols-4 gap-4">
                                    <div class="mt-2">
                                        <label for="grupo_integrante">
                                            <input id="grupo_integrante" name="grupo" type="checkbox"
                                                value="Integrante de la comunidad"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                            <span
                                                class="text-sm font-medium text-gray-900 mb-1">Integrante
                                                de la comunidad</span>

                                        </label>
                                    </div>
                                    <div class="mt-2">
                                        <label for="grupo_care">
                                            <input id="grupo_care" name="grupo" type="checkbox"
                                                value="Empleadx/Voluntaix de CARE"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                            <span
                                                class="text-sm font-medium text-gray-900 mb-1">Empleadx/Voluntaix
                                                de CARE</span>

                                        </label>
                                    </div>
                                    <div class="mt-2">
                                        <label for="grupo_socios_care">
                                            <input id="grupo_socios_care" name="grupo" type="checkbox"
                                                value="Empleadx/Voluntarix de socios de CARE"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                            <span
                                                class="text-sm font-medium text-gray-900 mb-1">Empleadx/Voluntarix
                                                de socios de CARE</span>

                                        </label>
                                    </div>
                                    <div class="mt-2">
                                        <label for="grupo_otro">
                                            <input id="grupo_otro" name="grupo" type="checkbox" value="Otro"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                            <span
                                                class="text-sm font-medium text-gray-900 mb-1">Otro</span>

                                        </label>
                                    </div>
                                </div>
                            </li>
                        </div>

                        <div class="grid grid-cols-1 gap-4">
                            <li class="mb-3 font-semibold">
                                Por favor describa a continuación cuál es su comentario, sugerencia o queja(Incluya
                                todos
                                los detalles)
                                <div class="grid grid-cols-1 gap-4">
                                    <div class="mt-2">
                                        <textarea id="comentario" name="comentario" rows="5"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300"></textarea>

                                    </div>
                                </div>
                            </li>
                        </div>

                        <div class="grid grid-cols-1 gap-4">
                            <li class="mb-3 font-semibold">
                                ¿Con qué actividad esta relacionada su comentario / queja?
                                <div class="grid grid-cols-3 gap-4">
                                    <div class="mt-2">
                                        <label for="actividad_asistencia">
                                            <input id="actividad_asistencia" name="actividad[]" type="checkbox"
                                                value="Asistencia Legal, social, psicolocial, talleres (Servicios)"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                            <span
                                                class="text-sm font-medium text-gray-900 mb-1">Asistencia
                                                Legal, social, psicolocial, talleres (Servicios)</span>

                                        </label>
                                    </div>
                                    <div class="mt-2">
                                        <label for="actividad_dinero">
                                            <input id="actividad_dinero" name="actividad[]" type="checkbox"
                                                value="Dinero, Vóucher de Salud, alojamiento o arriendo"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                            <span class="text-sm font-medium text-gray-900 mb-1">Dinero,
                                                Vóucher de Salud, alojamiento o arriendo</span>

                                        </label>
                                    </div>
                                    <div class="mt-2">
                                        <label for="actividad_kits">
                                            <input id="actividad_kits" name="actividad[]" type="checkbox"
                                                value="Kits, copas menstruales, etc (Productos)"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                            <span class="text-sm font-medium text-gray-900 mb-1">Kits,
                                                copas menstruales, etc (Productos)</span>

                                        </label>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class="grid grid-cols-1 gap-4">
                            <li class="mb-3 font-semibold">
                                ¿Cómo definiría la solicitud?
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="mt-2">
                                        <div class="">
                                            <label for="solicitud_expresion">
                                                <input id="solicitud_expresion" name="solicitud[]" type="checkbox"
                                                    value="Expresión de gratitud"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                                <span
                                                    class="text-sm font-medium text-gray-900 mb-1">Expresión
                                                    de gratitud</span>
                                            </label>
                                        </div>

                                        <div class="">
                                            <label for="solicitud_solicitud">
                                                <input id="solicitud_solicitud" name="solicitud[]" type="checkbox"
                                                    value="Solicitud de información y/o asistencia"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                                <span
                                                    class="text-sm font-medium text-gray-900 mb-1">Solicitud
                                                    de información y/o asistencia</span>
                                            </label>
                                        </div>

                                        <div class="">
                                            <label for="solicitud_menor">
                                                <input id="solicitud_menor" name="solicitud[]" type="checkbox"
                                                    value="Insatisfacción menor y/o sugerencia de mejora"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                                <span
                                                    class="text-sm font-medium text-gray-900 mb-1">Insatisfacción
                                                    menor y/o sugerencia de mejora</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="mt-2">
                                        <div class="">
                                            <label for="solicitud_mayor">
                                                <input id="solicitud_mayor" name="solicitud[]" type="checkbox"
                                                    value="Insatisfacción mayor con servicios/preocupaciones por la seguridad o protección"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                                <span
                                                    class="text-sm font-medium text-gray-900 mb-1">Insatisfacción
                                                    mayor con servicios/preocupaciones por la seguridad o protección</span>
                                            </label>
                                        </div>
                                        <div class="">
                                            <label for="solicitud_temas">
                                                <input id="solicitud_temas" name="solicitud[]" type="checkbox"
                                                    value="Temas sensibles"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                                <span
                                                    class="text-sm font-medium text-gray-900 mb-1">Temas
                                                    sensibles</span>
                                            </label>
                                        </div>
                                        <div class="">
                                            <label for="solicitud_fuera">
                                                <input id="solicitud_fuera" name="solicitud[]" type="checkbox"
                                                    value="Fuera de alcance"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                                <span
                                                    class="text-sm font-medium text-gray-900 mb-1">Fuera
                                                    de alcance</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </div>
                    </ol>
                </div>
                <button type="submit" class="bg-orange-500 py-3 px-6 rounded font-semibold text-white">Enviar encuesta</button>
            </form>


        </div>
    </div>
@endsection
