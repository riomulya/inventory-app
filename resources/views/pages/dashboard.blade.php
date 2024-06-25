@extends('layout.main')

@section('content')
    <div class="overflow-hidden">

        <div class="px-4 sm:px-6 lg:px-8 py-8 w-full mx-auto">
            <div class="relative -z-50 bg-indigo-200 dark:bg-indigo-500 p-4 sm:p-6 rounded-sm overflow-hidden mb-8">
                <div class="absolute right-0 top-0 -mt-4 mr-16 pointer-events-none hidden xl:block" aria-hidden="true"><svg
                        width="319" height="198" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs>
                            <path id="welcome-a" d="M64 0l64 128-64-20-64 20z"></path>
                            <path id="welcome-e" d="M40 0l40 80-40-12.5L0 80z"></path>
                            <path id="welcome-g" d="M40 0l40 80-40-12.5L0 80z"></path>
                            <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="welcome-b">
                                <stop stop-color="#A5B4FC" offset="0%"></stop>
                                <stop stop-color="#818CF8" offset="100%"></stop>
                            </linearGradient>
                            <linearGradient x1="50%" y1="24.537%" x2="50%" y2="100%" id="welcome-c">
                                <stop stop-color="#4338CA" offset="0%"></stop>
                                <stop stop-color="#6366F1" stop-opacity="0" offset="100%"></stop>
                            </linearGradient>
                        </defs>
                        <g fill="none" fill-rule="evenodd">
                            <g transform="rotate(64 36.592 105.604)">
                                <mask id="welcome-d" fill="#fff">
                                    <use xlink:href="#welcome-a"></use>
                                </mask>
                                <use fill="url(#welcome-b)" xlink:href="#welcome-a"></use>
                                <path fill="url(#welcome-c)" mask="url(#welcome-d)" d="M64-24h80v152H64z"></path>
                            </g>
                            <g transform="rotate(-51 91.324 -105.372)">
                                <mask id="welcome-f" fill="#fff">
                                    <use xlink:href="#welcome-e"></use>
                                </mask>
                                <use fill="url(#welcome-b)" xlink:href="#welcome-e"></use>
                                <path fill="url(#welcome-c)" mask="url(#welcome-f)" d="M40.333-15.147h50v95h-50z"></path>
                            </g>
                            <g transform="rotate(44 61.546 392.623)">
                                <mask id="welcome-h" fill="#fff">
                                    <use xlink:href="#welcome-g"></use>
                                </mask>
                                <use fill="url(#welcome-b)" xlink:href="#welcome-g"></use>
                                <path fill="url(#welcome-c)" mask="url(#welcome-h)" d="M40.333-15.147h50v95h-50z"></path>
                            </g>
                        </g>
                    </svg></div>
                <div class="relative">
                    <h1 class="text-2xl md:text-3xl  font-bold mb-1">Hallo, {{ Auth::user()->name }}
                        👋</h1>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-6">
                <div
                    class="col-span-6 xl:col-span-6 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
                    <canvas id="salesChart" width="800" height="400"></canvas>
                </div>
                <div
                    class="col-span-6 xl:col-span-6 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
                    <canvas id="purchaseChart" width="800" height="400"></canvas>
                </div>
                <div
                    class="col-span-6 xl:col-span-6 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
                    <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                        <h2 class="font-semibold text-slate-800 dark:text-slate-100">Customers</h2>
                    </header>
                    <div class="p-3">
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full">
                                <thead
                                    class="text-xs font-semibold uppercase text-slate-400 dark:text-slate-500 bg-slate-50 dark:bg-slate-700 dark:bg-opacity-50">
                                    <tr>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Name</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Email</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Spent</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-center">Date</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-sm divide-y divide-slate-100 dark:divide-slate-700">
                                    @foreach ($sTransactions as $st)
                                        <tr>
                                            <td class="p-2 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="w-10 h-10 shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
                                                            src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDIBERISGBUYLxoaL2NCOEJjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY//CABEIAEgASAMBIgACEQEDEQH/xAAbAAADAQEBAQEAAAAAAAAAAAAEBQYHAwIAAf/aAAgBAQAAAADXvX0/Es7sE7sGvwtTTG7B28JIvOdJ0nPaY5jNZYg3RJx6U/5D5013Dp4g6oWHlBNoIjgdPRLRWTIXOae/mKSrI4T8yQymrw5j7AimfX//xAAXAQADAQAAAAAAAAAAAAAAAAAAAQID/9oACgICEAMQAAAAYgYmRqiLuG1ARtebzUu0wIaphFk//8QALBAAAgEEAQIGAgICAwAAAAAAAQIDAAQFESEGEgcTIjFBURRhUnEyoRCB0f/aAAgBAQABPwD/AJ6k6rxnT1ru6uFErD0RryzVZ+Kjmby4sUzJ9tLomsZ4s4y6uPKvbSa1H8we8CluorqyFxayrLE67R0OwRVuKTZ9I/kCaEkf8xU+RWKXsGiKyfUUFhYTXMpGkUms1c3GUv5MhdsWnkPpT3CL8CklPmhFJeT4WMbNHpjKZXFvfx2U0V5Dye5decv/ALXQvV9xhrp7K6L/AIzHUkTe6H7FWxDIrIQVI2D91JcJEjxknuY0gQw7HI177q5kgRyASa6ruBMYLZSewku/9CstkxJI8UB49mcfP6rw86bgt8fHfSxhriTnZHtSAqmipFeI+BiFqmbtodTQHUxQf5JXQ18b/pu2LHbRkxGsowEzDu1tPf69zuom3bbI0de1ZCdhO21CgV1pmzJO8FudcdruK6UxQzPUVtbONxBu56vRDiccAtpcyxgaVLYHf+qxf5Ut0lzBaXlqHAby5pGPG9c7NdbyZFoJLYwzPB5bFgj9oavCS6L4S6jbkpIOKy+3u3hXhmVUDf3xUl7PDCD5yHj6rIXtzM0xkkIZt/8AQrM+qQsB6fv7roO+tosvFGFZJ+dt8GrTJxoRHIQQRV1kbG0ILSRwxkEs7cCnymOuQ0vejQkepiOBXhhewvms1BbKWgkmMkbD2C7NdUvJD58sQYuE2Avv7AD/AG1PhrUqoE++329VZmQiG7ZTyWVN/QNXDfls6shOh6OKxUb2OVg7u6ORjxsVhrqO/tu2TQnj4ZaurfKwdxtWhlgb4MXcyV4gZK7ssRBYTTFrq7DEqFCiOKvCa4Fv1T5JJCzW7VnFkWUuhG2OuaSUg1e9O29/cPIs0kYk/wA4wNgmpPDi+JHlSL2k7UMNFatPCe5mlWS8vgg2D6E9QrMdGZCzYXOMlMjJ7dh7XFWt71FHZSrL5S3KbCCaMqSfjeqzVvmJOoBcZ3kzcB15VV+hXhnhy3Ukt+0ifj2ymOH7es1IUVWUjlz6vo8cChJxWFxssLpc3Cab3jj+f7NQgxgdwUMfgUqGQbOz+hxUtvo8W6n991Za0l7JJFRT2Hvb71V9iYc7HHZSyNGjSBmK/IHxUSpjboNbWxW3WTyvLRBwvyay0SrjGljY+W8/eF19irW5a1nSdApZDsBhsVYzq1jFdsD3SKCoP3VsTIxY81HJunAZeDU8fq79bHsR9ioYfxs95O+EcgUZEtr8rIB2Oe4Vm1LYtVjAIMg/Wq//xAAbEQACAgMBAAAAAAAAAAAAAAAAEQECEBIxQf/aAAgBAgEBPwBm0DjN+FRlMWPBlSRCNRoZGZ4I/8QAHREAAgIDAQEBAAAAAAAAAAAAAAECERASMQNBUf/aAAgBAwEBPwBRb4atCTxR5dJu2JE0RaoifSif5hM2Y5uiK2JqmLPn0l0//9k="
                                                            width="40" height="40" alt="Alex Shatov"></div>
                                                    <div class="font-medium text-slate-800 dark:text-slate-100">
                                                        {{ $st->customer->Nama }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-2 whitespace-nowrap">
                                                <div class="text-left">{{ $st->customer->Email }}</div>
                                            </td>
                                            <td class="p-2 whitespace-nowrap">
                                                <div class="text-left font-medium text-green-500">RP {{ $st->TotalHarga }}
                                                </div>
                                            </td>
                                            <td class="p-2 whitespace-nowrap">
                                                <div class="text-lg text-center">{{ $st->Tanggal }}</div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div
                    class="col-span-6 xl:col-span-6 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
                    <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                        <h2 class="font-semibold text-slate-800 dark:text-slate-100">Suplliers</h2>
                    </header>

                    <div class="p-3">
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full">
                                <thead
                                    class="text-xs font-semibold uppercase text-slate-400 dark:text-slate-500 bg-slate-50 dark:bg-slate-700 dark:bg-opacity-50">
                                    <tr>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Name</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Email</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Buys</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-center">Date</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-sm divide-y divide-slate-100 dark:divide-slate-700">
                                    @foreach ($pTransactions as $st)
                                        <tr>
                                            <td class="p-2 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="w-10 h-10 shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
                                                            src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDIBERISGBUYLxoaL2NCOEJjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY//CABEIAEgASAMBIgACEQEDEQH/xAAbAAADAQEBAQEAAAAAAAAAAAAEBQYHAwIAAf/aAAgBAQAAAADXvX0/Es7sE7sGvwtTTG7B28JIvOdJ0nPaY5jNZYg3RJx6U/5D5013Dp4g6oWHlBNoIjgdPRLRWTIXOae/mKSrI4T8yQymrw5j7AimfX//xAAXAQADAQAAAAAAAAAAAAAAAAAAAQID/9oACgICEAMQAAAAYgYmRqiLuG1ARtebzUu0wIaphFk//8QALBAAAgEEAQIGAgICAwAAAAAAAQIDAAQFESEGEgcTIjFBURRhUnEyoRCB0f/aAAgBAQABPwD/AJ6k6rxnT1ru6uFErD0RryzVZ+Kjmby4sUzJ9tLomsZ4s4y6uPKvbSa1H8we8CluorqyFxayrLE67R0OwRVuKTZ9I/kCaEkf8xU+RWKXsGiKyfUUFhYTXMpGkUms1c3GUv5MhdsWnkPpT3CL8CklPmhFJeT4WMbNHpjKZXFvfx2U0V5Dye5decv/ALXQvV9xhrp7K6L/AIzHUkTe6H7FWxDIrIQVI2D91JcJEjxknuY0gQw7HI177q5kgRyASa6ruBMYLZSewku/9CstkxJI8UB49mcfP6rw86bgt8fHfSxhriTnZHtSAqmipFeI+BiFqmbtodTQHUxQf5JXQ18b/pu2LHbRkxGsowEzDu1tPf69zuom3bbI0de1ZCdhO21CgV1pmzJO8FudcdruK6UxQzPUVtbONxBu56vRDiccAtpcyxgaVLYHf+qxf5Ut0lzBaXlqHAby5pGPG9c7NdbyZFoJLYwzPB5bFgj9oavCS6L4S6jbkpIOKy+3u3hXhmVUDf3xUl7PDCD5yHj6rIXtzM0xkkIZt/8AQrM+qQsB6fv7roO+tosvFGFZJ+dt8GrTJxoRHIQQRV1kbG0ILSRwxkEs7cCnymOuQ0vejQkepiOBXhhewvms1BbKWgkmMkbD2C7NdUvJD58sQYuE2Avv7AD/AG1PhrUqoE++329VZmQiG7ZTyWVN/QNXDfls6shOh6OKxUb2OVg7u6ORjxsVhrqO/tu2TQnj4ZaurfKwdxtWhlgb4MXcyV4gZK7ssRBYTTFrq7DEqFCiOKvCa4Fv1T5JJCzW7VnFkWUuhG2OuaSUg1e9O29/cPIs0kYk/wA4wNgmpPDi+JHlSL2k7UMNFatPCe5mlWS8vgg2D6E9QrMdGZCzYXOMlMjJ7dh7XFWt71FHZSrL5S3KbCCaMqSfjeqzVvmJOoBcZ3kzcB15VV+hXhnhy3Ukt+0ifj2ymOH7es1IUVWUjlz6vo8cChJxWFxssLpc3Cab3jj+f7NQgxgdwUMfgUqGQbOz+hxUtvo8W6n991Za0l7JJFRT2Hvb71V9iYc7HHZSyNGjSBmK/IHxUSpjboNbWxW3WTyvLRBwvyay0SrjGljY+W8/eF19irW5a1nSdApZDsBhsVYzq1jFdsD3SKCoP3VsTIxY81HJunAZeDU8fq79bHsR9ioYfxs95O+EcgUZEtr8rIB2Oe4Vm1LYtVjAIMg/Wq//xAAbEQACAgMBAAAAAAAAAAAAAAAAEQECEBIxQf/aAAgBAgEBPwBm0DjN+FRlMWPBlSRCNRoZGZ4I/8QAHREAAgIDAQEBAAAAAAAAAAAAAAECERASMQNBUf/aAAgBAwEBPwBRb4atCTxR5dJu2JE0RaoifSif5hM2Y5uiK2JqmLPn0l0//9k="
                                                            width="40" height="40" alt="Alex Shatov"></div>
                                                    <div class="font-medium text-slate-800 dark:text-slate-100">
                                                        {{ $st->supplier->Nama }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-2 whitespace-nowrap">
                                                <div class="text-left">{{ $st->supplier->Email }}</div>
                                            </td>
                                            <td class="p-2 whitespace-nowrap">
                                                <div class="text-left font-medium text-green-500">RP {{ $st->TotalHarga }}
                                                </div>
                                            </td>
                                            <td class="p-2 whitespace-nowrap">
                                                <div class="text-lg text-center">{{ $st->Tanggal }}</div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- <div
                    class="col-span-full xl:col-span-6 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
                    <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                        <h2 class="font-semibold text-slate-800 dark:text-slate-100">Reason for Refunds</h2>
                    </header>
                    <div class="px-5 py-3">
                        <div class="flex items-start">
                            <div class="text-3xl font-bold text-slate-800 dark:text-slate-100 mr-2">449</div>
                            <div class="text-sm font-semibold text-white px-1.5 bg-yellow-500 rounded-full">-22%</div>
                        </div>
                    </div>
                    <div class="grow">
                        <div class="grow flex flex-col justify-center">
                            <div><canvas width="1715" height="96"
                                    style="display: block; box-sizing: border-box; height: 48px; width: 857px;"></canvas>
                            </div>
                            <div class="px-5 pt-2 pb-2">
                                <ul class="text-sm divide-y divide-slate-100 dark:divide-slate-700">
                                    <li
                                        style="display: flex; justify-content: space-between; align-items: center; padding-top: 0.625rem; padding-bottom: 0.625rem;">
                                        <div style="display: flex; align-items: center;">
                                            <div
                                                style="width: 0.75rem; height: 0.75rem; border-radius: 0.125rem; margin-right: 0.75rem; background-color: rgb(99, 102, 241);">
                                            </div>
                                            <div>Having difficulties using the product</div>
                                        </div>
                                        <div style="font-weight: 500; margin-left: 0.75rem; color: rgb(99, 102, 241);">29%
                                        </div>
                                    </li>
                                    <li
                                        style="display: flex; justify-content: space-between; align-items: center; padding-top: 0.625rem; padding-bottom: 0.625rem;">
                                        <div style="display: flex; align-items: center;">
                                            <div
                                                style="width: 0.75rem; height: 0.75rem; border-radius: 0.125rem; margin-right: 0.75rem; background-color: rgb(55, 48, 163);">
                                            </div>
                                            <div>Missing features I need</div>
                                        </div>
                                        <div style="font-weight: 500; margin-left: 0.75rem; color: rgb(55, 48, 163);">22%
                                        </div>
                                    </li>
                                    <li
                                        style="display: flex; justify-content: space-between; align-items: center; padding-top: 0.625rem; padding-bottom: 0.625rem;">
                                        <div style="display: flex; align-items: center;">
                                            <div
                                                style="width: 0.75rem; height: 0.75rem; border-radius: 0.125rem; margin-right: 0.75rem; background-color: rgb(56, 189, 248);">
                                            </div>
                                            <div>Not satisfied about the quality of the product</div>
                                        </div>
                                        <div style="font-weight: 500; margin-left: 0.75rem; color: rgb(56, 189, 248);">18%
                                        </div>
                                    </li>
                                    <li
                                        style="display: flex; justify-content: space-between; align-items: center; padding-top: 0.625rem; padding-bottom: 0.625rem;">
                                        <div style="display: flex; align-items: center;">
                                            <div
                                                style="width: 0.75rem; height: 0.75rem; border-radius: 0.125rem; margin-right: 0.75rem; background-color: rgb(74, 222, 128);">
                                            </div>
                                            <div>The product doesn’t look as advertised</div>
                                        </div>
                                        <div style="font-weight: 500; margin-left: 0.75rem; color: rgb(74, 222, 128);">14%
                                        </div>
                                    </li>
                                    <li
                                        style="display: flex; justify-content: space-between; align-items: center; padding-top: 0.625rem; padding-bottom: 0.625rem;">
                                        <div style="display: flex; align-items: center;">
                                            <div
                                                style="width: 0.75rem; height: 0.75rem; border-radius: 0.125rem; margin-right: 0.75rem; background-color: rgb(226, 232, 240);">
                                            </div>
                                            <div>Other</div>
                                        </div>
                                        <div style="font-weight: 500; margin-left: 0.75rem; color: rgb(148, 163, 184);">16%
                                        </div>
                                    </li>
                                </ul>
                                <ul class="text-sm divide-y divide-slate-100 dark:divide-slate-700"></ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="col-span-full xl:col-span-6 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
                    <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                        <h2 class="font-semibold text-slate-800 dark:text-slate-100">Recent Activity</h2>
                    </header>
                    <div class="p-3">
                        <div>
                            <header
                                class="text-xs uppercase text-slate-400 dark:text-slate-500 bg-slate-50 dark:bg-slate-700 dark:bg-opacity-50 rounded-sm font-semibold p-2">
                                Today</header>
                            <ul class="my-1">
                                <li class="flex px-2">
                                    <div class="w-9 h-9 rounded-full shrink-0 bg-indigo-500 my-2 mr-3"><svg
                                            class="w-9 h-9 fill-current text-indigo-50" viewBox="0 0 36 36">
                                            <path
                                                d="M18 10c-4.4 0-8 3.1-8 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L18.9 22H18c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z">
                                            </path>
                                        </svg></div>
                                    <div
                                        class="grow flex items-center border-b border-slate-100 dark:border-slate-700 text-sm py-2">
                                        <div class="grow flex justify-between">
                                            <div class="self-center"><a
                                                    class="font-medium text-slate-800 hover:text-slate-900 dark:text-slate-100 dark:hover:text-white"
                                                    href="#0">Nick Mark</a> mentioned <a
                                                    class="font-medium text-slate-800 hover:text-slate-900 dark:text-slate-100 dark:hover:text-white"
                                                    href="#0">Sara Smith</a> in a new post</div>
                                            <div class="shrink-0 self-end ml-2"><a
                                                    class="font-medium text-indigo-500 hover:text-indigo-600 dark:hover:text-indigo-400"
                                                    href="#0">View<span class="hidden sm:inline"> -&gt;</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex px-2">
                                    <div class="w-9 h-9 rounded-full shrink-0 bg-rose-500 my-2 mr-3"><svg
                                            class="w-9 h-9 fill-current text-rose-50" viewBox="0 0 36 36">
                                            <path d="M25 24H11a1 1 0 01-1-1v-5h2v4h12v-4h2v5a1 1 0 01-1 1zM14 13h8v2h-8z">
                                            </path>
                                        </svg></div>
                                    <div
                                        class="grow flex items-center border-b border-slate-100 dark:border-slate-700 text-sm py-2">
                                        <div class="grow flex justify-between">
                                            <div class="self-center">The post <a
                                                    class="font-medium text-slate-800 hover:text-slate-900 dark:text-slate-100 dark:hover:text-white"
                                                    href="#0">Post Name</a> was removed by <a
                                                    class="font-medium text-slate-800 hover:text-slate-900 dark:text-slate-100 dark:hover:text-white"
                                                    href="#0">Nick Mark</a></div>
                                            <div class="shrink-0 self-end ml-2"><a
                                                    class="font-medium text-indigo-500 hover:text-indigo-600 dark:hover:text-indigo-400"
                                                    href="#0">View<span class="hidden sm:inline"> -&gt;</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex px-2">
                                    <div class="w-9 h-9 rounded-full shrink-0 bg-emerald-500 my-2 mr-3"><svg
                                            class="w-9 h-9 fill-current text-emerald-50" viewBox="0 0 36 36">
                                            <path
                                                d="M15 13v-3l-5 4 5 4v-3h8a1 1 0 000-2h-8zM21 21h-8a1 1 0 000 2h8v3l5-4-5-4v3z">
                                            </path>
                                        </svg></div>
                                    <div class="grow flex items-center text-sm py-2">
                                        <div class="grow flex justify-between">
                                            <div class="self-center"><a
                                                    class="font-medium text-slate-800 hover:text-slate-900 dark:text-slate-100 dark:hover:text-white"
                                                    href="#0">Patrick Sullivan</a> published a new <a
                                                    class="font-medium text-slate-800 hover:text-slate-900 dark:text-slate-100 dark:hover:text-white"
                                                    href="#0">post</a></div>
                                            <div class="shrink-0 self-end ml-2"><a
                                                    class="font-medium text-indigo-500 hover:text-indigo-600 dark:hover:text-indigo-400"
                                                    href="#0">View<span class="hidden sm:inline"> -&gt;</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <header
                                class="text-xs uppercase text-slate-400 dark:text-slate-500 bg-slate-50 dark:bg-slate-700 dark:bg-opacity-50 rounded-sm font-semibold p-2">
                                Yesterday</header>
                            <ul class="my-1">
                                <li class="flex px-2">
                                    <div class="w-9 h-9 rounded-full shrink-0 bg-sky-500 my-2 mr-3"><svg
                                            class="w-9 h-9 fill-current text-sky-50" viewBox="0 0 36 36">
                                            <path
                                                d="M23 11v2.085c-2.841.401-4.41 2.462-5.8 4.315-1.449 1.932-2.7 3.6-5.2 3.6h-1v2h1c3.5 0 5.253-2.338 6.8-4.4 1.449-1.932 2.7-3.6 5.2-3.6h3l-4-4zM15.406 16.455c.066-.087.125-.162.194-.254.314-.419.656-.872 1.033-1.33C15.475 13.802 14.038 13 12 13h-1v2h1c1.471 0 2.505.586 3.406 1.455zM24 21c-1.471 0-2.505-.586-3.406-1.455-.066.087-.125.162-.194.254-.316.422-.656.873-1.028 1.328.959.878 2.108 1.573 3.628 1.788V25l4-4h-3z">
                                            </path>
                                        </svg></div>
                                    <div
                                        class="grow flex items-center border-b border-slate-100 dark:border-slate-700 text-sm py-2">
                                        <div class="grow flex justify-between">
                                            <div class="self-center"><a
                                                    class="font-medium text-slate-800 hover:text-slate-900 dark:text-slate-100 dark:hover:text-white"
                                                    href="#0">240+</a> users have subscribed to <a
                                                    class="font-medium text-slate-800 hover:text-slate-900 dark:text-slate-100 dark:hover:text-white"
                                                    href="#0">Newsletter #1</a></div>
                                            <div class="shrink-0 self-end ml-2"><a
                                                    class="font-medium text-indigo-500 hover:text-indigo-600 dark:hover:text-indigo-400"
                                                    href="#0">View<span class="hidden sm:inline"> -&gt;</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex px-2">
                                    <div class="w-9 h-9 rounded-full shrink-0 bg-indigo-500 my-2 mr-3"><svg
                                            class="w-9 h-9 fill-current text-indigo-50" viewBox="0 0 36 36">
                                            <path
                                                d="M18 10c-4.4 0-8 3.1-8 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L18.9 22H18c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z">
                                            </path>
                                        </svg></div>
                                    <div class="grow flex items-center text-sm py-2">
                                        <div class="grow flex justify-between">
                                            <div class="self-center">The post <a
                                                    class="font-medium text-slate-800 hover:text-slate-900 dark:text-slate-100 dark:hover:text-white"
                                                    href="#0">Post Name</a> was suspended by <a
                                                    class="font-medium text-slate-800 hover:text-slate-900 dark:text-slate-100 dark:hover:text-white"
                                                    href="#0">Nick Mark</a></div>
                                            <div class="shrink-0 self-end ml-2"><a
                                                    class="font-medium text-indigo-500 hover:text-indigo-600 dark:hover:text-indigo-400"
                                                    href="#0">View<span class="hidden sm:inline"> -&gt;</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div
                    class="col-span-full xl:col-span-6 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
                    <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                        <h2 class="font-semibold text-slate-800 dark:text-slate-100">Income/Expenses</h2>
                    </header>
                    <div class="p-3">
                        <div>
                            <header
                                class="text-xs uppercase text-slate-400 dark:text-slate-500 bg-slate-50 dark:bg-slate-700 dark:bg-opacity-50 rounded-sm font-semibold p-2">
                                Today</header>
                            <ul class="my-1">
                                <li class="flex px-2">
                                    <div class="w-9 h-9 rounded-full shrink-0 bg-rose-500 my-2 mr-3"><svg
                                            class="w-9 h-9 fill-current text-rose-50" viewBox="0 0 36 36">
                                            <path d="M17.7 24.7l1.4-1.4-4.3-4.3H25v-2H14.8l4.3-4.3-1.4-1.4L11 18z"></path>
                                        </svg></div>
                                    <div
                                        class="grow flex items-center border-b border-slate-100 dark:border-slate-700 text-sm py-2">
                                        <div class="grow flex justify-between">
                                            <div class="self-center"><a
                                                    class="font-medium text-slate-800 hover:text-slate-900 dark:text-slate-100 dark:hover:text-white"
                                                    href="#0">Qonto</a> billing</div>
                                            <div class="shrink-0 self-start ml-2"><span
                                                    class="font-medium text-slate-800 dark:text-slate-100">-RP.
                                                    49.88</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex px-2">
                                    <div class="w-9 h-9 rounded-full shrink-0 bg-emerald-500 my-2 mr-3"><svg
                                            class="w-9 h-9 fill-current text-emerald-50" viewBox="0 0 36 36">
                                            <path d="M18.3 11.3l-1.4 1.4 4.3 4.3H11v2h10.2l-4.3 4.3 1.4 1.4L25 18z"></path>
                                        </svg></div>
                                    <div
                                        class="grow flex items-center border-b border-slate-100 dark:border-slate-700 text-sm py-2">
                                        <div class="grow flex justify-between">
                                            <div class="self-center"><a
                                                    class="font-medium text-slate-800 hover:text-slate-900 dark:text-slate-100 dark:hover:text-white"
                                                    href="#0">Cruip.com</a> Market Ltd 70 Wilson St London</div>
                                            <div class="shrink-0 self-start ml-2"><span
                                                    class="font-medium text-emerald-500">+249.88</span></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex px-2">
                                    <div class="w-9 h-9 rounded-full shrink-0 bg-emerald-500 my-2 mr-3"><svg
                                            class="w-9 h-9 fill-current text-emerald-50" viewBox="0 0 36 36">
                                            <path d="M18.3 11.3l-1.4 1.4 4.3 4.3H11v2h10.2l-4.3 4.3 1.4 1.4L25 18z"></path>
                                        </svg></div>
                                    <div
                                        class="grow flex items-center border-b border-slate-100 dark:border-slate-700 text-sm py-2">
                                        <div class="grow flex justify-between">
                                            <div class="self-center"><a
                                                    class="font-medium text-slate-800 hover:text-slate-900 dark:text-slate-100 dark:hover:text-white"
                                                    href="#0">Notion Labs Inc</a></div>
                                            <div class="shrink-0 self-start ml-2"><span
                                                    class="font-medium text-emerald-500">+99.99</span></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex px-2">
                                    <div class="w-9 h-9 rounded-full shrink-0 bg-emerald-500 my-2 mr-3"><svg
                                            class="w-9 h-9 fill-current text-emerald-50" viewBox="0 0 36 36">
                                            <path d="M18.3 11.3l-1.4 1.4 4.3 4.3H11v2h10.2l-4.3 4.3 1.4 1.4L25 18z"></path>
                                        </svg></div>
                                    <div
                                        class="grow flex items-center border-b border-slate-100 dark:border-slate-700 text-sm py-2">
                                        <div class="grow flex justify-between">
                                            <div class="self-center"><a
                                                    class="font-medium text-slate-800 hover:text-slate-900 dark:text-slate-100 dark:hover:text-white"
                                                    href="#0">Market Cap Ltd</a></div>
                                            <div class="shrink-0 self-start ml-2"><span
                                                    class="font-medium text-emerald-500">+1,200.88</span></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex px-2">
                                    <div class="w-9 h-9 rounded-full shrink-0 bg-slate-200 my-2 mr-3"><svg
                                            class="w-9 h-9 fill-current text-slate-400" viewBox="0 0 36 36">
                                            <path
                                                d="M21.477 22.89l-8.368-8.367a6 6 0 008.367 8.367zm1.414-1.413a6 6 0 00-8.367-8.367l8.367 8.367zM18 26a8 8 0 110-16 8 8 0 010 16z">
                                            </path>
                                        </svg></div>
                                    <div
                                        class="grow flex items-center border-b border-slate-100 dark:border-slate-700 text-sm py-2">
                                        <div class="grow flex justify-between">
                                            <div class="self-center"><a
                                                    class="font-medium text-slate-800 hover:text-slate-900 dark:text-slate-100 dark:hover:text-white"
                                                    href="#0">App.com</a> Market Ltd 70 Wilson St London</div>
                                            <div class="shrink-0 self-start ml-2"><span
                                                    class="font-medium text-slate-800 dark:text-slate-100 line-through">+RP.
                                                    99.99</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex px-2">
                                    <div class="w-9 h-9 rounded-full shrink-0 bg-rose-500 my-2 mr-3"><svg
                                            class="w-9 h-9 fill-current text-rose-50" viewBox="0 0 36 36">
                                            <path d="M17.7 24.7l1.4-1.4-4.3-4.3H25v-2H14.8l4.3-4.3-1.4-1.4L11 18z"></path>
                                        </svg></div>
                                    <div class="grow flex items-center text-sm py-2">
                                        <div class="grow flex justify-between">
                                            <div class="self-center"><a
                                                    class="font-medium text-slate-800 hover:text-slate-900 dark:text-slate-100 dark:hover:text-white"
                                                    href="#0">App.com</a> Market Ltd 70 Wilson St London</div>
                                            <div class="shrink-0 self-start ml-2"><span
                                                    class="font-medium text-slate-800 dark:text-slate-100">-RP.
                                                    49.88</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>   
    <script>
        var ctx = document.getElementById('salesChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: {!! json_encode($labels) !!},
                datasets: [{
                    label: 'Total Sales ',
                    data: {!! json_encode($data) !!},
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        var ctxPurchase = document.getElementById('purchaseChart').getContext('2d');
        var myChart = new Chart(ctxPurchase, {
            type: 'line',
            data: {
                labels: {!! json_encode($labelsPurchase) !!},
                datasets: [{
                    label: 'Total Purchase',
                    data: {!! json_encode($dataPurchase) !!},
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
