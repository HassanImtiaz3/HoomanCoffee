$(document).ready(function () {
    $('#myForm').submit(function (event) {
        event.preventDefault();

        var tableNumber = $("#tableNumber").val();

        var coffeeName = "Coffee";
        var teaName = "Tea";
        var organicName = "Organic tea";
        var moccaName = "Mocca latte";
        var espressoName = "Espresso";
        var americanoName = "Americano";

        var p1 = $("#price_quantity_coffee").text();
        var p2 = $("#price_quantity_tea").text();
        var p3 = $("#price_quantity_organic").text();
        var p4 = $("#price_quantity_mocca").text();
        var p5 = $("#price_quantity_espresso").text();
        var p6 = $("#price_quantity_americano").text();

        var c1 = $("#quantity_coffee").val();
        var c2 = $("#quantity_tea").val();
        var c3 = $("#quantity_organic").val();
        var c4 = $("#quantity_mocca").val();
        var c5 = $("#quantity_espresso").val();
        var c6 = $("#quantity_americano").val();

        var t1 = $("#total_quantity_coffee").text();
        var t2 = $("#total_quantity_tea").text();
        var t3 = $("#total_quantity_organic").text();
        var t4 = $("#total_quantity_mocca").text();
        var t5 = $("#total_quantity_espresso").text();
        var t6 = $("#total_quantity_americano").text();

        $.ajax({
            url: "ajaxInsertData.php",
            method: "POST",
            data: {
                tbl: tableNumber,
                n1: coffeeName,
                n2: teaName,
                n3: organicName,
                n4: moccaName,
                n5: espressoName,
                n6: americanoName,
                pp1: p1,
                pp2: p2,
                pp3: p3,
                pp4: p4,
                pp5: p5,
                pp6: p6,
                cc1: c1,
                cc2: c2,
                cc3: c3,
                cc4: c4,
                cc5: c5,
                cc6: c6,
                tt1: t1,
                tt2: t2,
                tt3: t3,
                tt4: t4,
                tt5: t5,
                tt6: t6
            },
            success: function () {
                
            },
            error: function (xhr, textStatus, errorThrown) {
                // Handle any error that occurs during the AJAX request
            }
        });
       
    });
});


