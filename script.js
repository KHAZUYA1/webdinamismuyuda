document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".beli-btn");
    buttons.forEach(button => {
        button.addEventListener("click", () => {
            alert("Fitur pembelian akan segera tersedia!");
        });
    });
});
