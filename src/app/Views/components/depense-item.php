<?php
$results = mysqli_query($conn, "SELECT * FROM depense where IDFOURNISSEUR = '$IDFOURNISSEUR'");

while ($ligne = mysqli_fetch_row($results)) {
?>
  <tr class="text-gray-700">
    <td class="px-4 py-3 text-sm">
      <?php echo $ligne[3]; ?>
    </td>
    <td class="px-4 py-3">
      <div class="flex items-center text-sm font-semibold">
        <?php echo $ligne[0]; ?>
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
  </tr>
<?php
}
include '../components/suppModalDepense.php';
?>