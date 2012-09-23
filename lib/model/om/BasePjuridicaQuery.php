<?php


/**
 * Base class that represents a query for the 'pjuridica' table.
 *
 * 
 *
 * @method     PjuridicaQuery orderByIdPjuridica($order = Criteria::ASC) Order by the id_pjuridica column
 * @method     PjuridicaQuery orderByRazonSocial($order = Criteria::ASC) Order by the razon_social column
 * @method     PjuridicaQuery orderByPersonaIdPersona($order = Criteria::ASC) Order by the persona_id_persona column
 *
 * @method     PjuridicaQuery groupByIdPjuridica() Group by the id_pjuridica column
 * @method     PjuridicaQuery groupByRazonSocial() Group by the razon_social column
 * @method     PjuridicaQuery groupByPersonaIdPersona() Group by the persona_id_persona column
 *
 * @method     PjuridicaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PjuridicaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PjuridicaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PjuridicaQuery leftJoinPersona($relationAlias = null) Adds a LEFT JOIN clause to the query using the Persona relation
 * @method     PjuridicaQuery rightJoinPersona($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Persona relation
 * @method     PjuridicaQuery innerJoinPersona($relationAlias = null) Adds a INNER JOIN clause to the query using the Persona relation
 *
 * @method     PjuridicaQuery leftJoinBiblioteca($relationAlias = null) Adds a LEFT JOIN clause to the query using the Biblioteca relation
 * @method     PjuridicaQuery rightJoinBiblioteca($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Biblioteca relation
 * @method     PjuridicaQuery innerJoinBiblioteca($relationAlias = null) Adds a INNER JOIN clause to the query using the Biblioteca relation
 *
 * @method     Pjuridica findOne(PropelPDO $con = null) Return the first Pjuridica matching the query
 * @method     Pjuridica findOneOrCreate(PropelPDO $con = null) Return the first Pjuridica matching the query, or a new Pjuridica object populated from the query conditions when no match is found
 *
 * @method     Pjuridica findOneByIdPjuridica(int $id_pjuridica) Return the first Pjuridica filtered by the id_pjuridica column
 * @method     Pjuridica findOneByRazonSocial(string $razon_social) Return the first Pjuridica filtered by the razon_social column
 * @method     Pjuridica findOneByPersonaIdPersona(int $persona_id_persona) Return the first Pjuridica filtered by the persona_id_persona column
 *
 * @method     array findByIdPjuridica(int $id_pjuridica) Return Pjuridica objects filtered by the id_pjuridica column
 * @method     array findByRazonSocial(string $razon_social) Return Pjuridica objects filtered by the razon_social column
 * @method     array findByPersonaIdPersona(int $persona_id_persona) Return Pjuridica objects filtered by the persona_id_persona column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePjuridicaQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BasePjuridicaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Pjuridica', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PjuridicaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     PjuridicaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PjuridicaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PjuridicaQuery) {
            return $criteria;
        }
        $query = new PjuridicaQuery();
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
     * @return   Pjuridica|Pjuridica[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PjuridicaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PjuridicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Pjuridica A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_PJURIDICA`, `RAZON_SOCIAL`, `PERSONA_ID_PERSONA` FROM `pjuridica` WHERE `ID_PJURIDICA` = :p0';
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
            $obj = new Pjuridica();
            $obj->hydrate($row);
            PjuridicaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Pjuridica|Pjuridica[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Pjuridica[]|mixed the list of results, formatted by the current formatter
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
     * @return PjuridicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PjuridicaPeer::ID_PJURIDICA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PjuridicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PjuridicaPeer::ID_PJURIDICA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_pjuridica column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPjuridica(1234); // WHERE id_pjuridica = 1234
     * $query->filterByIdPjuridica(array(12, 34)); // WHERE id_pjuridica IN (12, 34)
     * $query->filterByIdPjuridica(array('min' => 12)); // WHERE id_pjuridica > 12
     * </code>
     *
     * @param     mixed $idPjuridica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PjuridicaQuery The current query, for fluid interface
     */
    public function filterByIdPjuridica($idPjuridica = null, $comparison = null)
    {
        if (is_array($idPjuridica) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(PjuridicaPeer::ID_PJURIDICA, $idPjuridica, $comparison);
    }

    /**
     * Filter the query on the razon_social column
     *
     * Example usage:
     * <code>
     * $query->filterByRazonSocial('fooValue');   // WHERE razon_social = 'fooValue'
     * $query->filterByRazonSocial('%fooValue%'); // WHERE razon_social LIKE '%fooValue%'
     * </code>
     *
     * @param     string $razonSocial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PjuridicaQuery The current query, for fluid interface
     */
    public function filterByRazonSocial($razonSocial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($razonSocial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $razonSocial)) {
                $razonSocial = str_replace('*', '%', $razonSocial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PjuridicaPeer::RAZON_SOCIAL, $razonSocial, $comparison);
    }

    /**
     * Filter the query on the persona_id_persona column
     *
     * Example usage:
     * <code>
     * $query->filterByPersonaIdPersona(1234); // WHERE persona_id_persona = 1234
     * $query->filterByPersonaIdPersona(array(12, 34)); // WHERE persona_id_persona IN (12, 34)
     * $query->filterByPersonaIdPersona(array('min' => 12)); // WHERE persona_id_persona > 12
     * </code>
     *
     * @see       filterByPersona()
     *
     * @param     mixed $personaIdPersona The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PjuridicaQuery The current query, for fluid interface
     */
    public function filterByPersonaIdPersona($personaIdPersona = null, $comparison = null)
    {
        if (is_array($personaIdPersona)) {
            $useMinMax = false;
            if (isset($personaIdPersona['min'])) {
                $this->addUsingAlias(PjuridicaPeer::PERSONA_ID_PERSONA, $personaIdPersona['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($personaIdPersona['max'])) {
                $this->addUsingAlias(PjuridicaPeer::PERSONA_ID_PERSONA, $personaIdPersona['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PjuridicaPeer::PERSONA_ID_PERSONA, $personaIdPersona, $comparison);
    }

    /**
     * Filter the query by a related Persona object
     *
     * @param   Persona|PropelObjectCollection $persona The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PjuridicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPersona($persona, $comparison = null)
    {
        if ($persona instanceof Persona) {
            return $this
                ->addUsingAlias(PjuridicaPeer::PERSONA_ID_PERSONA, $persona->getIdPersona(), $comparison);
        } elseif ($persona instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PjuridicaPeer::PERSONA_ID_PERSONA, $persona->toKeyValue('PrimaryKey', 'IdPersona'), $comparison);
        } else {
            throw new PropelException('filterByPersona() only accepts arguments of type Persona or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Persona relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PjuridicaQuery The current query, for fluid interface
     */
    public function joinPersona($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Persona');

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
            $this->addJoinObject($join, 'Persona');
        }

        return $this;
    }

    /**
     * Use the Persona relation Persona object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PersonaQuery A secondary query class using the current class as primary query
     */
    public function usePersonaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPersona($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Persona', 'PersonaQuery');
    }

    /**
     * Filter the query by a related Biblioteca object
     *
     * @param   Biblioteca|PropelObjectCollection $biblioteca  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PjuridicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByBiblioteca($biblioteca, $comparison = null)
    {
        if ($biblioteca instanceof Biblioteca) {
            return $this
                ->addUsingAlias(PjuridicaPeer::ID_PJURIDICA, $biblioteca->getPjuridicaIdPjuridica(), $comparison);
        } elseif ($biblioteca instanceof PropelObjectCollection) {
            return $this
                ->useBibliotecaQuery()
                ->filterByPrimaryKeys($biblioteca->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByBiblioteca() only accepts arguments of type Biblioteca or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Biblioteca relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PjuridicaQuery The current query, for fluid interface
     */
    public function joinBiblioteca($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Biblioteca');

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
            $this->addJoinObject($join, 'Biblioteca');
        }

        return $this;
    }

    /**
     * Use the Biblioteca relation Biblioteca object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   BibliotecaQuery A secondary query class using the current class as primary query
     */
    public function useBibliotecaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinBiblioteca($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Biblioteca', 'BibliotecaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Pjuridica $pjuridica Object to remove from the list of results
     *
     * @return PjuridicaQuery The current query, for fluid interface
     */
    public function prune($pjuridica = null)
    {
        if ($pjuridica) {
            $this->addUsingAlias(PjuridicaPeer::ID_PJURIDICA, $pjuridica->getIdPjuridica(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BasePjuridicaQuery