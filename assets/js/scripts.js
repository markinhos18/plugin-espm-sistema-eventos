(function ($) {
  // Scroll na página até a seção de eventos.
  const eventos = document.querySelector("#espm-eventos");

  if (eventos === undefined) return;

  eventos.scrollIntoView({
    behavior: "smooth",
  });

  // Filtrar eventos via AJAX.
  function filtrarResultados() {
    var filter = $("#filtros");
    $.ajax({
      url: filter.attr("action"),
      data: filter.serialize(), // form data
      type: filter.attr("method"), // POST
      beforeSend: function (xhr) {
        $("#btn-filtros").attr("disabled", true);
        $("#resultados").text("Buscando por eventos...");
      },
      success: function (data) {
        $("#btn-filtros").attr("disabled", false);

        if (data === "sem_resultados") {
          $("#resultados").text(
            "Não foram encontrados eventos para essa combinação de filtros."
          );
        } else {
          $("#resultados").html(data);
        }
      },
    });
    return false;
  }

  $("#filtros").submit(filtrarResultados);

  $(".espm-filtro").on("change", filtrarResultados);

  $(".espm-ordenar-eventos").on("change", function (e) {
    var ordem = e.target.value;

    $("#ordem").val(ordem);

    filtrarResultados();
  });
})(jQuery);
