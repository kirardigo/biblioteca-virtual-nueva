<?php



/**
 * This class defines the structure of the 'carrera_fisica' table.
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
class CarreraFisicaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.CarreraFisicaTableMap';

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
        $this->setName('carrera_fisica');
        $this->setPhpName('CarreraFisica');
        $this->setClassname('CarreraFisica');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_CARRERA_FISICA', 'IdCarreraFisica', 'INTEGER', true, null, null);
        $this->addForeignKey('CARRERA_ID_CARRERA', 'CarreraIdCarrera', 'INTEGER', 'carrera', 'ID_CARRERA', true, null, null);
        $this->addForeignKey('PFISICA_ID_PFISICA', 'PfisicaIdPfisica', 'INTEGER', 'pfisica', 'ID_PFISICA', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Carrera', 'Carrera', RelationMap::MANY_TO_ONE, array('carrera_id_carrera' => 'id_carrera', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Pfisica', 'Pfisica', RelationMap::MANY_TO_ONE, array('pfisica_id_pfisica' => 'id_pfisica', ), null, null);
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

} // CarreraFisicaTableMap
