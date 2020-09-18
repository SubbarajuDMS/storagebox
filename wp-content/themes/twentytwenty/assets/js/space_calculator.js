(function ($, api) {
function submitspace() {
    var total = $("#total").val();
    if (total == "" || total == 0 || total == undefined || total == null) {
        alert("You don't seem to have selected anything.\nPlease add items to the calculator before proceeding.");
    }
    else {
        try {
            window.location.href = "make-a-booking-space-calculator?id=" + total;
        }
        catch (err) {
            console.log(err.stack);
        }
    }
}

$(".typetext").focusout(function () {
    if ((isNaN($("#" + this.id).val()) || parseInt($("#" + this.id).val()) < 0  )& this.id != "myInput") {
            alert("Please enter only numeric value");
            $("#" + this.id).val(0);
        } else {
            var valueid = $("#" + this.id + "_value").attr("value");
            var quantityval = $("#" + this.id).val();
            var pricevalue = $("#" + this.id + "_price").val();
            if (quantityval == 0) {
                $("#" + this.id + "_price").val(0);
                updatetotal();

            }
            else {
                var newprice = quantityval * valueid;
                $("#" + this.id + "_price").val(newprice.toFixed(1));
                updatetotal();
            }
        }
    });

function updatetotal() {
    var newtotalval = 0;
    $('input[type="text"].priceclass').each(function () {
        if ($("#total").val() == "" || $("#total").val() == null) {
            newtotalval = 0;
        }
        newtotalval = newtotalval + parseFloat(this.value);
        $("#total").val(newtotalval.toFixed(1));
    });
}
}(jQuery, wp.customize));