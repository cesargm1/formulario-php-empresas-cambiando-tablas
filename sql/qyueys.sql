-- Listar todos los empleados mostrando su nombre, apellidos y el nombre de la empresa donde trabajan (si trabajan en alguna).

SELECT name, lastName FROM empleados WHERE name IS null;

-- Contar el número total de empleados registrados.

SELECT count(*) FROM empleados;

-- Listar los empleados que viven en una población específica, como "Madrid"

SELECT * FROM empleados WHERE poblation = "Madrid";

-- Mostrar todas las empresas junto con el número de empleados asignados a cada una

SELECT * FROM company.name (SELECT empleados.name(count*));
SELECT com.name, (SELECT COUNT(*) FROM empleados e WHERE e.cif = com.cif) FROM company com;

-- Actualizar el número de teléfono de un empleado específico usando su dni como identificador
    UPDATE empleados  SET phone = NULL  WHERE  dni = IS NOT NULL;
 
 -- Eliminar una empresa de la base de datos asegurando que no queden registros huérfanos.

    DELETE FROM company WHERE cif = 12312; -- En el sql usaremos la restricion ON DELETE CASCADE






