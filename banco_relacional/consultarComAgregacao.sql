select
    regiao as 'Região',
    sum(populacao) as Total
from estados
group by regiao
order by Total desc
-- mostra a população de todas sa regioes
select
    avg(populacao) as Total
from estados
-- mostrat o total de população, somando todos os paises