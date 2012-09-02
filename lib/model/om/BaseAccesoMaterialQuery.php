<?php


/**
 * Base class that represents a query for the 'acceso_material' table.
 *
 * 
 *
 * @method     AccesoMaterialQuery orderByIdAccesoMaterial($order = Criteria::ASC) Order by the id_acceso_material column
 * @method     AccesoMaterialQuery orderByFisicaIdFisica($order = Criteria::ASC) Order by the fisica_id_fisica column
 * @method     AccesoMaterialQuery orderByMaterialIdMaterial($order = Criteria::ASC) Order by the material_id_material column
 * @method     AccesoMaterialQuery orderByFechaAcceso($order = Criteria::ASC) Order by the fecha_acceso column
 *
 * @method     AccesoMaterialQuery groupByIdAccesoMaterial() Group by the id_acceso_material column
 * @method     AccesoMaterialQuery groupByFisicaIdFisica() Group by the fisica_id_fisica column
 * @method     AccesoMaterialQuery groupByMaterialIdMaterial() Group by the material_id_material column
 * @method     AccesoMaterialQuery groupByFechaAcceso() Group by the fecha_acceso column
 *
 * @method     AccesoMaterialQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AccesoMaterialQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AccesoMaterialQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AccesoMaterialQuery leftJoinFisica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Fisica relation
 * @method     AccesoMaterialQuery rightJoinFisica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Fisica relation
 * @method     AccesoMaterialQuery innerJoinFisica($relationAlias = null) Adds a INNER JOIN clause to the query using the Fisica relation
 *
 * @method     AccesoMaterialQuery leftJoinMaterial($relationAlias = null) Adds a LEFT JOIN clause to the query using the Material relation
 * @method     AccesoMaterialQuery rightJoinMaterial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Material relation
 * @method     AccesoMaterialQuery innerJoinMaterial($relationAlias = null) Adds a INNER JOIN clause to the query using the Material relation
 *
 * @method     AccesoMaterial findOne(PropelPDO $con = null) Return the first AccesoMaterial matching the query
 * @method     AccesoMaterial findOneOrCreate(PropelPDO $con = null) Return the first AccesoMaterial matching the query, or a new AccesoMaterial object populated from the query conditions when no match is found
 *
 * @method     AccesoMaterial findOneByIdAccesoMaterial(int $id_acceso_material) Return the first AccesoMaterial filtered by the id_acceso_material column
 * @method     AccesoMaterial findOneByFisicaIdFisica(int $fisica_id_fisica) Return the first AccesoMaterial filtered by the fisica_id_fisica column
 * @method     AccesoMaterial findOneByMaterialIdMaterial(int $material_id_material) Return the first AccesoMaterial filtered by the material_id_material column
 * @method     AccesoMaterial findOneByFechaAcceso(string $fecha_acceso) Return the first AccesoMaterial filtered by the fecha_acceso column
 *
 * @method     array findByIdAccesoMaterial(int $id_acceso_material) Return AccesoMaterial objects filtered by the id_acceso_material column
 * @method     array findByFisicaIdFisica(int $fisica_id_fisica) Return AccesoMaterial objects filtered by the fisica_id_fisica column
 * @method     array findByMaterialIdMaterial(int $material_id_material) Return AccesoMaterial objects filtered by the material_id_material column
 * @method     array findByFechaAcceso(string $fecha_acceso) Return AccesoMaterial objects filtered by the fecha_acceso column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseAccesoMaterialQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseAccesoMaterialQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'AccesoMaterial', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AccesoMaterialQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     AccesoMaterialQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AccesoMaterialQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AccesoMaterialQuery) {
            return $criteria;
        }
        $query = new AccesoMaterialQuery();
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
     * @return   AccesoMaterial|AccesoMaterial[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AccesoMaterialPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AccesoMaterialPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   AccesoMaterial A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_ACCESO_MATERIAL`, `FISICA_ID_FISICA`, `MATERIAL_ID_MATERIAL`, `FECHA_ACCESO` FROM `acceso_material` WHERE `ID_ACCESO_MATERIAL` = :p0';
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
            $obj = new AccesoMaterial();
            $obj->hydrate($row);
            AccesoMaterialPeer::addInstanceToPool($obj, (string) $key);
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
     * @return AccesoMaterial|AccesoMaterial[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|AccesoMaterial[]|mixed the list of results, formatted by the current formatter
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
     * @return AccesoMaterialQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AccesoMaterialPeer::ID_ACCESO_MATERIAL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AccesoMaterialQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AccesoMaterialPeer::ID_ACCESO_MATERIAL, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_acceso_material column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAccesoMaterial(1234); // WHERE id_acceso_material = 1234
     * $query->filterByIdAccesoMaterial(array(12, 34)); // WHERE id_acceso_material IN (12, 34)
     * $query->filterByIdAccesoMaterial(array('min' => 12)); // WHERE id_acceso_material > 12
     * </code>
     *
     * @param     mixed $idAccesoMaterial The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AccesoMaterialQuery The current query, for fluid interface
     */
    public function filterByIdAccesoMaterial($idAccesoMaterial = null, $comparison = null)
    {
        if (is_array($idAccesoMaterial) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(AccesoMaterialPeer::ID_ACCESO_MATERIAL, $idAccesoMaterial, $comparison);
    }

    /**
     * Filter the query on the fisica_id_fisica column
     *
     * Example usage:
     * <code>
     * $query->filterByFisicaIdFisica(1234); // WHERE fisica_id_fisica = 1234
     * $query->filterByFisicaIdFisica(array(12, 34)); // WHERE fisica_id_fisica IN (12, 34)
     * $query->filterByFisicaIdFisica(array('min' => 12)); // WHERE fisica_id_fisica > 12
     * </code>
     *
     * @see       filterByFisica()
     *
     * @param     mixed $fisicaIdFisica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AccesoMaterialQuery The current query, for fluid interface
     */
    public function filterByFisicaIdFisica($fisicaIdFisica = null, $comparison = null)
    {
        if (is_array($fisicaIdFisica)) {
            $useMinMax = false;
            if (isset($fisicaIdFisica['min'])) {
                $this->addUsingAlias(AccesoMaterialPeer::FISICA_ID_FISICA, $fisicaIdFisica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fisicaIdFisica['max'])) {
                $this->addUsingAlias(AccesoMaterialPeer::FISICA_ID_FISICA, $fisicaIdFisica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AccesoMaterialPeer::FISICA_ID_FISICA, $fisicaIdFisica, $comparison);
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
     * @return AccesoMaterialQuery The current query, for fluid interface
     */
    public function filterByMaterialIdMaterial($materialIdMaterial = null, $comparison = null)
    {
        if (is_array($materialIdMaterial)) {
            $useMinMax = false;
            if (isset($materialIdMaterial['min'])) {
                $this->addUsingAlias(AccesoMaterialPeer::MATERIAL_ID_MATERIAL, $materialIdMaterial['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($materialIdMaterial['max'])) {
                $this->addUsingAlias(AccesoMaterialPeer::MATERIAL_ID_MATERIAL, $materialIdMaterial['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AccesoMaterialPeer::MATERIAL_ID_MATERIAL, $materialIdMaterial, $comparison);
    }

    /**
     * Filter the query on the fecha_acceso column
     *
     * Example usage:
     * <code>
     * $query->filterByFechaAcceso('2011-03-14'); // WHERE fecha_acceso = '2011-03-14'
     * $query->filterByFechaAcceso('now'); // WHERE fecha_acceso = '2011-03-14'
     * $query->filterByFechaAcceso(array('max' => 'yesterday')); // WHERE fecha_acceso > '2011-03-13'
     * </code>
     *
     * @param     mixed $fechaAcceso The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AccesoMaterialQuery The current query, for fluid interface
     */
    public function filterByFechaAcceso($fechaAcceso = null, $comparison = null)
    {
        if (is_array($fechaAcceso)) {
            $useMinMax = false;
            if (isset($fechaAcceso['min'])) {
                $this->addUsingAlias(AccesoMaterialPeer::FECHA_ACCESO, $fechaAcceso['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fechaAcceso['max'])) {
                $this->addUsingAlias(AccesoMaterialPeer::FECHA_ACCESO, $fechaAcceso['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AccesoMaterialPeer::FECHA_ACCESO, $fechaAcceso, $comparison);
    }

    /**
     * Filter the query by a related Fisica object
     *
     * @param   Fisica|PropelObjectCollection $fisica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   AccesoMaterialQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByFisica($fisica, $comparison = null)
    {
        if ($fisica instanceof Fisica) {
            return $this
                ->addUsingAlias(AccesoMaterialPeer::FISICA_ID_FISICA, $fisica->getIdFisica(), $comparison);
        } elseif ($fisica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AccesoMaterialPeer::FISICA_ID_FISICA, $fisica->toKeyValue('PrimaryKey', 'IdFisica'), $comparison);
        } else {
            throw new PropelException('filterByFisica() only accepts arguments of type Fisica or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Fisica relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AccesoMaterialQuery The current query, for fluid interface
     */
    public function joinFisica($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Fisica');

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
            $this->addJoinObject($join, 'Fisica');
        }

        return $this;
    }

    /**
     * Use the Fisica relation Fisica object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FisicaQuery A secondary query class using the current class as primary query
     */
    public function useFisicaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinFisica($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Fisica', 'FisicaQuery');
    }

    /**
     * Filter the query by a related Material object
     *
     * @param   Material|PropelObjectCollection $material The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   AccesoMaterialQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByMaterial($material, $comparison = null)
    {
        if ($material instanceof Material) {
            return $this
                ->addUsingAlias(AccesoMaterialPeer::MATERIAL_ID_MATERIAL, $material->getIdMaterial(), $comparison);
        } elseif ($material instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AccesoMaterialPeer::MATERIAL_ID_MATERIAL, $material->toKeyValue('PrimaryKey', 'IdMaterial'), $comparison);
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
     * @return AccesoMaterialQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   AccesoMaterial $accesoMaterial Object to remove from the list of results
     *
     * @return AccesoMaterialQuery The current query, for fluid interface
     */
    public function prune($accesoMaterial = null)
    {
        if ($accesoMaterial) {
            $this->addUsingAlias(AccesoMaterialPeer::ID_ACCESO_MATERIAL, $accesoMaterial->getIdAccesoMaterial(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseAccesoMaterialQuery