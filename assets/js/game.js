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
    console.log("i m here");
  },
  choose: function() {
    var choice = $(this).data("build");
    var answer = $("#answer").data("answer");
    var answerAlt = $("#answer").data("alt");

    if (choice === answer || choice === answerAlt) {
      $("#answer").removeClass("d-none");
      
    } else {
      alert("Arf... ce n'est pas ça");
    }
  }
};
$(app.init);
