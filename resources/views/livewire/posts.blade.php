<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Product</h2>
</x-slot>

<div class="py-12">
    <div class="mx-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('info'))
                <div class="bg-green-500 border-t-4 border-green-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="">
                    <div class="flex">
                        <div>
                            <p class="text-sm text-white">{{ session('info') }}</p>
                        </div>
                    </div>
                </div>
            @endif

            {{-- CREATE DATA --}}
            <button wire:click="showModal()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Tambah</button>
                @if ($isOpen)
                    @include('livewire.create')
                @endif

            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-indigo-500">
                        <th class="px-4 py-2 text-white">ID</th>
                        <th class="px-4 py-2 text-white">Nama</th>
                        <th class="px-4 py-2 text-white">Tanggal Lahir</th>
                        <th class="px-4 py-2 text-white">Line</th>
                        <th class="px-4 py-2 text-white">Parent</th>
                        <th class="px-4 py-2 text-white">Note</th>
                        <th class="px-4 py-2 text-white">Harga</th>
                        <th class="px-4 py-2 text-white">Description</th>
                        <th class="px-4 py-2 text-white">Foto</th>
                        <th class="px-4 py-2 text-white">Categori</th>
                        <th class="px-4 py-2 text-white">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <td class="border px-4 py-2">{{ $product->id }}</td>
                            <td class="border px-4 py-2">{{ $product->nama_product }}</td>
                            <td class="border px-4 py-2">{{ $product->tgl_lahir }}</td>
                            <td class="border px-4 py-2">{{ $product->line }}</td>
                            <td class="border px-4 py-2">{{ $product->parent }}</td>
                            <td class="border px-4 py-2">{{ $product->note }}</td>
                            <td class="border px-4 py-2">{{ $product->harga_product }}</td>
                            <td class="border px-4 py-2">{{ $product->desc_product }}</td>
                            <td class="border px-4 py-2">{{ $product->pic_product }}</td>
                            <td class="border px-4 py-2">{{ $product->category_id }}</td>
                            <td class="border px-4 py-2">
                                <button wire:click="edit({{ $product->id }})" class="bg-blue-500 hover:bg-blue-200 text-white font-bold py-1 px-4 rounded">
                                    Edit
                                </button>
                                <button wire:click="delete({{ $product->id }})" class="bg-red-500 hover:bg-red-200 text-white font-bold py-1 px-4 rounded">
                                    Delete
                                </button>
                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td class="border px-4 py-2 text-center" colspan="5">Tidak ada Product</td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>
    </div>
</div>
