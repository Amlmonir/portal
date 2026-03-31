<section class="space-y-6">
    <header>
        {{-- <h2 class="text-lg font-medium text-gray-900 text-center">
            {{ __('Danger Zone') }}
        </h2> --}}

        <p class="mt-1 text-sm text-gray-600 text-center">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before proceeding, please ensure you have backed up any information you wish to retain.') }}
        </p>
    </header>

<div class="flex justify-center mt-6">
    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="px-8 py-3 shadow-md hover:shadow-lg transition duration-150"
    >
        {{ __('Delete Account') }}
    </x-danger-button>
</div>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Confirm Account Deletion') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('This action is permanent. Please enter your password to confirm that you would like to permanently delete your account and all associated data.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4 border-gray-300 focus:border-red-500 focus:ring-red-500 shadow-sm"
                    placeholder="{{ __('Enter your password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3 shadow-sm">
                    {{ __('Permanently Delete') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
