select 
    e.nome as Estado,
    c.nome as Cidade,
    regiao as Região
from estados e, cidades c
where e.id = c.estado_id;
  -- apartir do from ocorre uma filtro para coloca a cidade de acordo com a regiao e estado
select 
    c.nome as Cidade,
    e.nome as Estado,
    regiao as Região
from estados e
inner join cidades c 
    on e.id = c.estado_id
    -- apartir do from ocorre uma filtro para coloca a cidade de acordo com a regiao e estado