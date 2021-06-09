<!-- This example requires Tailwind CSS v2.0+ -->
<div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

      <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

      <!-- This element is to trick the browser into centering the modal contents. -->
      <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

      <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
        <form>
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">


            <div>
                <h1 class="font-bold text-center">Post Product</h1>
            </div>
                <div>
                    <div class="mb-2">
                        <input wire:model="postId" type="hidden" class="shadow appearance-none border rounded w-full py-2 px-3 text-black-700" placeholder="Input Post">
                    </div>
                    <div class="mb-2">
                        <label for="title" class="block">Nama</label>
                        <input wire:model="nama_product" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-black-700" placeholder="Input Post">
                    </div>
                    <div class="mb-2">
                        <label for="tanggallahir" class="block">Tanggal lahir</label>
                        <input wire:model="tgl_lahir" type="text" name="tanggallahir" class="shadow appearance-none border rounded w-full py-2 px-3 text-black-700" placeholder="Input Post">
                    </div>
                    <div class="mb-2">
                        <label for="jenis" class="block">Jenis</label>
                        <input wire:model="line" type="text" name="jenis" class="shadow appearance-none border rounded w-full py-2 px-3 text-black-700" placeholder="Input Post">
                    </div>
                    <div class="mb-2">
                        <label for="parent" class="block">Parent</label>
                        <input wire:model="parent" type="text" name="parent" class="shadow appearance-none border rounded w-full py-2 px-3 text-black-700" placeholder="Input Post">
                    </div>
                    <div class="mb-2">
                        <label for="note" class="block">Note</label>
                        <input wire:model="note" type="text" name="note" class="shadow appearance-none border rounded w-full py-2 px-3 text-black-700" placeholder="Input Post">
                    </div>
                    <div class="mb-2">
                        <label for="harga" class="block">Harga</label>
                        <input wire:model="harga_product" type="text" name="harga" class="shadow appearance-none border rounded w-full py-2 px-3 text-black-700" placeholder="Input Post">
                    </div>
                    <div class="mb-2">
                        <label for="description" class="block">Description</label>
                        <textarea wire:model="desc_product" name="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-black-700" placeholder="Input Post"></textarea>
                    </div>
                    <div class="mb-2">
                        <label for="Foto" class="block">Foto</label>
                        <input wire:model="pic_product" type="text" name="Foto" class="shadow appearance-none border rounded w-full py-2 px-3 text-black-700" placeholder="Input Post">
                    </div>
                    <div class="mb-2">
                        <label for="categoryId" class="block">Category</label>
                        {{-- <input wire:model="category_id" type="text" name="categoryId" class="shadow appearance-none border rounded w-full py-2 px-3 text-black-700" placeholder="Input Post"> --}}
                        <select wire:model="category_id" type="text" name="categoryId" class="shadow appearance-none border rounded w-full py-2 px-3 text-black-700" placeholder="Input Post">
                            <option value="">Pilih</option>
                            <option value="1">Hewan</option>
                            <option value="2">Makanan</option>
                            <option value="3">Aksesoris</option>
                        </select>
                    </div>
                </div>


        </div>
        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
          {{-- <button wire:click.prevent="store()" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
            Submit
          </button> --}}
          <button wire:click.prevent="store()" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
            Submit
          </button>
          <button wire:click="hideModal()" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-pink-600 text-base font-medium text-white hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
            Cancel
          </button>
        </div>
    </form>
      </div>
    </div>
  </div>
