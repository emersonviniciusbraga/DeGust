

INSERT INTO pergunta(nome, tipo, formulario_idformulario) VALUES
('Nome', 'text', 1),
('E-mail', 'email', 1),
('Data Nasc.', 'date', 1),
('Peso', 'text', 1),
('Altura', 'text', 1),
('Gênero', 'radio', 1);

INSERT INTO alternativa(texto, valor, tipo, pergunta_idpergunta) VALUES
('Nome', '', 'text', 1),
('E-mail', '', 'email', 2),
('Data de Nasc.', '', 'date', 3),
('Peso (KG)', '', 'text', 4),
('Altura (m)', '', 'text', 5),
('Masc.', 'M', 'radio', 6),
('Femi.', 'F', 'radio', 6),
('Outros.', 'O', 'radio', 6);


SELECT * FROM pergunta;
SELECT * FROM alternativa;