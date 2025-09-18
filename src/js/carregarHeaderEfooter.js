(function () {
  // Detecta se a página está dentro da pasta "pages" ou "backend" para ajustar caminhos relativos
  const path = location.pathname || '';
  const inPagesFolder = path.includes('/pages/');
  const inBackendFolder = path.includes('/backend/');
  const componentsBase = (inPagesFolder || inBackendFolder) ? '../components/' : './components/';

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
        console.error(err);
      });
  }

  function fileNameFromPath(p) {
    if (!p) return '';
    return p.split('/').pop();
  }

  function adjustHeaderPaths(headerEl) {
    if (!headerEl) return;

    const links = headerEl.querySelectorAll('[data-page]');
    links.forEach((a) => {
      const page = a.getAttribute('data-page');
      if (!page) return;

      if (inPagesFolder) {
        a.setAttribute('href', page === 'index.html' ? '../index.html' : page);
      } else if (inBackendFolder) {
        a.setAttribute('href', page === 'index.html' ? '../index.html' : `../pages/${page}`);
      } else {
        a.setAttribute('href', page === 'index.html' ? './index.html' : `./pages/${page}`);
      }
    });

    const logo = headerEl.querySelector('.navbar-brand img, img[alt="Logo"]');
    if (logo) {
      const logoPath = (inPagesFolder || inBackendFolder) ? '../assets/img/logo.png' : './assets/img/logo.png';
      logo.setAttribute('src', logoPath);
    }
  }

  function markActiveLink() {
    const links = document.querySelectorAll('#navbar .nav-link, a[data-page], a.nav-link');
    const currentPage = fileNameFromPath(location.pathname);

    links.forEach((link) => {
      const dataPage = link.getAttribute('data-page');
      const href = link.getAttribute('href') || '';
      const candidate = dataPage || href;
      const candidateFile = fileNameFromPath(candidate);

      if (candidateFile && candidateFile === currentPage) {
        link.classList.add('active');
      } else {
        link.classList.remove('active');
      }
    });
  }

  fetchComponent('header.html', 'topo', () => {
    adjustHeaderPaths(document.getElementById('topo'));
    markActiveLink();
  });

  fetchComponent('footer.html', 'rodape');
})();
