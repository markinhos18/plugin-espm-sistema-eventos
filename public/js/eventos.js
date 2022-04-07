$("#form").submit(function () {
  //agora buscar somente os checkeds, utilizando :checked no seletor
  var inputCampus = $('#form input[type="checkbox"]');

  if (inputCampus.length == 0) {
    alert("Selecione um ou mais cursos para deletar");
    return false;
  } else {
    if (
      !confirm(
        "Ao deletar um curso, todos os dados relacionados a ele também serão deletados. Deseja realmente deletar o curso?"
      )
    ) {
      return false;
    }
  }

  $.ajax({
    url: "/sistema-eventos",
    type: "POST",
    data: {
      checkeboxes: result.join(","),
    },
  }).done((data) => {
    document.body = data;
  });
});
