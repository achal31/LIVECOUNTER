// api url 
const url =
    "https://api.covid19india.org/state_district_wise.json";

// Defining async function 
async function getapi(url) {

    // Storing response 
    const response = await fetch(url);

    // Storing data in form of JSON 
    var data = await response.json();
    console.log(data);
    if (response) {
        hideloader();
    }
    show(data);
}
// Calling that async function 
getapi(url);

// Function to hide the loader 
function hideloader() {
    document.getElementById('loading').style.display = 'none';
}
// Function to define innerHTML for HTML table 
function show(data) {
    // Loop to access all rows  


    var eq = JSON.parse(data);
    alert(eq[0][0][0][1]);

    // Setting innerHTML as tab variable
}