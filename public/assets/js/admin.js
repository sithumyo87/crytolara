$(document).ready(function(){
    $('.delete-button').on('click', function(){
        $(this).closest('.actions-gp').children('.delete-form').submit();
    });
});