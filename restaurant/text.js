// Get all the "Add to Cart" buttons
const addToCartButtons = document.querySelectorAll('.add-to-cart');

// Initialize the shopping cart array
let shoppingCart = [];

// Add event listener to each button
addToCartButtons.forEach(function(button) {
  button.addEventListener('click', function(event) {
    // Get the food item name and price
    const itemName = event.target.parentElement.querySelector('.food-titile').textContent;
    const itemPrice = event.target.parentElement.querySelector('.food-price').textContent;

    // Create a new item object and add it to the shopping cart array
    const item = {
      name: itemName,
      price: itemPrice
    };
    shoppingCart.push(item);

    // Alert the user that the item has been added to the cart
    alert(`${itemName} has been added to your cart.`);

    // Debugging: log the shopping cart array to the console
    console.log(shoppingCart);
  });
});
