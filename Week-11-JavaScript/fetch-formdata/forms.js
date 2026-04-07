const form = document.getElementById("form");
form.addEventListener("submit", ajaxSubmit);  // This takes precedence over the action of the form

// This will hijack the formsubmit. Instead of it going to form/formSubmit.php, the JS here will handle it.
// This is faster, but typically prevents someone who disables JS. In this case, the form will still work because instead of just using JS, we use JS to say "use me instead"
// If the JS doesn't function, the "use me instead" also doesn't function and the page does the action as normal.
async function ajaxSubmit(event){
	event.preventDefault();  // if this isn't here, the form will go through anyway. JS only beats the form to the event, it doesn't steamroll it.

	const formData = new FormData(form);  // FormData is for specifically transferring form data. It needs to be the form element.
	const request = new Request("form/formSubmit.php",
	{
		method: "POST",
		body: formData
	});

	const response = await fetch(request);
	console.log("this is the response object:", response); //this just gives information about the response
	const responseBody = await response.text();
	console.log("this is the response body ", responseBody);

	const loadingArea = document.querySelector("#load-content-here");

	// this allows xss. If you add this img element to the form it will pop up an alert.
	// <img src=x onerror=alert('hello!')>
	loadingArea.innerHTML = responseBody;
	// further reading here: https://developer.mozilla.org/en-US/docs/Web/Security/Attacks/XSS

	// the correct thing:
	// loadingArea.innerText = responseBody;
}

// to demonstrate that this form will still work with JavaScript disabled:
// in FireFox, navigating to the URL about:config
// and setting javascript.enable to false
// in Chrome, f12 to open DevTools, f1 to open settings, Debugger section -> disable JavaScript