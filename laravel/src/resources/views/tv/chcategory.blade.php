@extends('layout.appv1')
    @section('addscript')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    @endsection
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
                                    <?php $url = route('chcategory')."/".$category->id; ?>
                                    <div class="w-full flex justify-between items-center mb-3 mt-1 pl-3">
                                        <button onclick="openModal('{{$url}}')" class="font-medium text-blue-600 hover:underline">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                            <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                                            <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                                            </svg>
                                        </button>
                                        <a href="#" class="font-medium text-blue-600 hover:underline">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                            <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <h2 class="text-xl font-bold mb-4">Channel Category</h2>
            <label class="flex justify-start mb-2">Category:</label>
            <input id="category" type="text" class="w-full p-2 border rounded mb-4" placeholder="Channel category">
                
            <label class="flex justify-start mb-2">Description:</label>
            <input id="desc" type="text" class="w-full p-2 border rounded mb-4" placeholder="Description">
                
            <div class="flex justify-end space-x-2">
                <button class="px-4 py-2 bg-gray-300 rounded" onclick="closeModal()">Cancel</button>
                <button class="px-4 py-2 bg-blue-500 text-white rounded" id="save">Save</button>
            </div>
        </div>
    </div>
    <script>
        function openModal(url) {
            document.getElementById('modal').classList.remove('hidden');
            let category = document.getElementById('category');
            let desc = document.getElementById('desc');
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    category.value = data.category;
                    desc.value = data.desc;
                })
                .catch(error => {
                    console.log('Terjadi kesalahan: ' + error);
                });
            document.getElementById('save').addEventListener("click", async function(event) {
                event.preventDefault();
                const category = await document.getElementById('category');
                const desc = await document.getElementById('desc');
                const data = {
                    "category": await category.value,
                    "desc": await desc.value
                };
                try {
                    // const response = await fetch(url, {
                    //     method: "PATCH",
                    //     headers: {
                    //         "Content-Type": "multipart/form-data"
                    //     },
                    //     body: data
                    // });

                    // const result = await response.json();
                    // console.log("Data berhasil diperbarui: " + JSON.stringify(result, null, 2));
                    await axios
                            .post(url,data,{headers:{'Content-Type':'multipart/form-data'}})
                            .then((response) =>{ console.log(response.data); document.getElementById('modal').classList.add('hidden'); location.reload();})
                } catch (error) {
                    console.log("Terjadi kesalahan: " + error+"\n"+data);
                }
                });
        }
        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }

        
    </script>
    @endsection
