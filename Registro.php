<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["user"];
    $password = $_POST["password"];
    $edad = $_POST["edad"];

   
    if (empty($user) || empty($password) || empty($edad)) {
        echo "Todos los campos deben ser llenados";
        exit();
    }

  
    if (!is_numeric($edad) || $edad < 18) {
        echo "El usuario debe ser mayor de edad (18 años o más)";
        exit();
    }

   
    if ($user == "luis" && $password == "mendoza") {
        echo "El registro fue exitoso";
    } else {
        echo " El Usuario o la contraseña fueron incorrectos";
    }
    
    
}
?>