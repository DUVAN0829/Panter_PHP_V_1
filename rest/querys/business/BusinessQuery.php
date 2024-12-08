<?php
/**
 * <b>Descripcion:</b> Clase que <br/> contiene las consultas de la aplicación
 * <b>Caso de Uso:</b> PANTHER-Business <br/>
 *
 * @author Josué Nicolás Pinzón Villamil <a href = "mailto:jpinzon@j4sysol.com">jpinzon@j4sysol.com</a>
 */

/**
 * Constante de consultas base de datos
 */
define("INTSERT_PERSON", "INSERT INTO person(name, lastName, phone, documentType, documentNumber, birthPlace, birthDepartment, birthDate, expeditionPlace, expeditionDepartment, bloodType) VALUES (?,?,?,?,?,?,?,?,?,?,?);");
define("UPDATE_PERSON", "UPDATE person SET name=?, lastName=?, phone=?, documentType=?, documentNumber=?, birthPlace=?, birthDepartment=?, birthDate=?, expeditionPlace=?, expeditionDepartment=?, bloodType=? WHERE id=?;");


define("INTSERT_TIPODOCUMENTO", "INSERT INTO documento(tipoDocumento, numeroDocumento ) VALUES (?,?);");
define("UPDATE_TIPODOCUMENTO", "UPDATE documento SET tipoDocumento=?, numeroDocumento=?, WHERE id=?;");

?>
