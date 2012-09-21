<?php


/**
 * Base class that represents a query for the 'carrera_fisica' table.
 *
 * 
 *
 * @method     CarreraFisicaQuery orderByIdCarreraFisica($order = Criteria::ASC) Order by the id_carrera_fisica column
 * @method     CarreraFisicaQuery orderByCarreraIdCarrera($order = Criteria::ASC) Order by the carrera_id_carrera column
 * @method     CarreraFisicaQuery orderByPfisicaIdPfisica($order = Criteria::ASC) Order by the pfisica_id_pfisica column
 *
 * @method     CarreraFisicaQuery groupByIdCarreraFisica() Group by the id_carrera_fisica column
 * @method     CarreraFisicaQuery groupByCarreraIdCarrera() Group by the carrera_id_carrera column
 * @method     CarreraFisicaQuery groupByPfisicaIdPfisica() Group by the pfisica_id_pfisica column
 *
 * @method     CarreraFisicaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CarreraFisicaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CarreraFisicaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CarreraFisicaQuery leftJoinCarrera($relationAlias = null) Adds a LEFT JOIN clause to the query using the Carrera relation
 * @method     CarreraFisicaQuery rightJoinCarrera($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Carrera relation
 * @method     CarreraFisicaQuery innerJoinCarrera($relationAlias = null) Adds a INNER JOIN clause to the query using the Carrera relation
 *
 * @method     CarreraFisicaQuery leftJoinPfisica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pfisica relation
 * @method     CarreraFisicaQuery rightJoinPfisica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pfisica relation
 * @method     CarreraFisicaQuery innerJoinPfisica($relationAlias = null) Adds a INNER JOIN clause to the query using the Pfisica relation
 *
 * @method     CarreraFisica findOne(PropelPDO $con = null) Return the first CarreraFisica matching the query
 * @method     CarreraFisica findOneOrCreate(PropelPDO $con = null) Return the first CarreraFisica matching the query, or a new CarreraFisica object populated from the query conditions when no match is found
 *
 * @method     CarreraFisica findOneByIdCarreraFisica(int $id_carrera_fisica) Return the first CarreraFisica filtered by the id_carrera_fisica column
 * @method     CarreraFisica findOneByCarreraIdCarrera(int $carrera_id_carrera) Return the first CarreraFisica filtered by the carrera_id_carrera column
 * @method     CarreraFisica findOneByPfisicaIdPfisica(int $pfisica_id_pfisica) Return the first CarreraFisica filtered by the pfisica_id_pfisica column
 *
 * @method     array findByIdCarreraFisica(int $id_carrera_fisica) Return CarreraFisica objects filtered by the id_carrera_fisica column
 * @method     array findByCarreraIdCarrera(int $carrera_id_carrera) Return CarreraFisica objects filtered by the carrera_id_carrera column
 * @method     array findByPfisicaIdPfisica(int $pfisica_id_pfisica) Return CarreraFisica objects filtered by the pfisica_id_pfisica column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCarreraFisicaQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseCarreraFisicaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'CarreraFisica', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CarreraFisicaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     CarreraFisicaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CarreraFisicaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CarreraFisicaQuery) {
            return $criteria;
        }
        $query = new CarreraFisicaQuery();
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
     * @return   CarreraFisica|CarreraFisica[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CarreraFisicaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CarreraFisicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   CarreraFisica A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_CARRERA_FISICA`, `CARRERA_ID_CARRERA`, `PFISICA_ID_PFISICA` FROM `carrera_fisica` WHERE `ID_CARRERA_FISICA` = :p0';
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
            $obj = new CarreraFisica();
            $obj->hydrate($row);
            CarreraFisicaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CarreraFisica|CarreraFisica[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CarreraFisica[]|mixed the list of results, formatted by the current formatter
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
     * @return CarreraFisicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CarreraFisicaPeer::ID_CARRERA_FISICA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CarreraFisicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CarreraFisicaPeer::ID_CARRERA_FISICA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_carrera_fisica column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCarreraFisica(1234); // WHERE id_carrera_fisica = 1234
     * $query->filterByIdCarreraFisica(array(12, 34)); // WHERE id_carrera_fisica IN (12, 34)
     * $query->filterByIdCarreraFisica(array('min' => 12)); // WHERE id_carrera_fisica > 12
     * </code>
     *
     * @param     mixed $idCarreraFisica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CarreraFisicaQuery The current query, for fluid interface
     */
    public function filterByIdCarreraFisica($idCarreraFisica = null, $comparison = null)
    {
        if (is_array($idCarreraFisica) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(CarreraFisicaPeer::ID_CARRERA_FISICA, $idCarreraFisica, $comparison);
    }

    /**
     * Filter the query on the carrera_id_carrera column
     *
     * Example usage:
     * <code>
     * $query->filterByCarreraIdCarrera(1234); // WHERE carrera_id_carrera = 1234
     * $query->filterByCarreraIdCarrera(array(12, 34)); // WHERE carrera_id_carrera IN (12, 34)
     * $query->filterByCarreraIdCarrera(array('min' => 12)); // WHERE carrera_id_carrera > 12
     * </code>
     *
     * @see       filterByCarrera()
     *
     * @param     mixed $carreraIdCarrera The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CarreraFisicaQuery The current query, for fluid interface
     */
    public function filterByCarreraIdCarrera($carreraIdCarrera = null, $comparison = null)
    {
        if (is_array($carreraIdCarrera)) {
            $useMinMax = false;
            if (isset($carreraIdCarrera['min'])) {
                $this->addUsingAlias(CarreraFisicaPeer::CARRERA_ID_CARRERA, $carreraIdCarrera['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($carreraIdCarrera['max'])) {
                $this->addUsingAlias(CarreraFisicaPeer::CARRERA_ID_CARRERA, $carreraIdCarrera['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarreraFisicaPeer::CARRERA_ID_CARRERA, $carreraIdCarrera, $comparison);
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
     * @return CarreraFisicaQuery The current query, for fluid interface
     */
    public function filterByPfisicaIdPfisica($pfisicaIdPfisica = null, $comparison = null)
    {
        if (is_array($pfisicaIdPfisica)) {
            $useMinMax = false;
            if (isset($pfisicaIdPfisica['min'])) {
                $this->addUsingAlias(CarreraFisicaPeer::PFISICA_ID_PFISICA, $pfisicaIdPfisica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pfisicaIdPfisica['max'])) {
                $this->addUsingAlias(CarreraFisicaPeer::PFISICA_ID_PFISICA, $pfisicaIdPfisica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarreraFisicaPeer::PFISICA_ID_PFISICA, $pfisicaIdPfisica, $comparison);
    }

    /**
     * Filter the query by a related Carrera object
     *
     * @param   Carrera|PropelObjectCollection $carrera The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   CarreraFisicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByCarrera($carrera, $comparison = null)
    {
        if ($carrera instanceof Carrera) {
            return $this
                ->addUsingAlias(CarreraFisicaPeer::CARRERA_ID_CARRERA, $carrera->getIdCarrera(), $comparison);
        } elseif ($carrera instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CarreraFisicaPeer::CARRERA_ID_CARRERA, $carrera->toKeyValue('PrimaryKey', 'IdCarrera'), $comparison);
        } else {
            throw new PropelException('filterByCarrera() only accepts arguments of type Carrera or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Carrera relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CarreraFisicaQuery The current query, for fluid interface
     */
    public function joinCarrera($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Carrera');

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
            $this->addJoinObject($join, 'Carrera');
        }

        return $this;
    }

    /**
     * Use the Carrera relation Carrera object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CarreraQuery A secondary query class using the current class as primary query
     */
    public function useCarreraQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCarrera($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Carrera', 'CarreraQuery');
    }

    /**
     * Filter the query by a related Pfisica object
     *
     * @param   Pfisica|PropelObjectCollection $pfisica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   CarreraFisicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPfisica($pfisica, $comparison = null)
    {
        if ($pfisica instanceof Pfisica) {
            return $this
                ->addUsingAlias(CarreraFisicaPeer::PFISICA_ID_PFISICA, $pfisica->getIdPfisica(), $comparison);
        } elseif ($pfisica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CarreraFisicaPeer::PFISICA_ID_PFISICA, $pfisica->toKeyValue('PrimaryKey', 'IdPfisica'), $comparison);
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
     * @return CarreraFisicaQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   CarreraFisica $carreraFisica Object to remove from the list of results
     *
     * @return CarreraFisicaQuery The current query, for fluid interface
     */
    public function prune($carreraFisica = null)
    {
        if ($carreraFisica) {
            $this->addUsingAlias(CarreraFisicaPeer::ID_CARRERA_FISICA, $carreraFisica->getIdCarreraFisica(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseCarreraFisicaQuery