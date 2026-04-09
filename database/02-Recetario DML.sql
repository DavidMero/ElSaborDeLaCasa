USE ESDLC;

INSERT INTO cuentas (id_cuenta, nombre, correo, contraseña)
VALUES
('C0001', 'Juan Pérez', 'juan@example.com', 'pass123'),
('C0002', 'María Gómez', 'maria@example.com', 'mar123'),
('C0003', 'Carlos Ruiz', 'carlos@example.com', 'car789'),
('C0004', 'Ana Torres', 'ana@example.com', 'ana456');

INSERT INTO recetas (id_receta, nombre, descripcion, instrucciones, imagen, tiempo, dificultad, tecnicas_culinarias, tipo_cocina, valor_nutricional, fecha_publicacion)
VALUES
('R0001', 'Pasta Carbonara', 'Receta clásica italiana', 'Cocer pasta y mezclar con salsa.', 'carbonara.jpg', '20 Min', 'Medio', 'Caramelizar', 'Italiana', 650, '2024-01-10'),
('R0002', 'Sushi California Roll', 'Roll sencillo para principiantes', 'Enrollar arroz con aguacate y surimi.', 'sushi.jpg', '30 min', 'Hard', 'Ahumar', 'Japonesa', 400, '2024-02-15'),
('R0003', 'Tortilla Española', 'Receta tradicional', 'Freír patatas y huevo.', 'tortilla.jpg', '10 Min', 'Fácil', 'Plancha', 'Española', 520, '2024-03-02');

INSERT INTO ingredientes (id_ingrediente, nombre, ud_base, alergenos)
VALUES
('I0001', 'Huevo', 'ud', 'Huevos'),
('I0002', 'Leche', 'ml', 'Lactosa'),
('I0003', 'Harina', 'gr', 'Gluten'),
('I0004', 'Salsa de soja', 'ml', 'Soja'),
('I0005', 'Sésamo', 'gr', 'Sésamo');

INSERT INTO seguir (seguidor, seguido)
VALUES
('C0001', 'C0002'),
('C0001', 'C0003'),
('C0002', 'C0003'),
('C0003', 'C0001');

INSERT INTO interactuar (cuenta, receta, valoracion, comentario, votos_positivos, fecha_publicacion)
VALUES
('C0001', 'R0001', '9', 'Muy buena receta, fácil de seguir.', 12, '2024-01-12'),
('C0002', 'R0001', '7', 'Rica pero un poco salada.', 5, '2024-01-15'),
('C0003', 'R0002', '10', 'Perfecto sushi casero.', 20, '2024-02-17'),
('C0002', 'R0003', '8', 'Clásica y deliciosa.', 8, '2024-03-05');

INSERT INTO incluir (id_receta, id_ingrediente)
VALUES
('R0001', 'I0001'),
('R0001', 'I0002'), 
('R0002', 'I0004'),
('R0003', 'I0001'), 
('R0003', 'I0003');
