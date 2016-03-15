// Avoid `console` errors in browsers that lack a console.
(function () {
  var method;
  var noop = function () {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
        console[method] = noop;
    }
}
}());

// Place any jQuery/helper plugins in here.
var impressumHeadin = $(".masonry-brick");

SetAllBlocksHeight(impressumHeadin);

function SetAllBlocksHeight(containersNames) {

  var blockHeight = 0;

  $( containersNames ).each(function () {
    var evenContainerBlock = $(this).height();
    if (evenContainerBlock > blockHeight) {
      blockHeight = evenContainerBlock;
    }
  });
  $( containersNames ).css('height', blockHeight)

}
