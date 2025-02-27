<?php

/**
 * <b>Descripcion:</b> Clase que <br/>Gestiona las personas
 * <b>Caso de Uso:</b> PANTHER- Business <br/>
 *
 * @author Josué Nicolás Pinzón Villamil <a href = "mailto:jpinzon@j4sysol.com">jpinzon@j4sysol.com</a>
 */
class TiposDocumentos extends IRequest
{
    /**
     * Datos de la tabla "person"
     *
     * @var string
     */
    const NAME_TABLE = "documento";
    
    public static function init()
    {
        parent::$nameTable = self::NAME_TABLE;
        parent::$queryInsert = INTSERT_TIPODOCUMENTO;
        parent::$queryUpdate = UPDATE_TIPODOCUMENTO;
    }

    public static function updateParameter($object, $statement, $id)
    {
        $statement->bindParam(1, $object->tipoDocumento);
        $statement->bindParam(2, $object->numeroDocumento);
        $statement->bindParam(3, $id);
    }

    public static function insertParameter($object, $statement)
    {
        $statement->bindParam(1, $object->tipoDocumento);
        $statement->bindParam(2, $object->numeroDocumento);
    }
}
?>
