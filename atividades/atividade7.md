# Atividade 7

- Fazer a rota GET http://127.0.0.1:8000/cliente/todas-vendas-pdf esta rota, mesma dos anteriores porém de todos os clientes com ou sem vendas, gerando em PDF.
  `Teste PHP - Data de hoje`
  Colunas:
  **Cliente Nome, Codigo Nota fiscal, Data Venda, Valor Total**
  Gerando um pdf para download

```
{
    msg: "Ok pdf gerado ",
    erro: 0,
    dados: {
        url: "https://localhost:7081/arquivos/arquivo.pdf"
    }
}
```

Ai ao executar a rota https://localhost:7081/arquivos/arquivo.pdf ele retorna o download do pdf

(Evidências no evidencia.doc)

- [ ] - Retorno json da criação do pdf
- [ ] - Print do pdf gerado aberto

---

Fim atividade 7
