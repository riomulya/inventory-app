<!DOCTYPE html>
<html lang="en" class="light">

@extends('layout.head')

<body>
    <div class="navbar bg-base-100">
        <div class="navbar-start">
            <div class="drawer">
                <input id="my-drawer" type="checkbox" class="drawer-toggle" />
                <div class="drawer-content">
                    <label role="button" for="my-drawer" class="btn btn-ghost btn-circle drawer-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h7" />
                        </svg>
                    </label>
                </div>
                <div class="drawer-side">
                    <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay w-auto"></label>
                    <ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content">
                        <!-- Sidebar content here -->
                        <div class="flex justify-between mb-10 pr-3 sm:px-2"><button
                                class="lg:hidden text-indigo-500 hover:text-indigo-400" aria-controls="sidebar"
                                aria-expanded="false"><span class="sr-only">Close sidebar</span><svg
                                    class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z"></path>
                                </svg></button><a aria-current="page" class="block active" href="/"><svg
                                    width="32" height="32" viewBox="0 0 32 32">
                                    <defs>
                                        <linearGradient x1="28.538%" y1="20.229%" x2="100%" y2="108.156%"
                                            id="logo-a">
                                            <stop stop-color="#A5B4FC" stop-opacity="0" offset="0%"></stop>
                                            <stop stop-color="#A5B4FC" offset="100%"></stop>
                                        </linearGradient>
                                        <linearGradient x1="88.638%" y1="29.267%" x2="22.42%" y2="100%"
                                            id="logo-b">
                                            <stop stop-color="#38BDF8" stop-opacity="0" offset="0%"></stop>
                                            <stop stop-color="#38BDF8" offset="100%"></stop>
                                        </linearGradient>
                                    </defs>
                                    <rect fill="#6366F1" width="32" height="32" rx="16"></rect>
                                    <path
                                        d="M18.277.16C26.035 1.267 32 7.938 32 16c0 8.837-7.163 16-16 16a15.937 15.937 0 01-10.426-3.863L18.277.161z"
                                        fill="#4F46E5"></path>
                                    <path
                                        d="M7.404 2.503l18.339 26.19A15.93 15.93 0 0116 32C7.163 32 0 24.837 0 16 0 10.327 2.952 5.344 7.404 2.503z"
                                        fill="url(#logo-a)"></path>
                                    <path
                                        d="M2.223 24.14L29.777 7.86A15.926 15.926 0 0132 16c0 8.837-7.163 16-16 16-5.864 0-10.991-3.154-13.777-7.86z"
                                        fill="url(#logo-b)"></path>
                                </svg></a></div>
                        <li><a href="/dashboard">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center"><svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path class="fill-current text-indigo-500"
                                                d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z">
                                            </path>
                                            <path class="fill-current text-indigo-600"
                                                d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z">
                                            </path>
                                            <path class="fill-current text-indigo-200"
                                                d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z">
                                            </path>
                                        </svg><span
                                            class="text-sm text-gray-50 font-medium ml-3 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Dashboard</span>
                                    </div>
                                </div>
                            </a></li>
                        <li><a href="/product">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center"><svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path class="fill-current text-indigo-400"
                                                d="M13 15l11-7L11.504.136a1 1 0 00-1.019.007L0 7l13 8z"></path>
                                            <path class="fill-current text-indigo-700"
                                                d="M13 15L0 7v9c0 .355.189.685.496.864L13 24v-9z"></path>
                                            <path class="fill-current text-indigo-600"
                                                d="M13 15.047V24l10.573-7.181A.999.999 0 0024 16V8l-11 7.047z"></path>
                                        </svg><span
                                            class="text-sm text-gray-50 font-medium ml-3 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Product</span>
                                    </div>
                                </div>
                            </a></li>
                        <li><a href="/customer">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center"><svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path class="fill-current text-indigo-600"
                                                d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z">
                                            </path>
                                            <path class="fill-current text-indigo-400"
                                                d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z">
                                            </path>
                                        </svg><span
                                            class="text-sm text-gray-50 font-medium ml-3 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Customer</span>
                                    </div>
                                </div>
                            </a></li>
                        <li><a href="">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center"><svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path class="fill-current text-indigo-400"
                                                d="M13 6.068a6.035 6.035 0 0 1 4.932 4.933H24c-.486-5.846-5.154-10.515-11-11v6.067Z">
                                            </path>
                                            <path class="fill-current text-indigo-700"
                                                d="M18.007 13c-.474 2.833-2.919 5-5.864 5a5.888 5.888 0 0 1-3.694-1.304L4 20.731C6.131 22.752 8.992 24 12.143 24c6.232 0 11.35-4.851 11.857-11h-5.993Z">
                                            </path>
                                            <path class="fill-current text-indigo-600"
                                                d="M6.939 15.007A5.861 5.861 0 0 1 6 11.829c0-2.937 2.167-5.376 5-5.85V0C4.85.507 0 5.614 0 11.83c0 2.695.922 5.174 2.456 7.17l4.483-3.993Z">
                                            </path>
                                        </svg><span
                                            class="text-sm text-gray-50 font-medium ml-3 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Finance</span>
                                    </div>

                                </div>
                            </a></li>
                        <li><a href="">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center"><svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path class="fill-current text-indigo-600"
                                                d="M8 1v2H3v19h18V3h-5V1h7v23H1V1z"></path>
                                            <path class="fill-current text-indigo-600" d="M1 1h22v23H1z"></path>
                                            <path class="fill-current text-indigo-400"
                                                d="M15 10.586L16.414 12 11 17.414 7.586 14 9 12.586l2 2zM5 0h14v4H5z">
                                            </path>
                                        </svg><span
                                            class="text-sm text-gray-50 font-medium ml-3 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Transaction</span>
                                    </div>
                                </div>
                            </a></li>
                        <li><a href="#0">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center"><svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path class="fill-current text-indigo-600"
                                                d="M19.714 14.7l-7.007 7.007-1.414-1.414 7.007-7.007c-.195-.4-.298-.84-.3-1.286a3 3 0 113 3 2.969 2.969 0 01-1.286-.3z">
                                            </path>
                                            <path class="fill-current text-indigo-400"
                                                d="M10.714 18.3c.4-.195.84-.298 1.286-.3a3 3 0 11-3 3c.002-.446.105-.885.3-1.286l-6.007-6.007 1.414-1.414 6.007 6.007z">
                                            </path>
                                            <path class="fill-current text-indigo-600"
                                                d="M5.7 10.714c.195.4.298.84.3 1.286a3 3 0 11-3-3c.446.002.885.105 1.286.3l7.007-7.007 1.414 1.414L5.7 10.714z">
                                            </path>
                                            <path class="fill-current text-indigo-400"
                                                d="M19.707 9.292a3.012 3.012 0 00-1.415 1.415L13.286 5.7c-.4.195-.84.298-1.286.3a3 3 0 113-3 2.969 2.969 0 01-.3 1.286l5.007 5.006z">
                                            </path>
                                        </svg><span
                                            class="text-sm text-gray-50 font-medium ml-3 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Settings</span>
                                    </div>
                                </div>
                            </a></li>

                        <li><a href="">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center"><svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <circle class="fill-current text-indigo-400" cx="18.5"
                                                cy="5.5" r="4.5"></circle>
                                            <circle class="fill-current text-indigo-600" cx="5.5"
                                                cy="5.5" r="4.5"></circle>
                                            <circle class="fill-current text-indigo-600" cx="18.5"
                                                cy="18.5" r="4.5"></circle>
                                            <circle class="fill-current text-indigo-400" cx="5.5"
                                                cy="18.5" r="4.5"></circle>
                                        </svg><span
                                            class="text-sm text-gray-50 font-medium ml-3 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Supplier</span>
                                    </div>

                                </div>
                            </a></li>
                        <li><a href="">
                                <div class="flex items-center"><svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path class="fill-current text-indigo-600"
                                            d="M20 7a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 0120 7zM4 23a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 014 23z">
                                        </path>
                                        <path class="fill-current text-indigo-400"
                                            d="M17 23a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 010-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1zM7 13a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 112 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z">
                                        </path>
                                    </svg><span
                                        class="text-sm text-gray-50 font-medium ml-3 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Campaigns</span>
                                </div>
                            </a></li>
                        <li><a href="">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center"><svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path class="fill-current text-indigo-600"
                                                d="M8.07 16H10V8H8.07a8 8 0 110 8z"></path>
                                            <path class="fill-current text-indigo-400" d="M15 12L8 6v5H0v2h8v5z">
                                            </path>
                                        </svg><span
                                            class="text-sm text-gray-50 font-medium ml-3 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Logout</span>
                                    </div>
                                </div>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="navbar-center">
            <a class="btn btn-ghost text-xl">Inventory Apps</a>
        </div>
        <div class="navbar-end">
            <button class="btn btn-ghost btn-circle">
                <div class="indicator">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    <span class="badge badge-xs badge-primary indicator-item"></span>
                </div>
            </button>
        </div>
    </div>
    @yield('content')
    <footer class="footer footer-center p-4 bg-base-300 text-base-content">
        <aside>
            <p>Copyright © 2024 - All right reserved by Rio Mulya Syawal</p>
        </aside>
    </footer>
</body>

</html>
