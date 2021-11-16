DROP DATABASE IF EXISTS fullday;
CREATE DATABASE fullday;
USE fullday;

CREATE TABLE participantes(
    id_participante INT AUTO_INCREMENT,
    apellidos VARCHAR(50),
    nombres VARCHAR(50),
    email VARCHAR(50),
    telefono VARCHAR(15),
    tipo VARCHAR(10),
    organizacion VARCHAR(150),
    aprobacion VARCHAR(5),
    pago VARCHAR(10),
    metodo varchar(10) DEFAULT NULL,
    monto FLOAT,
    PRIMARY KEY(id_participante)
);
