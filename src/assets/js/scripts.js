const tarjetas = document.querySelectorAll(".tarjeta");

tarjetas.forEach(tarjeta => {
    tarjeta.addEventListener("click", () => {
        const id = tarjeta.getAttribute("data-id");
        window.location.href = `./pages/receta.php?id=${id}`;
    });
});