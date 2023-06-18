<?php
$rech = $_POST["searchField"];
$cin = $_POST["cin"];
$results = mysqli_query($conn, "SELECT * FROM facture WHERE NUMDEPENSE like '%$rech%' or NUMFACTURE like '%$rech%' or ETATFACTURE like '%$rech%' and IDFOURNISSEUR = '$IDFOURNISSEUR' order by NUMFACTURE");

while ($ligne = mysqli_fetch_row($results)) {
?>
    <tr class="text-gray-700 dark:text-gray-400" onclick="window.location='InfoFacture.php?idFacture=<?php echo $ligne[0]; ?>';">
        <td class="px-4 py-3 text-sm font-semibold">
            <?php echo $ligne[0]; ?>
        </td>
        <td class="px-4 py-3 text-sm font-semibold">
            <?php echo $ligne[2]; ?>
        </td>
        <td class="px-4 py-3 text-sm">
            <span class="px-2 py-1 leading-tight text-orange-700 bg-orange-100 rounded-full">
                <?php echo $ligne[3]; ?>
            </span>
        </td>
        <td class="px-4 py-3 text-sm">
            <?php echo $ligne[6]; ?>
        </td>
        <td class="px-4 py-3 text-sm">
            <?php echo $ligne[7]; ?>
        </td>
    </tr>
    </tr>
<?php
}
?>