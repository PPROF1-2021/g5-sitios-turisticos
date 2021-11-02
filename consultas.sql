use clickar;
INSERT INTO Usuario (idUsuario, Mail, Contraseña, Nombre, Apellido, Tipo_Documento, Numero_Documento) VALUES 
('0001', 'cristiandellizzotti@gmail.com', '987654cC', 'Cristian', 'Dellizzotti', 'Dni', '36406422');

SELECT * FROM Usuario where Nombre='Juan';
SELECT * FROM Usuario where Contraseña='123456';

INSERT INTO Destinos (Codigo_Postal, Localidad, Provincia, idUsuario) VALUES 
('3200', 'Concordia', 'Entre Ríos', '0001');

SELECT * FROM Destinos;
UPDATE Destinos SET Localidad = 'Chajarí' WHERE Codigo_Postal = 3200;

SELECT * FROM Destinos;
UPDATE Destinos SET Localidad = 'Jesus María', Provincia ='Córdoba' 
WHERE Codigo_Postal = '3200';

SELECT * FROM Destinos;
DELETE FROM Destinos WHERE Localidad = 'Jesus María';