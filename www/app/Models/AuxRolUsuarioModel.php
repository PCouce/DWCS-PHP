<?php
declare(strict_types=1);
namespace Com\Daw2\Models;

use Com\Daw2\Core\BaseDbModel;

class AuxRolUsuarioModel extends BaseDbModel
{
    public function getAll(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM `aux_rol` ORDER BY orden ASC");
        return $stmt->fetchAll();
    }
}