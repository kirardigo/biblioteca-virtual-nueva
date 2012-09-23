<?php


/**
 * Base class that represents a query for the 'persona' table.
 *
 * 
 *
 * @method     PersonaQuery orderByIdPersona($order = Criteria::ASC) Order by the id_persona column
 * @method     PersonaQuery orderByDomicilioLegal($order = Criteria::ASC) Order by the domicilio_legal column
 * @method     PersonaQuery orderByDomicilioPostal($order = Criteria::ASC) Order by the domicilio_postal column
 *
 * @method     PersonaQuery groupByIdPersona() Group by the id_persona column
 * @method     PersonaQuery groupByDomicilioLegal() Group by the domicilio_legal column
 * @method     PersonaQuery groupByDomicilioPostal() Group by the domicilio_postal column
 *
 * @method     PersonaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PersonaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PersonaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PersonaQuery leftJoinDomicilio($relationAlias = null) Adds a LEFT JOIN clause to the query using the Domicilio relation
 * @method     PersonaQuery rightJoinDomicilio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Domicilio relation
 * @method     PersonaQuery innerJoinDomicilio($relationAlias = null) Adds a INNER JOIN clause to the query using the Domicilio relation
 *
 * @method     PersonaQuery leftJoinPfisica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pfisica relation
 * @method     PersonaQuery rightJoinPfisica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pfisica relation
 * @method     PersonaQuery innerJoinPfisica($relationAlias = null) Adds a INNER JOIN clause to the query using the Pfisica relation
 *
 * @method     PersonaQuery leftJoinPjuridica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pjuridica relation
 * @method     PersonaQuery rightJoinPjuridica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pjuridica relation
 * @method     PersonaQuery innerJoinPjuridica($relationAlias = null) Adds a INNER JOIN clause to the query using the Pjuridica relation
 *
 * @method     Persona findOne(PropelPDO $con = null) Return the first Persona matching the query
 * @method     Persona findOneOrCreate(PropelPDO $con = null) Return the first Persona matching the query, or a new Persona object populated from the query conditions when no match is found
 *
 * @method     Persona findOneByIdPersona(int $id_persona) Return the first Persona filtered by the id_persona column
 * @method     Persona findOneByDomicilioLegal(string $domicilio_legal) Return the first Persona filtered by the domicilio_legal column
 * @method     Persona findOneByDomicilioPostal(string $domicilio_postal) Return the first Persona filtered by the domicilio_postal column
 *
 * @method     array findByIdPersona(int $id_persona) Return Persona objects filtered by the id_persona column
 * @method     array findByDomicilioLegal(string $domicilio_legal) Return Persona objects filtered by the domicilio_legal column
 * @method     array findByDomicilioPostal(string $domicilio_postal) Return Persona objects filtered by the domicilio_postal column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePersonaQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BasePersonaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Persona', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PersonaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     PersonaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PersonaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PersonaQuery) {
            return $criteria;
        }
        $query = new PersonaQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Persona|Persona[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PersonaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PersonaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return   Persona A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_PERSONA`, `DOMICILIO_LEGAL`, `DOMICILIO_POSTAL` FROM `persona` WHERE `ID_PERSONA` = :p0';
        try {
            $stmt = $con->prepare($sql);			
			$stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Persona();
            $obj->hydrate($row);
            PersonaPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Persona|Persona[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Persona[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return PersonaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PersonaPeer::ID_PERSONA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PersonaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PersonaPeer::ID_PERSONA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_persona column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPersona(1234); // WHERE id_persona = 1234
     * $query->filterByIdPersona(array(12, 34)); // WHERE id_persona IN (12, 34)
     * $query->filterByIdPersona(array('min' => 12)); // WHERE id_persona > 12
     * </code>
     *
     * @param     mixed $idPersona The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaQuery The current query, for fluid interface
     */
    public function filterByIdPersona($idPersona = null, $comparison = null)
    {
        if (is_array($idPersona) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(PersonaPeer::ID_PERSONA, $idPersona, $comparison);
    }

    /**
     * Filter the query on the domicilio_legal column
     *
     * Example usage:
     * <code>
     * $query->filterByDomicilioLegal('fooValue');   // WHERE domicilio_legal = 'fooValue'
     * $query->filterByDomicilioLegal('%fooValue%'); // WHERE domicilio_legal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $domicilioLegal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaQuery The current query, for fluid interface
     */
    public function filterByDomicilioLegal($domicilioLegal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($domicilioLegal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $domicilioLegal)) {
                $domicilioLegal = str_replace('*', '%', $domicilioLegal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PersonaPeer::DOMICILIO_LEGAL, $domicilioLegal, $comparison);
    }

    /**
     * Filter the query on the domicilio_postal column
     *
     * Example usage:
     * <code>
     * $query->filterByDomicilioPostal('fooValue');   // WHERE domicilio_postal = 'fooValue'
     * $query->filterByDomicilioPostal('%fooValue%'); // WHERE domicilio_postal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $domicilioPostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaQuery The current query, for fluid interface
     */
    public function filterByDomicilioPostal($domicilioPostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($domicilioPostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $domicilioPostal)) {
                $domicilioPostal = str_replace('*', '%', $domicilioPostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PersonaPeer::DOMICILIO_POSTAL, $domicilioPostal, $comparison);
    }

    /**
     * Filter the query by a related Domicilio object
     *
     * @param   Domicilio|PropelObjectCollection $domicilio  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PersonaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByDomicilio($domicilio, $comparison = null)
    {
        if ($domicilio instanceof Domicilio) {
            return $this
                ->addUsingAlias(PersonaPeer::ID_PERSONA, $domicilio->getPersonaIdPersona(), $comparison);
        } elseif ($domicilio instanceof PropelObjectCollection) {
            return $this
                ->useDomicilioQuery()
                ->filterByPrimaryKeys($domicilio->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByDomicilio() only accepts arguments of type Domicilio or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Domicilio relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PersonaQuery The current query, for fluid interface
     */
    public function joinDomicilio($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Domicilio');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Domicilio');
        }

        return $this;
    }

    /**
     * Use the Domicilio relation Domicilio object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DomicilioQuery A secondary query class using the current class as primary query
     */
    public function useDomicilioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDomicilio($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Domicilio', 'DomicilioQuery');
    }

    /**
     * Filter the query by a related Pfisica object
     *
     * @param   Pfisica|PropelObjectCollection $pfisica  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PersonaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPfisica($pfisica, $comparison = null)
    {
        if ($pfisica instanceof Pfisica) {
            return $this
                ->addUsingAlias(PersonaPeer::ID_PERSONA, $pfisica->getPersonaIdPersona(), $comparison);
        } elseif ($pfisica instanceof PropelObjectCollection) {
            return $this
                ->usePfisicaQuery()
                ->filterByPrimaryKeys($pfisica->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPfisica() only accepts arguments of type Pfisica or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Pfisica relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PersonaQuery The current query, for fluid interface
     */
    public function joinPfisica($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Pfisica');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Pfisica');
        }

        return $this;
    }

    /**
     * Use the Pfisica relation Pfisica object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PfisicaQuery A secondary query class using the current class as primary query
     */
    public function usePfisicaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPfisica($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Pfisica', 'PfisicaQuery');
    }

    /**
     * Filter the query by a related Pjuridica object
     *
     * @param   Pjuridica|PropelObjectCollection $pjuridica  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PersonaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPjuridica($pjuridica, $comparison = null)
    {
        if ($pjuridica instanceof Pjuridica) {
            return $this
                ->addUsingAlias(PersonaPeer::ID_PERSONA, $pjuridica->getPersonaIdPersona(), $comparison);
        } elseif ($pjuridica instanceof PropelObjectCollection) {
            return $this
                ->usePjuridicaQuery()
                ->filterByPrimaryKeys($pjuridica->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPjuridica() only accepts arguments of type Pjuridica or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Pjuridica relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PersonaQuery The current query, for fluid interface
     */
    public function joinPjuridica($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Pjuridica');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Pjuridica');
        }

        return $this;
    }

    /**
     * Use the Pjuridica relation Pjuridica object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PjuridicaQuery A secondary query class using the current class as primary query
     */
    public function usePjuridicaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPjuridica($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Pjuridica', 'PjuridicaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Persona $persona Object to remove from the list of results
     *
     * @return PersonaQuery The current query, for fluid interface
     */
    public function prune($persona = null)
    {
        if ($persona) {
            $this->addUsingAlias(PersonaPeer::ID_PERSONA, $persona->getIdPersona(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BasePersonaQuery