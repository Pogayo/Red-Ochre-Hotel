let form=document.getElementsByTagName("form")[0];

form.addEventListener('submit', ($event)=>{
    $event.preventDefault();
    form.reset();
    formhandler();

});

function formhandler(){
    let message=document.createElement("P");
    message.classList.add("center-text");
    message.innerHTML="Thank you for your query. You will be contacted as soon as possible.";
    messageDiv=document.getElementById("message");
    if (messageDiv.childElementCount==0){
        messageDiv.appendChild(message);
        messageDiv.style.backgroundColor="#125511";
        messageDiv.style.width='100%'
    }

}