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
                    <h3 class="font-semibold text-lg text-gray-800 leading-tight text-center mb-5">
                        {{ __('Créer une nouvelle formation') }}
                    </h3>

                    <!-- Validation Errors -->
                    <x-form-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('courses') }}">
                        @csrf

                        <!-- Nom de la formation -->
                        <div>
                            <x-label for="name" :value="__('Nom de la formation')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                                required autofocus />
                        </div>

                        <!-- Description -->
                        <div class="mt-4">
                            <x-label for="description" :value="__('Description')" />

                            <x-textarea id="description" class="block mt-1 w-full" name="description" required />
                        </div>

                        <!-- Coach -->
                        <div class="mt-4">
                            <x-label for="image" :value="__('Coach de la formation')" />

                            <x-input id="author" class="block mt-1 w-full" type="text" name="author"
                                :value="old('author')" required autofocus />
                        </div>

                        <!-- Image -->
                        <div class="mt-4">
                            <x-label for="image" :value="__('Image de la formation')" />

                            <x-input id="image" class="block mt-1 w-full" type="text" name="image" :value="old('image')"
                                required autofocus />
                        </div>

                        <!-- Price -->
                        <div class="mt-4">
                            <x-label for="price" :value="__('Prix de la formation')" />

                            <x-input id="price" class="block mt-1 w-full" type="number" name="price"
                                :value="old('price')" required autofocus />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            {{-- <a href="{{ route('register') }}"
                                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a> --}}

                            <x-button class="ml-3 submit-btn">
                                {{ __('Valider la création') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
