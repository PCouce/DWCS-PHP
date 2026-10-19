<?php
declare(strict_types=1);

namespace Com\Daw2\Models;

use Com\Daw2\Core\BaseDbModel;
use PDO;
use PDOException;

class TrabajadorModel extends BaseDbModel
{
    private const string SELECT_FROM = "SELECT t.*, art.nombre_rol, ac.country_name FROM trabajadores t LEFT JOIN aux_rol_trabajador art ON art.id_rol = t.id_rol LEFT JOIN aux_countries ac ON ac.id = t.id_country";
    public function getTrabajadores(): array
    {
        $trabajadores = $this->pdo->query('SELECT * FROM trabajadores')->fetchAll();
        var_dump($trabajadores);
        return $trabajadores;
    }
    public function getAllTrabajadores(): array
    {
        $sql = self::SELECT_FROM;
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }

    public function getAllTrabajadoresOrdenados(): array
    {
        $sql = self::SELECT_FROM . " ORDER BY salarioBruto DESC";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }
}