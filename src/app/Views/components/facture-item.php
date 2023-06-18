<?php
$results = mysqli_query($conn, "SELECT * FROM facture where IDFOURNISSEUR = '$IDFOURNISSEUR'");

while ($ligne = mysqli_fetch_row($results)) {
?>
    <tr class="text-gray-700 dark:text-gray-400" onclick="window.location='InfoFacture.php?idFacture=<?php echo $ligne[0]; ?>';">
        <td class="px-4 py-3 text-sm font-semibold">
            <?php
            if (!$ligne[15]) { ?>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="Red" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            <?php } else { ?>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="Green" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                </svg>
            <?php } ?>
        </td>
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
<?php
}
?>