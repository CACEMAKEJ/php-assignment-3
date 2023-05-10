$(document).ready(function() {
    $('#like-button').click(function() {
        var postId = $(this).data('post-id');
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

    $('#dislike-button').click(function() {
        var postId = $(this).data('post-id');
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
});