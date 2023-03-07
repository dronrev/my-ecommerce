const xmlhttp = new XMLHttpRequest();

xmlhttp.onload = function() {
  const myObj = JSON.parse(this.responseText);
  for(let item of myObj){
    const para = document.createElement("p");
    const node = document.createTextNode(item.food_name);
    para.appendChild(node);
    const element = document.getElementById("div1");
    element.appendChild(para);
    document.getElementById("demo").innerHTML = item.food_name;
  }
  console.log(myObj)
}
xmlhttp.open("GET", "./backend/get-all-food.php");
xmlhttp.send();