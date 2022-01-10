@extends('layouts.app')

@section('title', 'Clubs')


@section('content')

<!-- breadcumb -->
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">
            Clubs
        </h1>
    </div>
</header>

<!-- table -->
<div class="pb-16 pt-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8  lg:flex-row flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stadium</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Thropy</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Next Match</th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Detail</span>
                            </th>
                        </tr>
                    </thead>

                    <tbody class="bg-white divide-y divide-gray-200">

                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://resources.premierleague.com/premierleague/badges/t8.svg" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            Chelsea FC
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            chelseafc.com
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                Stamford Bridge
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                10
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://resources.premierleague.com/premierleague/badges/t1.svg" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            Manchester United
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            www.manutd.com
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Detail</a>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://resources.premierleague.com/premierleague/badges/t14.svg" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            Liverpool
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            liverpool.com
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                Anfield
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                10
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://resources.premierleague.com/premierleague/badges/t43.svg" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            Manchester City
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            www.mancity.com
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Detail</a>
                            </td>
                        </tr>

                        <!-- More items... -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- footer
        <section class="h-full pt-20 pb-12 lg:px-24 md:px-16 sm:px-8 px-4" style="background-color: #141432">
            <style>
                @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
                
                .list-footer-2-3 li a {
                    color: #707092;
                }
                
                .list-footer-2-3 li a:hover {
                    color: #ffffff;
                    cursor: pointer;
                }

                .border-color-footer-2-3 {
                    color: #707092;
                }

                .footer-link-footer-2-3:hover {
                    color: #ffffff;
                    cursor: pointer;
                }

                .social-media-c-footer-2-3:hover circle,
                
                .social-media-p-footer-2-3:hover path {
                    fill: #ffffff;
                    cursor: pointer;
                }
            </style>

            <footer class="h-full" style="font-family: 'Poppins', sans-serif">
                <div class="pb-24 mx-auto">
                    <div class="grid lg:grid-cols-4 md:grid-cols-2">
                        <div class="">
                            <div class="mb-5">
                                <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/img/Header/Header2/Header-2-3.png" alt=""/>
                            </div> -->

@endsection