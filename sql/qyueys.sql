-- Listar todos los empleados mostrando su nombre, apellidos y el nombre de la empresa donde trabajan (si trabajan en alguna).

SELECT name, lastName FROM empleados WHERE name IS null;

-- Contar el número total de empleados registrados.

SELECT count(*) FROM empleados;

-- Listar los empleados que viven en una población específica, como "Madrid"

SELECT * FROM empleados WHERE poblation = "Madrid";

-- Mostrar todas las empresas junto con el número de empleados asignados a cada una

SELECT *