function openPopup() {
    // Create the pop-up container element
    var popup = document.createElement("div");
    popup.id = "popup";
  
    // Load the content of the contact page into the pop-up container
    fetch("contact.html")
      .then((response) => response.text())
      .then((html) => {
        popup.innerHTML = html;
      });
  
    // Append the pop-up container to the document body
    document.body.appendChild(popup);
  }
  
  function closePopup() {
    var popup = document.getElementById("popup");
    if (popup) {
      popup.remove();
    }
  }
  