
$("[name=color-favorite]").on("focus", (event) => {
    const color = $(event.target).val();
    $("body").css("background-color", color);
});

$("#textexample").on("keyup", function() {
    var value = $(this).val();
    console.log(value);
});