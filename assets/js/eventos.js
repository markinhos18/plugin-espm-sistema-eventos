const $ = jQuery;

$("#btn_save").on("click", function (e) {
  e.preventDefault();

  //**************   Campus ******************************* */

  let checkbox = $(".inputCampus");

  if (checkbox.is(":checked")) {
    // jQuery.ajax({
    //   url: eventos_ajax.ajax_url,
    //   type: "POST",
    //   dataType: "JSON",
    //   data: {
    //     action: "set_form",
    //     checkbox: checkbox,
    //   },
    //   success: function (data) {
    //     if (data.status == 1) {
    //       alert(data.msg);
    //     } else {
    //       alert(data.msg);
    //     }
    //   },
    //   error: function (response) {
    //     alert("Aconteceu um erro");
    //   },
    // });
    alert("Checado");
  }
  //   alert(eventos_ajax.ajax_url);

  //**************  Publico  ******************************* */

  //   let publico = $(".publico");

  //   if (publico.is(":selected")) {
  //     alert("testei publico");
  //   }

  //*************** Modelo ****************************** */

  //   let modelo = $(".modelo");

  //   if (modelo.is(":selected")) {
  //     alert("testei modelo");
  //   }

  //*************** Investimento ****************************** */

  //   let investimento = $(".investimento");

  //   if (investimento.is(":selected")) {
  //     alert("testei investimento");
  //   }

  //*****************Data do Evento **************************** */

  //   let dataEvento = $(".dataEvento");

  //   if (dataEvento.is(":checked")) {
  //     alert("testei data de evento");
  //   } else {
  //     alert("Selecione uma das opções do formulario");
  //   }

  //********************************************* */
});
