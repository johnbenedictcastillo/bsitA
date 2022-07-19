let carts = document.querySelectorAll(".add-cart");

let products = [
    {
        id: 0,
        name: "Bondpaper",
        tag: "1",
        price: "500",
        inCart: 0,
    },
    {
        id: 1,
        name: "Pencil Set",
        tag: "2",
        price: "250",
        inCart: 0,
    },
    {
        id: 2,
        name: "Sign Pen (Ballpen)",
        tag: "3",
        price: "180",
        inCart: 0,
    },
    {
        id: 3,
        name: "Crayon",
        tag: "4",
        price: "200",
        inCart: 0,
    },

    {
        id: 4,
        name: "Clip set",
        tag: "5",
        price: "80",
        inCart: 0,
    },

    {
        id: 5,
        name: "Waterpaint",
        tag: "6",
        price: "85",
        inCart: 0,
    },

   ];
for (let a = 0; a < carts.length; a++) {
    carts[a].addEventListener("click", () => {
        cartCounts(products[a]);
        totalCost(products[a]);
    });
}

function onLoadCartNumbers() {
    let productCount = localStorage.getItem("cartCounts");

    if (productCount) {
        document.querySelector(".cart sup").textContent = productCount;
    }
}

function cartCounts(product) {
    let productCount = localStorage.getItem("cartCounts");

    productCount = parseInt(productCount);

    if (productCount) {
        localStorage.setItem("cartCounts", productCount + 1);
        document.querySelector(".cart sup").textContent = productCount + 1;
    } else {
        localStorage.setItem("cartCounts", 1);
        document.querySelector(".cart sup").textContent = 1;
    }

    setItems(product);
}

function setItems(product) {
    let myItems = localStorage.getItem("productsInCart");
    myItems = JSON.parse(myItems);

    if (myItems != null) {
        if (myItems[product.tag] == undefined) {
            myItems = {
                ...myItems,
                [product.tag]: product,
            };
        }
        myItems[product.tag].inCart += 1;
    } else {
        product.inCart = 1;
        myItems = {
            [product.tag]: product,
        };
    }

    localStorage.setItem("productsInCart", JSON.stringify(myItems));
}

function totalCost(productA) {
    // console.log("Product price is", productA.price);
    let cartTotal = localStorage.getItem("totalCost");
    console.log("Total cart items is", cartTotal);
    console.log(typeof cartTotal);

    if (cartTotal != null) {
        cartTotalParsed = parseInt(cartTotal);
        localStorage.setItem("totalCost", cartTotal + productA.price);
    } else {
        localStorage.setItem("totalCost", productA.price);
    }
    1;
}

function fetchProduct() {
    let _cartItems = localStorage.getItem("productsInCart");
    let cartItems = JSON.parse(_cartItems);

    let productContainer = document.querySelector(".products");

    console.log(cartItems);
    if (cartItems && productContainer) {
        var cartTotal = 0;

        productContainer.innerHTML = "";
        Object.values(cartItems).map((item) => {
            const sumPrice = item.inCart * item.price;
            cartTotal += sumPrice;

            productContainer.innerHTML += `
            <td>
                <span>${item.name}</span>
            </td>

            <td>
                <img src="./images/${item.tag}.jpg" class="img-banner">
            </td>

            <td>
                ${item.price}
            </td>


            <td>
            <span>${item.inCart}</span>
            </td>

            <td>
                ₱${sumPrice}
            </td>
            <td>
                <button class="btn btn-danger" onclick="deleteCart(${item.id})">Delete</button>
            </td>
            
            `;
        });

        document.querySelector("#totalPrice").innerHTML = `₱${cartTotal}`;
    }
}
onLoadCartNumbers();
fetchProduct();

// Delete cart
// ParseInt for number type safety
const deleteCart = (id) => {
    id = Number.parseInt(id);

    let _cartItems = localStorage.getItem("productsInCart");
    let cartItems = JSON.parse(_cartItems);

    let count = Object.keys(cartItems).length;
    const filtered = Object.fromEntries(
        Object.entries(cartItems).filter(([_, value]) => {
            if (Number.parseInt(value.id) == id) {
                count -= Number.parseInt(value.inCart);
                return false;
            }
            return true;
        })
    );

    localStorage.setItem("productsInCart", JSON.stringify(filtered));
    localStorage.setItem("cartCounts", count);

    document.location.reload();
};

// Checkout
document.querySelector("#checkoutForm")?.addEventListener("submit", (event) => {
    event.preventDefault();
    alert("Checkout successful");
    document.querySelector("#closeCheckoutModal").click();
});
