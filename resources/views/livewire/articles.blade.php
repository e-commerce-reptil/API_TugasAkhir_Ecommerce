<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Artikel</h2>
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
            <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Tambah</button>
                @if ($isModal)
                    @include('livewire.create')
                @endif

            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">Judul</th>
                        <th class="px-4 py-2">Description</th>
                        <th class="px-4 py-2">Link</th>
                        <th class="px-4 py-2">Status</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($articles as $article)
                        <tr>
                            <td class="border px-4 py-2">{{ $article->judul }}</td>
                            <td class="border px-4 py-2">{{ $article->description }}</td>
                            <td class="border px-4 py-2">{{ $article->link }}</td>
                            <td class="border px-4 py-2">

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