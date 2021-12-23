console.log("loaded");

var buttonElement = document.querySelector(".create_account_button");
var labelElementLabelsComplete = document.querySelector(".text_labels_complete");

var inputFirstname;
var inputName;
var inputGender;
var inputDescription;

buttonElement.addEventListener("click",function()
{
    inputFirstname = document.querySelector("#input-firstname").value;
    inputName = document.querySelector("#input-name").value;
    inputGender = document.querySelector("#input-gender").value;
    inputDescription = document.querySelector("#input-description").value;

    if(inputFirstname == "" || inputName == "" || inputGender == "" || inputDescription == "")
    {
        labelElementLabelsComplete.style.visibility = "visible";
        event.preventDefault();
    }
});