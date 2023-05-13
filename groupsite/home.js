window.addEventListener("load", function () {
  const cartIcon = document.getElementById("shopping-basket");
  const cartIconBlack = document.getElementById("basket-icon-black");
  const cartCount = document.getElementById("basket-count");

  let numItemsInCart = 0; // initialize the cart count to 0

  // function to update the cart count and display the cart icon
  function updateCart(count) {
    if (count > 0) {
      cartIconBlack.style.display = "inline"; // show the basket icon
    } else {
      cartIconBlack.style.display = "none"; // hide the basket icon if count is 0
    }
    cartCount.innerText = count; // update the basket count display
  }

  // example usage: increment the basket count and update the display
  numItemsInCart++;
  updateCart(numItemsInCart);

  document.getElementById("login").addEventListener("click", function () {
    //test evnt listner works with alert
    //alert("user logged in");

    loginsection.style.display = "flex";
  });

  document.getElementById("leavelogin").addEventListener("click", function () {
    //test evnt listner works with alert
    //alert("user logged in");

    loginsection.style.display = "none";
  });

  document.querySelector("#form").addEventListener("submit", function (evt) {
    evt.preventDefault();

    const query = document.querySelector("#query").value.trim();

    // check if empty, if so, show hint and exit
    loading.style.display = "block";

    // show loading icon

    const xhr = new XMLHttpRequest();
    xhr.addEventListener("load", function () {
      // hide loadsing icon
      loading.style.display = "";

      if (xhr.status == 200) {
        const info = JSON.parse(xhr.responseText),
          items = info.collection.items,
          target = document.querySelector("#srchtarget"),
          loading = document.querySelector("#loading");

        const gridContainer = document.createElement("div");
        gridContainer.classList.add("grid-container");
        let clickcount = 0;

        while (target.lastChild) {
          target.removeChild(target.lastChild);
        }
        //while (info.lastChild) {
        //	info.removeChild(info.lastChild);
        //
        //				}

        if (items.length > 0) {
          for (let i = 0; i < items.length; i++) {
            //console.log(items[i].data[0].title);

            loading.style.display = "";
            //hide the loading incon

            const gridItem = document.createElement("div");
            const img = document.createElement("img");
            //const imgNF = document.createElement("imgNF");
            //imgNF.src = "images/imgNF.png";
            //imgNF.appendChild(imgNF);
            //cuases GET error
            const info = document.createElement("div");
            const title = document.createElement("p");
            const time = document.createElement("time");
            const desc = document.createElement("desc");

            gridItem.classList.add("grid-item");

            //if (items[i].links[0] != undefined) {
            //causes a GET error?
            //}

            img.src = items[i].links[0].href;
            gridItem.appendChild(img);
            info.classList.add("info");

            title.textContent = items[i].data[0].title;
            info.appendChild(title);

            time.textContent = items[i].data[0].date_created;
            info.appendChild(time);

            //desc.textContent = items[i].data[0].description; the description contains html despite it being bad practice....
            desc.innerHTML = items[i].data[0].description;
            info.appendChild(desc);

            gridContainer.appendChild(gridItem);

            target.appendChild(gridContainer);

            img.addEventListener("click", () => {
              //div.appendChild(info);
              //info.style.opacity= 100;
              //find odd clicks to close the info?
              //clickcount++; //increment

              imgselected.appendChild(info);
              //gridItem.removeChild(img)
              imgselected.style.display = "block";
              info.style.display = "block";
              //imgselected.style.width = 100%
              info.appendChild(img);
              img.style.width = "80%";

              info.scrollIntoView();
            });

            back.addEventListener("click", () => {
              imgselected.style.display = "";
              info.style.display = "block";
              //info.removeChild(img);
              gridItem.appendChild(img);
            });

            // better version of showing results
            // create div
            // create img
            // create h2 >>> title
            // create p >>> descr
            // div.appendChild(img)
            // div.appendChild(h2)
            // div.appendChild(p)
            // target.appendChild(div)

            // how to make the image grid
            //have all the images display
            //using the images div
            //then add an action listen waiting for the images to be clicked
            //when clicked change the info div from hidden to viewable
            //find a way to css the images and info into a container
            //and then allow the container to cover the backgorund images behing it
            //maybe using backrgoudn colour?
            //use the mdn grid page
            //put in a class AND an id
          }
        } else if ((items.length = 0)) {
          // show message "nothing found"
          nofounderror.style.display = "block";
        } else {
          //show message "technical issue"
          error.style.display = "block";
        }
        //} else {
        // show message "technogical issue"
        //}
        // hide the icons

        nofounderror.style.display = "";
        error.style.display = "";
      }
    });
    xhr.open(
      "GET",
      "https://images-api.nasa.gov/search?q=" + encodeURIComponent(query),
      true
    );
    xhr.send();
  });
});
// references :

//image recources:

//https://loading.io/
//https://unsplash.com/photos/XClNDg9Z9Ag

//learning references:
//for the grid: https://developer.mozilla.org/en-US/docs/Learn/CSS/CSS_layout/Grids
//for the search bar: https://pagedart.com/blog/how-to-add-a-search-bar-in-html/
