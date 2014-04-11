<?php



/**
 * This class defines the structure of the 'material_carrera' table.
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
class MaterialCarreraTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.MaterialCarreraTableMap';

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
        $this->setName('material_carrera');
        $this->setPhpName('MaterialCarrera');
        $this->setClassname('MaterialCarrera');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_MATERIAL_CARRERA', 'IdMaterialCarrera', 'INTEGER', true, null, null);
        $this->addForeignKey('MATERIAL_ID_MATERIAL', 'MaterialIdMaterial', 'INTEGER', 'material', 'ID_MATERIAL', true, null, null);
        $this->addForeignKey('CARRERA_ID_CARRERA', 'CarreraIdCarrera', 'INTEGER', 'carrera', 'ID_CARRERA', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Material', 'Material', RelationMap::MANY_TO_ONE, array('material_id_material' => 'id_material', ), null, null);
        $this->addRelation('Carrera', 'Carrera', RelationMap::MANY_TO_ONE, array('carrera_id_carrera' => 'id_carrera', ), null, null);
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

} // MaterialCarreraTableMap
