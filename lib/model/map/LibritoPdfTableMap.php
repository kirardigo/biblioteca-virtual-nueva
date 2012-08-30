<?php



/**
 * This class defines the structure of the 'librito_pdf' table.
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
class LibritoPdfTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.LibritoPdfTableMap';

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
        $this->setName('librito_pdf');
        $this->setPhpName('LibritoPdf');
        $this->setClassname('LibritoPdf');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_LIBRITO_PDF', 'IdLibritoPdf', 'INTEGER', true, null, null);
        $this->addColumn('FILENAME', 'Filename', 'VARCHAR', false, 45, null);
        $this->addColumn('CAPTION', 'Caption', 'VARCHAR', false, 45, null);
        $this->addForeignKey('LIBRITO_ID_LIBRITO', 'LibritoIdLibrito', 'INTEGER', 'librito', 'ID_LIBRITO', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Librito', 'Librito', RelationMap::MANY_TO_ONE, array('librito_id_librito' => 'id_librito', ), null, null);
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

} // LibritoPdfTableMap
