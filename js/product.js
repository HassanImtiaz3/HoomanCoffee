function incrementQuantity(inputName) {
    var quantityInput = document.getElementsByName(inputName)[0];
    var quantityValue = parseInt(quantityInput.value);
    quantityInput.value = quantityValue + 1;

    calculateTotal(inputName);
}

function decrementQuantity(inputName) {

    var quantityInput = document.getElementsByName(inputName)[0];
    var quantityValue = parseInt(quantityInput.value);
    if (quantityValue > 0) {
        quantityInput.value = quantityValue - 1;
    }

    calculateTotal(inputName);
}


function calculateTotal(inputName) {
    var quantityInput = document.getElementsByName(inputName)[0];
    var quantity = parseInt(quantityInput.value);
    var price = parseInt(document.getElementById('price_' + inputName).textContent);
    var total = quantity * price;

    var totalSpan = document.getElementById("total_" + inputName);
    totalSpan.textContent = total;

    calculateTotalAmount()
}

function calculateTotalAmount() {
    var coffeeQuantity = document.getElementById('quantity_coffee').value;
    var teaQuantity = document.getElementById('quantity_tea').value;
    var organicQuantity = document.getElementById('quantity_organic').value;
    var moccaQuantity = document.getElementById('quantity_mocca').value;
    var espressoQuantity = document.getElementById('quantity_espresso').value;
    var americanoQuantity = document.getElementById('quantity_americano').value;

    var coffeePrice = document.getElementById('price_quantity_coffee').textContent;
    var teaPrice = document.getElementById('price_quantity_tea').textContent;
    var organicPrice = document.getElementById('price_quantity_organic').textContent;
    var moccaPrice = document.getElementById('price_quantity_mocca').textContent;
    var espressoPrice = document.getElementById('price_quantity_espresso').textContent;
    var americanoPrice = document.getElementById('price_quantity_americano').textContent;


    var totalSpan = document.getElementById('totalAmount');

    var total = (coffeeQuantity * coffeePrice) + (teaQuantity * teaPrice) + (organicQuantity * organicPrice)
        + (moccaQuantity * moccaPrice) + (espressoQuantity * espressoPrice) + (americanoQuantity * americanoPrice);

    totalSpan.textContent = "PKR " + total + ".00";
}


$(document).ready(function() {
    $('#shiftButton').click(function() {
        window.location.href = "userScreen.html";
      });
  });


