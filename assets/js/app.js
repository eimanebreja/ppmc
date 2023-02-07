const tabs = document.querySelectorAll("[data-tab-target]");
const tabContents = document.querySelectorAll("[data-tab-content]");

tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    const target = document.querySelector(tab.dataset.tabTarget);
    tabContents.forEach((tabContent) => {
      tabContent.classList.remove("active");
    });
    tabs.forEach((tab) => {
      tab.classList.remove("active");
    });
    tab.classList.add("active");
    target.classList.add("active");
  });
});

setTimeout(() => {
  const message = document.getElementById("message");
  // 👇️ removes element from DOM
  message.style.opacity = "0";
  message.style.display = "none";
  message.style.transition = "all 2s";

  // 👇️ hides element (still takes up space on page)
  // box.style.visibility = 'hidden';
}, 3000); // 👈️ time in milliseconds

$(document).ready(function () {
  $(".more").click(function (e) {
    e.preventDefault();
    $(".nav__bottomarea--moremenu").toggle();
  });
});

let currentPage = 1;
$("#load-more").on("click", function () {
  currentPage++; // Do currentPage + 1, because we want to load the next page

  $.ajax({
    type: "POST",
    url: "/wp-admin/admin-ajax.php",
    dataType: "json",
    data: {
      action: "weichie_load_more",
      paged: currentPage,
    },
    success: function (res) {
      if (paged >= res.max) {
        $("#load-more").hide();
      }
      $(".project__content--row").append(res);
    },
  });
});

$(document).ready(function () {
  $(".tap4").click(function () {
    console.log("Tap Open");
    $(this).parent().next(".popup").addClass("open");
  });
  $(".close").click(function (e) {
    e.preventDefault();
    console.log("Tap Close");
    $(".popup").removeClass("open");
  });
});

$(document).ready(function () {
  $("#showmenu1").click(function () {
    $(".menu1").slideToggle("fast");
  });
  $("#showmenu2").click(function () {
    $(".menu2").slideToggle("fast");
  });
  $("#showmenu3").click(function () {
    $(".menu3").slideToggle("fast");
  });
  $("#showmenu4").click(function () {
    $(".menu4").slideToggle("fast");
  });
  $("#showmenu5").click(function () {
    $(".menu5").slideToggle("fast");
  });
  $("#showmenu6").click(function () {
    $(".menu6").slideToggle("fast");
  });
  $("#showmenu7").click(function () {
    $(".menu7").slideToggle("fast");
  });
  $("#showmenu8").click(function () {
    $(".menu8").slideToggle("fast");
  });
  $("#showmenu9").click(function () {
    $(".menu9").slideToggle("fast");
  });
  $("#showmenu10").click(function () {
    $(".menu10").slideToggle("fast");
  });
  $("#showmenu11").click(function () {
    $(".menu11").slideToggle("fast");
  });
  $("#showmenu12").click(function () {
    $(".menu12").slideToggle("fast");
  });
  $("#showmenu13").click(function () {
    $(".menu13").slideToggle("fast");
  });
  $("#showmenu14").click(function () {
    $(".menu14").slideToggle("fast");
  });
  $("#showmenu15").click(function () {
    $(".menu15").slideToggle("fast");
  });
  $("#showmenu16").click(function () {
    $(".menu16").slideToggle("fast");
  });
  $("#showmenu17").click(function () {
    $(".menu17").slideToggle("fast");
  });
  $("#showmenu18").click(function () {
    $(".menu18").slideToggle("fast");
  });
  $("#showmenu19").click(function () {
    $(".menu19").slideToggle("fast");
  });
  $("#showmenu20").click(function () {
    $(".menu20").slideToggle("fast");
  });
});
