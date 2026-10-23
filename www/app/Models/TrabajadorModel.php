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

    public function getFilterBy(array $filtros): array
    {
        $sql = self::SELECT_FROM;
        $values = [];
        if (!empty($filtros['username'])) {
            $sql .= " WHERE username LIKE :username";
            $values["username"] = "%" . $filtros['username'] . "%";
        } elseif (!empty($filtros['id_rol'])) {
            $sql .= " WHERE t.id_rol LIKE :id_rol";
            $values["id_rol"] = (int)$filtros['id_rol'];
        } elseif (!empty($filtros['min_salario']) || !empty($filtros['max_salario'])) {
            if (!empty($filtros['min_salario'])) {
                $salarConditions[] = "salarioBruto >= :min_salario";
                $values["min_salario"] = (int)$filtros['min_salario'];
            }
            if (!empty($filtros['max_salario'])) {
                $salarConditions[] = "salarioBruto >= :max_salario";
                $values["max_salario"] = (int)$filtros['max_salario'];
            }
            $sql .= " WHERE " . implode(" AND ", $salarConditions);
        } elseif (!empty($filtros['min_retencion']) || !empty($filtros['max_retencion'])) {
            if (!empty($filtros['min_retencion'])) {
                $salarConditions[] = "salarioBruto >= :min_retencion";
                $values["min_retencion"] = (int)$filtros['min_retencion'];
            }
            if (!empty($filtros['max_retencion'])) {
                $salarConditions[] = "salarioBruto >= :max_retencion";
                $values["max_retencion"] = (int)$filtros['max_retencion'];
            }
            $sql .= " WHERE " . implode(" AND ", $salarConditions);
        } elseif (!empty($filtros['id_country']) && is_array($filtros['id_country'])) {
            $countries = [];
            $i = 1;
            foreach ($filtros['id_country'] as $idCountry) {
                $countries[":id_country{$i}"] = $idCountry;
                $i++;
            }
            $claves = array_keys($countries);
            $sql .= " WHERE " . implode(" AND ", $claves);
            $values = array_merge($values, $countries);
        }
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($values);
        return $stmt->fetchAll();
    }
}