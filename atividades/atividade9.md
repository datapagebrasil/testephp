# Atividade 9

- [ ] Fazer uma api de validação, http://127.0.0.1:8000/cliente/1/validar-vendas Curl para http://127.0.0.1:8000/cliente/1/gerar-vendas (Atividade 3) capturando o retorno em formato json, tratando os itens das vendas verificando se o valor total de somando os itens(venda_itens.valor * venda_itens.quantidade) é igual ao venda.valor_pago  retornando o json semlhante ao a baixo de todas as vendas do cliente. 


```
{
    msg: "Validação de compras ",
    erro: 0,
    dados: [{
        id: 1,
        erro: 0,
        resultado: "Validado valores iguais",
        valorPago: 100.00,
        valorTotalItens: 100.00
    },{
        id: 2,
        erro: 1,
        resultado: "Valores divergentes",
        valorPago: 100.00,
        valorTotalItens: 90.00,
    }]
}
```

- [ ] Caso enviar um cliente inexistente 

```
{
    msg: "Cliente não encontrado",
    erro: 1,
    dados: [{
        mensagem: "Cliente id não encontrado id: 1"
    }]
}
```

(Evidências no evidencia.doc)

- [ ] - Retorno da consulta referente aos cliente id: 1 e 2
- [ ] - Retorno do exception de cliente não encontrado

---

Fim atividade 9