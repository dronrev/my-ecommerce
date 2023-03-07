function addName(){
    //this.sendData();
    var data = new FormData();


    //data.append('food_name',document.getElementById('prod-name').value);
    var data = [{
        'food_name' : document.getElementById('prod-name').value,
        'food_description' : document.getElementById('prod-desc').value,
        'food_cat' : document.getElementById('prod-cat').value,
        'food_price' : document.getElementById('prod-price').value
    }];

    console.log(data)
}

function sendData(){
    var xhr = XMLHttpRequest();

    xhr.open("POST","send-food-data.php",true);
    xhr.setRequestHeader("Content-type","application/json");
    xhr.send();
}