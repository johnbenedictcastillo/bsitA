let shoppingCartBtn = document.querySelector('#icon-shopping-cart');
let cartIconProductCounter = document.querySelector('#item-counter');
let productCartArea = document.querySelector('#product-cart-area');

let favoriteIcon = document.querySelectorAll('.product-icons > .add-to-favorite > span');
let cartWishlistArea = document.querySelector('.shopping-cart-wrap .cart-wishlist-area');

let itemDeleteConfirmationBox = document.querySelector('.remove-confirmation-message');
let itemDeleteConfirmationBoxTitle = document.querySelector('.remove-message-title h2');
let popupShadow = document.querySelector('.popup-shadow');
let removeConfirmBtn = document.querySelector('#remove-confirm-btn');
let removeCancelBtn = document.querySelector('#remove-cancel-btn');

let cartCloseButton = document.querySelector('.cart-close-btn button');

let cartContentMenu = document.querySelectorAll('.cart-menu-items h2');
let shoppingCartContentsArea = document.querySelectorAll('.shopping-cart-contents-area');

let shoppingCart = document.querySelector('.shopping-cart-area');
let productItem = document.querySelectorAll('.featured-products .product-wrap');
let productImage = document.querySelectorAll('.product-img img');
let productDiscount = document.querySelectorAll('.product-icons p .discount');
let productName = document.querySelectorAll('.product-description .product-name');
let productPrice = document.querySelectorAll('.product-description .price del span');
let addToCartBtn = document.querySelectorAll('.product-description .add-to-cart-btn p');
let shoppingCartArea = document.querySelector('.shopping-cart-area .shopping-cart-wrap');
let cartContentArea = document.querySelector('.shopping-cart-wrap .cart-contents-area');
let shoppingDetailsContent = document.querySelector('.shopping-details-content');
let buyingProductContent = document.querySelector('.buying-product-title');
let buyingDetailsFooter = document.querySelector('.buying-details-footer');
let totalBuyingItems = document.querySelector('.calculate-total-items p span');
let totalBuyingItemsWeight = document.querySelector('.calculate-total-weight p span');
let totalBuyingItemsAmount = document.querySelector('.calculate-total-amount p span');

let totalSelectedProduct = document.querySelector('#total-selected');
let totalFavoriteProduct = document.querySelector('#total-favorite');
let totalSelectedCounter = document.querySelector('#total-selected span');
let totalFavoriteCounter = document.querySelector('#total-favorite span');
let totalAddToBuyCounter = document.querySelector('.total-buying-item p span');

let body = document.querySelector('body');


let countSelectedItem = 0;
let countFavoriteItem = 0;
let countAddToBuyItem = 0;
let countBuyProductSl = 0;
let countTotalWeight = 0;
let countTotalAmount = 0;

let addedToCart = [];
let newCartContent = [];
let shoppingCartItem = [];
let storeShopItemsIndex = [];
let addedForBuy = [];

let addedToFavorite = [];
let newfavoriteItem = [];


shoppingCartBtn.onclick = () => {
    productCartArea.classList.add('active-cart');
    body.style.overflow = 'hidden';
}


cartCloseButton.onclick = () => {
    productCartArea.classList.remove('active-cart');
    body.style.overflow = 'auto';
}


function displayBuyingHeader(countValue) {
    let totalShopItems = shoppingDetailsContent.children.length;
    if (countValue > 0 && isSelectedItemActive === true) {
        buyingProductContent.classList.add('acvie-buying-title');
    } else if (totalShopItems > 0 && isSelectedItemActive === true) {
        buyingProductContent.classList.add('acvie-buying-title');
    } else {
        buyingProductContent.classList.remove('acvie-buying-title');
    }
}

let isSelectedItemActive = true;


for (let i = 0; i < cartContentMenu.length; i++) {
    cartContentMenu[i].addEventListener('click', function () {
        for (let j = 0; j < cartContentMenu.length; j++) {
            cartContentMenu[j].classList.remove('active-cart-menu');
            shoppingCartContentsArea[j].classList.remove('active-cart-content');
            totalSelectedProduct.classList.remove('active-product-counter');
            totalFavoriteProduct.classList.remove('active-product-counter');
        }
        cartContentMenu[i].classList.add('active-cart-menu');
        shoppingCartContentsArea[i].classList.add('active-cart-content');
        if (cartContentMenu[i].getAttribute('id') === 'selected-products') {
            totalSelectedProduct.classList.add('active-product-counter');
            if (countSelectedItem > 0) {
                buyingProductContent.classList.add('acvie-buying-title');
                totalSelectedCounter.innerHTML = countSelectedItem;
            } else {
                totalSelectedCounter.innerHTML = 'No item found';
            }
            isSelectedItemActive = true;
        } else {
            totalFavoriteProduct.classList.add('active-product-counter');
            buyingProductContent.classList.remove('acvie-buying-title');
            if (countFavoriteItem > 0) {
                totalFavoriteCounter.innerHTML = countFavoriteItem;
            } else {
                totalFavoriteCounter.innerHTML = 'No item found';
            }

            isSelectedItemActive = false;
        }

        displayBuyingHeader(countSelectedItem);

    })
}

for (let i = 0; i < addToCartBtn.length; i++) {
    addedToCart[i] = false;
    addedForBuy[i] = false;
    addedToFavorite[i] = false;
}

function createSelectedProductsContent(image, name, price, discount, preservative, time) {
    let newCartContent = document.createElement('div');
    newCartContent.setAttribute('class', 'cart-content');

    let newCartImageArea = document.createElement('div');
    newCartImageArea.setAttribute('class', 'cart-image-area');

    let newCartDetails = document.createElement('div');
    newCartDetails.setAttribute('class', 'cart-details');

    
    let newImage = document.createElement('img');
    newImage.src = image;

    newCartImageArea.appendChild(newImage);

   
    let newHeading2 = document.createElement('h2');
    newHeading2.textContent = 'Product Details';

    let newPara = [];
    let newStrong = [];
    for (let i = 0; i < 6; i++) {
        newPara[i] = document.createElement('p');
        newStrong[i] = document.createElement('strong');
    }

    newStrong[0].textContent = 'Product Name: ';
    newStrong[1].textContent = 'Price: ';
    newStrong[2].textContent = 'Discount: ';
    newStrong[3].textContent = 'Quantity: ';
    newStrong[4].textContent = 'Preservatives: ';
    newStrong[5].textContent = 'Added Time: ';

    for (let i = 0; i < 6; i++) {
        newPara[i].appendChild(newStrong[i]);
    }

    let newInput = document.createElement('input');
    newInput.setAttribute('type', 'number');
    newPara[3].appendChild(newInput);

    let newQuantitySpan = document.createElement('span');
    newQuantitySpan.innerHTML = 'Qty';
    newQuantitySpan.style.paddingLeft = '0.4rem';
    newPara[3].appendChild(newQuantitySpan);

    let newSpan = [];
    for (let i = 0; i < 3; i++) {
        newSpan[i] = document.createElement('span');
    }

    newSpan[0].textContent = name;
    newSpan[1].textContent = price + 'Pesos';
    newSpan[2].textContent = discount + '%';

    for (let i = 0; i < 3; i++) {
        newPara[i].appendChild(newSpan[i]);
    }

    let preservativeSpan = document.createElement('span');
    preservativeSpan.textContent = preservative;

    let timeSpan = document.createElement('span');
    timeSpan.textContent = time;

    newPara[4].appendChild(preservativeSpan);
    newPara[5].appendChild(timeSpan);

    let newShoppingButton = [];

    for (let i = 0; i < 2; i++) {
        newShoppingButton[i] = document.createElement('button');
    }

    newShoppingButton[0].textContent = 'Buy Now';
    newShoppingButton[1].textContent = 'Remove Item';

    newShoppingButton[0].setAttribute('class', 'add-to-buy-btn');
    newShoppingButton[1].setAttribute('class', 'remove-item-btn');

   
    newCartDetails.appendChild(newHeading2);

    for (let i = 0; i < 6; i++) {
        newCartDetails.appendChild(newPara[i]);
    }

    for (let i = 0; i < 2; i++) {
        newCartDetails.appendChild(newShoppingButton[i]);
    }

    newCartContent.appendChild(newCartImageArea);
    newCartContent.appendChild(newCartDetails);

    return newCartContent;
}


function getAddedTime() {
    let dt = new Date();

    let dd = dt.getDate();
    let mm = dt.getMonth() + 1;
    let yyyy = dt.getFullYear();

    let HH = dt.getHours();
    let MM = dt.getMinutes();
    let XM;

    (HH >= 12) ? XM = 'PM': XM = 'AM';

    if (HH > 12) {
        HH -= 12;
    }

    if (HH == 0) {
        HH = 12;
    }

    if (dd < 10) {
        dd = '0' + dd;
    }

    if (mm < 10) {
        mm = '0' + mm;
    }

    if (HH < 10) {
        HH = '0' + HH;
    }

    if (MM < 10) {
        MM = '0' + MM;
    }


    let format = `${dd}/${mm}/${yyyy}  ${HH}:${MM} ${XM}`;

    return format;
}


function addItemsToSelectedProducts(productIndex) {
    addToCartBtn[productIndex].style.background = 'orangered';
    addToCartBtn[productIndex].innerHTML = '<span class="icon-cart-arrow-down"></span> Added';
    let productCartImage = productImage[productIndex].src;
    let productCartName = productName[productIndex].textContent;
    let productCartPrice = productPrice[productIndex].textContent;
    let productCartDiscount = productDiscount[productIndex].textContent;
    let preservativeName = 'No';
    let addedTime = getAddedTime();
    newCartContent[productIndex] = createSelectedProductsContent(productCartImage, productCartName, productCartPrice, productCartDiscount, preservativeName, addedTime);
    cartContentArea.insertBefore(newCartContent[productIndex], cartContentArea.firstChild);
}


function removeItemsToSelectedProducts(productIndex) {
    addToCartBtn[productIndex].style.background = '#459122';
    addToCartBtn[productIndex].innerHTML = '<span class="icon-cart-plus"></span> Add to Cart';
    cartContentArea.removeChild(newCartContent[productIndex]);
}


function activeFavoriteItemAddToCartBtn(productIndex) {
    let favoriteItemAddToCartBtn = newfavoriteItem[productIndex].children[2].children[2].children[0];
    favoriteItemAddToCartBtn.style.background = 'orangered';
    favoriteItemAddToCartBtn.innerHTML = '<span class="icon-cart-arrow-down"></span> Added';
}


function deactiveFavoriteItemAddToCartBtn(productIndex) {
    let favoriteItemAddToCartBtn = newfavoriteItem[productIndex].children[2].children[2].children[0];
    favoriteItemAddToCartBtn.style.background = '#459122';
    favoriteItemAddToCartBtn.innerHTML = '<span class="icon-cart-plus"></span> Add to Cart';
}


function favoriteContentWrapper() {
    let newProductWrapper = document.createElement('div');
    newProductWrapper.setAttribute('class', 'product-wrap');

    return newProductWrapper;
}


function addItemsToFavoriteProducts(productIndex) {
    favoriteIcon[productIndex].style.background = 'orangered';
    clone = productItem[productIndex].cloneNode(true);
    let favoriteContentWrap = favoriteContentWrapper();
    newfavoriteItem[productIndex] = favoriteContentWrap.appendChild(clone);
    cartWishlistArea.appendChild(newfavoriteItem[productIndex]);
}


function removeItemsToFavoriteProducts(productIndex) {
    favoriteIcon[productIndex].style.background = '#61790a';
    cartWishlistArea.removeChild(newfavoriteItem[productIndex]);
}


function activeConfirmationBox(confirmMessage) {
    itemDeleteConfirmationBox.classList.add('active-confirmation-box');
    itemDeleteConfirmationBoxTitle.innerHTML = confirmMessage;
    popupShadow.classList.add('active-popup-shadow');
    shoppingCart.style.overflow = 'hidden';
}


function removeConfirmationBox() {
    itemDeleteConfirmationBox.classList.remove('active-confirmation-box');
    popupShadow.classList.remove('active-popup-shadow');
    shoppingCart.style.overflow = 'auto';
}


function displayCartCounter(countValue) {
    if (countValue > 0) {
        cartIconProductCounter.classList.add('active-item-counter');
    } else {
        cartIconProductCounter.classList.remove('active-item-counter');
    }
}


function createShoppingCartItem(itemName, itemPrice, itemDiscount, presentPrice, itemQuantity) {
    let newParentDiv = document.createElement('div');
    newParentDiv.setAttribute('class', 'shopping-details');

    let newChildDiv = [];

    for (let i = 0; i < 8; i++) {
        newChildDiv[i] = document.createElement('div');
    }

    newChildDiv[0].setAttribute('class', 'product-sl');
    newChildDiv[1].setAttribute('class', 'product-name');
    newChildDiv[2].setAttribute('class', 'regular-price');
    newChildDiv[3].setAttribute('class', 'discount');
    newChildDiv[4].setAttribute('class', 'present-price');
    newChildDiv[5].setAttribute('class', 'product-quantity');
    newChildDiv[6].setAttribute('class', 'total-amount');
    newChildDiv[7].setAttribute('class', 'remove-item-btn');

    let newChildPara = [];

    for (let i = 0; i < 7; i++) {
        newChildPara[i] = document.createElement('p');
    }

    let removeBtn = document.createElement('button');
    removeBtn.innerHTML = 'Remove';
    removeBtn.setAttribute('class', 'remove-shop-item');

    let totalPrice = itemQuantity * presentPrice;
    totalPrice = totalPrice.toFixed(2);

    newChildPara[1].innerHTML = itemName;
    newChildPara[2].innerHTML = itemPrice + ' Pesos';
    newChildPara[3].innerHTML = itemDiscount + '%';
    newChildPara[4].innerHTML = presentPrice + ' Pesos';
    newChildPara[5].innerHTML = itemQuantity + ' Qty';
    newChildPara[6].innerHTML = totalPrice + ' Pesos';

    for (let i = 0; i < 7; i++) {
        newChildDiv[i].appendChild(newChildPara[i]);
    }

    newChildDiv[7].appendChild(removeBtn);

    for (let i = 0; i < 8; i++) {
        newParentDiv.appendChild(newChildDiv[i]);
    }

    return newParentDiv;

}


function addItemsToShoppingCartArea(itemIndex, buyBtn, itemQuantity) {
    totalAddToBuyCounter.innerHTML = ++countAddToBuyItem;
    buyBtn.style.background = 'crimson';
    buyBtn.innerHTML = 'Added';
    let getQuantity = itemQuantity.value;
    let getItemName = productName[itemIndex].textContent;
    let getItemPrice = productPrice[itemIndex].textContent;
    let getItemDiscount = productDiscount[itemIndex].textContent;
    let getPresentPrice = getItemPrice - ((getItemDiscount / 100) * getItemPrice);
    getPresentPrice = getPresentPrice.toFixed(2);
    shoppingCartItem[itemIndex] = createShoppingCartItem(getItemName, getItemPrice, getItemDiscount, getPresentPrice, getQuantity);
    shoppingDetailsContent.appendChild(shoppingCartItem[itemIndex]);
    countTotalWeight += parseInt(getQuantity);
    countTotalAmount += getPresentPrice * parseInt(getQuantity);
}


function removeItemsToShoppingCartArea(itemIndex, buyBtn, itemQuantity) {
    totalAddToBuyCounter.innerHTML = --countAddToBuyItem;
    buyBtn.style.background = '#267247';
    buyBtn.innerHTML = 'Add to Buy';
    let getQuantity = itemQuantity.value;
    let getItemPrice = productPrice[itemIndex].textContent;
    let getItemDiscount = productDiscount[itemIndex].textContent;
    let getPresentPrice = getItemPrice - ((getItemDiscount / 100) * getItemPrice);
    shoppingDetailsContent.removeChild(shoppingCartItem[itemIndex]);
    countTotalWeight -= parseInt(getQuantity);
    countTotalAmount -= getPresentPrice * parseInt(getQuantity);
    itemQuantity.value = '';
}




function displayBuyingDetailsFooter(countValue) {
    if (countValue > 0) {
        buyingDetailsFooter.classList.add('active-buying-details-footer');
    } else {
        buyingDetailsFooter.classList.remove('active-buying-details-footer');
    }

    totalBuyingItems.innerHTML = shoppingDetailsContent.children.length;
    totalBuyingItemsWeight.innerHTML = countTotalWeight;
    totalBuyingItemsAmount.innerHTML = countTotalAmount.toFixed(1);
}


function setProductSl() {
    let sl = 0;
    let shopItems = shoppingDetailsContent.children;
    for (let i = 0; i < shopItems.length; i++) {
        shopItems[i].children[0].children[0].innerHTML = ++sl;
    }
}


function removeShopItemsIndex(index) {
    for (let i = 0; i < storeShopItemsIndex.length; i++) {
        if (storeShopItemsIndex[i] === index) {
            for (let j = i; j < storeShopItemsIndex.length; j++) {
                storeShopItemsIndex[j] = storeShopItemsIndex[j + 1];
            }
        }
    }
    storeShopItemsIndex.length--;
}


function controllShoppingProductItems(itemIndex, addToBuyBtn) {

    let itemQuantity = newCartContent[itemIndex].children[1].children[4].children[1];

    if (addedForBuy[itemIndex] === false && itemQuantity.value !== '' && itemQuantity.value > 0) {
        addItemsToShoppingCartArea(itemIndex, addToBuyBtn, itemQuantity);
        displayBuyingDetailsFooter(countAddToBuyItem);
        itemQuantity.setAttribute('disabled', 'true');
        storeShopItemsIndex.push(itemIndex);
        setProductSl();
        let shopItemRemoveBtn = shoppingCartItem[itemIndex].children[7].children[0];
        shopItemRemoveBtn.addEventListener('click', function () {
            removeItemsToShoppingCartArea(itemIndex, addToBuyBtn, itemQuantity);
            displayBuyingDetailsFooter(countAddToBuyItem);
            displayBuyingHeader(countSelectedItem);
            itemQuantity.removeAttribute('disabled');
            removeShopItemsIndex(itemIndex);
            setProductSl();
            addedForBuy[itemIndex] = false;
        })
        addedForBuy[itemIndex] = true;
    } else if (addedForBuy[itemIndex] === true && itemQuantity.value !== '' && itemQuantity.value > 0) {
        removeItemsToShoppingCartArea(itemIndex, addToBuyBtn, itemQuantity);
        displayBuyingDetailsFooter(countAddToBuyItem);
        displayBuyingHeader(countSelectedItem);
        itemQuantity.removeAttribute('disabled');
        removeShopItemsIndex(itemIndex);
        setProductSl();
        addedForBuy[itemIndex] = false;
    } else {
        if (itemQuantity.value === '') {
            alert('Please fill the quantity of your item');
        } else {
            alert('Please enter a valid quantity of your item');
        }
    }
}


for (let i = 0; i < addToCartBtn.length; i++) {

   
    addToCartBtn[i].addEventListener('click', function () {
        if (addedToCart[i] === false) {
            addItemsToSelectedProducts(i);
            if (newfavoriteItem[i] !== undefined) {
                activeFavoriteItemAddToCartBtn(i);
            }
            let removeCartContentBtn = newCartContent[i].children[1].children[8];
            removeCartContentBtn.onclick = () => {
                    removeItemsToSelectedProducts(i);
                    if (newfavoriteItem[i] !== undefined) {
                        deactiveFavoriteItemAddToCartBtn(i);
                    }
                    --countSelectedItem;
                    totalSelectedCounter.innerHTML = countSelectedItem;
                    cartIconProductCounter.innerHTML = countSelectedItem;
                    displayBuyingHeader(countSelectedItem);
                    displayCartCounter(countSelectedItem);
                    addedToCart[i] = false;
                }
                ++countSelectedItem;
            totalSelectedCounter.innerHTML = countSelectedItem;
            cartIconProductCounter.innerHTML = countSelectedItem;
            addedToCart[i] = true;
        } else {
            removeItemsToSelectedProducts(i);
            if (newfavoriteItem[i] !== undefined) {
                deactiveFavoriteItemAddToCartBtn(i);
            }
            --countSelectedItem;
            totalSelectedCounter.innerHTML = countSelectedItem;
            cartIconProductCounter.innerHTML = countSelectedItem;
            displayBuyingHeader(countSelectedItem);
            displayCartCounter(countSelectedItem);
            addedToCart[i] = false;
        }

        let addToBuyBtn = newCartContent[i].children[1].children[7];

        addToBuyBtn.onclick = () => {
            controllShoppingProductItems(i, addToBuyBtn);
        }
        displayBuyingHeader(countSelectedItem);
        displayCartCounter(countSelectedItem);
    })

    
    favoriteIcon[i].addEventListener('click', function () {
        if (addedToFavorite[i] === false) {
            addItemsToFavoriteProducts(i);
            totalFavoriteCounter.innerHTML = ++countFavoriteItem;
            addedToFavorite[i] = true;
        } else {
            removeItemsToFavoriteProducts(i);
            totalFavoriteCounter.innerHTML = --countFavoriteItem;
            addedToFavorite[i] = false;
        }

        let favoriteContent = newfavoriteItem[i].children[1].children[0];

        favoriteContent.addEventListener('click', function () {
            activeConfirmationBox('Remove item from wishlist?');
            removeConfirmBtn.onclick = () => {
                removeItemsToFavoriteProducts(i);
                totalFavoriteCounter.innerHTML = --countFavoriteItem;
                addedToFavorite[i] = false;
                removeConfirmationBox();
            }

            removeCancelBtn.onclick = () => {
                removeConfirmationBox();
            }

        })

      
        let favoriteItemAddToCartBtn = newfavoriteItem[i].children[2].children[2].children[0];


        favoriteItemAddToCartBtn.addEventListener('click', function () {
            if (newfavoriteItem[i] !== undefined && addedToCart[i] === false) {
                addItemsToSelectedProducts(i);
                activeFavoriteItemAddToCartBtn(i);
                let removeCartContentBtn = newCartContent[i].children[1].children[8];
                removeCartContentBtn.onclick = () => {
                        removeItemsToSelectedProducts(i);
                        deactiveFavoriteItemAddToCartBtn(i);
                        --countSelectedItem;
                        totalSelectedCounter.innerHTML = countSelectedItem;
                        cartIconProductCounter.innerHTML = countSelectedItem;
                        displayBuyingHeader(countSelectedItem);
                        displayCartCounter(countSelectedItem);
                        addedToCart[i] = false;
                    }
                    ++countSelectedItem;
                totalSelectedCounter.innerHTML = countSelectedItem;
                cartIconProductCounter.innerHTML = countSelectedItem;
                addedToCart[i] = true;
            } else {
                removeItemsToSelectedProducts(i);
                deactiveFavoriteItemAddToCartBtn(i);
                --countSelectedItem;
                totalSelectedCounter.innerHTML = countSelectedItem;
                cartIconProductCounter.innerHTML = countSelectedItem;
                displayBuyingHeader(countSelectedItem);
                displayCartCounter(countSelectedItem);
                addedToCart[i] = false;
            }

            let addToBuyBtn = newCartContent[i].children[1].children[7];

            addToBuyBtn.onclick = () => {
                controllShoppingProductItems(i, addToBuyBtn);
            }
            displayBuyingHeader(countSelectedItem);
            displayCartCounter(countSelectedItem);
        })

    })

}


let buyNowBtn = document.querySelector('#buy-items');
let buyingDetailsArea = document.querySelector('.buying-details-area');
let closeBuyingDetailsArea = document.querySelector('.close-buy-area');

buyNowBtn.onclick = () => {
    buyingDetailsArea.classList.add('active-buying-details');
}

closeBuyingDetailsArea.onclick = () => {
    buyingDetailsArea.classList.remove('active-buying-details');
}

let removeAllShopItems = document.querySelector('#remove-all-items');


removeAllShopItems.onclick = () => {
    if (countAddToBuyItem > 0) {
        activeConfirmationBox('Remove all items from cart?');
        removeConfirmBtn.onclick = () => {
            for (let i = 0; i < storeShopItemsIndex.length; i++) {
                let itemIndex = storeShopItemsIndex[i];
                let buyBtn = newCartContent[itemIndex].children[1].children[7];
                let itemQuantity = newCartContent[itemIndex].children[1].children[4].children[1];
                removeItemsToShoppingCartArea(itemIndex, buyBtn, itemQuantity);
                itemQuantity.removeAttribute('disabled');
                addedForBuy[itemIndex] = false;
            }
            storeShopItemsIndex = [];
            displayBuyingDetailsFooter(countAddToBuyItem);
            displayBuyingHeader(countSelectedItem);
            removeConfirmationBox();
        }
        removeCancelBtn.onclick = () => {
            removeConfirmationBox();
        }
    } else {
        alert('No items found in shopping cart');
    }

}
