<?php



/**
 * This class defines the structure of the 'contenido' table.
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
class ContenidoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.ContenidoTableMap';

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
        $this->setName('contenido');
        $this->setPhpName('Contenido');
        $this->setClassname('Contenido');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_CONTENIDO', 'IdContenido', 'INTEGER', true, null, null);
        $this->addColumn('NUMERO_CONTENIDO', 'NumeroContenido', 'VARCHAR', true, 45, null);
        $this->addColumn('NOMBRE', 'Nombre', 'VARCHAR', true, 45, null);
        $this->getColumn('NOMBRE', false)->setPrimaryString(true);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Subcontenido', 'Subcontenido', RelationMap::ONE_TO_MANY, array('id_contenido' => 'contenido_id_contenido', ), 'CASCADE', 'CASCADE', 'Subcontenidos');
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

} // ContenidoTableMap
