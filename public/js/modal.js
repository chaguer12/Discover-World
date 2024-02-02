function toggleModal() {
    document.getElementById('add').addEventListener('click', function() {
        // Toggle the modal visibility
        var modal = document.getElementById('modal');
        modal.classList.toggle('hidden');
    });
  }

  function closeModal() {
    modal.classList.add('hidden');
    modal.classList.remove('flex');
  }
  

  closeModalBtn.addEventListener('click', closeModal);