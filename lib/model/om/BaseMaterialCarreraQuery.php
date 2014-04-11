<?php


/**
 * Base class that represents a query for the 'material_carrera' table.
 *
 * 
 *
 * @method     MaterialCarreraQuery orderByIdMaterialCarrera($order = Criteria::ASC) Order by the id_material_carrera column
 * @method     MaterialCarreraQuery orderByMaterialIdMaterial($order = Criteria::ASC) Order by the material_id_material column
 * @method     MaterialCarreraQuery orderByCarreraIdCarrera($order = Criteria::ASC) Order by the carrera_id_carrera column
 *
 * @method     MaterialCarreraQuery groupByIdMaterialCarrera() Group by the id_material_carrera column
 * @method     MaterialCarreraQuery groupByMaterialIdMaterial() Group by the material_id_material column
 * @method     MaterialCarreraQuery groupByCarreraIdCarrera() Group by the carrera_id_carrera column
 *
 * @method     MaterialCarreraQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     MaterialCarreraQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     MaterialCarreraQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     MaterialCarreraQuery leftJoinMaterial($relationAlias = null) Adds a LEFT JOIN clause to the query using the Material relation
 * @method     MaterialCarreraQuery rightJoinMaterial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Material relation
 * @method     MaterialCarreraQuery innerJoinMaterial($relationAlias = null) Adds a INNER JOIN clause to the query using the Material relation
 *
 * @method     MaterialCarreraQuery leftJoinCarrera($relationAlias = null) Adds a LEFT JOIN clause to the query using the Carrera relation
 * @method     MaterialCarreraQuery rightJoinCarrera($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Carrera relation
 * @method     MaterialCarreraQuery innerJoinCarrera($relationAlias = null) Adds a INNER JOIN clause to the query using the Carrera relation
 *
 * @method     MaterialCarrera findOne(PropelPDO $con = null) Return the first MaterialCarrera matching the query
 * @method     MaterialCarrera findOneOrCreate(PropelPDO $con = null) Return the first MaterialCarrera matching the query, or a new MaterialCarrera object populated from the query conditions when no match is found
 *
 * @method     MaterialCarrera findOneByIdMaterialCarrera(int $id_material_carrera) Return the first MaterialCarrera filtered by the id_material_carrera column
 * @method     MaterialCarrera findOneByMaterialIdMaterial(int $material_id_material) Return the first MaterialCarrera filtered by the material_id_material column
 * @method     MaterialCarrera findOneByCarreraIdCarrera(int $carrera_id_carrera) Return the first MaterialCarrera filtered by the carrera_id_carrera column
 *
 * @method     array findByIdMaterialCarrera(int $id_material_carrera) Return MaterialCarrera objects filtered by the id_material_carrera column
 * @method     array findByMaterialIdMaterial(int $material_id_material) Return MaterialCarrera objects filtered by the material_id_material column
 * @method     array findByCarreraIdCarrera(int $carrera_id_carrera) Return MaterialCarrera objects filtered by the carrera_id_carrera column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseMaterialCarreraQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseMaterialCarreraQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'MaterialCarrera', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MaterialCarreraQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     MaterialCarreraQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MaterialCarreraQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MaterialCarreraQuery) {
            return $criteria;
        }
        $query = new MaterialCarreraQuery();
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
     * @return   MaterialCarrera|MaterialCarrera[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MaterialCarreraPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MaterialCarreraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   MaterialCarrera A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_MATERIAL_CARRERA`, `MATERIAL_ID_MATERIAL`, `CARRERA_ID_CARRERA` FROM `material_carrera` WHERE `ID_MATERIAL_CARRERA` = :p0';
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
            $obj = new MaterialCarrera();
            $obj->hydrate($row);
            MaterialCarreraPeer::addInstanceToPool($obj, (string) $key);
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
     * @return MaterialCarrera|MaterialCarrera[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|MaterialCarrera[]|mixed the list of results, formatted by the current formatter
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
     * @return MaterialCarreraQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MaterialCarreraPeer::ID_MATERIAL_CARRERA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MaterialCarreraQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MaterialCarreraPeer::ID_MATERIAL_CARRERA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_material_carrera column
     *
     * Example usage:
     * <code>
     * $query->filterByIdMaterialCarrera(1234); // WHERE id_material_carrera = 1234
     * $query->filterByIdMaterialCarrera(array(12, 34)); // WHERE id_material_carrera IN (12, 34)
     * $query->filterByIdMaterialCarrera(array('min' => 12)); // WHERE id_material_carrera > 12
     * </code>
     *
     * @param     mixed $idMaterialCarrera The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaterialCarreraQuery The current query, for fluid interface
     */
    public function filterByIdMaterialCarrera($idMaterialCarrera = null, $comparison = null)
    {
        if (is_array($idMaterialCarrera) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(MaterialCarreraPeer::ID_MATERIAL_CARRERA, $idMaterialCarrera, $comparison);
    }

    /**
     * Filter the query on the material_id_material column
     *
     * Example usage:
     * <code>
     * $query->filterByMaterialIdMaterial(1234); // WHERE material_id_material = 1234
     * $query->filterByMaterialIdMaterial(array(12, 34)); // WHERE material_id_material IN (12, 34)
     * $query->filterByMaterialIdMaterial(array('min' => 12)); // WHERE material_id_material > 12
     * </code>
     *
     * @see       filterByMaterial()
     *
     * @param     mixed $materialIdMaterial The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaterialCarreraQuery The current query, for fluid interface
     */
    public function filterByMaterialIdMaterial($materialIdMaterial = null, $comparison = null)
    {
        if (is_array($materialIdMaterial)) {
            $useMinMax = false;
            if (isset($materialIdMaterial['min'])) {
                $this->addUsingAlias(MaterialCarreraPeer::MATERIAL_ID_MATERIAL, $materialIdMaterial['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($materialIdMaterial['max'])) {
                $this->addUsingAlias(MaterialCarreraPeer::MATERIAL_ID_MATERIAL, $materialIdMaterial['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaterialCarreraPeer::MATERIAL_ID_MATERIAL, $materialIdMaterial, $comparison);
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
     * @return MaterialCarreraQuery The current query, for fluid interface
     */
    public function filterByCarreraIdCarrera($carreraIdCarrera = null, $comparison = null)
    {
        if (is_array($carreraIdCarrera)) {
            $useMinMax = false;
            if (isset($carreraIdCarrera['min'])) {
                $this->addUsingAlias(MaterialCarreraPeer::CARRERA_ID_CARRERA, $carreraIdCarrera['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($carreraIdCarrera['max'])) {
                $this->addUsingAlias(MaterialCarreraPeer::CARRERA_ID_CARRERA, $carreraIdCarrera['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaterialCarreraPeer::CARRERA_ID_CARRERA, $carreraIdCarrera, $comparison);
    }

    /**
     * Filter the query by a related Material object
     *
     * @param   Material|PropelObjectCollection $material The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   MaterialCarreraQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByMaterial($material, $comparison = null)
    {
        if ($material instanceof Material) {
            return $this
                ->addUsingAlias(MaterialCarreraPeer::MATERIAL_ID_MATERIAL, $material->getIdMaterial(), $comparison);
        } elseif ($material instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(MaterialCarreraPeer::MATERIAL_ID_MATERIAL, $material->toKeyValue('PrimaryKey', 'IdMaterial'), $comparison);
        } else {
            throw new PropelException('filterByMaterial() only accepts arguments of type Material or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Material relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MaterialCarreraQuery The current query, for fluid interface
     */
    public function joinMaterial($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Material');

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
            $this->addJoinObject($join, 'Material');
        }

        return $this;
    }

    /**
     * Use the Material relation Material object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   MaterialQuery A secondary query class using the current class as primary query
     */
    public function useMaterialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinMaterial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Material', 'MaterialQuery');
    }

    /**
     * Filter the query by a related Carrera object
     *
     * @param   Carrera|PropelObjectCollection $carrera The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   MaterialCarreraQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByCarrera($carrera, $comparison = null)
    {
        if ($carrera instanceof Carrera) {
            return $this
                ->addUsingAlias(MaterialCarreraPeer::CARRERA_ID_CARRERA, $carrera->getIdCarrera(), $comparison);
        } elseif ($carrera instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(MaterialCarreraPeer::CARRERA_ID_CARRERA, $carrera->toKeyValue('PrimaryKey', 'IdCarrera'), $comparison);
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
     * @return MaterialCarreraQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   MaterialCarrera $materialCarrera Object to remove from the list of results
     *
     * @return MaterialCarreraQuery The current query, for fluid interface
     */
    public function prune($materialCarrera = null)
    {
        if ($materialCarrera) {
            $this->addUsingAlias(MaterialCarreraPeer::ID_MATERIAL_CARRERA, $materialCarrera->getIdMaterialCarrera(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseMaterialCarreraQuery