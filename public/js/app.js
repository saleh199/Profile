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
                $('#profileForm *').removeClass('required vd_bd-red');

                $.ajax({
                    url: config.base_url + 'users/' + $('input[name="currentId"]').val(),
                    data: $('#profileForm').serialize(),
                    type: 'PUT',
                    contentType: 'application/x-www-form-urlencoded',
                    dataType: 'json',
                    beforeSend: function (xhr) {
                        $btn.button('loading');
                    },
                    error: function(xhr, status){
                        if(status == 400){
                            alert('Not Found User');
                        } else {
                            var errors = xhr.responseJSON;
                            $.each(errors, function(index, value){
                                $('input[name="'+index+'"').toggleClass('required vd_bd-red');
                            });
                        }
                    }
                }).done(function(data){
                    // hide edit profile
                    $('#profileEdit').collapse('hide');

                    location = location.href;
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

            $('#imageForm').ajaxForm({
                success : function(){
                    location = location.href;
                }
            });

            $('#coverImageForm').ajaxForm({
                success : function(){
                    location = location.href;
                }
            });

            $('#addPost').click(function(){
                var $btn = $(this);
                $.ajax({
                    url: config.base_url + 'posts',
                    data: 'user_id=' + $('input[name="currentId"]').val() + '&content=' + $('#postForm textarea[name="content"]').val(),
                    type: 'POST',
                    dataType: 'json',
                    contentType: 'application/x-www-form-urlencoded',
                    beforeSend: function(xhr){
                        $btn.button('loading');
                    },
                    error: function(xhr, status){
                        if(status == 400){
                            alert('Not Found User');
                        } else {
                            var errors = xhr.responseJSON;
                            $.each(errors, function(index, value){
                                $('textarea[name="'+index+'"').toggleClass('required vd_bd-red');
                            });
                        }
                    },
                    success : function(){
                        location = location.href;
                    }
                }).always(function(){
                    $btn.button('reset');
                });
            });
        }
    };
})(_config, window.jQuery);
