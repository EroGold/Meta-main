$(document).ready(function(){
    $(".form-input input").click(function(){
        $(this).sibling().hide()
    })
})