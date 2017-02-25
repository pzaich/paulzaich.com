// remap jQuery to $
(function($){})(window.jQuery);


/* trigger when page is ready */
$(document).ready(function (){
  var headerGradient = new pz.gradientMesh($('#header'));
  headerGradient.init();
});

var pz = {
  gradientMesh: function (element) {
    var colorPairs = ['#1EF2B4', '#51B5EC'];

    var spinColors = function () {

      var newColorHexes = [];

      $.each(colorPairs, function (_, colorHex) {
        var color = $.Color(colorHex);
        var newColor;

        if (color.hue() < 13) {
          newColor = color.hue(359);
        } else {
          newColor = color.hue(color.hue() - 13);
        }

        newColorHexes.push(newColor.toHexString());
      });

      colorPairs = newColorHexes;
    };

    var LOOP_INTERVAL = 3000;
    var INTERVAL = 80;

    this.init = function () {
      this.cycleGradient(true);
    };

    this.isReversing = false;

    this.cycleGradient = function (initialRun) {
      var colors = colorPairs.reverse();


      if (!initialRun && !this.isReversing) {
        spinColors();
      }

      var self = this;
      var totalTime = 0.0;

      _setIntermediateGradient();

      function _setIntermediateGradient () {
        totalTime += 160.0;
        var completePercentage =  totalTime / LOOP_INTERVAL;

        var transitionColors = [];

        transitionColors[0] = $.Color(colors[0]).transition(colors[1],completePercentage);
        transitionColors[1] = $.Color(colors[1]).transition(colors[0],completePercentage);

        setTimeout(function () {
          $(element).css({
            background: ['linear-gradient( 172deg, ',transitionColors[0].toHexString(),', ',transitionColors[1].toHexString(),')'].join('')
          });

          if (totalTime > LOOP_INTERVAL) {
            self.isReversing = !self.isReversing;
            self.cycleGradient();
          } else {
            _setIntermediateGradient();
          }
        }, INTERVAL);
      }
    };
  }
};
