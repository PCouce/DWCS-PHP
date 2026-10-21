<?php
declare(strict_types=1);
namespace Com\Daw2\Models;
use Com\Daw2\Core\BaseDbModel;
use PDO;

class TrabajadorModel extends BaseDbModel
{
    private const string SELECT_FROM = "SELECT username, salarioBruto, retencionIRPF, nombre_rol, country_name
                                        FROM trabajadores t
                                        JOIN aux_countries ac ON ac.id = t.id_country
                                        JOIN aux_rol_trabajador art ON art.id_rol = t.id_rol";
    public function getTrabajadores() : array
    {
        $trabajadores = $this->pdo->query(
        self::SELECT_FROM)->fetchAll(PDO::FETCH_ASSOC);
        return $trabajadores;
    }

    public function getTrabajadoresOrdenados() : array
    {
        $trabajadores = $this->pdo->query(
            "SELECT username, salarioBruto, retencionIRPF, activo, nombre_rol, country_name
                FROM trabajadores t
                JOIN aux_countries ac ON ac.id = t.id_country
                JOIN aux_rol_trabajador art ON art.id_rol = t.id_rol
                ORDER BY salarioBruto DESC"
        )->fetchAll(PDO::FETCH_ASSOC);
        return $trabajadores;
    }

    public function getTrabajadoresStandard() : array
    {
        $trabajadores = $this->pdo->query(
            "SELECT username, salarioBruto, retencionIRPF, activo, nombre_rol, country_name
                FROM trabajadores t
                JOIN aux_countries ac ON ac.id = t.id_country
                JOIN aux_rol_trabajador art ON art.id_rol = t.id_rol
                WHERE art.nombre_rol LIKE 'standard'"
        )->fetchAll(PDO::FETCH_ASSOC);
        return $trabajadores;
    }

    public function getTrabajadoresPorNombre() : array
    {
        $trabajadores = $this->pdo->query(
            "SELECT username, salarioBruto, retencionIRPF, activo, nombre_rol, country_name
                FROM trabajadores t
                JOIN aux_countries ac ON ac.id = t.id_country
                JOIN aux_rol_trabajador art ON art.id_rol = t.id_rol
                WHERE username LIKE 'Carlos%'"
        )->fetchAll(PDO::FETCH_ASSOC);
        return $trabajadores;
    }

    public function getTrabajadoresFiltros(array $datos = []) : array
    {
        if (count($datos) > 0) {
            if ($datos['id_rol'] !== "") {
                $sql = self::SELECT_FROM . " WHERE t.id_rol LIKE :id_rol";
                $stmt = $this->pdo->prepare($sql);
                $stmt->execute(['id_rol' => $datos['id_rol']]);

                return $trabajadores = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            if ($datos['nombre'] !== "") {
                $sql = self::SELECT_FROM . " WHERE username LIKE :username";
                $stmt = $this->pdo->prepare($sql);
                $datos['username'] = "%" . $datos['nombre'] . "%";
                $stmt->execute(['username' => $datos['username']]);

                return $trabajadores = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            if ($datos['max_salario'] !== "" && $datos['min_salario'] !== "") {
                $sql = self::SELECT_FROM . " WHERE salarioBruto >= :maxSalario && salarioBruto <= :minSalario";
                $stmt = $this->pdo->prepare($sql);
                $stmt->execute(['maxSalario' => $datos['max_salario'], 'minSalario' => $datos['min_salario']]);
            }
        }

                return $trabajadores = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
        }

        $sql = self::SELECT_FROM;
        $query = $this->pdo->query($sql);
        $trabajadores = $query->fetchAll(PDO::FETCH_ASSOC);

        return $trabajadores;
    }

    public function getRoles() : array
    {
        $sql = "SELECT * FROM aux_rol_trabajador";
        $query = $this->pdo->query($sql);
        $roles = $query->fetchAll(PDO::FETCH_ASSOC);
        return $roles;
    }
}