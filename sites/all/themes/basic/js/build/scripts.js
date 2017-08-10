/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function () {

  // To understand behaviors, see https://drupal.org/node/756722#behaviors
  Drupal.behaviors.hidden = {

    attach: function (context, settings) {

      jQuery('.hierarchical-select select:first-child').change(function(){
        if(jQuery(this).val() == 5){ // or this.value == 'volvo'
          jQuery('.fieldset-vehiculos').show();
          jQuery('.fieldset-propiedades').hide();
        }
        else if(jQuery(this).val() == 6){ // or this.value == 'volvo'
          jQuery('.fieldset-propiedades').show();
          jQuery('.fieldset-vehiculos').hide();
        } else {
          jQuery('.fieldset-vehiculos').hide();
          jQuery('.fieldset-propiedades').hide();
        }
      });
    }
  };

} (jQuery));
