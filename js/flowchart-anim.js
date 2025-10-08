// Run this after the page is ready
document.addEventListener("DOMContentLoaded", () => {
  const img = document.getElementById("flow-image"); // the flowchart picture
  const btn = document.getElementById("toggle-flow"); // the button that shows/hides it

  // when you click the button...
  btn.addEventListener("click", () => {
    if (img.classList.contains("hidden")) {
      // if the image is hidden > show it & play the open animation
      img.classList.remove("hidden", "scale-y-0"); 
      img.classList.add("scale-y-100");
    } else {
      // if the image is visible > play the close animation
      img.classList.remove("scale-y-100");
      img.classList.add("scale-y-0");

      // when the close animation finishes > actually hide it
      img.addEventListener("transitionend", () => {
        img.classList.add("hidden");
      }, { once: true });
    }
  });
});
