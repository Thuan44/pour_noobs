@php
$selectedCourse = $_GET['selectedCourse'] ?? '';
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion des formations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Update a course -->
                    <h3 class="font-semibold text-lg text-gray-800 leading-tight text-center mb-5">
                        {{ __('Modifier/Supprimer une formation') }}
                    </h3>

                    <form method="GET" action="{{ route('courses') }}"">
                        @csrf
                        <select class="        rounded-md shadow-sm border-gray-300 mb-6 w-full" name="selectedCourse"
                        id="selectedCourse" onchange='this.form.submit()'>
                        <option value="">Choisissez une formation</option>
                        @foreach ($courses as $course)
                            <option value="<?= $course->id ?>"
                                <?= isset($selectedCourse) && $selectedCourse == $course->id ? 'selected' : '' ?>>
                                <?= $course->name ?></option>
                        @endforeach
                        </select>
                    </form>

                    <hr>

                    <h3 class="font-semibold text-lg text-gray-800 leading-tight text-center my-5">
                        {{ __('Créer une nouvelle formation') }}
                    </h3>

                    <!-- Validation Errors -->
                    @if ($errors->any())
                        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                            role="alert">
                            <x-form-validation-errors class="mb-4" />
                        </div>
                    @endif

                    <!-- Validation Success -->
                    @if (\Session::has('success'))
                        <div class="p-4 mb-4 text-sm text-center text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                            role="alert">
                            {!! \Session::get('success') !!}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('storeCourse') }}">
                        @csrf

                        <!-- Course name -->
                        <div>
                            <x-label for="name" :value="__('Nom de la formation')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                                autofocus />
                        </div>

                        <!-- Description -->
                        <div class="mt-4">
                            <x-label for="description" :value="__('Description')" />

                            <x-textarea id="description" class="block mt-1 w-full" name="description" />
                        </div>

                        <!-- Coach -->
                        <div class="mt-4">
                            <x-label for="image" :value="__('Coach de la formation')" />

                            <x-input id="author" class="block mt-1 w-full" type="text" name="author"
                                :value="old('author')" autofocus />
                        </div>

                        <!-- Image -->
                        <div class="mt-4">
                            <x-label for="image" :value="__('Image de la formation')" />

                            <x-input id="image" class="block mt-1 w-full" type="text" name="image" :value="old('image')"
                                autofocus />
                        </div>

                        <!-- Price -->
                        <div class="mt-4">
                            <x-label for="price" :value="__('Prix de la formation')" />

                            <x-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price')"
                                autofocus />
                        </div>

                        <!-- Category ID -->
                        <div class="mt-4">
                            <x-label for="category_id" :value="__('Catégorie de la formation')" />

                            <x-input id="category_id" class="block mt-1 w-full" type="number" name="category_id"
                                :value="old('category_id')" autofocus />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (empty($selectedCourse))
                                <x-button class="ml-3 submit-btn">
                                    {{ __('Valider la création') }}
                                </x-button>
                            @endif


                        </div>
                    </form>

                    @if (!empty($selectedCourse))
                        <div class="flex justify-end">
                            <x-button class="ml-3 modify-btn">
                                {{ __('Modifier') }}
                            </x-button>
                            <form method="POST" action="{{ route('destroyCourse', $selectedCourse) }}"">
                                @method('delete')
                                <x-button class="  ml-3 destroy-btn text-white bg-red-600 hover:bg-red-800">
                                {{ __('Supprimer') }}
                                </x-button>
                            </form>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
