<?php



/**
 * This class defines the structure of the 'lista' table.
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
class ListaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.ListaTableMap';

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
        $this->setName('lista');
        $this->setPhpName('Lista');
        $this->setClassname('Lista');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_LISTA', 'IdLista', 'INTEGER', true, null, null);
        $this->addColumn('INFORMACION', 'Informacion', 'LONGVARCHAR', false, null, null);
        $this->addForeignKey('MATERIAL_ID_MATERIAL', 'MaterialIdMaterial', 'INTEGER', 'material', 'ID_MATERIAL', true, null, null);
        $this->addForeignKey('USUARIO_ID_USUARIO', 'UsuarioIdUsuario', 'INTEGER', 'usuario', 'ID_USUARIO', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Material', 'Material', RelationMap::MANY_TO_ONE, array('material_id_material' => 'id_material', ), null, null);
        $this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('usuario_id_usuario' => 'id_usuario', ), null, null);
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

} // ListaTableMap
