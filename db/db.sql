CREATE DATABASE biblioteca;
USE biblioteca;

CREATE TABLE autores(
    id_autor INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    nacionalidade VARCHAR(100) NOT NULL,
    ano_nascimento INT NOT NULL
    );
    
CREATE TABLE livros(
    id_livro INT AUTO_INCREMENT PRIMARY KEY,
   	titulo VARCHAR(100) NOT NULL,
    genero VARCHAR(100) NOT NULL,
    ano_publicacao INT NOT NULL,
    FOREIGN KEY (id_autor) REFERENCES autores(id)
  	);
    
CREATE TABLE leitores(
    id_leitor INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone INT NOT NULL
    );
    
CREATE TABLE emprestiomos(
    id_emprestimo INT AUTO_INCREMENT PRIMARY KEY,
    data_emprestimo DATE NOT NULL,
    data_devolucao DATE NOT NULL,
    FOREIGN KEY (id_livro) REFERENCES livros(id),
    FOREIGN KEY (id_leitor) REFERENCES leitores(id)
    );