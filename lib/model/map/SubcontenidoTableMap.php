<?php



/**
 * This class defines the structure of the 'subcontenido' table.
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
class SubcontenidoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.SubcontenidoTableMap';

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
        $this->setName('subcontenido');
        $this->setPhpName('Subcontenido');
        $this->setClassname('Subcontenido');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_SUBCONTENIDO', 'IdSubcontenido', 'INTEGER', true, null, null);
        $this->addColumn('NOMBRE', 'Nombre', 'VARCHAR', false, 45, null);
        $this->addColumn('NUMERO_SUBCONTENIDO', 'NumeroSubcontenido', 'VARCHAR', false, 45, null);
        $this->addForeignKey('CONTENIDO_ID_CONTENIDO', 'ContenidoIdContenido', 'INTEGER', 'contenido', 'ID_CONTENIDO', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Contenido', 'Contenido', RelationMap::MANY_TO_ONE, array('contenido_id_contenido' => 'id_contenido', ), null, null);
        $this->addRelation('Material', 'Material', RelationMap::ONE_TO_MANY, array('id_subcontenido' => 'subcontenido_id_subcontenido', ), null, null, 'Materials');
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

} // SubcontenidoTableMap
