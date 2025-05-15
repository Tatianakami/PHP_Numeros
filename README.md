Analisador de Números Reais - Documentação
Badge em Desenvolvimento
Licença MIT

📌 Visão Geral
O Analisador de Números Reais é uma ferramenta web desenvolvida para análise e decomposição de números reais em suas partes constituintes: parte inteira e parte fracionária.
O projeto foi criado com propósitos educacionais, demonstrando conceitos fundamentais de:


<img src="assets/analisadorpng.png" alt="Formulário" width="600">


Processamento de números em PHP

Validação de formulários HTML

Estilização com CSS moderno

Interação cliente-servidor

🛠 Tecnologias Utilizadas
Tecnologia	Finalidade
HTML5	Estruturação da página web
CSS3	Estilização e efeitos visuais
PHP	Processamento do número no servidor
JavaScript	Interações básicas no cliente
⚙️ Funcionalidades
Análise Numérica
Decomposição em parte inteira e fracionária

Formatação padrão com 4 casas decimais

Validação de entrada do usuário

Interface
Design responsivo (funciona em dispositivos móveis)

Efeitos visuais com Glassmorphism

Feedback visual imediato

Segurança
Sanitização básica de entrada

Tratamento de erros

📦 Estrutura do Projeto
analisador-numeros-reais/
├── index.html          # Página principal com formulário
├── numero.php          # Lógica de processamento
├── style.css           # Estilos principais
├── README.md           # Esta documentação
└── assets/             # (Opcional) Pasta para recursos adicionais
🚀 Como Executar
Requisitos:

Servidor web com suporte a PHP (XAMPP, WAMP, ou similar)

Navegador moderno (Chrome, Firefox, Edge)

Instalação:

bash
git clone https://github.com/seu-usuario/analisador-numeros-reais.git
cd analisador-numeros-reais
Copie os arquivos para a pasta pública do seu servidor web

Acesso:

Abra http://localhost/analisador-numeros-reais no navegador

🧪 Testando o Sistema
Casos válidos:

3.1415 → Inteira: 3, Fracionária: 0.1415

-2.7182 → Inteira: -2, Fracionária: 0.7182

Casos inválidos:

Texto → Mensagem de erro

Campo vazio → Valor padrão (0)

📝 Licença
Este projeto está licenciado sob a Licença MIT. Consulte o arquivo LICENSE para obter detalhes.

🤝 Contribuições
Contribuições são bem-vindas! Siga estes passos:

Faça um fork do projeto

Crie uma branch (git checkout -b feature/nova-funcionalidade)

Commit suas alterações (git commit -m 'Adiciona nova funcionalidade')

Push para a branch (git push origin feature/nova-funcionalidade)

Abra um Pull Request

✉️ Contato
Para dúvidas ou sugestões:

Desenvolvedor: Tatiana Kami

linkedin.com/in/tatiana-kami

Issues: GitHub Issues

Nota sobre o Projeto: Este foi desenvolvido como exercício acadêmico/didático. Embora totalmente funcional, 
não recomendamos seu uso em ambientes de produção críticos sem adaptações adicionais.
