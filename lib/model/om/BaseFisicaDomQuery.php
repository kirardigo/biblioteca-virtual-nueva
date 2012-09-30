<?php


/**
 * Base class that represents a query for the 'fisica_dom' table.
 *
 * 
 *
 * @method     FisicaDomQuery orderByIdFisicaDom($order = Criteria::ASC) Order by the id_fisica_dom column
 * @method     FisicaDomQuery orderByPfisicaIdPfisica($order = Criteria::ASC) Order by the pfisica_id_pfisica column
 * @method     FisicaDomQuery orderByDomicilioIdDomicilio($order = Criteria::ASC) Order by the domicilio_id_domicilio column
 *
 * @method     FisicaDomQuery groupByIdFisicaDom() Group by the id_fisica_dom column
 * @method     FisicaDomQuery groupByPfisicaIdPfisica() Group by the pfisica_id_pfisica column
 * @method     FisicaDomQuery groupByDomicilioIdDomicilio() Group by the domicilio_id_domicilio column
 *
 * @method     FisicaDomQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     FisicaDomQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     FisicaDomQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     FisicaDomQuery leftJoinPfisica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pfisica relation
 * @method     FisicaDomQuery rightJoinPfisica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pfisica relation
 * @method     FisicaDomQuery innerJoinPfisica($relationAlias = null) Adds a INNER JOIN clause to the query using the Pfisica relation
 *
 * @method     FisicaDomQuery leftJoinDomicilio($relationAlias = null) Adds a LEFT JOIN clause to the query using the Domicilio relation
 * @method     FisicaDomQuery rightJoinDomicilio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Domicilio relation
 * @method     FisicaDomQuery innerJoinDomicilio($relationAlias = null) Adds a INNER JOIN clause to the query using the Domicilio relation
 *
 * @method     FisicaDom findOne(PropelPDO $con = null) Return the first FisicaDom matching the query
 * @method     FisicaDom findOneOrCreate(PropelPDO $con = null) Return the first FisicaDom matching the query, or a new FisicaDom object populated from the query conditions when no match is found
 *
 * @method     FisicaDom findOneByIdFisicaDom(int $id_fisica_dom) Return the first FisicaDom filtered by the id_fisica_dom column
 * @method     FisicaDom findOneByPfisicaIdPfisica(int $pfisica_id_pfisica) Return the first FisicaDom filtered by the pfisica_id_pfisica column
 * @method     FisicaDom findOneByDomicilioIdDomicilio(int $domicilio_id_domicilio) Return the first FisicaDom filtered by the domicilio_id_domicilio column
 *
 * @method     array findByIdFisicaDom(int $id_fisica_dom) Return FisicaDom objects filtered by the id_fisica_dom column
 * @method     array findByPfisicaIdPfisica(int $pfisica_id_pfisica) Return FisicaDom objects filtered by the pfisica_id_pfisica column
 * @method     array findByDomicilioIdDomicilio(int $domicilio_id_domicilio) Return FisicaDom objects filtered by the domicilio_id_domicilio column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseFisicaDomQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseFisicaDomQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'FisicaDom', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FisicaDomQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     FisicaDomQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FisicaDomQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FisicaDomQuery) {
            return $criteria;
        }
        $query = new FisicaDomQuery();
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
     * @return   FisicaDom|FisicaDom[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FisicaDomPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FisicaDomPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   FisicaDom A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_FISICA_DOM`, `PFISICA_ID_PFISICA`, `DOMICILIO_ID_DOMICILIO` FROM `fisica_dom` WHERE `ID_FISICA_DOM` = :p0';
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
            $obj = new FisicaDom();
            $obj->hydrate($row);
            FisicaDomPeer::addInstanceToPool($obj, (string) $key);
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
     * @return FisicaDom|FisicaDom[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|FisicaDom[]|mixed the list of results, formatted by the current formatter
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
     * @return FisicaDomQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FisicaDomPeer::ID_FISICA_DOM, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FisicaDomQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FisicaDomPeer::ID_FISICA_DOM, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_fisica_dom column
     *
     * Example usage:
     * <code>
     * $query->filterByIdFisicaDom(1234); // WHERE id_fisica_dom = 1234
     * $query->filterByIdFisicaDom(array(12, 34)); // WHERE id_fisica_dom IN (12, 34)
     * $query->filterByIdFisicaDom(array('min' => 12)); // WHERE id_fisica_dom > 12
     * </code>
     *
     * @param     mixed $idFisicaDom The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FisicaDomQuery The current query, for fluid interface
     */
    public function filterByIdFisicaDom($idFisicaDom = null, $comparison = null)
    {
        if (is_array($idFisicaDom) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(FisicaDomPeer::ID_FISICA_DOM, $idFisicaDom, $comparison);
    }

    /**
     * Filter the query on the pfisica_id_pfisica column
     *
     * Example usage:
     * <code>
     * $query->filterByPfisicaIdPfisica(1234); // WHERE pfisica_id_pfisica = 1234
     * $query->filterByPfisicaIdPfisica(array(12, 34)); // WHERE pfisica_id_pfisica IN (12, 34)
     * $query->filterByPfisicaIdPfisica(array('min' => 12)); // WHERE pfisica_id_pfisica > 12
     * </code>
     *
     * @see       filterByPfisica()
     *
     * @param     mixed $pfisicaIdPfisica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FisicaDomQuery The current query, for fluid interface
     */
    public function filterByPfisicaIdPfisica($pfisicaIdPfisica = null, $comparison = null)
    {
        if (is_array($pfisicaIdPfisica)) {
            $useMinMax = false;
            if (isset($pfisicaIdPfisica['min'])) {
                $this->addUsingAlias(FisicaDomPeer::PFISICA_ID_PFISICA, $pfisicaIdPfisica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pfisicaIdPfisica['max'])) {
                $this->addUsingAlias(FisicaDomPeer::PFISICA_ID_PFISICA, $pfisicaIdPfisica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FisicaDomPeer::PFISICA_ID_PFISICA, $pfisicaIdPfisica, $comparison);
    }

    /**
     * Filter the query on the domicilio_id_domicilio column
     *
     * Example usage:
     * <code>
     * $query->filterByDomicilioIdDomicilio(1234); // WHERE domicilio_id_domicilio = 1234
     * $query->filterByDomicilioIdDomicilio(array(12, 34)); // WHERE domicilio_id_domicilio IN (12, 34)
     * $query->filterByDomicilioIdDomicilio(array('min' => 12)); // WHERE domicilio_id_domicilio > 12
     * </code>
     *
     * @see       filterByDomicilio()
     *
     * @param     mixed $domicilioIdDomicilio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FisicaDomQuery The current query, for fluid interface
     */
    public function filterByDomicilioIdDomicilio($domicilioIdDomicilio = null, $comparison = null)
    {
        if (is_array($domicilioIdDomicilio)) {
            $useMinMax = false;
            if (isset($domicilioIdDomicilio['min'])) {
                $this->addUsingAlias(FisicaDomPeer::DOMICILIO_ID_DOMICILIO, $domicilioIdDomicilio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($domicilioIdDomicilio['max'])) {
                $this->addUsingAlias(FisicaDomPeer::DOMICILIO_ID_DOMICILIO, $domicilioIdDomicilio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FisicaDomPeer::DOMICILIO_ID_DOMICILIO, $domicilioIdDomicilio, $comparison);
    }

    /**
     * Filter the query by a related Pfisica object
     *
     * @param   Pfisica|PropelObjectCollection $pfisica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   FisicaDomQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPfisica($pfisica, $comparison = null)
    {
        if ($pfisica instanceof Pfisica) {
            return $this
                ->addUsingAlias(FisicaDomPeer::PFISICA_ID_PFISICA, $pfisica->getIdPfisica(), $comparison);
        } elseif ($pfisica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FisicaDomPeer::PFISICA_ID_PFISICA, $pfisica->toKeyValue('PrimaryKey', 'IdPfisica'), $comparison);
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
     * @return FisicaDomQuery The current query, for fluid interface
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
     * Filter the query by a related Domicilio object
     *
     * @param   Domicilio|PropelObjectCollection $domicilio The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   FisicaDomQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByDomicilio($domicilio, $comparison = null)
    {
        if ($domicilio instanceof Domicilio) {
            return $this
                ->addUsingAlias(FisicaDomPeer::DOMICILIO_ID_DOMICILIO, $domicilio->getIdDomicilio(), $comparison);
        } elseif ($domicilio instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FisicaDomPeer::DOMICILIO_ID_DOMICILIO, $domicilio->toKeyValue('PrimaryKey', 'IdDomicilio'), $comparison);
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
     * @return FisicaDomQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   FisicaDom $fisicaDom Object to remove from the list of results
     *
     * @return FisicaDomQuery The current query, for fluid interface
     */
    public function prune($fisicaDom = null)
    {
        if ($fisicaDom) {
            $this->addUsingAlias(FisicaDomPeer::ID_FISICA_DOM, $fisicaDom->getIdFisicaDom(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseFisicaDomQuery