fetch("./header.html")
  .then((response) => response.text())
  .then((data) => {
    document.getElementById("topo").innerHTML = data;

    // Após carregar o header, marque a página atual como ativa
    const links = document.querySelectorAll("#navbar .nav-link");
    const currentPage = location.pathname.split("/").pop();

    links.forEach((link) => {
      if (link.getAttribute("data-page") === currentPage) {
        link.classList.add("active");
      } else {
        link.classList.remove("active");
      }
    });
  });
fetch("./footer.html")
  .then((response) => response.text())
  .then((data) => {
    document.getElementById("rodape").innerHTML = data;
  });
