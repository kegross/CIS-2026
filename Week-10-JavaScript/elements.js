const firstParagraph = document.querySelector("p");

// console.log(firstParagraph.innerText);

// console.log(firstParagraph.innerHTML);

const myNewElement = document.createElement("a");

myNewElement.setAttribute("href", "https://csnlinux.genesee.edu/~kgross1/");

myNewElement.innerText = "Here's a link to the main page for CIS 215!";

// const mainElements = document.getElementsByTagName("main");

// mainElements[0].append(myNewElement);

// const firstLink = document.querySelector("a");

// firstLink.before(myNewElement);

const allParagraphs = document.getElementsByTagName("p");

const secondPar = allParagraphs[1];

// secondPar.remove();

secondPar.classList.add("exampleclass");

secondPar.style.setProperty("")