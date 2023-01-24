<?php

use function PHPSTORM_META\map;

 include('header.php') ?>
<?php include('connection.php')?>


<?php

    //Delete data 

if ($_GET) {
    $objconnection = new connection;
    $id = $_GET['delete'];

    $image = $objconnection->executeSentences("SELECT project_image FROM project WHERE id=$id" );

    unlink("images/".$image[0]['imagen']);

    $sqlDelete = "DELETE FROM project WHERE id=$id";
    $objconnection->execSentences($sqlDelete);
    
}

    //Create new project
if ($_POST) {

    $fecha = new DateTime();
    
    $txtNameProject= $_POST['nameProject'];
    $fileImageProject=$fecha->getTimestamp()."_".$_FILES['fileImage']['name'];
    $txtDescriptionProject= $_POST['descriptionProject'];

    //Recibimos la imagen de forma provicional
    $imageTemporal = $_FILES['fileImage']['tmp_name'];

    move_uploaded_file($imageTemporal,"images/".$fileImageProject);
    
    //* Instancia de clase connection
    
    //? QUERY INSERT DATA IN DB
    $objconnection = new connection;
     $sqlInsert = "INSERT INTO project(project_name, project_image, project_description) VALUES('$txtNameProject',' $fileImageProject','$txtDescriptionProject') ";
     $objconnection->execSentences($sqlInsert);


}


    //GET ALL DATA OF THE DATABASE
$objconnection = new connection;
$sqlSelect = "SELECT * FROM `project`";
$res = $objconnection->executeSentences($sqlSelect);





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

                

                    <label class="block mb-2 text-sm font-medium mt-2 text-gray-900 dark:text-GRAY-800" for="file_input">Cargar imagen</label>
                    <input name="fileImage" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">


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
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Image
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
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
                        <?php echo($project['project_description']) ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo($project['project_image']) ?>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="?delete=<?php echo( $project['id']); ?>" class="font-medium text-blue-600 dark:text-green-600 hover:underline">Delete</a>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>

    </div>

</div>


<?php include('footer.php') ?>