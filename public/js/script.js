$(document).ready(function() {
    console.log($('#like_button, #dislike_button'))
    $('#like_button').click(function() {
        var postId = $(this).data('post-id');
        
            console.log("like");
        $.ajax({
            url: '/posts/' + postId + '/likes',
            type: 'POST',
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                $('#likes-count').text(data.likes);
            }
        });
    });

    $('#dislike_button').click(function() {
        var postId = $(this).data('post-id');
        console.log(postId+"test")
        $.ajax({
            url: '/posts/' + postId + '/dislikes',
            type: 'POST',
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                $('#dislikes-count').text(data.dislikes);
            }
        });
    });

    $('#test').click(function() {
        console.log("test")
    });
});