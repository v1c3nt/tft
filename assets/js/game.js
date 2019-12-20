/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
require("../js/app.js");
const $ = require("jquery");
// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
var app = {
  init: function() {
    $(".choices").on("click", app.choose);
  },
  choose: function() {
    var choice = $(this).data("build");
    var answer = $("#answer").data("answer");
    var answerAlt = $("#answer").data("alt");

    if (choice === answer || choice === answerAlt) {
      $("#answer")
        .children()
        .show();

      setTimeout(() => {
        $("#answer")
          .children()
          .hide();

        var item1 = Math.floor(Math.random() * 8) + 1;
        var item2 = Math.floor(Math.random() * 8) + 1;
        var answer = parseInt(item1 + "" + item2);
        var alt = parseInt(item2 + "" + item1);

        $("#item_1").attr("class", "item" + item1);
        $("#item_2").attr("class", "item" + item2);
        $("#answer").data("answer", answer);
        $("#answer").data("alt", alt);
        $("#answer_image").attr("class", "build" + answer);
      }, 3000);
    } else {
      alert("Arf... ce n'est pas ça");
    }
  }
};
$(app.init);
