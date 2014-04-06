<?php


/**
 * Base class that represents a query for the 'tema' table.
 *
 * 
 *
 * @method     TemaQuery orderByIdTema($order = Criteria::ASC) Order by the id_tema column
 * @method     TemaQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method     TemaQuery orderByNumeroTema($order = Criteria::ASC) Order by the numero_tema column
 * @method     TemaQuery orderBySubcontenidoIdSubcontenido($order = Criteria::ASC) Order by the subcontenido_id_subcontenido column
 *
 * @method     TemaQuery groupByIdTema() Group by the id_tema column
 * @method     TemaQuery groupByNombre() Group by the nombre column
 * @method     TemaQuery groupByNumeroTema() Group by the numero_tema column
 * @method     TemaQuery groupBySubcontenidoIdSubcontenido() Group by the subcontenido_id_subcontenido column
 *
 * @method     TemaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TemaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TemaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     TemaQuery leftJoinSubcontenido($relationAlias = null) Adds a LEFT JOIN clause to the query using the Subcontenido relation
 * @method     TemaQuery rightJoinSubcontenido($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Subcontenido relation
 * @method     TemaQuery innerJoinSubcontenido($relationAlias = null) Adds a INNER JOIN clause to the query using the Subcontenido relation
 *
 * @method     TemaQuery leftJoinMaterial($relationAlias = null) Adds a LEFT JOIN clause to the query using the Material relation
 * @method     TemaQuery rightJoinMaterial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Material relation
 * @method     TemaQuery innerJoinMaterial($relationAlias = null) Adds a INNER JOIN clause to the query using the Material relation
 *
 * @method     Tema findOne(PropelPDO $con = null) Return the first Tema matching the query
 * @method     Tema findOneOrCreate(PropelPDO $con = null) Return the first Tema matching the query, or a new Tema object populated from the query conditions when no match is found
 *
 * @method     Tema findOneByIdTema(int $id_tema) Return the first Tema filtered by the id_tema column
 * @method     Tema findOneByNombre(string $nombre) Return the first Tema filtered by the nombre column
 * @method     Tema findOneByNumeroTema(string $numero_tema) Return the first Tema filtered by the numero_tema column
 * @method     Tema findOneBySubcontenidoIdSubcontenido(int $subcontenido_id_subcontenido) Return the first Tema filtered by the subcontenido_id_subcontenido column
 *
 * @method     array findByIdTema(int $id_tema) Return Tema objects filtered by the id_tema column
 * @method     array findByNombre(string $nombre) Return Tema objects filtered by the nombre column
 * @method     array findByNumeroTema(string $numero_tema) Return Tema objects filtered by the numero_tema column
 * @method     array findBySubcontenidoIdSubcontenido(int $subcontenido_id_subcontenido) Return Tema objects filtered by the subcontenido_id_subcontenido column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseTemaQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseTemaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Tema', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TemaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     TemaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TemaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TemaQuery) {
            return $criteria;
        }
        $query = new TemaQuery();
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
     * @return   Tema|Tema[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TemaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TemaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Tema A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_TEMA`, `NOMBRE`, `NUMERO_TEMA`, `SUBCONTENIDO_ID_SUBCONTENIDO` FROM `tema` WHERE `ID_TEMA` = :p0';
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
            $obj = new Tema();
            $obj->hydrate($row);
            TemaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Tema|Tema[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Tema[]|mixed the list of results, formatted by the current formatter
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
     * @return TemaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TemaPeer::ID_TEMA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TemaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TemaPeer::ID_TEMA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_tema column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTema(1234); // WHERE id_tema = 1234
     * $query->filterByIdTema(array(12, 34)); // WHERE id_tema IN (12, 34)
     * $query->filterByIdTema(array('min' => 12)); // WHERE id_tema > 12
     * </code>
     *
     * @param     mixed $idTema The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TemaQuery The current query, for fluid interface
     */
    public function filterByIdTema($idTema = null, $comparison = null)
    {
        if (is_array($idTema) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(TemaPeer::ID_TEMA, $idTema, $comparison);
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
     * @return TemaQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TemaPeer::NOMBRE, $nombre, $comparison);
    }

    /**
     * Filter the query on the numero_tema column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroTema('fooValue');   // WHERE numero_tema = 'fooValue'
     * $query->filterByNumeroTema('%fooValue%'); // WHERE numero_tema LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroTema The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TemaQuery The current query, for fluid interface
     */
    public function filterByNumeroTema($numeroTema = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroTema)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroTema)) {
                $numeroTema = str_replace('*', '%', $numeroTema);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TemaPeer::NUMERO_TEMA, $numeroTema, $comparison);
    }

    /**
     * Filter the query on the subcontenido_id_subcontenido column
     *
     * Example usage:
     * <code>
     * $query->filterBySubcontenidoIdSubcontenido(1234); // WHERE subcontenido_id_subcontenido = 1234
     * $query->filterBySubcontenidoIdSubcontenido(array(12, 34)); // WHERE subcontenido_id_subcontenido IN (12, 34)
     * $query->filterBySubcontenidoIdSubcontenido(array('min' => 12)); // WHERE subcontenido_id_subcontenido > 12
     * </code>
     *
     * @see       filterBySubcontenido()
     *
     * @param     mixed $subcontenidoIdSubcontenido The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TemaQuery The current query, for fluid interface
     */
    public function filterBySubcontenidoIdSubcontenido($subcontenidoIdSubcontenido = null, $comparison = null)
    {
        if (is_array($subcontenidoIdSubcontenido)) {
            $useMinMax = false;
            if (isset($subcontenidoIdSubcontenido['min'])) {
                $this->addUsingAlias(TemaPeer::SUBCONTENIDO_ID_SUBCONTENIDO, $subcontenidoIdSubcontenido['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($subcontenidoIdSubcontenido['max'])) {
                $this->addUsingAlias(TemaPeer::SUBCONTENIDO_ID_SUBCONTENIDO, $subcontenidoIdSubcontenido['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TemaPeer::SUBCONTENIDO_ID_SUBCONTENIDO, $subcontenidoIdSubcontenido, $comparison);
    }

    /**
     * Filter the query by a related Subcontenido object
     *
     * @param   Subcontenido|PropelObjectCollection $subcontenido The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   TemaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterBySubcontenido($subcontenido, $comparison = null)
    {
        if ($subcontenido instanceof Subcontenido) {
            return $this
                ->addUsingAlias(TemaPeer::SUBCONTENIDO_ID_SUBCONTENIDO, $subcontenido->getIdSubcontenido(), $comparison);
        } elseif ($subcontenido instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TemaPeer::SUBCONTENIDO_ID_SUBCONTENIDO, $subcontenido->toKeyValue('PrimaryKey', 'IdSubcontenido'), $comparison);
        } else {
            throw new PropelException('filterBySubcontenido() only accepts arguments of type Subcontenido or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Subcontenido relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TemaQuery The current query, for fluid interface
     */
    public function joinSubcontenido($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Subcontenido');

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
            $this->addJoinObject($join, 'Subcontenido');
        }

        return $this;
    }

    /**
     * Use the Subcontenido relation Subcontenido object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SubcontenidoQuery A secondary query class using the current class as primary query
     */
    public function useSubcontenidoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSubcontenido($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Subcontenido', 'SubcontenidoQuery');
    }

    /**
     * Filter the query by a related Material object
     *
     * @param   Material|PropelObjectCollection $material  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   TemaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByMaterial($material, $comparison = null)
    {
        if ($material instanceof Material) {
            return $this
                ->addUsingAlias(TemaPeer::ID_TEMA, $material->getTemaIdTema(), $comparison);
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
     * @return TemaQuery The current query, for fluid interface
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
     * @param   Tema $tema Object to remove from the list of results
     *
     * @return TemaQuery The current query, for fluid interface
     */
    public function prune($tema = null)
    {
        if ($tema) {
            $this->addUsingAlias(TemaPeer::ID_TEMA, $tema->getIdTema(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseTemaQuery