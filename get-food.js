
var theOrder = [];

var xhr = new XMLHttpRequest();
xhr.onload = function(){
    console.log(JSON.parse(this.responseText));
    var data = JSON.parse(this.responseText);
    for(let item of data){
        //Order Item
        let myOrder = {
            'food_name' : '',
            'food_price' : ''
        }
        
        console.log(item.food_name)

        //create new card for item
        const card = document.createElement("div");
        card.className = 'card';

        const foodName = document.createElement("div");
        foodName.className = 'food-name';

        //adding food name
        const title = document.createElement('p');
        const textItem = document.createTextNode(item.food_name);
        title.className = 'food-name-title';
        title.appendChild(textItem);

        const foodDesc = document.createElement('p');
        const textFoodDesc = document.createTextNode(item.food_description);
        foodDesc.appendChild(textFoodDesc);

        const price = document.createElement('p');
        const priceTag = document.createTextNode(item.food_price);
        price.appendChild(priceTag);

        const orderButton = document.createElement("button");
        orderButton.className = 'order-button';
        const buttonText = document.createTextNode('Add to Cart');
        myOrder.food_name = item.food_name;
        myOrder.food_price = item.food_price;
        orderButton.onclick = function(){
            console.log(myOrder);
            theOrder.push(myOrder);
            console.log(theOrder);
        }
        orderButton.appendChild(buttonText);

        const imgFood = document.createElement('img');
        imgFood.src="./assets/images/food2.jpg";
        imgFood.width = 150;
        imgFood.height = 200;
        imgFood.alt = 'bro';

        //add new information to card
        card.appendChild(foodName);
        foodName.appendChild(imgFood);
        foodName.appendChild(title);
        foodName.appendChild(foodDesc);
        foodName.appendChild(price);
        foodName.appendChild(orderButton);
        const element = document.getElementById("div1");
        element.appendChild(card)
    }

}

xhr.open('GET', './backend/get-all-food.php',true);
xhr.send();


function sortByCat(){

    var xhr = new XMLHttpRequest();
    xhr.onload = function(){
        console.log(JSON.parse(this.responseText));
        var data = JSON.parse(this.responseText);
        for(let item of data){
            console.log(item.food_name)
            const card = document.createElement("div");
            card.className = 'card';
    
            const foodName = document.createElement("div");
            foodName.className = 'food-name';
    
            const title = document.createElement('p');
            const textItem = document.createTextNode(item.food_name);
            title.className = 'food-name-title';
            title.appendChild(textItem);
    
            const foodDesc = document.createElement('p');
            const textFoodDesc = document.createTextNode(item.food_description);
            foodDesc.appendChild(textFoodDesc);
    
            const price = document.createElement('p');
            const priceTag = document.createTextNode(item.food_price);
            price.appendChild(priceTag);
    
            const orderButton = document.createElement("button");
            orderButton.className = 'order-button';
            const buttonText = document.createTextNode('Add to Cart');
            orderButton.appendChild(buttonText);
    
            const imgFood = documsent.createElement('img');
            imgFood.src="./assets/images/food2.jpg";
            imgFood.width = 150;
            imgFood.height = 200;
            imgFood.alt = 'bro';
    
            //const node = document.createTextNode("brooooo");
            card.appendChild(foodName);
            foodName.appendChild(imgFood);
            foodName.appendChild(title);
            foodName.appendChild(foodDesc);
            foodName.appendChild(price);
            foodName.appendChild(orderButton);

            const element = document.getElementById("div1");
            element.appendChild(card)
        }
    
    }
    
    xhr.open('GET', './backend/get-all-food.php',true);
    xhr.send();

}

function selectItem(item){
    console.log(item)
}