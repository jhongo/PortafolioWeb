<?php include('header.php') ?>
<?php include('connection.php') ?>

<?php

$objConnection = new connection;
$sql = "SELECT * FROM project";
$result = $objConnection->executeSentences($sql);





?>




    

<div class="w-full h-screen bg-white p-2 grid grid-cols-4 gap-4"> 

<?php foreach ($result as $project) {?>
<div class=" h-96 flex justify-center">
  
  <div class="h-96 rounded-lg shadow-lg bg-[#ced4da] p-1.5">
    <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
      <img class="rounded-t-lg" src="images/<?php echo($project['project_image']) ?> " alt=""/>
    </a>
    <div class=" h-auto p-6">
      <h5 class="text-gray-900 text-xl font-medium mb-2"> <?php echo($project['project_name'])?> </h5>
      <p class="text-gray-700  text-sm mb-4">
      <?php echo($project['project_description']) ?>

    </p>
    </div>
  </div>
  
</div>

<?php }?>

</div>

<?php include('footer.php') ?>