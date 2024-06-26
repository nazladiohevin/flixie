$(document).ready(function () {
  $(document).on("click", "#closeBtn", function (e) {
    e.preventDefault();

  // Mencari elemen input dengan name="id" yang berada di dalam parent dari tombol #closeBtn
  const transactionId = $(this).closest('#container').find("input[name='id']").val();
  const filmId = $(this).closest('#container').find("input[name='film_id']").val();

  Swal.fire({
    title: "Yakin mau menghapus film ini?",
    text: "",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    cancelButtonText: "Batal",
    confirmButtonText: "Yakin!"
  }).then((result) => {
    if (result.isConfirmed) {              
      
      // /api/transactions/transactionid_filmid
      fetch(
        `${baseUrl}/api/transactions/${transactionId}_${filmId}`, 
      {
        method: "DELETE",                
      })
      .then(response => {
          if (!response.ok) {
              throw new Error("Network response was not ok");
          }
          return response.json();
      })
      .then(data => {
        Swal.fire({
          title: "Sukses",
          text: "Berhasil menghapus",
          icon: "success"
        });                    
      })
      .catch(error => {
          console.error('There has been a problem with your fetch operation:', error);
      });    
    }
  });
  });
});