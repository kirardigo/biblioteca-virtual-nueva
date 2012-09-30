<?php



/**
 * This class defines the structure of the 'persona_domicilio' table.
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
class PersonaDomicilioTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.PersonaDomicilioTableMap';

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
        $this->setName('persona_domicilio');
        $this->setPhpName('PersonaDomicilio');
        $this->setClassname('PersonaDomicilio');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('IDPERSONA_DOMICILIO', 'IdpersonaDomicilio', 'INTEGER', true, null, null);
        $this->addForeignKey('PFISICA_ID_PFISICA', 'PfisicaIdPfisica', 'INTEGER', 'pfisica', 'ID_PFISICA', false, null, null);
        $this->addForeignKey('PJURIDICA_ID_PJURIDICA', 'PjuridicaIdPjuridica', 'INTEGER', 'pjuridica', 'ID_PJURIDICA', false, null, null);
        $this->addForeignKey('DOMICILIO_ID_DOMICILIO', 'DomicilioIdDomicilio', 'INTEGER', 'domicilio', 'ID_DOMICILIO', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Pfisica', 'Pfisica', RelationMap::MANY_TO_ONE, array('pfisica_id_pfisica' => 'id_pfisica', ), null, null);
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

} // PersonaDomicilioTableMap
