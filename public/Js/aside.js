const aside = document.querySelector('aside'); // ambil aside

const buttonIds = ["Home", "Note", "ToDo", "Team"];

buttonIds.forEach(id => {
    const button = document.getElementById(id);
    button.addEventListener("click", () => {
        const buttonRect = button.getBoundingClientRect();
        const asideRect = aside.getBoundingClientRect();
        const relativeTop = buttonRect.top - asideRect.top;
        
        Anomali.style.top = relativeTop + "px";
    });
});
