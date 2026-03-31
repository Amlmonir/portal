<x-guest-layout>
    <div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8 px-6">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <img class="mx-auto h-16 w-auto" src="{{ asset('build/assets/images-removebg-preview.png') }}" alt="University Logo">

            <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
                Confirm Password
            </h2>
            <p class="mt-2 text-center text-sm leading-5 text-gray-600 max-w">
                This is a secure area. Please confirm your password before continuing.
            </p>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">

                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <div>
                        <label for="password" class="block text-sm font-medium leading-5 text-gray-700">Password</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="password" name="password" type="password" required autocomplete="current-password"
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="mt-6">
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                            Confirm
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
