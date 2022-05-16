export let renderNotification = (message, type) => {

    let notification = document.querySelector(".notification");
    let popup = document.querySelector('.notification-message')

    notification.classList.add("active")

    setTimeout(() => {
        notification.classList.remove("active")
    }, 5000);
    
    popup.innerHTML = message;

    


}
