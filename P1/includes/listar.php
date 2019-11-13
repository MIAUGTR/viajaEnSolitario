<?

/**
 * @title: listar.php
 * @description: lista los usuarios de la BBDD
 * @author: Marius Mladinovici Danaila <al315550@uji.es>
 * @license CC-BY-NC-SA
 */

include("./gestionBD.php");
function handler($pdo,$table)
{
    
    $rows=consultar($pdo,$table);
   
    if (is_array($rows)) {/* Creamos un listado como una tabla HTML*/
        print '<table><thead>';
        foreach ( array_keys($rows[0])as $key) {
            echo "<th>", $key,"</th>";
        }
        echo "<th>Acciones</th>";

        print "</thead>";
        foreach ($rows as $row) {
            print "<tr>";
            foreach ($row as $key => $val) {
                echo "<td>", $val, "</td>";
            }

            $clientId = $row['client_id'];
            echo "<td><a href=?action=update&client_id=$clientId >Actualizar</a> | <a href=?action=delete&client_id=$clientId>Borrar</a></td>";
            print "</tr>";
        }
        print "</table>";
    }
}
$table = "A_cliente";

try{handler($pdo,$table);}
catch (PDOException $e) {
echo "Failed to get DB handle: " . $e->getMessage() . "\n";
exit;
}

?>