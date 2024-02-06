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

            <div class=" w-full max-w-4xl">
                <div class="flex w-full p-4 justify-between">
                    <button onclick="showModal('newBill')" class="p-2 w-24 text-center rounded text-sm font-semibold text-white bg-gray-600 hover:cursor-pointer">New bill</button>
                    <div class=" max-w-lg w-full">
                        <div class="flex max-w-xl w-full">
                            <select class="bg-gray-50 text-gray-500 text-center border focus:ring focus:ring-blue-500 rounded-l-lg border-gray-300 outline-none z-10" id="filter-selection">
                                <option value="1">reference</option>
                                <option value="2">Customer name</option>
                                <option value="3">Date</option>
                            </select>
                            <div class="relative w-full">
                                <input type="search" id="search-filter" class="block p-2 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border
                                    border-gray-300 focus:ring-blue-500 focus:ring focus:border-blue-500 " required>
                                <button onclick="filter()" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bills w-full pt-4 px-4 flex flex-col items-center">

                <?php if(isset($bills) && count($bills) > 0): ?>
                    <?php foreach($bills as $bill): ?>
                        <div class="bill group relative rounded-lg border p-4 w-full bg-gray-50 max-w-xl flex justify-between mt-4">
                            <div class="absolute pl-3 rounded-lg right-0 translate-x-full h-full -translate-y-1/2 top-1/2 hidden group-hover:flex hover:flex justify-center items-center">
                                <a href="<?= base_url('acc/dashboard/view/'.$bill['id']) ?>" target="_blank" class="rounded-l-lg hover:cursor-pointer shadow-md p-2 h-fit bg-yellow-500">
                                    <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M5 7.8C6.7 6.3 9.2 5 12 5s5.3 1.3 7 2.8a12.7 12.7 0 0 1 2.7 3.2c.2.2.3.6.3 1s-.1.8-.3 1a2 2 0 0 1-.6 1 12.7 12.7 0 0 1-9.1 5c-2.8 0-5.3-1.3-7-2.8A12.7 12.7 0 0 1 2.3 13c-.2-.2-.3-.6-.3-1s.1-.8.3-1c.1-.4.3-.7.6-1 .5-.7 1.2-1.5 2.1-2.2Zm7 7.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd"/>
                                    </svg>
                                    
                                </a>
                                <a href="<?= base_url('acc/dashboard/archive/'.$bill['id']) ?>" class="rounded-r-lg hover:cursor-pointer shadow-md p-2 h-fit bg-red-600">
                                    <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                                    </svg>
                                    
                                </a>
                            </div>                

                            <div class="detailsfirst flex flex-col gap-2">
                                <div class="flex gap-2 text-gray-500 text-xs items-center">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M11.3 3.3a1 1 0 0 1 1.4 0l6 6 2 2a1 1 0 0 1-1.4 1.4l-.3-.3V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3c0 .6-.4 1-1 1H7a2 2 0 0 1-2-2v-6.6l-.3.3a1 1 0 0 1-1.4-1.4l2-2 6-6Z" clip-rule="evenodd"/>
                                    </svg> <p class="text-xs text-gray-600 font-semibold"><?= $bill['room'].' room' ?></p>
                                </div>
                                <div class="flex gap-1 mt-2 text-gray-600 text-sm">
                                    <svg class="h-4 w-4 fill-gray-500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#000000;} </style> <g> <path class="st0" d="M78.641,118.933c22.88,0,41.416-18.551,41.416-41.414c0-22.887-18.536-41.423-41.416-41.423 c-22.887,0-41.422,18.536-41.422,41.423C37.218,100.382,55.754,118.933,78.641,118.933z"></path> <path class="st0" d="M255.706,228.73v0.062c0.101,0,0.194-0.031,0.294-0.031c0.101,0,0.194,0.031,0.294,0.031v-0.062 c15.562-0.317,28.082-12.976,28.082-28.601c0-15.648-12.52-28.299-28.082-28.616v-0.063c-0.101,0-0.194,0.031-0.294,0.031 c-0.1,0-0.193-0.031-0.294-0.031v0.063c-15.563,0.317-28.082,12.968-28.082,28.616C227.623,215.754,240.143,228.413,255.706,228.73 z"></path> <path class="st0" d="M433.359,118.933c22.887,0,41.423-18.551,41.423-41.414c0-22.887-18.536-41.423-41.423-41.423 c-22.88,0-41.416,18.536-41.416,41.423C391.944,100.382,410.48,118.933,433.359,118.933z"></path> <path class="st0" d="M470.097,138.553h-36.312h-18.404c-21.106,0-40.432,11.831-50.033,30.622l-33.494,97.967 c-1.154,2.246-3.298,3.84-5.792,4.282c-2.493,0.442-5.048-0.309-6.914-2.036l-20.836-18.04c-6.233-5.769-14.408-8.973-22.902-8.973 H256h-19.41c-8.494,0-16.669,3.204-22.902,8.973l-20.835,18.04c-1.866,1.727-4.421,2.478-6.914,2.036 c-2.492-0.442-4.637-2.036-5.791-4.282l-33.495-97.967c-9.6-18.791-28.926-30.622-50.032-30.622H78.215H41.902 C21.834,138.553,0,160.387,0,180.464v139.211c0,10.034,8.13,18.171,18.164,18.171c4.939,0,0,0,12.682,0l6.906,118.725 c0,10.676,8.664,19.332,19.34,19.332c4.506,0,12.814,0,21.122,0c8.308,0,16.616,0,21.122,0c10.676,0,19.34-8.656,19.34-19.332 l6.906-118.725l-0.085-84.766c0-1.339,0.914-2.493,2.222-2.818c1.309-0.31,2.648,0.309,3.26,1.502l26.572,65.401 c3.206,6.256,9.152,10.654,16.074,11.885c6.922,1.231,14.022-0.844,19.186-5.613l25.426-18.729 c0.852-0.782,2.083-0.984,3.136-0.542c1.061,0.473,1.743,1.518,1.743,2.663l0.093,73.508l4.777,82.187 c0,7.387,6.001,13.379,13.395,13.379c3.113,0,8.865,0,14.618,0c5.753,0,11.506,0,14.618,0c7.394,0,13.394-5.992,13.394-13.379 l4.778-82.187l0.093-73.508c0-1.146,0.681-2.19,1.742-2.663c1.053-0.442,2.284-0.24,3.136,0.542l25.427,18.729 c5.164,4.769,12.264,6.844,19.186,5.613c6.922-1.231,12.868-5.629,16.073-11.885l26.573-65.401 c0.611-1.192,1.951-1.812,3.259-1.502c1.309,0.325,2.222,1.478,2.222,2.818l-0.085,84.766l6.906,118.725 c0,10.676,8.664,19.332,19.341,19.332c4.507,0,12.814,0,21.122,0c8.308,0,16.616,0,21.121,0c10.677,0,19.342-8.656,19.342-19.332 l6.906-118.725c12.682,0,7.742,0,12.682,0c10.034,0,18.164-8.137,18.164-18.171V180.464 C512,160.387,490.166,138.553,470.097,138.553z"></path> </g> </g></svg>
                                    <p class="text-xs ml-2 font-semibold "><?= $bill['num_kids'] ?> <p class="rounded-full text-gray-500 text-xs font-semibold px-1 bg-gray-200">kids</p></p>
                                    <p class="text-xs font-semibold "><?= $bill['num_adults'] ?> <p class="rounded-full text-gray-500 text-xs font-semibold px-1 bg-gray-200">adults</p></p>
                                </div>
                                <div class="flex gap-2 mt-3 text-gray-600 text-sm items-center">
                                    <svg class="w-3 h-3 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm14-7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm-5-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm-5-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4Z"></path>
                                    </svg>
                                    <div class="flex flex-col gap-1">
                                        <span class="text-xs ml-2 font-semibold flex gap-2"><?= date("F j\, Y", substr($bill['check_in'], 0, -3)) ?> <p class="rounded-full text-gray-500 text-xs w-16 text-center font-semibold px-1 bg-gray-200">check-in</p></span>
                                        <span class="text-xs ml-2 font-semibold flex gap-2"><?= date("F j\, Y", substr($bill['check_out'], 0, -3)) ?> <p class="rounded-full text-gray-500 text-xs w-16 text-center font-semibold px-1 bg-gray-200">check-out</p></span>
                                    </div>
                                </div>
                            </div>
                            <div class="detailsfirst flex flex-col justify-between">
                                <div class="flex flex-col">
                                    <span class="text-lg font-semibold text-gray-700 flex items-center  gap-1"><?= $bill['reference'] ?> <p class="rounded-full text-gray-500 text-xs  text-center font-semibold px-2 h-fit bg-gray-200">ref</p></span>
                                    <span class="text-xs font-semibold text-gray-700 flex items-center "><?= $bill['customer_name'] ?></span>
                                </div>
                                <span class="text-lg font-semibold text-gray-700 flex items-center "><?= $bill['total'] ?><p class="rounded-full text-gray-500 text-sm text-center font-semibold pl-2 h-fit items-baseline">Rs</p> </span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                </div>
            </div>
            
        </div>
<div class="fixed top-0 left-0 h-screen w-full bg-black/10 z-40 hidden" id="modal-shadow" onclick="hideModal()" data-target=""></div>

<div id="newBill" tabindex="-1" aria-hidden="true" class="hidden flex overflow-y-auto overflow-x-hidden absolute top-0 right-0 left-0 z-50 justify-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto" id="modalbg">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 ">
                <h3 class="text-lg font-semibold text-gray-9000" id="cancel-campname">
                    New Bill 
                </h3>
                <button onclick="hideModal()" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form target="_blank" action="<?= base_url('acc/dashboard/generate') ?>" method="post">
            <div class="grid gap-4 mb-4 sm:grid-cols-2"><input type="hidden" id="refinput" value="" name="reference">
                <span class="text-lg font-semibold text-gray-500 sm:col-span-2 inline-flex gap-2 items-center">
                    <span id="refnum">E085SIR</span>
                    <p class="text-xs rounded-full text-gray-600 bg-gray-200 px-1 h-fit">ref</p>
                </span>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
                    <input type="text" name="name" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="customer name" required>
                </div>

                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 ">Room service</label>
                    <select name="room-service" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="1">deluxe</option>
                        <option value="2">double</option>
                        <option value="3">triple</option>
                    </select>
                </div>

                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 ">Kids count</label>
                    <input type="number" name="kids" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"  required>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 ">Adults count</label>
                    <input type="number" name="adults" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required>
                </div>

                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 ">Check-in date</label>
                    <div class="relative max-w-sm">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input name="checkin" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" required placeholder="Select date">
                    </div>
                </div>

                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 ">Check-out date</label>
                    <div class="relative max-w-sm">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input name="checkout" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" required placeholder="Select date">
                    </div>
                </div>

                <div class="sm:col-span-2 mt-3">
                    <div class="flex justify-between">
                        <label class="block mb-2 text-sm font-medium text-gray-900 ">Additional Ammenities</label>
                        <button type="button" onclick="addAmmenity(this)" id="addame" class="disabled:bg-gray-300 px-1 py-0.5 rounded bg-blue-600 text-white mr-3 mb-2 flex items-center">
                            <svg class="w-4 h-4 mr-1 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
                            </svg>
                        add</button>
                    </div>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400" id="ammenity">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-4">Item name</th>
                            <th scope="col" class="px-4 py-3">Quantity</th>
                            <th scope="col" class="px-4 py-3">Unit price</th>
                            <th scope="col" class="px-4 py-3">Subtotal</th>
                            <th scope="col" class="px-4 py-3">
                                <span class="sr-only">Actions</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="ammenity-body">
                        
                    </tbody>
                </table>
                </div>

            </div>
                <div class="h-4"></div>
                <button type="submit" class="cursor-pointer text-md hover:shadow-md font-semibold px-2 mt-3 text-gray-700 py-2 gap-1 flex items-center justify-center bg-green-200 max-w-xl rounded">
                    <svg class="w-4 h-4 aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M9 2.2V7H4.2l.4-.5 3.9-4 .5-.3Zm2-.2v5a2 2 0 0 1-2 2H4v11c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7ZM8 16c0-.6.4-1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm1-5a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Z" clip-rule="evenodd"/>
                    </svg>
  
                    <p class="mb-1 ml-1">generate bill</p>
                </button>
                
            </form>
        </div>
    </div>
</div>
  </body>



    <script>
        $(document).ready(function(){
            $('#newBill').on('click', function(e) {
                if (e.target !== this && e.target.id !== 'modalbg')
                    return;
                
                hideModal();
            });
        })

        function showModal(modal){

            $('#refnum').text(randomID(10).toUpperCase());
            $('#refinput').val($('#refnum').text());

            $('#' + modal).removeClass('hidden');
            $('#modal-shadow').removeClass('hidden');
            $('#modal-shadow').data('target', modal);
            scrollTo(0, 0);
        }
        
        function hideModal(){
            $('#' + $('#modal-shadow').data('target')).addClass('hidden');
            $('#modal-shadow').addClass('hidden');
        }

        var counter = 0;

        function addAmmenity(e){
            counter++;
            row = $('<tr><td><input type="text" onkeypress="key(this)" id="new-item" class="border bg-white rounded mt-3 p-2 w-24"></td><td><input onkeypress="key(this)" id="new-itemqty" type="text" class="border bg-white rounded mt-3 p-2 w-24"></td><td><input onkeypress="key(this)" id="new-unitp" type="text" class="border bg-white rounded mt-3 p-2 w-24"></td><td><input onkeypress="key(this)" id="new-price" type="text" class="border bg-white rounded mt-3 p-2 w-24"></td><td><button onclick="confirmItem(this)" class="inline-flex items-center p-2 text-sm font-medium text-center text-green-500 hover:text-green-800 hover:bg-gray-100 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button"><svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 12 4.7 4.5 9.3-9"/></svg></button></td></tr>'); //create row
            $('#ammenity-body').append(row);
            $(e).attr('disabled', 'disabled');
        }

        function confirmItem(e){
            var empty = false;
            $($(e).parents('tr')).find('input').each(function(){
                if($(this).val() == "") {
                    $(this).addClass('border-red-500');
                    empty=true;
                }
            })
            
            if(empty) return;

            var row = $('<tr class="border-b dark:border-gray-700"><th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">'+ $('#new-item').val() +'<input type="hidden" name="items['+ counter +'][0]" value="'+ $('#new-item').val() +'"></th><td class="px-4 py-3">'+ $('#new-itemqty').val() +'<input type="hidden" name="items['+ counter +'][1]" value="'+ $('#new-itemqty').val() +'"></td><td class="px-4 py-3">'+ $('#new-unitp').val() +'<input type="hidden" name="items['+ counter +'][2]" value="'+ $('#new-unitp').val() +'"></td><td class="px-4 py-3">'+ $('#new-price').val() +'<input type="hidden" name="items['+ counter +'][3]" value="'+ $('#new-price').val() +'"></td><td class="py-2 flex items-center"><button onclick="delItem(this)" class="inline-flex items-center p-2 text-sm font-medium text-center text-rose-500 hover:text-rose-800 hover:bg-gray-100 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button"><svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/></svg></button></td></tr>');
            $($(e).parents('tr')).remove();
            $('#ammenity-body').append(row);

            $('#addame').removeAttr('disabled');
        }

        function delItem(e){
            $($(e).parents('tr')).remove();
            counter--;
        }

        function key(e){
            $(e).removeClass('border-red-500');
        }

        function randomID(length) {
            return Math.random().toString(36).substring(2, length+2);
        };  
    </script>
    <!---new-item, new-itemqty, new-unitp, new-price-->
</html>
