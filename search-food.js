const userCardTemplate = document.querySelector("[data-user-template]");
const foodCardContainer = document.querySelector("[data-food-container]");
const searchInput = document.querySelector("[data-search-input]");
const mainCourseSort = document.querySelector("[data-maincourse]");

let foods = [];

function filterMainCourse(category){
    //var newData = foods.filter(data => data.food_cat != category);
    foods.forEach(foody=>{
        const filteredFood = foody.food_cat.includes(category);
        foody.element.classList.toggle('hide',!filteredFood);
    })
}

function clearFilter(){
    foods.forEach(foody=>{
        foody.element.classList.remove("hide");
    })
}

searchInput.addEventListener("input",e=>{
    const value = e.target.value.toLowerCase();
    foods.forEach(food=>{
        const findFood = food.name.toLowerCase().includes(value)
        food.element.classList.toggle('hide',!findFood);
    })
})

fetch('./backend/get-all-food.php')
.then(res=> res.json())
.then(
    data=>{
        console.log(data)
        foods = data.map(food=>{
            const card = userCardTemplate.content.cloneNode(true).children[0];

            const title = card.querySelector("[data-food-title]");
            const desc = card.querySelector("[data-food-description]");
            const price = card.querySelector("[data-food-price]");
    
            title.textContent = food.food_name
            desc.textContent = food.food_description;
            price.textContent = "RM "+food.food_price;

            foodCardContainer.append(card);
            return { name : food.food_name, food_cat : food.food_category , element : card}
        })
    }
)