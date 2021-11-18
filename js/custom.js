/*hero judantys elementai*/
document.addEventListener("mousemove", parallax);
  function parallax(event) {
    this.querySelectorAll(".mouse").forEach((shift) => {
      const position = shift.getAttribute("value");
      const x = (window.innerWidth - event.pageX * position) / 200;
      const y = (window.innerHeight - event.pageY * position) / 200;

      shift.style.transform = `translateX(${x}px) translateY(${y}px)`;
    });
  };

/* mobilusis menu */
function myFunction() { 
  var x = document.getElementById('mMenu');
  if (x.style.display === "block") {
    x.style.display = "none"
  } else {
    x.style.display = "block"
  }
}