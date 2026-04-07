// Checking to see if an email is in use

const exampleTextBox = document.querySelector("#example-email");
exampleTextBox.addEventListener('keyup', checkEmail);

async function checkEmail(event) {
	let emailMsg = event.target.parentNode.querySelector(".email-msg");
	emailMsg.innerText = "";
	
	let userEmail = event.target.value;
	const response = await fetch(`email/checker.php?email=${userEmail}`);
	console.log("this is the response object:", response);
	
	let emailExistsAlready = await response.json();
	console.log("this is the Promise object: ", emailExistsAlready);
	
	if(emailExistsAlready["status"] == 0){
		emailMsg.innerText = emailExistsAlready["message"];
	}
}


// Loads content into the HTML page
// In this case, the content is just random stuff

const loadButton = document.querySelector("#load-content");
const loadingArea = document.querySelector("#load-content-here");

loadButton.addEventListener('click', loadContent);

const sendButton = document.querySelector("#send-data");
sendButton.addEventListener('click', sendFormData);



function loadContent(){
	const request = new Request("page-content/load.php",
		{
			method: "POST",
			body: JSON.stringify({
				exampledata: "example",
				exampledata2: "2"
			})
		});

	fetch(request).then((response) =>
	{
		if(!response.ok){
			console.error("something went wrong");
			//should add code to alert the user and explain what went wrong
		}
		return response.text();
	})
	.then((responseText) =>
	{
		console.log(responseText);
		loadingArea.innerText = responseText;
	});
}

function sendFormData(){
	const email = document.querySelector("#example-email");
	const formData = new FormData();
	formData.append("email", email.value);
	
	const request = new Request("page-content/sendFormData.php",
	{
		method: "POST",
		body: formData
	});

	fetch(request).then((response) =>
	{
		if(!response.ok){
			console.error("something went wrong");
		}
		return response.text();
	})
	.then((responseText) =>
	{
		console.log(responseText);
		loadingArea.innerText = responseText;
	});
}