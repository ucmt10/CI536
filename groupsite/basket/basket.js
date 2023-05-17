// Get all the input elements
const quantityInputs = document.querySelectorAll('input[type="number"]');
// Get the basket total element
const basketTotal = document.querySelector('.basket-total');

// Function to calculate and update the subtotal and basket-total
function updateTotals() {
  let total = 0;
  // Loop through all the input elements
  quantityInputs.forEach((input) => {
    // Get the price from the data attribute
    const price = input.getAttribute('data-price');
    // Calculate the subtotal for the item
    const subtotal = input.value * price;
    // Update the subtotal element for the item
    const itemSubtotal = input.parentElement.nextElementSibling;
    itemSubtotal.textContent = `£${subtotal.toFixed(2)}`;
    // Add the subtotal to the total
    total += subtotal;
  });
  // Update the basket total element
  basketTotal.textContent = `£${total.toFixed(2)}`;
}

// Call the updateTotals function initially
updateTotals();

// Add event listener to each quantity input element
quantityInputs.forEach((input) => {
  input.addEventListener('input', updateTotals);
});
