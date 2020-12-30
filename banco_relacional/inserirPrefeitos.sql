select * from cidades;  -- aqui selecionar

INSERT INTO prefeitos -- aqui inserir os elementos
    (nome, cidade_id)
VALUES
    ('Rodrigo Neves', 2),
    ('Raquel Lyra', 3),
    ('Zenaldo Coutinho', null);

select * from prefeitos; -- aqui selecionar

INSERT INTO prefeitos
    (nome, cidade_id)
VALUES
    ('Rafael Greca', null);

INSERT INTO prefeitos  -- aqui inserir os elementos
    (nome, cidade_id)
VALUES
    ('Rodrigo Pinheiro', 3);
    -- como colocou chave unica, a chave estrageira não pode ser usada com id duplicada