$("#form").submit(function (e) {
  e.preventDefault;
  //agora buscar somente os checkeds, utilizando :checked no seletor
  let inputCampus = $('#form input[type="checkbox"]');

  console.log(inputCampus);

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
