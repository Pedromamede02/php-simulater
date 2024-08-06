const express = require('express');
const path = require('path');

const app = express();
const PORT = process.env.PORT || 3000;

// Define o diretório de arquivos estáticos (considerando que o frontend está na mesma pasta do backend)
app.use(express.static(path.join(__dirname, 'index.html')));

// Rota para a página inicial
app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, 'index.html'));
});

// Inicia o servidor
app.listen(PORT, () => {
    console.log(`Servidor rodando na porta ${PORT}`);
});
