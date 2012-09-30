<?php



/**
 * This class defines the structure of the 'juridica_dom' table.
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
class JuridicaDomTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.JuridicaDomTableMap';

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
        $this->setName('juridica_dom');
        $this->setPhpName('JuridicaDom');
        $this->setClassname('JuridicaDom');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_JURIDICA_DOM', 'IdJuridicaDom', 'INTEGER', true, null, null);
        $this->addForeignKey('PJURIDICA_ID_PJURIDICA', 'PjuridicaIdPjuridica', 'INTEGER', 'pjuridica', 'ID_PJURIDICA', true, null, null);
        $this->addForeignKey('DOMICILIO_ID_DOMICILIO', 'DomicilioIdDomicilio', 'INTEGER', 'domicilio', 'ID_DOMICILIO', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Pjuridica', 'Pjuridica', RelationMap::MANY_TO_ONE, array('pjuridica_id_pjuridica' => 'id_pjuridica', ), null, null);
        $this->addRelation('Domicilio', 'Domicilio', RelationMap::MANY_TO_ONE, array('domicilio_id_domicilio' => 'id_domicilio', ), null, null);
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

} // JuridicaDomTableMap
