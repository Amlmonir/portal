<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Account Settings') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            <div class="p-6 sm:p-10 bg-white shadow-sm border border-gray-100 sm:rounded-xl">
                <div class="max-w-2xl mx-auto text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Profile Information</h3>
                    <p class="text-sm text-gray-500 mb-8">Update your account's profile information and email address.</p>

                    <div class="text-left">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>

            <div class="p-6 sm:p-10 bg-white shadow-sm border border-gray-100 sm:rounded-xl">
                <div class="max-w-2xl mx-auto text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Update Password</h3>
                    <p class="text-sm text-gray-500 mb-8">Ensure your account is using a long, random password to stay secure.</p>

                    <div class="text-left">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>

            <div class="p-6 sm:p-10 bg-white shadow-sm border border-red-100 sm:rounded-xl">
                <div class="max-w-2xl mx-auto text-center">
                    <h3 class="text-xl font-bold text-red-600 mb-2 text-center">Danger Zone</h3>

                    <div class="text-left">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
