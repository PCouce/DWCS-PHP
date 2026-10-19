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
}