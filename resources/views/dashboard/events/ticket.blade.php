@extends('dashboard.layouts.main')
@section('main')

<section class="events">
    <div class="flex flex-col">
        <div class="info my-4">
            @include('dashboard.layouts.partials.breadcumb', [$datas = ['Events', $event->name, 'Tickets']])
            <div class="flex items-center gap-3 my-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8">
                    <path fill-rule="evenodd"
                        d="M1.5 6.375c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v3.026a.75.75 0 0 1-.375.65 2.249 2.249 0 0 0 0 3.898.75.75 0 0 1 .375.65v3.026c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 17.625v-3.026a.75.75 0 0 1 .374-.65 2.249 2.249 0 0 0 0-3.898.75.75 0 0 1-.374-.65V6.375Zm15-1.125a.75.75 0 0 1 .75.75v.75a.75.75 0 0 1-1.5 0V6a.75.75 0 0 1 .75-.75Zm.75 4.5a.75.75 0 0 0-1.5 0v.75a.75.75 0 0 0 1.5 0v-.75Zm-.75 3a.75.75 0 0 1 .75.75v.75a.75.75 0 0 1-1.5 0v-.75a.75.75 0 0 1 .75-.75Zm.75 4.5a.75.75 0 0 0-1.5 0V18a.75.75 0 0 0 1.5 0v-.75ZM6 12a.75.75 0 0 1 .75-.75H12a.75.75 0 0 1 0 1.5H6.75A.75.75 0 0 1 6 12Zm.75 2.25a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5h-3Z"
                        clip-rule="evenodd" />
                </svg>
                <h1 class="text-2xl md:text-3xl uppercase font-bold">Ticket Events : {{ $event->name }}</h1>
            </div>
        </div>
        <div class="flex justify-start">
            <a href="/dashboard/events/{{ $event->uuid }}/tickets/create"
                class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-indigo-500 hover:bg-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-80 mb-3 text-sm inline-block rounded-lg">
                <div class="flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <p>Create</p>
                </div>
            </a>
        </div>

        <div class="overflow-x-auto -mx-4 -my-2 sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                @if(session()->has('success'))
                <div class="flex w-full overflow-hidden bg-white rounded-lg shadow-sm mb-3">
                    <div class="flex items-center justify-center w-5 bg-green-500"></div>
                    <div class="px-4 py-2 -mx-3">
                        <div class="mx-3">
                            <span class="font-semibold text-green-500">Success</span>
                            <p class="text-sm text-gray-600">
                                {{ session('success') }}
                            </p>
                        </div>
                    </div>
                </div>
                @endif

                <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700" id="myTable">
                        <thead class="bg-slate-100 dark:bg-gray-800">
                            <tr>
                                <th
                                    class="px-4 py-3.5 text-sm uppercase text-left text-black font-bold dark:text-gray-400">
                                    Ticket
                                </th>
                                <th
                                    class="px-4 py-3.5 text-sm uppercase text-left text-black font-bold dark:text-gray-400">
                                    Qty
                                </th>
                                <th
                                    class="px-4 py-3.5 text-sm uppercase text-left text-black font-bold dark:text-gray-400">
                                    Price
                                </th>
                                <th
                                    class="px-4 py-3.5 text-sm uppercase text-left text-black font-bold dark:text-gray-400">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                            @foreach ($event->tickets as $ticket)
                            <tr>
                                <td class="px-4 py-4 text-sm whitespace-nowrap ">
                                    {{ $ticket->ticket }}

                                </td>
                                <td class="px-4 py-4 text-sm whitespace-nowrap flex items-center gap-1">
                                    {{ $ticket->qty }}
                                    <span class="bg-red-500 px-1 text-sm text-white rounded-lg">Sisa: {{
                                        $ticket->qty_available }}</span>
                                </td>
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    {{ $ticket->ticket_price }}
                                </td>
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="flex items-center gap-5">
                                        <a href="{{ $event->uuid }}/tickets/{{ $ticket->uuid }}/edit"
                                            class="text-gray-500 transition-colors duration-200 text-lime-400 dark:hover:text-lime-500 dark:text-gray-300 hover:text-lime-500 focus:outline-none inline-block">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </a>
                                        <form action="{{ $event->uuid }}/tickets/{{ $ticket->uuid }}" method="post"
                                            class=" flex items-center">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-gray-500 transition-colors duration-200 text-red-400 dark:hover:text-red-500 dark:text-gray-300 hover:text-red-500 focus:outline-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection