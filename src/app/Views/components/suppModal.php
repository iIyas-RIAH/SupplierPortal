<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-suppression-facture">
    <div class="relative w-auto my-6 mx-auto max-w-xl">
        <!--content-->
        <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
            <!--header-->
            <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                <div class="pt-2 pr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                    </svg>
                </div>
                <h3 class="text-3xl font-semibold">
                    Suppression
                </h3>
                <button class="pt-3 p-1 ml-auto border-0 text-black float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-suppression-facture')">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <!--body-->
            <div class="relative p-6 flex-auto">
                <p class="my-3 text-slate-700 text-lg leading-relaxed">
                    Voulez-vous vraiment supprimer cette facture?
                </p>
            </div>
            <!--footer-->
            <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-suppression-facture')">
                    Fermer
                </button>
                <button class="bg-purple-600 text-white active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" id="supp" onclick="toggleModal('modal-suppression-facture')">
                    Supprimer
                </button>
            </div>
        </div>
    </div>
</div>
<div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-suppression-facture-backdrop"></div>
<script type="text/javascript">
    function toggleModal(modalID) {
        document.getElementById(modalID).classList.toggle("hidden");
        document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
        document.getElementById(modalID).classList.toggle("flex");
        document.getElementById(modalID + "-backdrop").classList.toggle("flex");

        document.getElementById("supp").onclick = function() {
            window.location = '../../Service/DeleteFactureService.php?idFacture=<?php echo $facture[0]; ?>';
        }
    }
</script>