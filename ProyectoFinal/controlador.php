<?php 
$conn = new mysqli('localhost', 'id20691347_jvj', '3_Qc-h(d.(15Kqps', 'id20691347_jvj');
if (isset($_POST['registro'])) {
    if (!empty(trim($_POST['password_usu'])) && !empty(trim($_POST['usuario_usu']))) {
        $password_usu = $_POST['password_usu'];
        $usuario_usu = $_POST['usuario_usu'];

        $enc_password_usu = password_hash($password_usu, PASSWORD_DEFAULT);
        $conn->query("INSERT INTO usuarios(usuario_usu, password_usu) VALUES('$usuario_usu','$enc_password_usu')");

        if ($conn->affected_rows != 1) {
            $registro_error = "Se produjo un error";
        } else {
            $registro_success = "Su información fue registrada correctamente";
        }
    } else {
        $registro_error = "Se requiere llenar los campos";
    }
}

?>