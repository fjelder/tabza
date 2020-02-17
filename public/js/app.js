$(".down").click(function () {
    var $parent = $(this).parents(".leg");
    $parent.insertAfter($parent.next()); 
});

$(".up").click(function () {
    var $parent = $(this).parents(".leg");
    $parent.insertBefore($parent.prev()); 
});