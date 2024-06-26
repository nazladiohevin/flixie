  $("#createTransaction").on("submit", function (e) {
    e.preventDefault();
    
    Swal.fire({
      title: "Yakin mau membeli?",
      text: "",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      cancelButtonText: "Batal",
      confirmButtonText: "Yakin!"
    }).then((result) => {
      if (result.isConfirmed) {        
        const formData = new FormData(this);
        
        fetch(baseUrl + "/api/transactions", {
          method: "POST",
          body: formData,          
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
            text: "Berhasil melakukan transaksi, silahkan melakukan checkout pembayaran",
            icon: "success"
          });                    
        })
        .catch(error => {
            console.error('There has been a problem with your fetch operation:', error);
        });    
      }
    });
  });