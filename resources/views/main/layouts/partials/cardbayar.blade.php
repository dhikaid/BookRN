@auth
<div class="total my-5 rounded-lg bg-gray-100 p-3" x-show="getTotal() > 0">
    <div class="mb-3">
        <p class="text-gray-600 text-sm md:text-base">Tiket:</p>
        <!-- Render tiket menggunakan x-for -->
        <template x-for="(ticket, index) in tickets" :key="index">
            <div class="listTicket flex justify-between items-center mb-3">
                <p class="text-black text-base md:text-xl" x-text="ticket.name"></p>
                <div class="flex items-center gap-2">
                    <button @click="decreaseTicket(ticket.name)">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </button>
                    <p class="text-black text-sm md:text-base bg-white p-2 rounded-lg" x-text="ticket.qty + 'x'"></p>
                    <button @click="increaseTicket(ticket.name)">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </button>
                    <button @click="deleteTicket(ticket.name)" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>

                    </button>
                </div>
            </div>
        </template>

    </div>
    <hr class="my-2">
    <div class="price mb-3">
        <p class="text-gray-600 text-sm md:text-base">Total</p>
        <!-- Tampilkan total dinamis -->
        <p class="text-black text-lg md:text-2xl font-bold" x-text="'Rp. ' + getTotal().toLocaleString()"></p>
    </div>

    <div x-data="startTransaction('{{ csrf_token() }}')">
        <button id="pay-button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-bold rounded-lg w-full inline-block text-lg p-3 text-center me-2 mb-2 dark:bg-blue-700 dark:hover:bg-blue-700 dark:focus:ring-blue-800 text-sm md:text-base"
            x-on:click="start">
            BAYAR
        </button>
    </div>

</div>
@endauth