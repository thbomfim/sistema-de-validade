<?php 
include("conexao.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Sistema de validades</title>
</head>

<body>
    <div class="container">
        <h1 style="text-align:center;">Sistema de validades</h1></br>
        <?php 
            $pg = $_GET["pg"];

            
            if ($pg = "addperfil") {
                ?>
        <form method="post" action="?pg=atualizar">
            <table class="table">
                <thead>
                    <tr>
                        <th>PRODUTO</th>
                        <th>FABRICANTE</th>
                        <th>LOTE</th>
                        <th>SIF</th>
                        <th>FABRICAÇÃO</th>
                        <th>V.FECHADO</th>
                        <th>DESCONGELADO</th>
                        <th>V.DESCONGELADO</th>
                    </tr>
                </thead>
                <?php

                    $sql = "SELECT * FROM produtos";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute();
                ?>
                <?php
                while ($row = $stmt->fetch()) {
                    ?>
                <tbody>
                    <tr>
                        <td><input type="text" value="<?=$row["produto"]?>" name="produdo"> </td>
                        <td><input type="text" value="<?=$row["fabricante"]?>" name="fabricante"></td>
                        <td><input type="text" value="<?=$row["lote"]?>" name="lote"></td>
                        <td><input type="text" value="<?=$row["sif"]?>" name="sif"></td>
                        <td><input type="text" value="<?=$row["fabricacao"]?>" name="fabricacao"></td>
                        <td><input type="text" value="<?=$row["vfechado"]?>" name="vfechado"></td>
                        <td><input type="text" value="<?=$row["descongelado"]?>" name="descongelado"></td>
                        <td><input type="text" value="<?=$row["vdescongelado"]?>" name="vdescongelado"></td>
                    </tr>
                </tbody>
                <?php
                }?>
        </form>
        </table>
        <input type="submit" value="enviar">
        <?php
            }

            if ($pg == "atualizar") {
                
                $produto = $_POST["produto"];
                $fabricante = $_POST["fabricante"];
                $lote = $_POST["lote"];
                $sif = $_POST["sif"];
                $fabricacao = $_POST["fabricacao"];
                $vfechado = $_POST["vfechado"];
                $descongelado = $_POST["descongelado"];
                $vdescongelado = $_POST["vdescongelado"];


                
            }
        ?>

    </div>


    <script src="js/bootstrap.min.js"></script>
</body>

</html>