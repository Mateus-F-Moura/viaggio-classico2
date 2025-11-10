# Viaggio Classico

[![License](https://img.shields.io/github/license/Mateus-F-Moura/Viaggio-Classico)](LICENSE)
[![GitHub Stars](https://img.shields.io/github/stars/Mateus-F-Moura/Viaggio-Classico)](https://github.com/Mateus-F-Moura/Viaggio-Classico/stargazers)

## Sobre o Projeto

**Viaggio Classico** é um projeto CRUD completo, com frontend e backend desenvolvidos em **PHP puro**. Além das operações clássicas de cadastro, leitura, atualização e exclusão de registros, integra uma API externa de clima da [OpenMeteo](https://open-meteo.com/) para enriquecer a experiência do usuário com informações dinâmicas sobre condições meteorológicas nos destinos cadastrados.

Este repositório foi criado para demonstrar domínio de desenvolvimento web PHP sem frameworks, integração com APIs externas e atenção à organização e boas práticas, sendo ideal como amostra para recrutadores.

## Funcionalidades

- Cadastro, consulta, atualização e remoção de viagens (CRUD)
- Integração com a API OpenMeteo para exibir clima por localização
- Frontend responsivo e de fácil navegação
- Backend robusto em PHP, com código limpo e bem documentado
- Validações no frontend e backend
- Estrutura organizada, separando apresentação, lógica e dados
- Pronto para customização ou extensão

## Tecnologias Utilizadas

- **PHP** (backend, integração com API externa, renderização do frontend)
- **HTML5 e CSS3** (estrutura e apresentação visual)
- **MySQL** (persistência dos dados)
- **OpenMeteo API** (consumo de dados climáticos em tempo real)

## Estrutura do Projeto

```
.
├── index.php                # Página inicial/listagem
├── /pages                   # CRUD (create.php, update.php, etc.)
├── /includes                # Conexão com banco, controle de API e helpers
├── /assets                  # Imagens, CSS, JS
├── /sql                     # Script de criação/importação do banco
└── README.md
```

## Como rodar localmente

### Pré-requisitos

- PHP >= 7.x
- Servidor web (Apache, Nginx, ou embutido do PHP)
- MySQL/MariaDB
- Navegador web

### Passos

1. Clone o repositório:
    ```bash
    git clone https://github.com/Mateus-F-Moura/Viaggio-Classico.git
    cd Viaggio-Classico
    ```
2. Importe o script SQL (`/sql/viaggio_classico.sql`) no seu banco de dados.
3. Configure a conexão com o BD em `/includes/db.php`.
4. (Opcional) Configure variáveis/env para endpoint da OpenMeteo se desejar customizar.
5. Execute em um servidor web local e acesse `http://localhost/Viaggio-Classico/index.php`.

---

## Diferenciais do Projeto

- Integração real com API externa (OpenMeteo)
- Código limpo, separado e comentado
- Boas práticas de PHP e web clássica
- Pronto para customização, estudo e uso profissional
- Fácil entendimento por recrutadores; ideal para seleção de vagas PHP ou fullstack

---

**Este repositório foi estruturado para demonstrar habilidades reais de desenvolvimento web com PHP e integração de APIs externas. Sinta-se à vontade para explorar, executar ou entrar em contato!**
