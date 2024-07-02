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
      fetch( `${baseUrl}/api/transactions/${transactionId}_${filmId}`, 
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
        window.location.reload();
      })
      .catch(error => {
          console.error('There has been a problem with your fetch operation:', error);
      });    
    }
  });
  });

  $("#btnCheckout").on("click", function () {
    Swal.fire({
    title: "Yakin mau membeli film ini?",
    text: "",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    cancelButtonText: "Batal",
    confirmButtonText: "Yakin!"
    }).then((result) => {
      if (result.isConfirmed) {              
            
        fetch( `${baseUrl}/api/checkout`, {
          method: "POST",         
          headers: {
            "Content-Type": "application/json"
          },
          body:  JSON.stringify({ id: $("#inpUser").val() })
        })
        .then(response => {
            if (!response.ok) {
                throw new Error("Network response was not ok");
            }
            return response.json();
        })
        .then(data => {
          Swal.fire({
            title: "Berhasil membeli",
            text: "Silahkan menonton film yang anda beli, semoga menikmati :) ",
            icon: "success"
          });                    

          setTimeout(() => {
            window.location.reload();            
          }, 2000);
        })
        .catch(error => {
            console.error('There has been a problem with your fetch operation:', error);
        });    
      }
    });
  });
  
  
});