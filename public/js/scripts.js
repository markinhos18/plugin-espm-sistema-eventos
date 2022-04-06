window.onload = initPage;

function initPage() {
  //   var itemForm = document.getElementById("itemForm"); // getting the parent container of all the checkbox inputs
  //   var checkBoxes = itemForm.querySelectorAll('input[type="checkbox"]'); // get all the check box
  //   var checkbox = document.querySelector("input[type=checkbox]");
  //   checkbox.addEventListener("change", function () {
  //     if (this.checked) {
  //       console.log("Checkbox is checked..");
  //     } else {
  //       console.log("Checkbox is not checked..");
  //     }
  //   });
}

function formularioCheck(elen) {
  var itemForm = document.getElementById("itemForm"); // getting the parent container of all the checkbox inputs
  var checkBoxes = itemForm.querySelectorAll('input[type="checkbox"]'); // get all the check box
  //   document.getElementById("submit").addEventListener("click", getData); //add a click event to the save button

  let result = [];

  // this function will get called when the save button is clicked

  checkBoxes.forEach((item) => {
    if (item.checked) {
      result.push(item.value);
    }
  });

  $.ajax({
    url: "/sistema-eventos",
    type: "POST",
    data: {
      checkeboxes: result.join(","),
    },
  }).done((data) => {
    document.body = data;
  });
  //  document.querySelector(".result").textContent = JSON.stringify(result); // display result
}
