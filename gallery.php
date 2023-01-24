<?php include('header.php') ?>
<?php include('connection.php')?>


<?php


$objconnection = new connection;
$sqlSelect = "SELECT * FROM `project`";
$res = $objconnection->executeSentences($sqlSelect);
//  foreach ($res as $pro) {
//     print_r($pro['project_name']);
// }

 if ($_POST) {

     $txtNameProject= $_POST['nameProject'];
     $txtImageProject='auth-google.jpg';
     $txtDescriptionProject= $_POST['descriptionProject'];
     
         //* Instancia de clase connection
  
        //? QUERY INSERT DATA IN DB
     $sqlInsert = "INSERT INTO project(project_name, project_image, project_description) VALUES('$txtNameProject',' $txtImageProject','$txtDescriptionProject') ";
     $objconnection->execSentences($sqlInsert);


}





?>



<div class=" w-full p-8 ">

    <div class="grid grid-cols-2 ">

        <div class="w-2/3  ">
            <form action="gallery.php" method="post" enctype="multipart/form-data" class="bg-gray-200 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <label class="block text-gray-800 text-sm font-bold mb-2 text-3xl" for="username">
                    Data of project
                </label>
                <div class="mb-4">
                    <label class="block text-gray-500 text-sm font-bold mb-2" for="username">
                        Name project
                    </label>
                    <input name="nameProject" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name-project" type="text" placeholder="Name project">
                </div>


                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-500">Description Project</label>
                <textarea id="message" name="descriptionProject" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your description here..."></textarea>

                
                <label class="block text-gray-500 text-sm font-bold mb-2" for="username">
                    Image project
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
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
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

                <?php foreach ($res as $project) {?>
                <tr class="bg-white border-b dark:bg-gray-500 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?php echo($project['id']) ?>
                    </th>
                    <td class="px-6 py-4">
                        <?php echo($project['project_name']) ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo($project['project_image']) ?>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-green-600 hover:underline">Edit</a>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>

    </div>

</div>


<?php include('footer.php') ?>