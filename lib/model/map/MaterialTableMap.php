<?php



/**
 * This class defines the structure of the 'material' table.
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
class MaterialTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.MaterialTableMap';

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
        $this->setName('material');
        $this->setPhpName('Material');
        $this->setClassname('Material');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_MATERIAL', 'IdMaterial', 'INTEGER', true, null, null);
        $this->addColumn('ARCHIVO', 'Archivo', 'VARCHAR', false, 45, null);
        $this->addColumn('TITULO', 'Titulo', 'VARCHAR', true, 45, null);
        $this->addColumn('EDITORIAL', 'Editorial', 'VARCHAR', false, 45, null);
        $this->addColumn('AUTOR', 'Autor', 'VARCHAR', false, 45, null);
        $this->addColumn('DESCRIPCION', 'Descripcion', 'LONGVARCHAR', false, null, null);
        $this->addForeignKey('SUBCONTENIDO_ID_SUBCONTENIDO', 'SubcontenidoIdSubcontenido', 'INTEGER', 'subcontenido', 'ID_SUBCONTENIDO', true, null, null);
        $this->addForeignKey('BIBLIOTECA_ID_BIBLIOTECA', 'BibliotecaIdBiblioteca', 'INTEGER', 'biblioteca', 'ID_BIBLIOTECA', true, null, null);
        $this->addForeignKey('CARRERA_ID_CARRERA', 'CarreraIdCarrera', 'INTEGER', 'carrera', 'ID_CARRERA', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Subcontenido', 'Subcontenido', RelationMap::MANY_TO_ONE, array('subcontenido_id_subcontenido' => 'id_subcontenido', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Biblioteca', 'Biblioteca', RelationMap::MANY_TO_ONE, array('biblioteca_id_biblioteca' => 'id_biblioteca', ), null, null);
        $this->addRelation('Carrera', 'Carrera', RelationMap::MANY_TO_ONE, array('carrera_id_carrera' => 'id_carrera', ), null, null);
        $this->addRelation('AccesoMaterial', 'AccesoMaterial', RelationMap::ONE_TO_MANY, array('id_material' => 'material_id_material', ), 'CASCADE', 'CASCADE', 'AccesoMaterials');
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

} // MaterialTableMap
