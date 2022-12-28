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
