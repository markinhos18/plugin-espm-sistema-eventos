function getCampus() {
  // Seleciona todos os checkbox que possuem o atributo class = inputCampus
  var checkBoxes = document.getElementsByClassName("inputCampus");

  // Seleciona a ID "cards" que corresponde aos eventos do layout
  var cards = document.getElementById("cards");

  // Percorre os objetos selecionados
  Array.prototype.forEach.call(checkBoxes, (checkbox) => {
    // confere se o obj específico está marcado
    if (checkbox.checked) {
      cards.innerHTML = "eu testei";

      // alert("teste");
    }
  });
}
