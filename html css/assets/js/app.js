document.getElementById("messege_card_head").onclick = function () {
  if (document.getElementById("arrow_drop").innerText == "arrow_drop_up") {
    document.getElementById("arrow_drop").innerText = "arrow_drop_down";
    document.getElementById("card_af").classList.remove("d-none");
    document.getElementById("card_af").classList.toggle("d-block");
  } else {
    document.getElementById("arrow_drop").innerText = "arrow_drop_up";
    document.getElementById("card_af").classList.remove("d-block");
    document.getElementById("card_af").classList.toggle("d-none");
  }
};