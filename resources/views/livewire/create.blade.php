
  <div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opocity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog">
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">
                        <div class="mb-4">
                            <label for="nama_product" class="block text-gray-700 text-sm font-bold mb-2">Nama Product</label>
                            <input type="text" wire:model="nama_product" class="shadow appearance-none border rounded w-full py-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama_product">
                            @error('nama_product')
                                <span class="text-red-500">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="tgl_lahir" class="block text-gray-700 text-sm font-bold mb-2">Tanggal lahir</label>
                            <input type="text" wire:model="tgl_lahir" class="shadow appearance-none border rounded w-full py-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tgl_lahir">
                            @error('tgl_lahir')
                                <span class="text-red-500">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="line" class="block text-gray-700 text-sm font-bold mb-2">line</label>
                            <input type="text" wire:model="line" class="shadow appearance-none border rounded w-full py-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="line">
                            @error('line')
                                <span class="text-red-500">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="parent" class="block text-gray-700 text-sm font-bold mb-2">Parent</label>
                            <input type="text" wire:model="parent" class="shadow appearance-none border rounded w-full py-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="parent">
                            @error('parent')
                                <span class="text-red-500">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="note" class="block text-gray-700 text-sm font-bold mb-2">Note</label>
                            <input type="text" wire:model="note" class="shadow appearance-none border rounded w-full py-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="note">
                            @error('note')
                                <span class="text-red-500">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="harga_product" class="block text-gray-700 text-sm font-bold mb-2">Harga Produk</label>
                            <input type="text" wire:model="harga_product" class="shadow appearance-none border rounded w-full py-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="harga_product">
                            @error('harga_product')
                                <span class="text-red-500">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="desc_product" class="block text-gray-700 text-sm font-bold mb-2">Description Produk</label>
                            <input type="text" wire:model="desc_product" class="shadow appearance-none border rounded w-full py-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="desc_product">
                            @error('desc_product')
                                <span class="text-red-500">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="pic_product" class="block text-gray-700 text-sm font-bold mb-2">Foto</label>
                            <input type="text" wire:model="pic_product" class="shadow appearance-none border rounded w-full py-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="pic_product">
                            @error('pic_product')
                                <span class="text-red-500">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="category_id" class="block text-gray-700 text-sm font-bold mb-2">Foto</label>
                            <select type="text" wire:model="category_id" class="shadow appearance-none border rounded w-full py-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="category_id">
                            <option value="">Pilih</option>
                            <option value="1">Hewan</option>
                            <option value="2">Makanan</option>
                            <option value="3">Aksesoris</option>
                            @error('category_id')
                                <span class="text-red-500">{{ $message}}</span>
                            @enderror
                        </select>
                        </div>

                    </div>
                    <div class=" px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button wire:click.prevent="store()" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-700 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                          Submit
                        </button>
                        <button wire:click="hideModal()" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-pink-600 text-base font-medium text-white hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-700 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                          Cancel
                        </button>
                      </div>
                </div>
            </form>
        </div>
    </div>
</div>
