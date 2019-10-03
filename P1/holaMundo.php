<?php

/**
 * @title: registerForm.php
 * @author: Marius Mladinovici Danaila <al315550@uji.es>
 * @license CC-BY-NC-SA
 */

$nombre = "Ana";

print("<P>Hola, $nombre</P>");
if (isset($argv[1])) {
    print("<p> Adios, $argv[1]</P>");
}
print "\nFIN";
?>