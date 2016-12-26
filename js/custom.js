(function($) {
// toggle the menu
    Drupal.behaviors.options_toggle = {
        attach: function(context, settings) {
            $('#navigation').click(function() {
            	$(this).toggleClass('clicked')
            })
        }
    }
})(jQuery)