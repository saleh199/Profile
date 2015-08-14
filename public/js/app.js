/**
 * Created by saleh on 8/14/15.
 */

var _config = {};

app = (function(config, $){
    'use strict';

    return {
        // startup application
        init : function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#saveBtn').click(function(){
                var $btn = $(this).button('loading');

                $.ajax({
                    url: config.base_url + 'users/' + $('input[name="currentId"]').val(),
                    data: $('#profileForm').serialize(),
                    type: 'PUT',
                    contentType: 'application/x-www-form-urlencoded',
                    dataType: 'json',
                    beforeSend: function (xhr) {
                        $btn.button('loading');
                    }
                }).done(function(data){
                    // hide edit profile
                    $('#profileEdit').collapse('hide');
                }).always(function(){
                    $btn.button('reset');
                });
            });


            $('#editBtn').click(function(){
                var $btn = $(this);

                $.ajax({
                    url: config.base_url + 'users/' + $('input[name="currentId"]').val(),
                    type: 'GET',
                    dataType: 'json',
                    beforeSend: function(xhr){
                        $btn.button('loading');
                    }
                }).done(function (data){
                    // assign retrieved data to edit form
                    $('#profileForm').populate(data);

                    // show edit profile
                    $('#profileEdit').collapse('toggle');
                }).always(function(){
                    $btn.button('reset');
                });
            });
        }
    };
})(_config, window.jQuery);
