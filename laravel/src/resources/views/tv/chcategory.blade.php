@extends('layout.appv1')
    @section('content')
    <div class="max-w-[720px] mx-auto">
        <div class="flex flex-col items-center justify-center px-3 py-8 mx-auto lg:py-0 mt-1">
            <div class="relative overflow-x-auto  sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No.
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Category
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Descriotion
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                        @foreach ($chcategory as $category)
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $i++ }}
                                </th>
                                <td class="px-6 py-4">
                                {{$category->category}}
                                </td>
                                <td class="px-6 py-4">
                                {{$category->desc}}
                                </td>
                                <td class="px-6 py-4">
                                Edit
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection
