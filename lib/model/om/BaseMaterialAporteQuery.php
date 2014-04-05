<?php


/**
 * Base class that represents a query for the 'material_aporte' table.
 *
 * 
 *
 * @method     MaterialAporteQuery orderByIdMaterialAporte($order = Criteria::ASC) Order by the id_material_aporte column
 * @method     MaterialAporteQuery orderByMaterialIdMaterial($order = Criteria::ASC) Order by the material_id_material column
 * @method     MaterialAporteQuery orderByAporteIdAporte($order = Criteria::ASC) Order by the aporte_id_aporte column
 *
 * @method     MaterialAporteQuery groupByIdMaterialAporte() Group by the id_material_aporte column
 * @method     MaterialAporteQuery groupByMaterialIdMaterial() Group by the material_id_material column
 * @method     MaterialAporteQuery groupByAporteIdAporte() Group by the aporte_id_aporte column
 *
 * @method     MaterialAporteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     MaterialAporteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     MaterialAporteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     MaterialAporteQuery leftJoinMaterial($relationAlias = null) Adds a LEFT JOIN clause to the query using the Material relation
 * @method     MaterialAporteQuery rightJoinMaterial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Material relation
 * @method     MaterialAporteQuery innerJoinMaterial($relationAlias = null) Adds a INNER JOIN clause to the query using the Material relation
 *
 * @method     MaterialAporteQuery leftJoinAporte($relationAlias = null) Adds a LEFT JOIN clause to the query using the Aporte relation
 * @method     MaterialAporteQuery rightJoinAporte($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Aporte relation
 * @method     MaterialAporteQuery innerJoinAporte($relationAlias = null) Adds a INNER JOIN clause to the query using the Aporte relation
 *
 * @method     MaterialAporte findOne(PropelPDO $con = null) Return the first MaterialAporte matching the query
 * @method     MaterialAporte findOneOrCreate(PropelPDO $con = null) Return the first MaterialAporte matching the query, or a new MaterialAporte object populated from the query conditions when no match is found
 *
 * @method     MaterialAporte findOneByIdMaterialAporte(int $id_material_aporte) Return the first MaterialAporte filtered by the id_material_aporte column
 * @method     MaterialAporte findOneByMaterialIdMaterial(int $material_id_material) Return the first MaterialAporte filtered by the material_id_material column
 * @method     MaterialAporte findOneByAporteIdAporte(int $aporte_id_aporte) Return the first MaterialAporte filtered by the aporte_id_aporte column
 *
 * @method     array findByIdMaterialAporte(int $id_material_aporte) Return MaterialAporte objects filtered by the id_material_aporte column
 * @method     array findByMaterialIdMaterial(int $material_id_material) Return MaterialAporte objects filtered by the material_id_material column
 * @method     array findByAporteIdAporte(int $aporte_id_aporte) Return MaterialAporte objects filtered by the aporte_id_aporte column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseMaterialAporteQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseMaterialAporteQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'MaterialAporte', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MaterialAporteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     MaterialAporteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MaterialAporteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MaterialAporteQuery) {
            return $criteria;
        }
        $query = new MaterialAporteQuery();
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
     * @return   MaterialAporte|MaterialAporte[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MaterialAportePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MaterialAportePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   MaterialAporte A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_MATERIAL_APORTE`, `MATERIAL_ID_MATERIAL`, `APORTE_ID_APORTE` FROM `material_aporte` WHERE `ID_MATERIAL_APORTE` = :p0';
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
            $obj = new MaterialAporte();
            $obj->hydrate($row);
            MaterialAportePeer::addInstanceToPool($obj, (string) $key);
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
     * @return MaterialAporte|MaterialAporte[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|MaterialAporte[]|mixed the list of results, formatted by the current formatter
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
     * @return MaterialAporteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MaterialAportePeer::ID_MATERIAL_APORTE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MaterialAporteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MaterialAportePeer::ID_MATERIAL_APORTE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_material_aporte column
     *
     * Example usage:
     * <code>
     * $query->filterByIdMaterialAporte(1234); // WHERE id_material_aporte = 1234
     * $query->filterByIdMaterialAporte(array(12, 34)); // WHERE id_material_aporte IN (12, 34)
     * $query->filterByIdMaterialAporte(array('min' => 12)); // WHERE id_material_aporte > 12
     * </code>
     *
     * @param     mixed $idMaterialAporte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaterialAporteQuery The current query, for fluid interface
     */
    public function filterByIdMaterialAporte($idMaterialAporte = null, $comparison = null)
    {
        if (is_array($idMaterialAporte) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(MaterialAportePeer::ID_MATERIAL_APORTE, $idMaterialAporte, $comparison);
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
     * @return MaterialAporteQuery The current query, for fluid interface
     */
    public function filterByMaterialIdMaterial($materialIdMaterial = null, $comparison = null)
    {
        if (is_array($materialIdMaterial)) {
            $useMinMax = false;
            if (isset($materialIdMaterial['min'])) {
                $this->addUsingAlias(MaterialAportePeer::MATERIAL_ID_MATERIAL, $materialIdMaterial['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($materialIdMaterial['max'])) {
                $this->addUsingAlias(MaterialAportePeer::MATERIAL_ID_MATERIAL, $materialIdMaterial['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaterialAportePeer::MATERIAL_ID_MATERIAL, $materialIdMaterial, $comparison);
    }

    /**
     * Filter the query on the aporte_id_aporte column
     *
     * Example usage:
     * <code>
     * $query->filterByAporteIdAporte(1234); // WHERE aporte_id_aporte = 1234
     * $query->filterByAporteIdAporte(array(12, 34)); // WHERE aporte_id_aporte IN (12, 34)
     * $query->filterByAporteIdAporte(array('min' => 12)); // WHERE aporte_id_aporte > 12
     * </code>
     *
     * @see       filterByAporte()
     *
     * @param     mixed $aporteIdAporte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaterialAporteQuery The current query, for fluid interface
     */
    public function filterByAporteIdAporte($aporteIdAporte = null, $comparison = null)
    {
        if (is_array($aporteIdAporte)) {
            $useMinMax = false;
            if (isset($aporteIdAporte['min'])) {
                $this->addUsingAlias(MaterialAportePeer::APORTE_ID_APORTE, $aporteIdAporte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aporteIdAporte['max'])) {
                $this->addUsingAlias(MaterialAportePeer::APORTE_ID_APORTE, $aporteIdAporte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaterialAportePeer::APORTE_ID_APORTE, $aporteIdAporte, $comparison);
    }

    /**
     * Filter the query by a related Material object
     *
     * @param   Material|PropelObjectCollection $material The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   MaterialAporteQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByMaterial($material, $comparison = null)
    {
        if ($material instanceof Material) {
            return $this
                ->addUsingAlias(MaterialAportePeer::MATERIAL_ID_MATERIAL, $material->getIdMaterial(), $comparison);
        } elseif ($material instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(MaterialAportePeer::MATERIAL_ID_MATERIAL, $material->toKeyValue('PrimaryKey', 'IdMaterial'), $comparison);
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
     * @return MaterialAporteQuery The current query, for fluid interface
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
     * Filter the query by a related Aporte object
     *
     * @param   Aporte|PropelObjectCollection $aporte The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   MaterialAporteQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByAporte($aporte, $comparison = null)
    {
        if ($aporte instanceof Aporte) {
            return $this
                ->addUsingAlias(MaterialAportePeer::APORTE_ID_APORTE, $aporte->getIdAporte(), $comparison);
        } elseif ($aporte instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(MaterialAportePeer::APORTE_ID_APORTE, $aporte->toKeyValue('PrimaryKey', 'IdAporte'), $comparison);
        } else {
            throw new PropelException('filterByAporte() only accepts arguments of type Aporte or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Aporte relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MaterialAporteQuery The current query, for fluid interface
     */
    public function joinAporte($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Aporte');

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
            $this->addJoinObject($join, 'Aporte');
        }

        return $this;
    }

    /**
     * Use the Aporte relation Aporte object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AporteQuery A secondary query class using the current class as primary query
     */
    public function useAporteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAporte($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Aporte', 'AporteQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   MaterialAporte $materialAporte Object to remove from the list of results
     *
     * @return MaterialAporteQuery The current query, for fluid interface
     */
    public function prune($materialAporte = null)
    {
        if ($materialAporte) {
            $this->addUsingAlias(MaterialAportePeer::ID_MATERIAL_APORTE, $materialAporte->getIdMaterialAporte(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseMaterialAporteQuery