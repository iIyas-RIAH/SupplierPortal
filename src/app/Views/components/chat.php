<div class="w-full px-14 py-10">
  <div class="bg-white p-6 rounded-lg shadow">
    <div class="flex items-center space-x-2 text-xl font-semibold text-gray-900 leading-8 px-4 py-3">
      <span clas="text-green-500">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
        </svg>
      </span>
      <span class="px-1">Message</span>
    </div>
    <form id="message-form" class="px-6 py-4 text-base" action="../../Service/MessageService.php" method="post">
      <div class="grid grid-cols-2 gap-x-10">
        <div>
          <h4 class="py-4">Num Depense</h4>
          <select class="w-11/12 rounded-lg border-2 border-black px-3 text-gray-700 h-10" name="Num_Depense" id="Num_Depense" required>
            <option selected="" disabled="">--</option>
            <?php
            while ($ligne = mysqli_fetch_row($depense)) {
            ?>
              <option value="<?php echo $ligne[0]; ?>"><?php echo $ligne[0]; ?></option>
            <?php
            }
            ?>
          </select>
        </div>

        <div>
          <h4 class="py-4">Num Facture</h4>
          <select class="w-11/12 rounded-lg border-2 border-black px-3 text-gray-700 h-10" name="Num_Facture" id="Num_Facture" required>
           
          </select>
        </div>
        <div class="col-span-2">
          <h4 class="py-4">Objet</h4>
          <input class="w-3/5 rounded-lg border-2 border-black px-3 text-gray-700 h-10" type="text" name="objet" required>
        </div>

        <div class="col-span-2">
          <h4 class="py-4">Message</h4>
          <textarea id="message" class="w-11/12 rounded-lg border-2 border-black px-3 text-gray-700 pt-2" name="message" rows="5"></textarea>
        </div>

        <input type="hidden" name="cin" value="<?php echo $CIN; ?>">

      </div>
      <div class="flex justify-center pt-2">
        <button class="block w-5/12 px-4 py-2 mt-4 text-lg font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="submit">
          Enregistrer
        </button>
      </div>
    </form>
  </div>
</div>

<script src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#Num_Depense").change(function() {
      var aid = $("#Num_Depense").val();
      $.ajax({
        url: 'data.php',
        method: 'post',
        data: 'depense=' + depense
      }).done(function(books) {
        console.log(books);
        books = JSON.parse(books);
        $('#Num_Facture').empty();
        books.forEach(function(book) {
          $('#Num_Facture').append('<option>' + book.name + '</option>')
        })
      })
    })
  })
</script>