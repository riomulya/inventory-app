@if (session('success'))
    <x-alert type="success" :message="session('success')" />
@endif

@if (session('error'))
    <x-alert type="error" :message="session('error')" />
@endif


@extends('layout.main')

@section('content')
    <div class="overflow-x-auto m-20">
        <div class="stats shadow mx-auto w-full px-10 mb-10 bg-secondary ">
            <div class="stat">
                <div class="stat-figure text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        class="inline-block w-8 h-8 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="stat-title ">Products</div>
                <div class="stat-value ">21 K</div>
                <div class="stat-desc ">Jan 1st - Feb 1st</div>
            </div>

            <div class="stat">
                <div class="stat-figure text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        class="inline-block w-8 h-8 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4">
                        </path>
                    </svg>
                </div>
                <div class="stat-title ">New Users</div>
                <div class="stat-value ">4,200</div>
                <div class="stat-desc ">↗︎ 400 (22%)</div>
            </div>

            <div class="stat">
                <div class="stat-figure text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        class="inline-block w-8 h-8 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                    </svg>
                </div>
                <div class="stat-title ">New Registers</div>
                <div class="stat-value ">1,200</div>
                <div class="stat-desc ">↘︎ 90 (14%)</div>
            </div>

        </div>
        <label class="input input-bordered flex items-center gap-2 mb-5">
            <input type="text" class="grow" placeholder="Search" />
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                <path fill-rule="evenodd"
                    d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                    clip-rule="evenodd" />
            </svg>
        </label>
        <button class="btn btn-outline mb-5 w-full" onclick="insertModal.showModal()">Tambah Data</button>
        <table class="table table-zebra">
            <!-- head -->
            <thead>
                <tr>
                    <th>Suplier ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Email</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suppliers as $s)
                    <tr>
                        <th>{{ $s->SupplierID }}</th>
                        <th>{{ $s->Nama }}</th>
                        <td>{{ $s->Alamat }}</td>
                        <td>{{ $s->NomorTelepon }}</td>
                        <td>{{ $s->Email }}</td>
                        <td class="text-center">
                            <!-- Edit Button -->
                            <button class="btn btn-outline btn-primary cursor-pointer"
                                onclick="editModal{{ $s->SupplierID }}.showModal()">Edit</button>
                            <!-- Edit Modal -->
                            <dialog id="editModal{{ $s->SupplierID }}" class="modal">
                                <div class="modal-box">
                                    <form method="dialog" class="modal-backdrop">
                                        <button
                                            class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2 text-white">✕</button>
                                    </form>
                                    <form method="POST" action="{{ route('suppliers.update', $s->SupplierID) }}">
                                        @csrf
                                        @method('PUT')
                                        <h3 class="font-bold text-lg">Update Data</h3>
                                        <div class="mx-auto">
                                            <input type="text" name="Nama" placeholder="Nama"
                                                class="input my-2 input-bordered w-full" value="{{ $s->Nama }}"
                                                required />
                                            <input type="text" name="Alamat" placeholder="Alamat"
                                                class="input my-2 input-bordered w-full" value="{{ $s->Alamat }}"
                                                required />
                                            <input type="text" name="NomorTelepon" placeholder="Nomor Telepon"
                                                class="input my-2 input-bordered w-full" value="{{ $s->NomorTelepon }}"
                                                required minlength="12" maxlength="15" />
                                            <input type="email" name="Email" placeholder="Email"
                                                class="input my-2 input-bordered w-full" value="{{ $s->Email }}"
                                                required />
                                        </div>
                                        <button class="btn btn-secondary block my-2" type="submit">Submit</button>
                                    </form>
                                </div>
                            </dialog>
                            <button class="btn btn-outline btn-error cursor-pointer"
                                onclick="{{ 'deleteModal' . $s->SupplierID }}.showModal()">Delete</button>
                            <dialog id="{{ 'deleteModal' . $s->SupplierID }}" class="modal ">
                                <div class="modal-box">
                                    <form method="dialog">
                                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                    </form>
                                    <h3 class="font-bold text-lg">Apakah Yakin Anda Ingin Menghapus {{ $s->Nama }}?
                                    </h3>
                                    <p class="py-4">Press ESC key or click outside to close</p>
                                    <form action="{{ route('suppliers.destroy', $s->SupplierID) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-error" type="submit">Confirm</button>
                                    </form>
                                </div>
                                <form method="dialog" class="modal-backdrop">
                                    <button>close</button>
                                </form>
                            </dialog>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <dialog id="insertModal" class="modal">
            <div class="modal-box">
                <form method="dialog">
                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                </form>
                <h3 class="font-bold text-lg">Insert Data</h3>
                <form method="POST" action="{{ route('suppliers.store') }}" class="my-2">
                    @csrf
                    <div class="mx-auto">
                        <input type="text" name="Nama" placeholder="Nama" class="input my-2 input-bordered w-full"
                            required />
                        <input type="text" name="Alamat" placeholder="Alamat"
                            class="input my-2 input-bordered w-full" required />
                        <input type="text" name="NomorTelepon" placeholder="Nomor Telepon"
                            class="input my-2 input-bordered w-full" required minlength="12" maxlength="15" />
                        <input type="email" name="Email" placeholder="Email"
                            class="input my-2 input-bordered w-full" required />
                    </div>
                    <button class="btn btn-secondary block my-2" type="submit">Submit</button>
                </form>
            </div>
            <form method="dialog" class="modal-backdrop">
                <button>close</button>
            </form>
        </dialog>

    </div>
@endsection
