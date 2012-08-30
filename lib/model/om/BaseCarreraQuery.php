<?php


/**
 * Base class that represents a query for the 'carrera' table.
 *
 * 
 *
 * @method     CarreraQuery orderByIdCarrera($order = Criteria::ASC) Order by the id_carrera column
 * @method     CarreraQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method     CarreraQuery orderByMaterialIdMaterial($order = Criteria::ASC) Order by the material_id_material column
 *
 * @method     CarreraQuery groupByIdCarrera() Group by the id_carrera column
 * @method     CarreraQuery groupByNombre() Group by the nombre column
 * @method     CarreraQuery groupByMaterialIdMaterial() Group by the material_id_material column
 *
 * @method     CarreraQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CarreraQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CarreraQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CarreraQuery leftJoinMaterial($relationAlias = null) Adds a LEFT JOIN clause to the query using the Material relation
 * @method     CarreraQuery rightJoinMaterial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Material relation
 * @method     CarreraQuery innerJoinMaterial($relationAlias = null) Adds a INNER JOIN clause to the query using the Material relation
 *
 * @method     Carrera findOne(PropelPDO $con = null) Return the first Carrera matching the query
 * @method     Carrera findOneOrCreate(PropelPDO $con = null) Return the first Carrera matching the query, or a new Carrera object populated from the query conditions when no match is found
 *
 * @method     Carrera findOneByIdCarrera(int $id_carrera) Return the first Carrera filtered by the id_carrera column
 * @method     Carrera findOneByNombre(string $nombre) Return the first Carrera filtered by the nombre column
 * @method     Carrera findOneByMaterialIdMaterial(int $material_id_material) Return the first Carrera filtered by the material_id_material column
 *
 * @method     array findByIdCarrera(int $id_carrera) Return Carrera objects filtered by the id_carrera column
 * @method     array findByNombre(string $nombre) Return Carrera objects filtered by the nombre column
 * @method     array findByMaterialIdMaterial(int $material_id_material) Return Carrera objects filtered by the material_id_material column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCarreraQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseCarreraQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Carrera', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CarreraQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     CarreraQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CarreraQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CarreraQuery) {
            return $criteria;
        }
        $query = new CarreraQuery();
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
     * @return   Carrera|Carrera[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CarreraPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CarreraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Carrera A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_CARRERA`, `NOMBRE`, `MATERIAL_ID_MATERIAL` FROM `carrera` WHERE `ID_CARRERA` = :p0';
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
            $obj = new Carrera();
            $obj->hydrate($row);
            CarreraPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Carrera|Carrera[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Carrera[]|mixed the list of results, formatted by the current formatter
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
     * @return CarreraQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CarreraPeer::ID_CARRERA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CarreraQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CarreraPeer::ID_CARRERA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_carrera column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCarrera(1234); // WHERE id_carrera = 1234
     * $query->filterByIdCarrera(array(12, 34)); // WHERE id_carrera IN (12, 34)
     * $query->filterByIdCarrera(array('min' => 12)); // WHERE id_carrera > 12
     * </code>
     *
     * @param     mixed $idCarrera The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CarreraQuery The current query, for fluid interface
     */
    public function filterByIdCarrera($idCarrera = null, $comparison = null)
    {
        if (is_array($idCarrera) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(CarreraPeer::ID_CARRERA, $idCarrera, $comparison);
    }

    /**
     * Filter the query on the nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByNombre('fooValue');   // WHERE nombre = 'fooValue'
     * $query->filterByNombre('%fooValue%'); // WHERE nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CarreraQuery The current query, for fluid interface
     */
    public function filterByNombre($nombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nombre)) {
                $nombre = str_replace('*', '%', $nombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CarreraPeer::NOMBRE, $nombre, $comparison);
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
     * @return CarreraQuery The current query, for fluid interface
     */
    public function filterByMaterialIdMaterial($materialIdMaterial = null, $comparison = null)
    {
        if (is_array($materialIdMaterial)) {
            $useMinMax = false;
            if (isset($materialIdMaterial['min'])) {
                $this->addUsingAlias(CarreraPeer::MATERIAL_ID_MATERIAL, $materialIdMaterial['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($materialIdMaterial['max'])) {
                $this->addUsingAlias(CarreraPeer::MATERIAL_ID_MATERIAL, $materialIdMaterial['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarreraPeer::MATERIAL_ID_MATERIAL, $materialIdMaterial, $comparison);
    }

    /**
     * Filter the query by a related Material object
     *
     * @param   Material|PropelObjectCollection $material The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   CarreraQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByMaterial($material, $comparison = null)
    {
        if ($material instanceof Material) {
            return $this
                ->addUsingAlias(CarreraPeer::MATERIAL_ID_MATERIAL, $material->getIdMaterial(), $comparison);
        } elseif ($material instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CarreraPeer::MATERIAL_ID_MATERIAL, $material->toKeyValue('PrimaryKey', 'IdMaterial'), $comparison);
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
     * @return CarreraQuery The current query, for fluid interface
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
     * @param   Carrera $carrera Object to remove from the list of results
     *
     * @return CarreraQuery The current query, for fluid interface
     */
    public function prune($carrera = null)
    {
        if ($carrera) {
            $this->addUsingAlias(CarreraPeer::ID_CARRERA, $carrera->getIdCarrera(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseCarreraQuery