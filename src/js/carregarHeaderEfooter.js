(function () {
  // Detecta se a página está dentro da pasta "pages" para ajustar caminhos relativos
  const inPagesFolder = location.pathname.includes('/pages/');
  const componentsBase = inPagesFolder ? '../components/' : './components/';

  function fetchComponent(fileName, elementId, onLoaded) {
    fetch(componentsBase + fileName)
      .then((response) => {
        if (!response.ok) throw new Error(`${fileName} não pôde ser carregado: ${response.status}`);
        return response.text();
      })
      .then((html) => {
        const el = document.getElementById(elementId);
        if (el) el.innerHTML = html;
        if (typeof onLoaded === 'function') onLoaded();
      })
      .catch((err) => {
        // Log mínimo; pode ajustar para mostrar mensagem na UI se desejar
        console.error(err);
      });
  }

  function fileNameFromPath(path) {
    if (!path) return '';
    return path.split('/').pop();
  }

  function adjustHeaderPaths(headerEl) {
    if (!headerEl) return;

    // Ajusta links marcados com data-page (definidos no componente header)
    const links = headerEl.querySelectorAll('[data-page]');
    links.forEach((a) => {
      const page = a.getAttribute('data-page');
      if (!page) return;

      if (inPagesFolder) {
        // Página está em src/pages -> links para outras páginas devem ser relativos a pages/
        a.setAttribute('href', page === 'index.html' ? '../index.html' : page);
      } else {
        // Página está em src (root) -> links para páginas devem apontar para ./pages/...
        a.setAttribute('href', page === 'index.html' ? './index.html' : `./pages/${page}`);
      }
    });

    // Ajusta caminho do logo/imagem dentro do header
    const logo = headerEl.querySelector('.navbar-brand img, img[alt="Logo"]');
    if (logo) {
      logo.setAttribute('src', inPagesFolder ? '../img/logo.png' : './img/logo.png');
    }
  }

  function markActiveLink() {
    const links = document.querySelectorAll('#navbar .nav-link, a[data-page], a.nav-link');
    const currentPage = fileNameFromPath(location.pathname);

    links.forEach((link) => {
      const dataPage = link.getAttribute('data-page');
      const href = link.getAttribute('href');
      const candidate = dataPage || href || '';
      const candidateFile = fileNameFromPath(candidate);

      if (candidateFile === currentPage) {
        link.classList.add('active');
      } else {
        link.classList.remove('active');
      }
    });
  }

  // Carrega header e ajusta caminhos / marca link ativo
  fetchComponent('header.html', 'topo', () => {
    adjustHeaderPaths(document.getElementById('topo'));
    markActiveLink();
  });

  // Carrega footer sem ajustes adicionais
  fetchComponent('footer.html', 'rodape');
})();
