const quantityInputs = document.querySelectorAll('input[type="number"]');
const subtotalElements = document.querySelectorAll(".item-subtotal");
const totalElement = document.querySelector(".basket-total");

function updateSubtotals() {
  subtotalElements.forEach((subtotalElement, index) => {
    const quantity = quantityInputs[index].value;
    const price = quantityInputs[index].dataset.price;
    const subtotal = quantity * price;
    subtotalElement.textContent = `£${subtotal.toFixed(2)}`;
  });
}

function updateTotal() {
  let total = 0;
  subtotalElements.forEach((subtotalElement) => {
    const subtotal = parseFloat(subtotalElement.textContent.replace("£", ""));
    total += subtotal;
  });
  totalElement.textContent = `£${total.toFixed(2)}`;
}

quantityInputs.forEach((quantityInput) => {
  quantityInput.addEventListener("input", () => {
    updateSubtotals();
    updateTotal();
  });
});

updateSubtotals();
updateTotal();
