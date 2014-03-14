<?php



/**
 * This class defines the structure of the 'pfisica' table.
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
class PfisicaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.PfisicaTableMap';

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
        $this->setName('pfisica');
        $this->setPhpName('Pfisica');
        $this->setClassname('Pfisica');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_PFISICA', 'IdPfisica', 'INTEGER', true, null, null);
        $this->addColumn('NOMBRE', 'Nombre', 'VARCHAR', true, 45, null);
        $this->addColumn('APELLIDO', 'Apellido', 'VARCHAR', true, 45, null);
        $this->addColumn('VARON', 'Varon', 'BOOLEAN', false, 1, null);
        $this->addColumn('FECHA_NAC', 'FechaNac', 'DATE', true, null, null);
        $this->addForeignKey('TIPO_DOC_ID_TIPO_DOC', 'TipoDocIdTipoDoc', 'INTEGER', 'tipo_doc', 'ID_TIPO_DOC', true, null, null);
        $this->addColumn('DOCUMENTO', 'Documento', 'VARCHAR', true, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('TipoDoc', 'TipoDoc', RelationMap::MANY_TO_ONE, array('tipo_doc_id_tipo_doc' => 'id_tipo_doc', ), 'CASCADE', 'CASCADE');
        $this->addRelation('CarreraFisica', 'CarreraFisica', RelationMap::ONE_TO_MANY, array('id_pfisica' => 'pfisica_id_pfisica', ), null, null, 'CarreraFisicas');
        $this->addRelation('Domicilio', 'Domicilio', RelationMap::ONE_TO_MANY, array('id_pfisica' => 'pfisica_id_pfisica', ), null, null, 'Domicilios');
        $this->addRelation('Usuario', 'Usuario', RelationMap::ONE_TO_ONE, array('id_pfisica' => 'id_usuario', ), 'CASCADE', 'CASCADE');
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

} // PfisicaTableMap
