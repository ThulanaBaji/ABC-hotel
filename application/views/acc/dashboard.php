<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="<?= base_url('js/jquery-3.7.0.js') ?>"></script>
    <link rel="stylesheet" href="<?= base_url('css/admin/style.css') ?>">
  </head>
  <body class=" h-screen w-full">
        <div class="w-full h-screen flex flex-col items-center">
            <div class="w-full flex justify-end p-4">
                <a href="<?= base_url('acc/dashboard/logout') ?>" class="p-2 w-24 text-center rounded text-sm font-semibold text-white bg-red-600 hover:cursor-pointer">Logout</a>
            </div>

            <div class=" w-full max-w-4xl border">
                <div class="flex w-full p-4 justify-between">
                    <a href="<?= base_url('acc/dashboard/logout') ?>" class="p-2 w-24 text-center rounded text-sm font-semibold text-white bg-gray-600 hover:cursor-pointer">New bill</a>
                    <div class=" max-w-lg w-full">
                        <div class="flex max-w-xl w-full">
                            <select class="bg-gray-50 border focus:ring focus:ring-blue-500 rounded-l-lg border-gray-300 outline-none z-10" id="filter-selection">
                                <option value="1">reference</option>
                                <option value="2">Customer name</option>
                                <option value="3">Date</option>
                            </select>
                            <div class="relative w-full">
                                <input type="search" id="search-filter" class="block p-2 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border
                                    border-gray-300 focus:ring-blue-500 focus:ring focus:border-blue-500 " placeholder="(Ex: Colombo)" required>
                                <button onclick="filter()" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bills w-full pt-8 px-4 flex flex-col justify-center">
                    <div class="bill rounded-lg border p-4 bg-gray-100 max-w-xl flex">
                        <div class="detailsfirst flex flex-col gap-2">
                            <div class="flex gap-2 text-gray-700 text-sm">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M11.3 3.3a1 1 0 0 1 1.4 0l6 6 2 2a1 1 0 0 1-1.4 1.4l-.3-.3V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3c0 .6-.4 1-1 1H7a2 2 0 0 1-2-2v-6.6l-.3.3a1 1 0 0 1-1.4-1.4l2-2 6-6Z" clip-rule="evenodd"/>
                                </svg> <p class="text-xs font-semibold "> deluxe room</p>
                            </div>
                            <div class="flex gap-2 text-gray-700 text-sm">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M11.3 3.3a1 1 0 0 1 1.4 0l6 6 2 2a1 1 0 0 1-1.4 1.4l-.3-.3V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3c0 .6-.4 1-1 1H7a2 2 0 0 1-2-2v-6.6l-.3.3a1 1 0 0 1-1.4-1.4l2-2 6-6Z" clip-rule="evenodd"/>
                                </svg> <p class="text-xs font-semibold "> deluxe room</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
  </body>

    <script>
   
    </script>
</html>