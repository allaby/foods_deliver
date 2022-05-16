function addIngredient() {
    // $("#submit_btn").attr("disabled", true);
    // $("#submit_btn").html('Traitement en cours')
    var name = $("#ingredient_name").val()
    var unit = $("#ingredient_unit").val()
    var qty = $("#ingredient_quantity").val()
    var description = $("#ingredient_description").val()

    $.ajax({
        method: "POST",
        url: "/recipee/addIngredient/",
        data: {
            name: name,
            unit: unit,
            qty: qty,
            description: description
        },
        success: function(responce) {
            console.log(responce)
        }
    })
}