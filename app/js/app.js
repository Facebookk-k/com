var App = (function () {

  var init = function () {
    Other.init();
  };

  return {init: init};
}());

$(function () {
  App.init();
});