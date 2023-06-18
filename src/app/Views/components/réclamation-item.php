<?php
$results = mysqli_query($conn, "SELECT reclamation.IDM, fournisseur.NOM, fournisseur.PRENOM, reclamation.TITRE, reclamation.DATEM, reclamation.NUMFACTURE FROM reclamation, fournisseur WHERE reclamation.IDFOURNISSEUR = fournisseur.IDFOURNISSEUR order by DATEM DESC");

while ($ligne = mysqli_fetch_row($results)) {
?>
    <tr class="text-gray-700 dark:text-gray-400" onclick="window.location='InfoRéclamation.php?idReclamation=<?php echo $ligne[0]; ?>';">
        <td class="px-4 py-3 text-sm font-semibold">
            <?php echo $ligne[1] . " " . $ligne[2]; ?>
        </td>
        <td class="px-4 py-3 text-sm">
            <?php echo $ligne[3]; ?>
        </td>
        <td class="px-4 py-3 text-sm">
            <?php echo $ligne[4]; ?>
        </td>
        <td class="px-4 py-3 text-sm">
            <?php echo $ligne[5]; ?>
        </td>
    </tr>
<?php
}
?>