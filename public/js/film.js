$(document).ready(function () {
  $('input[type="radio"][name="is_free"]').on('click', function() {
    const isFree = parseInt($(this).val());
    
    const inpPrice = $("input[name='price']");
    const elPriceInfo = $("#priceInfo");    

    if (isFree) {
      elPriceInfo.text("Input harga dinonaktifkan, sehingga kamu tak bisa menginputkan harga");
      inpPrice.attr("disabled", "true");             
    } else {
      elPriceInfo.text("Wajib masukkan harga film");
      inpPrice.removeAttr("disabled");        
    }
  });  

  // $("#inpFilmCategory").on("change", function () {    
  //   const filmCategory = $(this).val();

  //   // 2 = TV ; 1 = Movie
  //   const inpUrlVidio = $("input[name='url_vidio']");
  //   if (filmCategory == 1) {
  //     inpUrlVidio.removeAttr("disabled");
  //   } else if (filmCategory == 2) {
  //     inpUrlVidio.attr("disabled", "true");
  //   }
  // });

  $("body").on("submit", ".deleteForm", function (e) {
    e.preventDefault();

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
         this.submit();
      }
    });
  });

});