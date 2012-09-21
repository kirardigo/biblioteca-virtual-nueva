<?php



/**
 * This class defines the structure of the 'usuario' table.
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
class UsuarioTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.UsuarioTableMap';

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
        $this->setName('usuario');
        $this->setPhpName('Usuario');
        $this->setClassname('Usuario');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_USUARIO', 'IdUsuario', 'INTEGER', true, null, null);
        $this->addColumn('USUARIO', 'Usuario', 'VARCHAR', true, 45, null);
        $this->addColumn('PASSWORD', 'Password', 'VARCHAR', true, 45, null);
        $this->addColumn('ADMIN', 'Admin', 'BOOLEAN', false, 1, null);
        $this->addColumn('EMAIL', 'Email', 'VARCHAR', false, 45, null);
        $this->addForeignKey('FISICA_ID_PFISICA', 'FisicaIdPfisica', 'INTEGER', 'pfisica', 'ID_PFISICA', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Pfisica', 'Pfisica', RelationMap::MANY_TO_ONE, array('fisica_id_pfisica' => 'id_pfisica', ), 'CASCADE', 'CASCADE');
        $this->addRelation('AccesoMaterial', 'AccesoMaterial', RelationMap::ONE_TO_MANY, array('id_usuario' => 'usuario_id_usuario', ), null, null, 'AccesoMaterials');
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

} // UsuarioTableMap
