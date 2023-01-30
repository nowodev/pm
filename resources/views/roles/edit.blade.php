<x-app-layout>

    <form action="{{ route('roles.update', $role) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="flex flex-col max-w-sm space-y-6">
            <div class="grid grid-cols-1 gap-6 mdgrid-cols-2">
                <div>
                    <x-input-label>Name</x-input-label>
                    <x-text-input type="text" name="name" value="{{ old('name', $role->name) }}" />
                </div>
            </div>

            <div class="grid grid-cols-1 gap-6 mdgrid-cols-2">
                <div>
                    <x-input-label>Permissions</x-input-label>


                    @foreach ($permissions as $permission)
                        <div class="block mt-4">
                            <label for="permission_{{ $permission->id }}" class="inline-flex items-center">
                                <input id="permission_{{ $permission->id }}" type="checkbox"
                                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                    name="permissions[]" value="{{ $permission->id }}">
                                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">
                                    {{ $permission->name }}
                                </span>
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="flex justify-end">
                <x-primary-button type="submit">Update</x-primary-button>
            </div>
        </div>

    </form>
</x-app-layout>
