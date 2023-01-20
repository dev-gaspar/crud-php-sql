# crud-php-sql (php 5.6.33)

El proyecto CRUD de Facturas es una aplicación web desarrollada en PHP y MySQL que permite llevar un registro de las facturas de una empresa.

## Configuracion de base de datos

- Crear una bd que se llame facturas y dentro de esta ejecutar esta query desde un manejador de base de datos(mi caso utilieze phpMyAdmin) para crear la tabla que se utilizara para guardar los datos:

```sql:
CREATE TABLE facturas (
    numero INT PRIMARY KEY,
    fecha DATE NOT NULL,
    cliente VARCHAR(255) NOT NULL,
    monto DECIMAL(10,2) NOT NULL
);
```

- Asignar los valores correspondientes de las credenciales de la base de datos en el archivo bd.php que esta dentro de la carpeta incluides del proyecto:

```php:
$host = "localhost";
$username = "root";
$password = "";
$dbname = "facturas";
);
```

- Todo estara listo, te dejo adicional una query que inserta 15 datos de prueba dentro de la tabla facturas:

```sql:
INSERT INTO facturas (numero, fecha, cliente, monto)
VALUES (1, '2022-01-01', 'Juan Perez', 100),
       (2, '2022-01-02', 'Maria Rodriguez', 200),
       (3, '2022-01-03', 'Carlos Hernandez', 300),
       (4, '2022-01-04', 'Ana Lopez', 400),
       (5, '2022-01-05', 'Pedro Garcia', 500),
       (6, '2022-01-06', 'Luis Ortiz', 600),
       (7, '2022-01-07', 'Sofia Gomez', 700),
       (8, '2022-01-08', 'Juan Pabllo', 800),
       (9, '2022-01-09', 'Mercedes Jimenez', 900),
       (10, '2022-01-10', 'Alfredo Hernandez', 1000),
       (11, '2022-01-11', 'Evelyn Aguilar', 1100),
       (12, '2022-01-12', 'Andres Hernandez', 1200),
       (13, '2022-01-13', 'Ericka Hernandez', 1300),
       (14, '2022-01-14', 'Elsy Romero', 1400),
       (15, '2022-01-15', 'Ana Cristina', 1500);
```

## Vistas del crud:

![Vista de listado de facturas](https://raw.githubusercontent.com/dev-gaspar/crud-php-sql/main/assets/inicio.png)

![Vista de listado de facturas](https://raw.githubusercontent.com/dev-gaspar/crud-php-sql/main/assets/nueva_factura.png)

![Vista de listado de facturas](https://raw.githubusercontent.com/dev-gaspar/crud-php-sql/main/assets/editar_factura.png)
