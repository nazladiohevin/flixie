const generateCard = (
    isFree = true,
    index,
    film,
    urlPath = "",
    path = "./public/images"
) => `
  <div class="w-full transition-all duration-300 ease-in">
    <a href="${urlPath}${
    isFree ? "tvseries-description.html" : "movies-description.html"
}">
      <div
        class="group relative h-[261px] overflow-hidden rounded-[10px]"
      >
        <img
          class="w-full h-full object-cover object-top group-hover:scale-105 ease-out transition-all duration-300 delay-100"
          src="http://flixie.test/images/poster${index}.jpg"
          alt="poster"
        />
        <div
          class="${
              isFree && "hidden"
          } absolute right-0 top-0 rounded-bl-full bg-dark-blue-900 px-4 pb-4 pr-2 pt-2 text-2xl font-bold text-[#EFF40C]"
        >
          $
        </div>
        <span
          class="${
              isFree && "hidden"
          } absolute left-0 top-0 flex h-full w-full items-center justify-center bg-black/40 text-9xl font-medium text-[#EFF40C] opacity-0 transition-all ease-out [text-shadow:0_1px_10px_rgb(239_244_12_/_70%)] group-hover:opacity-100"
          >$</span
        >
      </div>
      <div class="pt-3.5 text-sm font-semibold text-white">
        <p class="line-clamp-2 leading-5">
          ${film.title}
        </p>
      </div>
    </a>
  </div>
`;

$(document).ready(function () {
    const steperRegister = ($element) => {
        $(".inputGroups").toggleClass("hidden block");
        $($element).toggleClass("flex hidden");
        const toggleButtonId =
            $element.id === "btnNext" ? "#btnBack" : "#btnNext";
        $(toggleButtonId).toggleClass("hidden flex");
        $("#btnRegister").toggleClass("hidden flex");
    };

    let step = 1;
    $("#btnNext, #btnBack").click(function (e) {
        steperRegister(this);

        const bullets = document.querySelectorAll("#bullets li div");

        let clickedButtonId = $(this).attr("id");

        if (clickedButtonId === "btnNext") {
            step += 1;
        } else if (clickedButtonId === "btnBack") {
            step -= 1;
        }

        bullets.forEach((bullet, index) => {
            if (index + 1 === step) {
                bullet.classList.add("bg-white", "scale-105");
                bullet.classList.remove("border-white");
            } else {
                bullet.classList.add("border", "border-white");
                bullet.classList.remove("bg-white", "scale-105");
            }
        });
    });
});

// const targetModalRegister = document.getElementById("register-modal");
// const modalRegister = new Modal(targetModalRegister);
// const targetModalLogin = document.getElementById("login-modal");
// const modalLogin = new Modal(targetModalLogin);

// $("#linkedRegister").click(function (e) {
//   modalLogin.hide();
// });
// $("#btnRegister").click(function (e) {
//   modalRegister.hide();
// });

// $("#btnProfile").click(function (e) {
//   modalLogin.show();
// });
