<?php include('header.php') ?>

<div class=" w-full p-12 ">

    <div class="grid grid-cols-2 ">

        <div class="w-2/3  ">
            <form action="" method="post" class="bg-gray-200 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <label class="block text-gray-800 text-sm font-bold mb-2 text-3xl" for="username">
                    Data of project
                </label>
                <div class="mb-4">
                    <label class="block text-gray-500 text-sm font-bold mb-2" for="username">
                        Name project
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Name project">
                </div>
                
                <label class="block text-gray-500 text-sm font-bold mb-2" for="username">
                    Name project
                </label>
                <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div>

                <div class="flex items-center justify-between mt-2 ">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        Save project
                    </button>
                </div>
            </form>
        </div>


        <div class="relative overflow-x-auto bg-gray-300 shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-00 dark:text-gray-100">
                <thead class="text-xs text-gray-300 uppercase bg-gray-50 dark:bg-gray-300 dark:text-gray-700">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Image
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-500 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                           1
                        </th>
                        <td class="px-6 py-4">
                            TodoList
                        </td>
                        <td class="px-6 py-4">
                            todolist.png
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-blue-600 dark:text-green-600 hover:underline">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</div>


<?php include('footer.php') ?>