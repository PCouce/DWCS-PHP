<?php
declare(strict_types=1);
namespace Com\Daw2\Models;

use Com\Daw2\Core\BaseDbModel;
use Com\Daw2\Libraries\SQLConditions;

class UsuarioModel extends BaseDbModel {

    private const SELECT = "SELECT u.nombre, ar.rol, u.email, u.last_date, u.idioma, u.baja, u.id_rol";
    private const FROM = " FROM usuario_sistema u LEFT JOIN aux_rol ar ON ar.id_rol = u.id_rol";
    private const SELECT_COUNT = "SELECT COUNT(*) as total";
    public function getFilterBy(array $filtros): array
    {
        $sql = self::SELECT . self::FROM;

        $sqlConditions = $this->generateWhereByFilter($filtros);
        $sql .= $sqlConditions->whereSQL;

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($sqlConditions->values);
        return $stmt->fetchAll();
    }

    public function getCountFilterBy(array $filtros): int
    {

    }

    private function generateWhereByFilter(array $filtros): SQLConditions
    {
        $condiciones = [];
        $values = [];

        if (!empty($filtros['email'])) {
            $condiciones[] = "email LIKE :email";
            $values["email"] = "%" . $filtros['email'] . "%";
        }
        if (!empty($filtros['username'])) {
            $condiciones[] = "nombre LIKE :username";
            $values["username"] = "%" . $filtros['username'] . "%";
        }
        if (!empty($filtros['id_rol']) && is_array($filtros['id_rol'])) {
            $roles = [];
            $i = 1;
            foreach($filtros['id_rol'] as $idRol) {
                $roles[":id_rol{$i}"] = $idRol;
                $i++;
            }
            $claves = array_keys($roles);
            $condiciones[] =  "u.id_rol IN (" . implode(", ", $claves) . ")";
            $values = array_merge($values, $roles);
        }

        if ($condiciones !== []) {
            return new SQLConditions(" WHERE " . implode(" AND ", $condiciones), $values);
        } else {
            return new SQLConditions("", []);
        }
    }
}