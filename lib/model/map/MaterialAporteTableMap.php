<?php



/**
 * This class defines the structure of the 'material_aporte' table.
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
class MaterialAporteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.MaterialAporteTableMap';

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
        $this->setName('material_aporte');
        $this->setPhpName('MaterialAporte');
        $this->setClassname('MaterialAporte');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_MATERIAL_APORTE', 'IdMaterialAporte', 'INTEGER', true, null, null);
        $this->addForeignKey('MATERIAL_ID_MATERIAL', 'MaterialIdMaterial', 'INTEGER', 'material', 'ID_MATERIAL', true, null, null);
        $this->addForeignKey('APORTE_ID_APORTE', 'AporteIdAporte', 'INTEGER', 'aporte', 'ID_APORTE', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Material', 'Material', RelationMap::MANY_TO_ONE, array('material_id_material' => 'id_material', ), null, null);
        $this->addRelation('Aporte', 'Aporte', RelationMap::MANY_TO_ONE, array('aporte_id_aporte' => 'id_aporte', ), null, null);
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

} // MaterialAporteTableMap
