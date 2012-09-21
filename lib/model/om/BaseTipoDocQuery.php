<?php


/**
 * Base class that represents a query for the 'tipo_doc' table.
 *
 * 
 *
 * @method     TipoDocQuery orderByIdTipoDoc($order = Criteria::ASC) Order by the id_tipo_doc column
 * @method     TipoDocQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 *
 * @method     TipoDocQuery groupByIdTipoDoc() Group by the id_tipo_doc column
 * @method     TipoDocQuery groupByNombre() Group by the nombre column
 *
 * @method     TipoDocQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TipoDocQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TipoDocQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     TipoDocQuery leftJoinPfisica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pfisica relation
 * @method     TipoDocQuery rightJoinPfisica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pfisica relation
 * @method     TipoDocQuery innerJoinPfisica($relationAlias = null) Adds a INNER JOIN clause to the query using the Pfisica relation
 *
 * @method     TipoDoc findOne(PropelPDO $con = null) Return the first TipoDoc matching the query
 * @method     TipoDoc findOneOrCreate(PropelPDO $con = null) Return the first TipoDoc matching the query, or a new TipoDoc object populated from the query conditions when no match is found
 *
 * @method     TipoDoc findOneByIdTipoDoc(int $id_tipo_doc) Return the first TipoDoc filtered by the id_tipo_doc column
 * @method     TipoDoc findOneByNombre(string $nombre) Return the first TipoDoc filtered by the nombre column
 *
 * @method     array findByIdTipoDoc(int $id_tipo_doc) Return TipoDoc objects filtered by the id_tipo_doc column
 * @method     array findByNombre(string $nombre) Return TipoDoc objects filtered by the nombre column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseTipoDocQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseTipoDocQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'TipoDoc', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TipoDocQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     TipoDocQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TipoDocQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TipoDocQuery) {
            return $criteria;
        }
        $query = new TipoDocQuery();
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
     * @return   TipoDoc|TipoDoc[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TipoDocPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TipoDocPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   TipoDoc A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_TIPO_DOC`, `NOMBRE` FROM `tipo_doc` WHERE `ID_TIPO_DOC` = :p0';
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
            $obj = new TipoDoc();
            $obj->hydrate($row);
            TipoDocPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TipoDoc|TipoDoc[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TipoDoc[]|mixed the list of results, formatted by the current formatter
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
     * @return TipoDocQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TipoDocPeer::ID_TIPO_DOC, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TipoDocQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TipoDocPeer::ID_TIPO_DOC, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_tipo_doc column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTipoDoc(1234); // WHERE id_tipo_doc = 1234
     * $query->filterByIdTipoDoc(array(12, 34)); // WHERE id_tipo_doc IN (12, 34)
     * $query->filterByIdTipoDoc(array('min' => 12)); // WHERE id_tipo_doc > 12
     * </code>
     *
     * @param     mixed $idTipoDoc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TipoDocQuery The current query, for fluid interface
     */
    public function filterByIdTipoDoc($idTipoDoc = null, $comparison = null)
    {
        if (is_array($idTipoDoc) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(TipoDocPeer::ID_TIPO_DOC, $idTipoDoc, $comparison);
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
     * @return TipoDocQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TipoDocPeer::NOMBRE, $nombre, $comparison);
    }

    /**
     * Filter the query by a related Pfisica object
     *
     * @param   Pfisica|PropelObjectCollection $pfisica  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   TipoDocQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPfisica($pfisica, $comparison = null)
    {
        if ($pfisica instanceof Pfisica) {
            return $this
                ->addUsingAlias(TipoDocPeer::ID_TIPO_DOC, $pfisica->getTipoDocIdTipoDoc(), $comparison);
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
     * @return TipoDocQuery The current query, for fluid interface
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
     * @param   TipoDoc $tipoDoc Object to remove from the list of results
     *
     * @return TipoDocQuery The current query, for fluid interface
     */
    public function prune($tipoDoc = null)
    {
        if ($tipoDoc) {
            $this->addUsingAlias(TipoDocPeer::ID_TIPO_DOC, $tipoDoc->getIdTipoDoc(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseTipoDocQuery