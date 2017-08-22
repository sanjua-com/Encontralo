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
(function ($, Drupal, window, document) {

  // To understand behaviors, see https://drupal.org/node/756722#behaviors
  Drupal.behaviors.basic = {
    attach: function (context, settings) {
      $(window).load(function () {
        // Execute code once the window is fully loaded.
      });

      $(window).resize(function () {
        // Execute code when the window is resized.
      });

      $(window).scroll(function () {
        // Execute code when the window scrolls.
      });

      $(document).ready(function () {
        // Execute code once the DOM is ready.
      });
    }
  };

  Drupal.behaviors.hidden = {

    attach: function (context, settings) {

      $('.field-name-field-product-category .hierarchical-select select:first-child').change(function(){
        if($(this).val() == 5){ // or this.value == 'vehiculos'
          $('.fieldset-vehiculos').show();
          $('.fieldset-propiedades').hide();
        }
        else if($(this).val() == 6){ // or this.value == 'propiedades'
          $('.fieldset-propiedades').show();
          $('.fieldset-vehiculos').hide();
        } else {
          $('.fieldset-vehiculos').hide();
          $('.fieldset-propiedades').hide();
        }
      });
    }
  };

  Drupal.behaviors.autoUpload = {
    attach: function (context, settings) {
      $('form', context).delegate('input.form-file', 'change', function() {
        $(this).next('input[type="submit"]').mousedown();
      });
    }
  };

} (jQuery, Drupal, this, this.document));
