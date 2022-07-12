let carts = document.querySelectorAll(".add-cart");

let products = [
    {
        id: 0,
        name: "Product 1",
        tag: "image-1",
        price: "1100",
        inCart: 0,
    },
    {
        id: 1,
        name: "Product 2",
        tag: "image-2",
        price: "1200",
        inCart: 0,
    },
    {
        id: 2,
        name: "Product 3",
        tag: "image-3",
        price: "1300",
        inCart: 0,
    },
    {
        id: 3,
        name: "Product 4",
        tag: "image-5",
        price: "1400",
        inCart: 0,
    },

    {
        id: 4,
        name: "Product 5",
        tag: "image-6",
        price: "1500",
        inCart: 0,
    },

    {
        id: 5,
        name: "Product 6",
        tag: "image-7",
        price: "1600",
        inCart: 0,
    },

    {
        id: 6,
        name: "Product 7",
        tag: "image-8",
        price: "1700",
        inCart: 0,
    },

    {
        id: 7,
        name: "Product 8",
        tag: "image-9",
        price: "1800",
        inCart: 0,
    },

    {
        id: 8,
        name: "Product 9",
        tag: "image-10",
        price: "1900",
        inCart: 0,
    },

    {
        id: 9,
        name: "Product 10",
        tag: "image-11",
        price: "2000",
        inCart: 0,
    },

    {
        id: 10,
        name: "Product 11",
        tag: "image-11",
        price: "2100",
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
