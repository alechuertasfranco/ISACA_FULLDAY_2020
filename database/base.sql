DROP DATABASE IF EXISTS fullday;
CREATE DATABASE fullday;
USE fullday;

CREATE TABLE participantes(
    id_participante INT AUTO_INCREMENT,
    correo VARCHAR(50),
    apellidos VARCHAR(50),
    nombres VARCHAR(50),
    telefono VARCHAR(15),
    tipo VARCHAR(10),
    pago VARCHAR(10),
    monto FLOAT,
    PRIMARY KEY(id_participante)
);
INSERT INTO participantes VALUES(null, 'max.alec.huertas@gmail.com', 'HUERTAS', 'MAX', '949171842', 'TEMPRANO', 'COMPLETO', 15);
