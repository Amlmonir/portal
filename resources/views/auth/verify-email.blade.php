<x-guest-layout>
    <div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8 px-6">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <img class="mx-auto h-16 w-auto" src="{{ asset('build/assets/New-Cairo-University-of-Technology.png') }}" alt="University Logo">

            <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
                Verify Your Email
            </h2>
            <p class="mt-2 text-center text-sm leading-5 text-gray-600">
                Thanks for signing up! Before getting started, please verify your email address by clicking on the link we just emailed to you.
            </p>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">

                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600 bg-green-50 p-3 rounded-md border border-green-200">
                        A new verification link has been sent to your email address.
                    </div>
                @endif

                <div class="mt-4 flex flex-col space-y-4">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                            Resend Verification Email
                        </button>
                    </form>

                    <form method="POST" action="{{ route('logout') }}" class="text-center">
                        @csrf
                        <button type="submit" class="text-sm text-gray-500 hover:text-gray-700 underline focus:outline-none">
                            Log Out
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
