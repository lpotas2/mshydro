/* 
 * Cubitoo Typography (1.1)
 * by PaweÅ‚ Komarnicki (http://cubitoo.com)
 * pawel@cubitoo.com
 *
 * Copyright (c) PaweÅ‚ Komarnicki (http://cubitoo.com)
 * Licensed under the MIT license (see MIT-LICENSE.txt)
 *
 * NOTE: This script requires jQuery to work.  Download jQuery at www.jquery.com
 */

(function($) {
  $.fn.fixTypography = function(selected_replacements) {
    
    // Replacements for bad web typography
    var replacements = {
      // Line rhythm
      bastards:      { invalid: /\ ([a-zA-Z]{1})\ /mgi, valid: " $1&nbsp;" },
      em_dashes:     { invalid: /\ - \ /mgi, valid: "&nbsp;&mdash;&nbsp;"},
      en_dashes:     { invalid: /([a-zA-Z ]{1})(-)([a-zA-Z ]{1})/mgi, valid: "$1&ndash;$3"},
      double_spaces: { invalid: /[ ]{2,}/mgi, valid: " " },

      // Quoting
      single_quotes: { invalid: /\'([a-zA-Z0-9 ]+)\'/mgi, valid: "&lsquo;$1&rsquo;" },
      double_quotes: { invalid: /\"([a-zA-Z0-9 ]+)\"/mgi, valid: "&ldquo;$1&rdquo;" },
      angle_quotes:  { invalid: /<<([a-zA-Z0-9 ]+)>>/mgi, valid: "&laquo;$1&raquo;" },
      apostrophes:   { invalid: /([a-zA-Z0-9]+)\'([a-zA-Z ]+)/mgi, valid: "$1&rsquo;$2 " },

      // Replacing
      copyright:     { invalid: /\(c\)/mgi, valid: "&copy;" },
      ellipsis:      { invalid: "...", valid: "&hellip;" },
    }
  
    // Replace bad typography in all matching elements
    return this.each(function() {
      for (var key_index in selected_replacements) { 
        var key = selected_replacements[key_index];
        $(this).html($(this).html().replace(replacements[key].invalid, replacements[key].valid));
      }
    });

  };
})(jQuery);