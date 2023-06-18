<?php
$rech = $_POST["searchField"];
$IDFOURNISSEUR = $_POST["IDFOURNISSEUR"];
$resultat = mysqli_query($conn, "SELECT * FROM depense WHERE NUMDEPENSE like '%$rech%' or LIBELLE like '%$rech%' or TYPEDEPENSE like '%$rech%' or ETATDEPENSE like '%$rech%' and IDFOURNISSEUR = '$IDFOURNISSEUR' order by NUMDEPENSE");
while ($ligne = mysqli_fetch_row($resultat)) {
?>
    <tr class="text-gray-700">
        <td class="px-4 py-3 text-sm">
            <?php echo $ligne[3]; ?>

        </td>
        <td class="px-4 py-3">
            <div class="flex items-center text-sm">
                <p class="font-semibold">
                    <?php echo $ligne[0]; ?>
                </p>
            </div>
        </td>
        <td class="px-4 py-3 text-sm">
            <p>
                <?php echo $ligne[2]; ?>
            </p>
        </td>
        <td class="px-4 py-3 text-sm">
            <span class="px-2 py-1 leading-tight text-orange-700 bg-orange-100 rounded-full">
                <?php echo $ligne[4]; ?>
            </span>
        </td>
        <td class="px-4 py-3 text-sm">
            <?php echo $ligne[5]; ?>
        </td>
        <td class="px-4 py-3 text-sm">
            <?php echo $ligne[6]; ?>
        </td>
        <td class="px-4 py-3 text-sm">
            <?php echo $ligne[7]; ?>
        </td>
        <td class="px-4 py-3 text-sm grid grid-cols-2">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                </svg>
            </a>
        </td>
    </tr>
<?php
}
?>