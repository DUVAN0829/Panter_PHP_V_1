<?php

/**
 * <b>Descripcion:</b> Clase que <br/>contiene los usuarios de la aplicación
 * <b>Caso de Uso:</b> PANTHER-Seguridad <br/>
 *
 * @author Josué Nicolás Pinzón Villamil <a href = "mailto:jpinzon@j4sysol.com">jpinzon@j4sysol.com</a>
 */
class Person
{
    /**
     * Identificador de la clase
     *
     * @var float Id
     */
    public $id;

    /**
     * Nombre de usuario
     *
     * @var string name
     */
    public $name;

    /**
     * Apellido de usuario
     *
     * @var string lastName
     */
    public $lastName;

    /**
     * Teléfono de usuario
     *
     * @var string phone
     */
    public $phone;

    /**
     * Tipo de documento
     *
     * @var string documentType
     */
    public $documentType;

    /**
     * Número de documento
     *
     * @var string documentNumber
     */
    public $documentNumber;

    /**
     * Lugar de nacimiento
     *
     * @var string birthPlace
     */
    public $birthPlace;

    /**
     * Departamento de nacimiento
     *
     * @var string birthDepartment
     */
    public $birthDepartment;

    /**
     * Fecha de nacimiento
     *
     * @var string birthDate
     */
    public $birthDate;

    /**
     * Lugar de expedición del documento
     *
     * @var string expeditionPlace
     */
    public $expeditionPlace;

    /**
     * Departamento de expedición del documento
     *
     * @var string expeditionDepartment
     */
    public $expeditionDepartment;

    /**
     * Tipo de sangre
     *
     * @var string bloodType
     */
    public $bloodType;

    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return the $lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return the $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return the $documentType
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * @return the $documentNumber
     */
    public function getDocumentNumber()
    {
        return $this->documentNumber;
    }

    /**
     * @return the $birthPlace
     */
    public function getBirthPlace()
    {
        return $this->birthPlace;
    }

    /**
     * @return the $birthDepartment
     */
    public function getBirthDepartment()
    {
        return $this->birthDepartment;
    }

    /**
     * @return the $birthDate
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @return the $expeditionPlace
     */
    public function getExpeditionPlace()
    {
        return $this->expeditionPlace;
    }

    /**
     * @return the $expeditionDepartment
     */
    public function getExpeditionDepartment()
    {
        return $this->expeditionDepartment;
    }

    /**
     * @return the $bloodType
     */
    public function getBloodType()
    {
        return $this->bloodType;
    }

    /**
     * @param number $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @param string $documentType
     */
    public function setDocumentType($documentType)
    {
        $this->documentType = $documentType;
    }

    /**
     * @param string $documentNumber
     */
    public function setDocumentNumber($documentNumber)
    {
        $this->documentNumber = $documentNumber;
    }

    /**
     * @param string $birthPlace
     */
    public function setBirthPlace($birthPlace)
    {
        $this->birthPlace = $birthPlace;
    }

    /**
     * @param string $birthDepartment
     */
    public function setBirthDepartment($birthDepartment)
    {
        $this->birthDepartment = $birthDepartment;
    }

    /**
     * @param string $birthDate
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @param string $expeditionPlace
     */
    public function setExpeditionPlace($expeditionPlace)
    {
        $this->expeditionPlace = $expeditionPlace;
    }

    /**
     * @param string $expeditionDepartment
     */
    public function setExpeditionDepartment($expeditionDepartment)
    {
        $this->expeditionDepartment = $expeditionDepartment;
    }

    /**
     * @param string $bloodType
     */
    public function setBloodType($bloodType)
    {
        $this->bloodType = $bloodType;
    }
}
?>
