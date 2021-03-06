<?php



/**
 * This class defines the structure of the 'domicilio_j' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class DomicilioJTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.DomicilioJTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('domicilio_j');
        $this->setPhpName('DomicilioJ');
        $this->setClassname('DomicilioJ');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_DOMICILIO_J', 'IdDomicilioJ', 'INTEGER', true, null, null);
        $this->addColumn('BARRIO', 'Barrio', 'VARCHAR', false, 45, null);
        $this->addColumn('CALLE', 'Calle', 'VARCHAR', true, 45, null);
        $this->addColumn('ALTURA', 'Altura', 'VARCHAR', true, 45, null);
        $this->addColumn('COD_POSTAL', 'CodPostal', 'VARCHAR', false, 45, null);
        $this->addColumn('REAL', 'Real', 'BOOLEAN', false, 1, null);
        $this->addForeignKey('LOCALIDAD_ID_LOCALIDAD', 'LocalidadIdLocalidad', 'INTEGER', 'localidad', 'ID_LOCALIDAD', true, null, null);
        $this->addForeignKey('PJURIDICA_ID_PJURIDICA', 'PjuridicaIdPjuridica', 'INTEGER', 'pjuridica', 'ID_PJURIDICA', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Localidad', 'Localidad', RelationMap::MANY_TO_ONE, array('localidad_id_localidad' => 'id_localidad', ), null, null);
        $this->addRelation('Pjuridica', 'Pjuridica', RelationMap::MANY_TO_ONE, array('pjuridica_id_pjuridica' => 'id_pjuridica', ), null, null);
    } // buildRelations()

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'symfony' => array('form' => 'true', 'filter' => 'true', ),
            'symfony_behaviors' => array(),
        );
    } // getBehaviors()

} // DomicilioJTableMap
