<?php

include_once 'Views/Layouts/plantilla_general.php';

?>

<div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
    <?php
echo "aqui una vez validado ver esta vista";

echo "<br>";
print($datoUser['nombre']);
echo " ";
print($datoUser['edad']);
echo " ";
print($datoUser['status']);
echo " ";
print($datoUser['rol']);
?>
</div>
