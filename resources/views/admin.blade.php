<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</head>

<body>
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <a href="https://flowbite.com" class="flex ms-2 md:me-24">
                        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
                        <span
                            class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Unibooks</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ms-3">
                        <div>
                            <button type="button"
                                class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                    alt="user photo">
                            </button>
                        </div>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 dark:text-white" role="none">
                                    Admin
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                    unibooks@admin.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
        type="button"
        class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>
    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
            <a href="https://google.com/" class="flex items-center ps-2.5 mb-5">
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Unibooks</span>
            </a>
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="/"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Home</span>
                    </a>
                </li>
                <li>
                    <a href="/admin"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-gray bg-gray-50 hover:bg-gray-200 dark:hover:bg-gray-200 group">
                        <svg class="w-[24px] h-[24px] text-gray-800 dark:text-gray" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd"
                                d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Admin</span>
                    </a>
                </li>
                <li>
                    <a href="/pengadaan"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M5 19V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v13H7a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h12M9 3v14m7 0v4" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Pengadaan</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <div class="mt-12 p-4 sm:ml-64">
        <div class="flex justify-end">
            <div class="mt-0">
                <button id="openModalBtn" type="button"
                    class="ml-6 mt-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Tambah Buku
                </button>
            </div>
        </div>
        <div class="p-4 mt-3 rounded-lg dark:border-gray-700">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-gray-50 bg-gray-50 dark:bg-gray-700">Judul</th>
                            <th scope="col" class="px-6 py-3 text-gray-50 bg-gray-50 dark:bg-gray-700">ID Buku</th>
                            <th scope="col" class="px-6 py-3 text-gray-50 bg-gray-50 dark:bg-gray-700">Penulis</th>
                            <th scope="col" class="px-6 py-3 text-gray-50 bg-gray-50 dark:bg-gray-700">Penerbit
                            </th>
                            <th scope="col" class="px-6 py-3 text-gray-50 bg-gray-50 dark:bg-gray-700">Tahun Terbit
                            </th>
                            <th scope="col" class="px-6 py-3 text-gray-50 bg-gray-50 dark:bg-gray-700">Genre</th>
                            <th scope="col" class="px-6 py-3 text-gray-50 bg-gray-50 dark:bg-gray-700">Deskripsi
                            </th>
                            <th scope="col" class="px-6 py-3 text-gray-50 bg-gray-50 dark:bg-gray-700">Stok</th>
                            <th scope="col" class="px-6 py-3 text-gray-50 bg-gray-50 dark:bg-gray-700">ISBN</th>
                            <th scope="col" class="px-6 py-3 text-gray-50 bg-gray-50 dark:bg-gray-700">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="booksTableBody">
                        @forelse ($books as $item)
                            <tr class="border-b border-gray-200 dark:border-gray-700">

                                {{-- <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:bg-gray-200">{{ $item->judul }}</th> --}}
                                <td
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:bg-gray-200">
                                    {{ $item->judul }}</td>
                                <td
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:bg-gray-200">
                                    {{ $item->id_buku }}</td>
                                <td
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:bg-gray-200">
                                    {{ $item->penulis }}</td>
                                <td
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:bg-gray-200">
                                    {{ $item->publisher->nama_penerbit }}</td>
                                <td
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:bg-gray-200">
                                    {{ $item->tahun_terbit }}</td>
                                <td
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:bg-gray-200">
                                    {{ $item->genre }}</td>
                                <td
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:bg-gray-200">
                                    {{ $item->deskripsi }}</td>
                                <td
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:bg-gray-200">
                                    {{ $item->stok }}</td>
                                <td
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:bg-gray-200">
                                    {{ $item->isbn }}</td>
                                <td
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:bg-gray-200">

                                    <div id="modalEdit"
                                        class="fixed inset-0 flex items-center justify-center bg-gray-600 bg-opacity-50 z-50 hidden">
                                        <div class="relative p-5 border w-full max-w-lg shadow-lg rounded-md bg-white">
                                            <div class="mt-3 text-center">
                                                <h3 class="text-lg leading-6 font-medium text-gray-900">Edit Buku</h3>
                                                <div class="mt-4">
                                                    <form method="POST"
                                                        action="{{ route('books.update', $item->id_buku) }}"
                                                        id="editBookForm" class="grid grid-cols-1 gap-6 ">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="flex items-center">
                                                            <label for="judul"
                                                                class="w-1/4 text-gray-700 text-sm font-bold">Judul:</label>
                                                            <input type="text" id="judul" name="judul"
                                                                class="shadow appearance-none border rounded w-3/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                                required>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <label for="penulis"
                                                                class="w-1/4 text-gray-700 text-sm font-bold">Penulis:</label>
                                                            <input type="text" id="penulis" name="penulis"
                                                                class="shadow appearance-none border rounded w-3/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                                required>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <label for="penerbit"
                                                                class="w-1/4 text-gray-700 text-sm font-bold">Penerbit:</label>
                                                            <select id="penerbit" name="nama_penerbit"
                                                                class="shadow appearance-none border rounded w-3/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                                required>
                                                                <option value="">Select Penerbit</option>
                                                                @foreach ($publisher as $items)
                                                                    <option value="{{ $items->nama_penerbit }}">
                                                                        {{ $items->nama_penerbit }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <label for="tahun_terbit"
                                                                class="w-1/4 text-gray-700 text-sm font-bold">Tahun
                                                                Terbit:</label>
                                                            <input type="number" id="tahun_terbit"
                                                                name="tahun_terbit"
                                                                class="shadow appearance-none border rounded w-3/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                                required>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <label for="genre"
                                                                class="w-1/4 text-gray-700 text-sm font-bold">Genre:</label>
                                                            <input type="text" id="genre" name="genre"
                                                                class="shadow appearance-none border rounded w-3/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                                required>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <label for="deskripsi"
                                                                class="w-1/4 text-gray-700 text-sm font-bold">Deskripsi:</label>
                                                            <textarea id="deskripsi" name="deskripsi"
                                                                class="shadow appearance-none border rounded w-3/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                                required></textarea>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <label for="stok"
                                                                class="w-1/4 text-gray-700 text-sm font-bold">Stok:</label>
                                                            <input type="number" id="stok" name="stok"
                                                                class="shadow appearance-none border rounded w-3/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                                required>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <label for="isbn"
                                                                class="w-1/4 text-gray-700 text-sm font-bold">ISBN:</label>
                                                            <input type="text" id="isbn" name="isbn"
                                                                class="shadow appearance-none border rounded w-3/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                                required>
                                                        </div>
                                                        <div class="flex justify-between items-center mt-4">
                                                            <div class=" flex items-center justify-between ">
                                                                <button type="submit"
                                                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Simpan</button>
                                                            </div>
                                                            <button type="button" id="closeModalEditBtn"
                                                                    class="text-gray-500 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-md text-sm font-medium py-2 px-4">Batal</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button id="openModalEditBtn" class="text-blue-600 hover:text-blue-800"
                                        onclick="editBook(this)">
                                        <svg class="w-6 h-6 text-blue-600 hover:text-blue-800" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                        </svg>
                                    </button>

                                    <div id="modal"
                                        class="fixed inset-0 flex items-center justify-center bg-gray-600 bg-opacity-50 z-50 hidden">
                                        <div class="relative p-5 border w-full max-w-lg shadow-lg rounded-md bg-white">
                                            <div class="mt-3 text-center">
                                                <h3 class="text-lg leading-6 font-medium text-gray-900">Tambah
                                                    Buku</h3>
                                                <div class="mt-4">
                                                    <form method="POST" action="{{ route('store_books') }}"
                                                        id="addBookForm" class="grid grid-cols-1 gap-6">
                                                        @csrf
                                                        <div class="flex items-center">
                                                            <label for="judul"
                                                                class="w-1/4 text-gray-700 text-sm font-bold">Judul:</label>
                                                            <input type="text" id="judul" name="judul"
                                                                class="shadow appearance-none border rounded w-3/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                                required>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <label for="penulis"
                                                                class="w-1/4 text-gray-700 text-sm font-bold">Penulis:</label>
                                                            <input type="text" id="penulis" name="penulis"
                                                                class="shadow appearance-none border rounded w-3/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                                required>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <label for="penerbit"
                                                                class="w-1/4 text-gray-700 text-sm font-bold">Penerbit:</label>
                                                            <select id="penerbit" name="nama_penerbit"
                                                                class="shadow appearance-none border rounded w-3/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                                required>
                                                                <option value="">Select Penerbit</option>
                                                                @foreach ($publisher as $items)
                                                                    <option value="{{ $items->nama_penerbit }}">
                                                                        {{ $items->nama_penerbit }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <label for="tahun_terbit"
                                                                class="w-1/4 text-gray-700 text-sm font-bold">Tahun
                                                                Terbit:</label>
                                                            <input type="number" id="tahun_terbit"
                                                                name="tahun_terbit"
                                                                class="shadow appearance-none border rounded w-3/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                                required>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <label for="genre"
                                                                class="w-1/4 text-gray-700 text-sm font-bold">Genre:</label>
                                                            <input type="text" id="genre" name="genre"
                                                                class="shadow appearance-none border rounded w-3/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                                required>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <label for="deskripsi"
                                                                class="w-1/4 text-gray-700 text-sm font-bold">Deskripsi:</label>
                                                            <textarea id="deskripsi" name="deskripsi"
                                                                class="shadow appearance-none border rounded w-3/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                                required></textarea>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <label for="stok"
                                                                class="w-1/4 text-gray-700 text-sm font-bold">Stok:</label>
                                                            <input type="number" id="stok" name="stok"
                                                                class="shadow appearance-none border rounded w-3/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                                required>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <label for="isbn"
                                                                class="w-1/4 text-gray-700 text-sm font-bold">ISBN:</label>
                                                            <input type="text" id="isbn" name="isbn"
                                                                class="shadow appearance-none border rounded w-3/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                                required>
                                                        </div>
                                                        <div class="flex justify-between items-center mt-4">
                                                            <div class=" flex items-center justify-between ">
                                                                <button type="submit"
                                                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Simpan</button>
                                                            </div>
                                                            <button type="button" id="closeModalBtn"
                                                                    class="text-gray-500 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-md text-sm font-medium py-2 px-4">Batal</button>
                                                        </div>
                                                        
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <button data-modal-target="popup-modal-{{ $item->id_buku }}"
                                        data-modal-toggle="popup-modal-{{ $item->id_buku }}"
                                        class="text-red-600 hover:text-red-800">
                                        <svg class="w-6 h-6 text-red-600 hover:text-red-800" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                        </svg>
                                    </button>
                                    <div id="popup-modal-{{ $item->id_buku }}" tabindex="-1"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative p-4 w-full max-w-md max-h-full">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button
                                                    type="button"data-modal-hide="popup-modal-{{ $item->id_buku }}"
                                                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="popup-modal">
                                                    <svg class="w-3 h-3" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="p-4 md:p-5 text-center">
                                                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 20 20">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                    </svg>
                                                    <h3
                                                        class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                        Apakah Anda yakin ingin menghapus buku ini?</h3>
                                                    <form action="{{ route('buku.destroy', $item->id_buku) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                            Ya
                                                        </button>
                                                        <button data-modal-hide="popup-modal-{{ $item->id_buku }}"
                                                            type="button"
                                                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                                            Tidak
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8"
                                    class="px-6 py-4 text-center text-sm font-medium text-gray-500 dark:text-gray-300">
                                    No books found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center m-2 ">
                {{ $books->links() }}
            </div>
        </div>
        @if (session('success'))
            <div
                class="bg-green-100 border font-semibold border-green-400 text-green-700 px-4 py-3 rounded relative text-center">
                {{ session('success') }}
            </div>
        @endif
        <footer class="bg-white rounded-lg m-2 light:bg-gray-800" style="bottom:0 ; width:fit-content">
            <div class="w-full max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
                <span class="text-sm font-bold text-gray-900 sm:text-center dark:text-gray-900">© 2024 <a
                        href="https://google.com/" class="hover:underline">Unibooks™</a>. All Rights Reserved.
                </span>
            </div>
        </footer>
    </div>
    <script src="{{ asset('js/modal.js') }}"></script>
</body>

</html>
