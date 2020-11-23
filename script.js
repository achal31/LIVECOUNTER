// api url 
const api_url =
    "https://api.covid19india.org/data.json";

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
getapi(api_url);

// Function to hide the loader 
function hideloader() {
    document.getElementById('loading').style.display = 'none';
}
// Function to define innerHTML for HTML table 
function show(data) {
    let tab =
        `<tr> 
          <th>Daily Confirmed</th> 
          <th>Daily deceased</th> 
          <th>Daily recovered</th> 
          <th>date</th> 
          <th>dateymd</th> 
          <th>totalconfirmed</th> 
          <th>totaldeceased</th> 
          <th>totalrecovered</th> 
         </tr>`;

    // Loop to access all rows  
    for (let r of data.cases_time_series) {
        tab += `<tr>  
    <td>${r.dailyconfirmed} </td> 
    <td>${r.dailydeceased} </td> 
    <td>${r.dailyrecovered} </td> 
    <td>${r.date}</td> 
    <td>${r.dateymd}</td>  
    <td>${r.totalconfirmed}</td>    
    <td>${r.totaldeceased}</td>  
    <td>${r.totalrecovered}</td>         
</tr>`;
    }
    // Setting innerHTML as tab variable 
    document.getElementById("employees").innerHTML = tab;
}