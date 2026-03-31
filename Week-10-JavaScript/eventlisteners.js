const firstButton = document.querySelector("#button-id");

firstButton.addEventListener("click", () => {
    console.log("Hello!");
}
    );

const radioList = document.querySelectorAll("[type=radio]");

// const body = document.querySelector("body");

// for(const radioButton of radioList){
//     radioButton.addEventListener("focus", () => {
//         const color = radioButton.value;
//         body.style.setProperty("background-color", color);
//     });
//     radioButton.addEventListener("blur", () => {
//         body.style.setProperty("background-color", "white");
//     });
// }

// const checkbox = document.querySelector("[type=checkbox]");

// checkbox.addEventListener("click", (event) => {
//     event.preventDefault();
//     console.log("yes");
// });