// Get all the inputs with the data-price attribute
const quantityInputs = document.querySelectorAll('input[data-price]');

// Add an event listener to each input to calculate subtotal and total when the quantity changes
quantityInputs.forEach(input => {
  input.addEventListener('change', () => {
    const price = parseFloat(input.dataset.price);
    const quantity = parseInt(input.value);
    const itemSubtotal = price * quantity;
    const itemSubtotalElement = input.parentElement.nextElementSibling;
    itemSubtotalElement.textContent = `$${itemSubtotal.toFixed(2)}`;
    
    // Recalculate total
    const itemSubtotals = document.querySelectorAll('.item-subtotal');
    let total = 0;
    itemSubtotals.forEach(subtotal => {
      total += parseFloat(subtotal.textContent.slice(1));
    });
    const cartTotalElement = document.querySelector('.cart-total');
    cartTotalElement.textContent = `$${total.toFixed(2)}`;
  });
});
