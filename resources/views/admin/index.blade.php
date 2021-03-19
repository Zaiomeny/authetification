<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   


                    @if(Auth::user()->hasRole('admin'))
                        <div class="container">
                            <div class="row">
                                <div class="col-mt-12">

                                            <x-guest-layout>
                                                    <x-auth-card>
                                                        <x-slot name="logo">
                                                            
                                                        </x-slot>

                                                        <!-- Validation Errors -->
                                                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                                        <form method="GET" action="/register">
                                                            @csrf

                                                            <!-- Name -->
                                                            <div>
                                                                <x-label for="name" :value="__('Name')" />

                                                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                                                            </div>

                                                            <!-- Email Address -->
                                                            <div class="mt-4">
                                                                <x-label for="email" :value="__('Email')" />

                                                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                                            </div>

                                                            <!-- Password -->
                                                            <div class="mt-4">
                                                                <x-label for="password" :value="__('Password')" />

                                                                <x-input id="password" class="block mt-1 w-full"
                                                                                type="password"
                                                                                name="password"
                                                                                required autocomplete="new-password" />
                                                            </div>

                                                            <!-- Confirm Password -->
                                                            <div class="mt-4">
                                                                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                                                                <x-input id="password_confirmation" class="block mt-1 w-full"
                                                                                type="password"
                                                                                name="password_confirmation" required />
                                                            </div>
                                                            <!-- Select a role-->
                                                            <div class="mt-4">
                                                                <x-label for="role_id" :value="__('Register as ')" />

                                                                <select name="role_id"  class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" required>
                                                                    <option value="user">User</option>
                                                                    <option value="visitor">Visitor</option>
                                                                </select>
                                                            </div>

                                                            <div class="flex items-center justify-end mt-4">
                                                                

                                                                <x-button href="/register" class="ml-4">
                                                                    {{ __('Register') }}
                                                                </x-button>
                                                            </div>
                                                        </form>
                                                    </x-auth-card>
                                                </x-guest-layout>


                                </div>
                            </div>
                        </div>
                    @elseif(Auth::user()->hasRole('user'))
                        <div class="container">
                            <div class="row">
                                <div class="col-mt-12">

                                    <h2 class="text-center">Tarammmmm user</h2>

                                </div>
                            </div>
                        </div>
                        @elseif(Auth::user()->hasRole('visitor'))
                        <div class="container">
                            <div class="row">
                                <div class="col-mt-12">

                                    <h2 class="text-center">Tarammmmm visitor</h2>

                                </div>
                            </div>
                        </div>
                        @endif
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>