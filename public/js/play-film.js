$(document).ready(function () {
  $("#seasons").on("change", function () {
    const seasonVal = $(this).val();
    
    const listEpisode = $("#listEpisode a");
    
    listEpisode.each(function (index, episodeElement) { 
      const classIdentity = `s${seasonVal}`;

      // Sterilkan class
      $(episodeElement).removeClass("hidden");

      if (!$(episodeElement).hasClass(classIdentity)) {
        $(episodeElement).addClass("hidden");
        
      }
    });
  });
});