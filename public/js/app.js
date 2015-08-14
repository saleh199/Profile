/**
 * Created by saleh on 8/14/15.
 */

var _config = {};

app = (function(config, $){
    'use strict';

    return {
        // startup application
        init : function(){
            $('#saveBtn').click(function(){
                var $btn = $(this).button('loading');

                // Logic

                //$btn.button('reset');
            });
        }
    };
})(_config, window.jQuery);
