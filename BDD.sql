-- EXCLUINDO O BDD SE ELE EXISTIR
DROP DATABASE IF EXISTS resgateReciclavel;


-- CRIANDO O BDD
CREATE DATABASE resgateReciclavel;

-- USANDO O BDD
USE resgateReciclavel;

-- CRIANDO A TABELA USUARIO
CREATE TABLE Usuario(
	CodUsuario INT AUTO_INCREMENT PRIMARY KEY,
	Email VARCHAR(80) NOT NULL UNIQUE,
    Senha VARCHAR(60) NOT NULL,
    Nome VARCHAR(80) NOT NULL,
    CEP CHAR(9),
    Estado CHAR(2),
    Municipio VARCHAR(40),
    Bairro VARCHAR (40),
    Rua VARCHAR (40),
    Numero VARCHAR(6)
    );	

SELECT * FROM Usuario;
    
-- Criando um indice unico no campo Email
CREATE INDEX IDX_Email
	ON Usuario(Email);


-- CRIANDO A TABELA ANUNCIO
CREATE TABLE Anuncio(
	CodAnuncio INT AUTO_INCREMENT PRIMARY KEY,
    CodUsuario INT NOT NULL,
    StatusAnuncio BOOL NOT NULL,	
    Descricao VARCHAR(300),
    DataCriacaoAnuncio DATE,
    QuantidadeMaterial DECIMAL,
    Imagem VARCHAR(50),
    Estado CHAR(2),
    Municipio VARCHAR(40),
    Bairro VARCHAR (40),
    Rua VARCHAR (40),
    Numero VARCHAR(6) NOT NULL,
    CEP CHAR(9) NOT NULL
    );

-- CRIANDO TABELA MENSAGEM
CREATE TABLE Mensagem(
	CodMensagem INT AUTO_INCREMENT PRIMARY KEY,
	CodAnuncio INT NOT NULL, 
    CodUsuario INT NOT NULL, 
    CodAnunciante INT NOT NULL, 
    ConteudoMensagem VARCHAR(200) NOT NULL, 
    DataEnvio DATETIME NOT NULL
    );

-- Criando um indice unico no campo nome
CREATE INDEX IDX_Nome
	ON Usuario(Nome);

-- MODELAGEM 1:N DE USUÁRIO PARA ANUNCIO
ALTER TABLE Anuncio
	ADD CONSTRAINT FK_Usuario_Anuncio
    FOREIGN KEY(CodUsuario)
	REFERENCES Usuario(CodUsuario);


-- CRIANDO INDICE NO CAMPO ConteudoMensagem
-- CREATE INDEX IDX_ConteudoMensagem
--  ON Chat(ConteudoMensagem);
    
    
-- CRIANDO MODELAGEM 1:N DE ANUNCIO PARA CHAT
ALTER TABLE Mensagem
	ADD CONSTRAINT FK_ANUNCIO_MENSAGEM
    FOREIGN KEY(CodAnuncio)
    REFERENCES Anuncio(CodAnuncio);
    
-- CRIANDO MODELAGEM 1:N DE CHAT PARA MENSAGEM
ALTER TABLE Mensagem 
	ADD CONSTRAINT FK_USUARIO_MENSAGEM
    FOREIGN KEY(CodUsuario)
    REFERENCES Usuario(CodUsuario);
    
SELECT * FROM Anuncio JOIN Usuario ON Anuncio.CodUsuario = Usuario.CodUsuario WHERE Anuncio.CodUsuario != 1;

    
/*-- MODELAGEM 1:N DE USUARIO PARA ENDERECO
ALTER TABLE Endereco
	ADD CONSTRAINT FK_Usuario_Endereco
    FOREIGN KEY(CodUsuario)
    REFERENCES Usuario(CodUsuario);

-- CRIANDO UM INDICE NO CAMPO ENDERECO
-- CREATE INDEX IDX_Endereco
	-- ON Anuncio(Endereco);*/
    
-- MODELAGEM 1:N DE ENDERECO PARA ANUNCIO
/*ALTER TABLE Anuncio
	ADD CONSTRAINT FK_ENDERECO_ANUNCIO
    FOREIGN KEY(CodEndereco)
    REFERENCES Endereco(CodEndereco);
*/
    
