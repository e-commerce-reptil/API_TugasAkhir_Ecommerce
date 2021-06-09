<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Category</h2>
</x-slot>

<div class="py-12">
    <div class="mx-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif

            {{-- cREATE DATA --}}
            <button wire:click="showModal()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Tambah</button>
                @if ($isOpen)
                    @include('livewire.createcategories')
                @endif

            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-indigo-500">
                        <th class="px-4 py-2 text-white">ID</th>
                        <th class="px-4 py-2 text-white">Nama</th>
                        <th class="px-4 py-2 text-white">Foto</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <td class="border px-4 py-2">{{ $category->id }}</td>
                            <td class="border px-4 py-2">{{ $category->name }}</td>
                            <td class="border px-4 py-2">{{ $category->image_link }}</td>
                            <td class="border px-4 py-2">
                                <button wire:click="edit({{ $category->id }})" class="bg-blue-500 hover:bg-blue-200 text-white font-bold py-1 px-4 rounded">
                                    Edit
                                </button>
                                <button wire:click="delete({{ $category->id }})" class="bg-red-500 hover:bg-red-200 text-white font-bold py-1 px-4 rounded">
                                    Delete
                                </button>
                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td class="border px-4 py-2 text-center" colspan="5">Tidak ada Artikel</td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>
    </div>
</div>
