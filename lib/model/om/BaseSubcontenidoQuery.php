<?php


/**
 * Base class that represents a query for the 'subcontenido' table.
 *
 * 
 *
 * @method     SubcontenidoQuery orderByIdSubcontenido($order = Criteria::ASC) Order by the id_subcontenido column
 * @method     SubcontenidoQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method     SubcontenidoQuery orderByNumeroSubcontenido($order = Criteria::ASC) Order by the numero_subcontenido column
 * @method     SubcontenidoQuery orderByContenidoIdContenido($order = Criteria::ASC) Order by the contenido_id_contenido column
 *
 * @method     SubcontenidoQuery groupByIdSubcontenido() Group by the id_subcontenido column
 * @method     SubcontenidoQuery groupByNombre() Group by the nombre column
 * @method     SubcontenidoQuery groupByNumeroSubcontenido() Group by the numero_subcontenido column
 * @method     SubcontenidoQuery groupByContenidoIdContenido() Group by the contenido_id_contenido column
 *
 * @method     SubcontenidoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SubcontenidoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SubcontenidoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SubcontenidoQuery leftJoinContenido($relationAlias = null) Adds a LEFT JOIN clause to the query using the Contenido relation
 * @method     SubcontenidoQuery rightJoinContenido($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Contenido relation
 * @method     SubcontenidoQuery innerJoinContenido($relationAlias = null) Adds a INNER JOIN clause to the query using the Contenido relation
 *
 * @method     SubcontenidoQuery leftJoinMaterial($relationAlias = null) Adds a LEFT JOIN clause to the query using the Material relation
 * @method     SubcontenidoQuery rightJoinMaterial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Material relation
 * @method     SubcontenidoQuery innerJoinMaterial($relationAlias = null) Adds a INNER JOIN clause to the query using the Material relation
 *
 * @method     Subcontenido findOne(PropelPDO $con = null) Return the first Subcontenido matching the query
 * @method     Subcontenido findOneOrCreate(PropelPDO $con = null) Return the first Subcontenido matching the query, or a new Subcontenido object populated from the query conditions when no match is found
 *
 * @method     Subcontenido findOneByIdSubcontenido(int $id_subcontenido) Return the first Subcontenido filtered by the id_subcontenido column
 * @method     Subcontenido findOneByNombre(string $nombre) Return the first Subcontenido filtered by the nombre column
 * @method     Subcontenido findOneByNumeroSubcontenido(string $numero_subcontenido) Return the first Subcontenido filtered by the numero_subcontenido column
 * @method     Subcontenido findOneByContenidoIdContenido(int $contenido_id_contenido) Return the first Subcontenido filtered by the contenido_id_contenido column
 *
 * @method     array findByIdSubcontenido(int $id_subcontenido) Return Subcontenido objects filtered by the id_subcontenido column
 * @method     array findByNombre(string $nombre) Return Subcontenido objects filtered by the nombre column
 * @method     array findByNumeroSubcontenido(string $numero_subcontenido) Return Subcontenido objects filtered by the numero_subcontenido column
 * @method     array findByContenidoIdContenido(int $contenido_id_contenido) Return Subcontenido objects filtered by the contenido_id_contenido column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseSubcontenidoQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseSubcontenidoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Subcontenido', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SubcontenidoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     SubcontenidoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SubcontenidoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SubcontenidoQuery) {
            return $criteria;
        }
        $query = new SubcontenidoQuery();
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
     * @return   Subcontenido|Subcontenido[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SubcontenidoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SubcontenidoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Subcontenido A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_SUBCONTENIDO`, `NOMBRE`, `NUMERO_SUBCONTENIDO`, `CONTENIDO_ID_CONTENIDO` FROM `subcontenido` WHERE `ID_SUBCONTENIDO` = :p0';
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
            $obj = new Subcontenido();
            $obj->hydrate($row);
            SubcontenidoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Subcontenido|Subcontenido[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Subcontenido[]|mixed the list of results, formatted by the current formatter
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
     * @return SubcontenidoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SubcontenidoPeer::ID_SUBCONTENIDO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SubcontenidoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SubcontenidoPeer::ID_SUBCONTENIDO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_subcontenido column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSubcontenido(1234); // WHERE id_subcontenido = 1234
     * $query->filterByIdSubcontenido(array(12, 34)); // WHERE id_subcontenido IN (12, 34)
     * $query->filterByIdSubcontenido(array('min' => 12)); // WHERE id_subcontenido > 12
     * </code>
     *
     * @param     mixed $idSubcontenido The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SubcontenidoQuery The current query, for fluid interface
     */
    public function filterByIdSubcontenido($idSubcontenido = null, $comparison = null)
    {
        if (is_array($idSubcontenido) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(SubcontenidoPeer::ID_SUBCONTENIDO, $idSubcontenido, $comparison);
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
     * @return SubcontenidoQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SubcontenidoPeer::NOMBRE, $nombre, $comparison);
    }

    /**
     * Filter the query on the numero_subcontenido column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroSubcontenido('fooValue');   // WHERE numero_subcontenido = 'fooValue'
     * $query->filterByNumeroSubcontenido('%fooValue%'); // WHERE numero_subcontenido LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroSubcontenido The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SubcontenidoQuery The current query, for fluid interface
     */
    public function filterByNumeroSubcontenido($numeroSubcontenido = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroSubcontenido)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroSubcontenido)) {
                $numeroSubcontenido = str_replace('*', '%', $numeroSubcontenido);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SubcontenidoPeer::NUMERO_SUBCONTENIDO, $numeroSubcontenido, $comparison);
    }

    /**
     * Filter the query on the contenido_id_contenido column
     *
     * Example usage:
     * <code>
     * $query->filterByContenidoIdContenido(1234); // WHERE contenido_id_contenido = 1234
     * $query->filterByContenidoIdContenido(array(12, 34)); // WHERE contenido_id_contenido IN (12, 34)
     * $query->filterByContenidoIdContenido(array('min' => 12)); // WHERE contenido_id_contenido > 12
     * </code>
     *
     * @see       filterByContenido()
     *
     * @param     mixed $contenidoIdContenido The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SubcontenidoQuery The current query, for fluid interface
     */
    public function filterByContenidoIdContenido($contenidoIdContenido = null, $comparison = null)
    {
        if (is_array($contenidoIdContenido)) {
            $useMinMax = false;
            if (isset($contenidoIdContenido['min'])) {
                $this->addUsingAlias(SubcontenidoPeer::CONTENIDO_ID_CONTENIDO, $contenidoIdContenido['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($contenidoIdContenido['max'])) {
                $this->addUsingAlias(SubcontenidoPeer::CONTENIDO_ID_CONTENIDO, $contenidoIdContenido['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SubcontenidoPeer::CONTENIDO_ID_CONTENIDO, $contenidoIdContenido, $comparison);
    }

    /**
     * Filter the query by a related Contenido object
     *
     * @param   Contenido|PropelObjectCollection $contenido The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   SubcontenidoQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByContenido($contenido, $comparison = null)
    {
        if ($contenido instanceof Contenido) {
            return $this
                ->addUsingAlias(SubcontenidoPeer::CONTENIDO_ID_CONTENIDO, $contenido->getIdContenido(), $comparison);
        } elseif ($contenido instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SubcontenidoPeer::CONTENIDO_ID_CONTENIDO, $contenido->toKeyValue('PrimaryKey', 'IdContenido'), $comparison);
        } else {
            throw new PropelException('filterByContenido() only accepts arguments of type Contenido or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Contenido relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SubcontenidoQuery The current query, for fluid interface
     */
    public function joinContenido($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Contenido');

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
            $this->addJoinObject($join, 'Contenido');
        }

        return $this;
    }

    /**
     * Use the Contenido relation Contenido object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ContenidoQuery A secondary query class using the current class as primary query
     */
    public function useContenidoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinContenido($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Contenido', 'ContenidoQuery');
    }

    /**
     * Filter the query by a related Material object
     *
     * @param   Material|PropelObjectCollection $material  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   SubcontenidoQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByMaterial($material, $comparison = null)
    {
        if ($material instanceof Material) {
            return $this
                ->addUsingAlias(SubcontenidoPeer::ID_SUBCONTENIDO, $material->getSubcontenidoIdSubcontenido(), $comparison);
        } elseif ($material instanceof PropelObjectCollection) {
            return $this
                ->useMaterialQuery()
                ->filterByPrimaryKeys($material->getPrimaryKeys())
                ->endUse();
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
     * @return SubcontenidoQuery The current query, for fluid interface
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
     * @param   Subcontenido $subcontenido Object to remove from the list of results
     *
     * @return SubcontenidoQuery The current query, for fluid interface
     */
    public function prune($subcontenido = null)
    {
        if ($subcontenido) {
            $this->addUsingAlias(SubcontenidoPeer::ID_SUBCONTENIDO, $subcontenido->getIdSubcontenido(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseSubcontenidoQuery