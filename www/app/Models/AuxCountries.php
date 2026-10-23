<?php
declare(strict_types=1);
namespace Com\Daw2\Models;

use Com\Daw2\Core\BaseDbModel;

class AuxCountries extends BaseDbModel
{
    public function getAll(): array {
        $sql = "SELECT * FROM aux_countries ORDER BY nombre_rol ASC";
        $query = $this->pdo->query($sql);
        return $query->fetchAll();
    }
}